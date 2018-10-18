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
$("#lco_state").change(function(){
	var state_name = $(this).val();
	
	if(state_name != "")
	{
		var urlpath = baseurl+"operator/getCitiesByState";
      	$.ajax({

	        type: "POST",

	        url: urlpath,

	        data: '&state_name='+state_name,

	        success:function(cityInfo)
	        {
				var appendOpt='';
				var appendOpt = '<option value="">Select City</option>';
				if(cityInfo.length > 0)
				{
					for(i=0; i<cityInfo.length; i++) 
					{
						appendOpt += ("<option value="+cityInfo[i].location_name+">"+cityInfo[i].location_name+"</option>");    
					}
					$('select#lco_city').html(appendOpt);
				}
				else
				{
					$('select#lco_city').html(appendOpt);
				}
	        }

      });
	}
});