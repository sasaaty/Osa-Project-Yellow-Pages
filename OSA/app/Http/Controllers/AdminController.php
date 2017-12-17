<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
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

    public function add(Request $request){
    	return view('Admin.Home');
    }
}
