$(document).ready(function(e) {
	$("a.btnLogin").click(function(){ 
		$(".loginPopup").fadeIn();
		$(".signupPopup").fadeOut();
	});	
	
	$("a.btnSignUp").click(function(){ 
		$(".signupPopup").fadeIn();
		$(".loginPopup").fadeOut();
	});	
	
	$("a.forgot-password-link").click(function(){ 
		$(".ForgotPopup").fadeIn();
		$(".loginPopup").fadeOut();
	});	
	
	$("a.close").click(function(){
		$(".asPopup").fadeOut();
	});	
	
	
	window.addEventListener('scroll', function(e) {
		var distanceY = window.pageYOffset || document.documentElement.scrollTop,
			shrinkOn = 10,
			header = document.querySelector("header");
		if (distanceY > shrinkOn) {
			$("header").addClass("smaller");
		} else {
		   $("header").removeClass("smaller");
		}
	});
		
	/*$('html,body').animate({
	   scrollTop: $(window.location.hash).offset().top
	}, 1000); */
	
/*----Popup-Show-------------------------------------------------------------*/
	
	
//$("div.inner-page-wrapper").css('min-height', $(window).height() - $("header").height() - $("footer").height() + 30);	
});

$(window).resize(function(e) {  
	//$("div.inner-page-wrapper").css('min-height', $(window).height() - $("header").height() - $("footer").height() + 30);
});