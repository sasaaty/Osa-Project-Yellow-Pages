<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Suggestion;
use App\Supplier;

class FormsController extends Controller{

	function insert(Request $req){
		//Supplier Data
		$company_name = $req-> input('CompanyName');
		$business_name = $req-> input('BusinessName');
		$address = $req -> input('Address');
		$email = $req -> input('email');
		$contact_no = $req -> input('Celno');
		$category_id = $req -> input('BusinessType');
		$contact_person = $req -> input('ContactPerson');
		$website = $req -> input('website');
		$fbpage = $req -> input('Facebook');
		$state = "Suggestion";


		$supplier_data = array(
			'company_name' => $company_name , 
			'business_name' => $business_name,
			'address' => $address,
			'contact_no' => $contact_no,
			'category_id' => $category_id,
			'email' => $email,
			'fbpage' => $fbpage,
			'website' => $website,
			'state' => $state,
			"contact_person" => $contact_person );

		
		$supplier_id = DB::table('supplier') -> insertGetId($supplier_data);

		//Suggestion Data

		$note_to_admin = $req -> input('Notes');

		 $data1 = array(
		 	'supplier_id' => $supplier_id,
		 	'user_id' => "1", //ID IS CURRENTLY HARDCODED
		 	'note_to_admin' => $note_to_admin 
			);

		 DB::table('suggestion') -> insert($data1);


	}
}

?>