<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suggestion;
use App\Supplier;
use DB;
class FormsController extends Controller{

	function insert(Request $req){
		$company_name = $req-> input('CompanyName');
		$business_name = $req-> input('BusinessName');
		$address = $req -> input('Address');
		$email = $req -> input('email');
		$contact_no = $req -> input('Celno');
		//$typeBusiness = $req -> input('BusinessType');
		$contact_person = $req -> input('ContactPerson');
		$website = $req -> input('website');
		$fbpage = $req -> input('Facebook');
		$state = "Suggestion";


		$note_to_admin = $req -> input('Notes');
		$data1 = array('note_to_admin' => $note_to_admin );

		DB::table('suggestion') -> insert($data1);

		$data2 = array(
			'company_name' => $company_name , 
			'business_name' => $business_name,
			'address' => $address,
			'contact_no' => $contact_no,
			'email' => $email,
			'fbpage' => $fbpage,
			'website' => $website,
			'state' => $state,
			"contact_person" => $contact_person );
		DB::table('supplier') -> insert($data2);
		echo "Success!";
	}
}

?>