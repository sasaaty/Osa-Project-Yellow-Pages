<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
use App\Suggestion;
use App\Category;

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

    public function view($view, $id){
        $supplier = Supplier::find($id);

        $suggestion = Suggestion::where('supplier_id', $id)->first();
        if($suggestion != null){
            $suggestion->toArray();
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
            ]);
        }
    }

    public function add(Request $request){
    	return view('Admin.Home');
    }
}
