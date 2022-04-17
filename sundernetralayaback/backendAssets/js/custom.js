$(".browser-window__link").click(function(){
  $(".browser-window__link .hamburger span:nth-child(3)").toggleClass('d-off');
  $(".browser-window__link .hamburger span:nth-child(1)").toggleClass('open');
  $(".browser-window__link .hamburger span:nth-child(2)").toggleClass('n-open');  
  $("#only-menu").toggleClass('show-only-menu');
  $("#nav-tab").toggleClass('n-open');
 
  
});



$("#dd").click(function(){
  $("#menu-only-btn").hide();
  $("#nav-tab").css('transform','scale(1)');
  $(".show-only-menu").css('transform','scale(0)');
  $(".nav").css('width','80%');
  $(".nav .world-wide-menu").css('width','60%');
  
});
 $("#world-menu-btn").click(function(){
  $("#nav-tab").css('transform','scale(0)');
  $(".nav").css('width','100%');
  $("#menu-only-btn").show();
  $(".nav .world-wide-menu").css('width','50%');
  
 });

/*countery list start*/

function DropDown(el) {
        this.dd = el;
        this.initEvents();
      }
      DropDown.prototype = {
        initEvents : function() {
          var obj = this;

          obj.dd.on('click', function(event){
            $(this).toggleClass('active');
            event.stopPropagation();
          }); 
        }
      }

      $(function() {

        var dd = new DropDown( $('#dd') );

        $(document).click(function() {
          $('.wrapper-dropdown-5').removeClass('active');
        });

      });

/*countery list close*/

/* color change*/

$(window).on("scroll touchmove", function() {
    if ($(document).scrollTop() >= $("#one").position().top) {
        $('.nav').css('background', $("#one").attr("data-color"));

    };
    if ($(document).scrollTop() > $("#two").position().top) {
        $('.nav').css('background', $("#two").attr("data-color"))
    };
    
});

/* color change close*/

/*logo animation head*/
$(document).ready(function(){
  $(window).scroll(function(){
    var scroll = $(window).scrollTop();
    if (scroll > 50) {
      $("img.logo").css({
        transform:'translateX(-400px)',
        transition:'2s'
      });
    }

    else{
      $("img.logo").css({
        transform:'translateX(0px)',
        transition:'.1s'
      });   
    }
  })
})


$('#maindiv').width($('#div1').width());



(function($, document) {
    
     
      let height = -1;

    $('.tab__content').each(function() {
      height = height > $(this).outerHeight() ? height : $(this).outerHeight();
         $(this).css('position', 'absolute');
    });
    
    $('[data-tabs]').css('min-height', height + 40 + 'px');
   
}(jQuery, document));


var currentTab = 0; 
showTab(currentTab); 

function showTab(n) {
  
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
 
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
 
  fixStepIndicator(n)
}

function nextPrev(n) {
  
  var x = document.getElementsByClassName("tab");
 
  if (n == 1 && !validateForm()) return false;
  
  x[currentTab].style.display = "none";
 
  currentTab = currentTab + n;
  
  if (currentTab >= x.length) {
    
    document.getElementById("regForm").submit();
    return false;
  }
 
  showTab(currentTab);
}

function validateForm() {
 
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
 
  for (i = 0; i < y.length; i++) {
   
    if (y[i].value == "") {
    
      y[i].className += " invalid";
     
      valid = false;
    }
  }
 
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; 
}

function fixStepIndicator(n) {
 
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
 
  x[n].className += " active";
}

$(".close-div button").click(function(){
  
  $("#sayhello").hide();
  
});

$(".say-hello .inner").click(function(){
  
  $("#sayhello").css("display","flex");
  
});


