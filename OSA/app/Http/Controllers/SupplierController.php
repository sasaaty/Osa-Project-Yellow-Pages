<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;

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
    	return view('Company', array('supplier' => $supplier));
    }

    public function edit($id)
    {

    }

    public function destroy($id)
    {

    }
}
