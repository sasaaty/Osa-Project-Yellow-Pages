<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Supplier;
use App\Suggestion;
use App\User;
use App\Category;
use App\Review;

class AdminController extends Controller
{
    public function index($view, Request $request){
    	$search = $request->input('search');
        $category = $request->input('category');
        if($category == "All"){
        	$category = null;
        }
    	$suppliers = Supplier::when($category, function ($query) use($category){
    							return $query->where('category_id', $category);
    						})
    						->where('state', $view)
    						->orderBy('rating', 'desc')
    						->paginate(12);
    	$categoriesList = Category::all();
    	
    	return view('Admin.Home', ['suppliers' => $suppliers, 'categories' => $categoriesList, 'current' => $category, 'search' => $search, 'view' => $view]);
    }
    /*
    *Sends complete supplier info to modal as json
    *
    *$id id of supplier required
    *return json with information
    */
    public function view($id){
        $supplier = Supplier::find($id);
        $suggestion = Suggestion::where('supplier_id', $id)->first();
        $reviews = Review::where('supplier_id', $id)->get();

        if($suggestion != null){
            $suggestion->toArray();
            $suggestor = User::find($suggestion->user_id);
            $name = $suggestor->first_name . " " . $suggestor->last_name;
            return response()->json([
                'company_name' => $supplier->company_name,
                'business_name' => $supplier->business_name,
                'address' => $supplier->address,
                'email' => $supplier->email,
                'contact_no' => $supplier->contact_no,
                'category_id' => $supplier->category_id,
                'contact_person' => $supplier->contact_person,
                'website' => $supplier->website,
                'fbpage' => $supplier->fbpage,
                'num_reviews' => count($reviews),

                'suggestor' => $name,
                'note_to_admin' => $suggestion->note_to_admin
            ]);
        }else{
            return response()->json([
                'company_name' => $supplier->company_name,
                'business_name' => $supplier->business_name,
                'address' => $supplier->address,
                'email' => $supplier->email,
                'contact_no' => $supplier->contact_no,
                'category_id' => $supplier->category_id,
                'contact_person' => $supplier->contact_person,
                'website' => $supplier->website,
                'fbpage' => $supplier->fbpage,
                'num_reviews' => count($reviews)
            ]);
        }
    }

    public function getReviews($id, $page){
        Input::merge([ 'page' => $page ]);
        $reviews = Review::where('supplier_id', $id)
                    ->orderBy('updated_at', 'desc')
                    ->paginate(10);

        $users = array();
        foreach($reviews as $review){
            $user = User::find($review->user_id);
            $users[] = $user->first_name . " " . $user->last_name;
        }
        $reviews->toJson();

        return response()->json([
            $reviews,
            'users' => $users
        ]);
    }

    public function edit($id, Request $request){
        $supplier = Supplier::find($id);
        $suggestion = Suggestion::where('supplier_id', $id)->first();
        $category = Category::find($request->category_id)->name;

        if($suggestion != null){
            $suggestion->toArray();
            $suggestion->note_to_admin = $request->note_to_admin;
        }

        $supplier->company_name = $request->company_name;
        $supplier->business_name = $request->business_name;
        $supplier->address = $request->address;
        $supplier->email = $request->email;
        $supplier->contact_no = $request->contact_no;
        $supplier->category_id = $request->category_id;
        $supplier->contact_person = $request->contact_person;
        $supplier->website = $request->website;
        $supplier->fbpage = $request->fbpage;

        $supplier->save();

        return response()->json([
            'company_name' => $request->company_name,
            'category_id' => $request->category_id,
            'category' => $category,
            'contact_no' => $request->contact_no
        ]);
    }

    public function change($status, Request $request){
        $supplierIDs = $request->suppliers;
        foreach($supplierIDs as $id){
            $supplier = Supplier::find($id);
            $supplier->state = $status;
            
            $supplier->save();
        }
    }

    public function delete(Request $request){
        $supplierIDs = $request->suppliers;
        foreach($supplierIDs as $id){
            $supplier = Supplier::find($id);
            
            $supplier->delete();
        }
    }

    public function add(){
        $categoriesList = Category::all();
        return view('Admin.Home', ['categories' => $categoriesList]);
    }
}
