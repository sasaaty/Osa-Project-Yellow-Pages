<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
use App\Category;
class HomeController extends Controller
{
    //
    public function index($filter = null){
    	$suppliers = Supplier::when($filter, function ($query) use($filter){
    							return $query->where('category_id', $filter);
    						})
    						->orderBy('rating', 'desc')
    						->paginate(12);
    	$categories = Category::all();
    	if(empty($filter)){
	        return view('Home', ['suppliers' => $suppliers, 'categories' => $categories]);
    	}else{
    		return view('Home', ['suppliers' => $suppliers, 'categories' => $categories, 'current' => $filter]);
    	}
    }
    public function hotdog($nanay) {
        return "nanay";
    }
}
