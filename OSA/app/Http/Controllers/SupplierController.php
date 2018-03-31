<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
use App\Category;
use App\Review;
use App\User;

class SupplierController extends Controller
{
    public function index()
    {
        
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function show($id)
    {
    	$supplier = Supplier::find($id);
        $category = Category::where('id', $supplier->category_id)->value('name');

        $reviews = Review::where('supplier_id', $id)
                    ->orderBy('updated_at', 'desc')
                    ->paginate(5);

        $users = array();
        foreach($reviews as $review){
            $user = User::find($review->user_id);
            $users[] = $user->first_name . " " . $user->last_name;
        }

    	return view('Company', array('supplier' => $supplier, 'category' => $category, 'reviews' => $reviews, 'users' => $users));
    }

    public function edit($id)
    {

    }

    public function destroy($id)
    {

    }
}
