//delete newsletter
function deletconfirm()
{
	if(confirm('Are you sure to delete this record ?'))
	{
		return true;
	}
	else
	{
		return false;
	}
}

function multipledeletconfirm(frmname)
{
	var checked=$("input[name='checkbox_del[]']:checked").length;
	if(checked<1){
		swal({title: 'Error!', text: 'No records selected for deletion!', type: 'error'});
	return false;
	}
	else
	{
 		if(confirm('Are you sure to delete these records ?'))
  		{
  			$('#'+frmname).submit();
  			return true;
  		}
  	    else
  		{
  			return false;
  		}
	}
}

function multiplerestoreconfirm(frmname)
{

	var checked=$("input[name='checkbox_del[]']:checked").length;
	if(checked<1){
    alert('No records selected for restore.');
	return false;
	}
	else
	{
 		if(confirm('Are you sure to restore these records ?'))
  		{
  			$('#'+frmname).submit();
  			return true;
  		}
  	    else
  		{
  			return false;
  		}
	}
}


function loadMenuType(param){
	var url  = BASEURL+"myadmin/menu/getMod";
	$.ajax({
		type: "POST",
		url: url,
		data: param,
		cache: false,
		success: function(data){
			$('div.loading').fadeOut();
			$("ul#type-items").html(data);
			$("ul#type-items").hide().slideDown();
		}
	});
}

$(document).ready(function(){
	/*var menuType =$("input.menu-type:checked").val();
	$('div.loading').fadeIn();
	loadMenuType("pageType="+menuType);*/
	$("input.menu-type").click(function(){
		var menuType = $(this).val();
		if(menuType == "other"){
			$("ul#type-items").html("");
		} else {
			$('div.loading').fadeIn();
			loadMenuType("pageType="+$(this).val());
		}
	});
});
