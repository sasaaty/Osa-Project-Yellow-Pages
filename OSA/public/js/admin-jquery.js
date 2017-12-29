$(document).ready(function(){
	var view =  $('table').siblings('input').val();
	var url = "/Admin/View/" + view; 

	$('table').on('click','tbody tr', function (evt) {
	    var cell= $(evt.target).closest('td');
	    var supplier_id = cell.siblings('input').val();
	 
	    if( cell.index() > 0){
	    	$.get(url + '/' + supplier_id, function (data) {
	            //success data
	            $("input[name='CompanyName']").val(data.company_name);
	            $("input[name='BusinessName']").val(data.business_name);
	            $("input[name='Address']").val(data.address);
	            $("input[name='Email']").val(data.email);
	            $("input[name='CelNo']").val(data.contact_no);
	            $("select[name='BusinessType']").val(data.category_id);
	            $("input[name='ContactPerson']").val(data.contact_person);
	            $("input[name='Website']").val(data.website);
	            $("input[name='Facebook']").val(data.fbpage);
	            $("textarea[name='Notes']").val(data.note_to_admin);
	    		editToggle();
	        });	
	   }
	});

});