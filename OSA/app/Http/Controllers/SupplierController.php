<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
use App\Category;

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
    	return view('Company', array('supplier' => $supplier, 'category' => $category));
    }

    public function edit($id)
    {

    }

    public function destroy($id)
    {

    }
}
