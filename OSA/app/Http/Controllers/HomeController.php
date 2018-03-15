<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
use App\Category;
class HomeController extends Controller
{
    //
    public function index(Request $request){
        $search = $request->input('search');
        $category = $request->input('sort');
        $suppliers;

        if(!empty($search)){
            $suppliers = Supplier::where('company_name', 'LIKE', '%'.$search)
                                 ->orWhere('company_name', 'LIKE' , $search.'%')
                                 ->orderByRaw("LOCATE('".$search."', company_name) ")
                                 ->where('state', "Accepted")
                                 ->paginate(12);
        }else{        
        	$suppliers = Supplier::when($category, function ($query) use($category){
        							return $query->where('category_id', $category);
        						})
                                ->where('state', "Accepted")
        						->paginate(12);
        }
        
    	$categoriesList = Category::all();
    	
    	return view('Home', ['suppliers' => $suppliers, 'categories' => $categoriesList, 'current' => $category, 'search' => $search]);
    }
}
