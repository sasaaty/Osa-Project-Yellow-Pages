<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
use App\Category;
use Searchy;
class HomeController extends Controller
{
    //
    public function index(Request $request){
        $search = $request->input('search');
        $category = $request->input('sort');
        $suppliers;

        if(!empty($search)){

            $suppliers = Searchy::search('supplier')
                                ->fields('company_name', 'business_name', 'address')
                                ->query($search)
                                ->getQuery()
                                ->when($category, function ($query) use($category){
                                    return $query->where('category_id', $category);
                                })
                                ->where('state', "Accepted")
                                ->simplePaginate(12);
        }else{        
        	$suppliers = Supplier::when($category, function ($query) use($category){
        							return $query->where('category_id', $category);
        						})
                                ->where('state', "Accepted")
                                ->simplePaginate(12);

        }
        
    	$categoriesList = Category::all();
    	
    	return view('Home', ['suppliers' => $suppliers, 'categories' => $categoriesList, 'current' => $category, 'search' => $search]);
    }
}
