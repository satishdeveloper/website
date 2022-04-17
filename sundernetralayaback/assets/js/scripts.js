 $( document ).ready(function() {
    $('.Number').keypress(function (event) {
    var keycode = event.which;
    if (!(event.shiftKey == false && (keycode == 46 || keycode == 8 || keycode == 37 || keycode == 39 || (keycode >= 48 && keycode <= 57)))) {
        event.preventDefault();
    }
});

$('#save_contact_form #contact_lead_btn').click(function(e){
  
    e.preventDefault();
    
    var leadName = $('#leadName').val();
    var leadEmail = $('#leadEmail').val();
    var leadMobile = $('#leadMobile').val();
    var leadMessage = $('#leadMessage').val();
    
    var flagName = 0;
    var flagMsg = 0;
    var flagEmail = 0;
    var flagMob = 0;
    
    $("#save_contact_form .contact_form_css").removeAttr("style");
    
    
    if (leadMessage == '') {
        $("#leadMessage").css({"border-color": "red"}).focus();
        flagMsg = 1;
    }
    
    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
 
    if ( (!regex.test(leadEmail))) {
        $("#leadEmail").css({"border-color": "red"}).focus();
        flagEmail = 1;
    }
    
    if(leadMobile.length!=10){
        $("#leadMobile").css({"border-color": "red"}).focus();
        flagMob = 1;
      }

    if (leadName == '') {
        $("#leadName").css({"border-color": "red"}).focus();
        flagName = 1;
    }
    
    if (flagName == 0 && flagEmail ==0 && flagMsg == 0 && flagMob == 0) {
    var _base_url = 'http://sundernetralaya.in/sundernetralaya/';
     $.ajax({
        url: _base_url + "home/save_contact",
        type: 'POST',
        dataType: 'json',
        data: {
          'leadName': leadName,
          'leadEmail' : leadEmail,
          'leadMobile' : leadMobile,
          'leadMessage' : leadMessage
        },
        error: function()
        {
          alert( "Something went wrong. Please try again later" );
        },
        success: function( data ) 
        {
          if( typeof data.error != "undefined" && data.error != "" )
          {
            alert('Something went wrong.')
            return false;
          }
          else
          {
             $("#save_contact_form .contact_form_css").removeAttr("style");
             $('#leadName').val('');
             $('#leadEmail').val('');
             $('#leadMobile').val('');
             $('#leadMessage').val('');
             $('.success-msg').removeClass('hide').css({'color':'#054a85','padding-top':'4%'});
            return true;
          }
        }
      });
        
    }
  });
 
 $('#appointment_form #appointment_btn').click(function(e){
  
    e.preventDefault();
    
    var name = $('#name').val();
    var email = $('#email').val();
    var mobile = $('#mobile').val();
    var content = $('#content').val();
    var appointmentDate = $('#appointmentDate').val();
    
    
    var flagName = 0;
    var flagMsg = 0;
    var flagEmail = 0;
    var flagMob = 0;
    
    $("#appointment_form .contact_form_css").removeAttr("style");
    
    if (name == '') {
        $("#name").css({"border-color": "red"}).focus();
        flagName = 1;
    }
    if (content == '') {
        $("#content").css({"border-color": "red"}).focus();
        flagMsg = 1;
    }
    
    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
 
    if ( (!regex.test(email))) {
        $("#email").css({"border-color": "red"}).focus();
        flagEmail = 1;
    }

    if (flagName == 0 && flagEmail ==0 && flagMsg == 0) {
    var _base_url = 'http://sundernetralaya.in/sundernetralaya/';
     $.ajax({
        url: _base_url + "home/save_appointment",
        type: 'POST',
        dataType: 'json',
        data: {
          'name': name,
          'email' : email,
          'mobile' : mobile,
          'content' : content,
          'appointmentDate' : appointmentDate
        },
        error: function()
        {
          alert( "Something went wrong. Please try again later" );
        },
        success: function( data ) 
        {
          if( typeof data.error != "undefined" && data.error != "" )
          {
            alert('Something went wrong.')
            return false;
          }
          else
          {
             $("#appointment_form .contact_form_css").removeAttr("style");
             $('#name').val('');
             $('#email').val('');
             $('#mobile').val('');
             $('#content').val('');
             $('.success-msg').removeClass('hide').css({'color':'#054a85','padding-top':'4%'});
            return true;
          }
        }
      });
        
    }
  }); 
  
});