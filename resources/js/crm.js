$(".assignOperator").change(function(){
	var operatorId = $(this).val();
	
	if(operatorId != "")
	{
		$.ajax({
		      type: 'POST',
		      url: baseurl+"customer_request_registration/assigning/"+operatorId,
		      success: function(resultData) { 
		      	alert("This Customer has been Assigned");
		      	location.reload();

		       }
		});
	}
});