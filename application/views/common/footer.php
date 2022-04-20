<?php
 $footer_class = 'grey-bg';
 if($this->router->fetch_method() == 'patient_stories' || $this->router->fetch_method() == 'our_team' || $this->router->fetch_method() == 'blogs' || $this->router->fetch_method() == 'appointment' || $this->router->fetch_class() == 'blogdetail'){ 
 $footer_class = 'white-bg';
 }

?>
	<div class="top-strip <?php echo $footer_class;?>">
    	<div class="container">
            <div class="row vertical-align">
                    
                <div class="col-md-8 vertical-middle visible-block-sm-xs marbot30-sm-xs">
                    <div class="text-center marbot0 media">
                        <span class="media-left"><i class="fa fa-phone icon-bordered"></i></span>
                        <span class="media-body text-left media-middle">
                            If you Have Any Questions Call Us On <a href="tel:+91 9226195659"><span class="bold">+91 9226195659</span></a>                
                        </span>
                    </div> 
                </div>
                
                <div class="col-md-4 vertical-middle visible-block-sm-xs text-center animatedParent animateOnce">
                    <a href="<?php echo base_url();?>appointment" class="btn btn-type1-reverse pulse animated"> Make an Appointment</a>
                </div>
            </div>
        </div>
    </div>
<!-- Footer Top Strip -->

<footer id="footer">
    <div class="footer">
        <div class="container">
            <div class="row">
            	<div class="clearfix marbot20">
                  <div class="col-md-3 col-sm-6 marbot50-md-xs">
                    <h4 class="footer-title">Who We Are </h4>
                        <p class="fontresize">
                        Phytoelixir is India’s innovation based company (Startup application under progress) in the field of Biotechnology ,established in December 2021, with purpose to serve the hidden treasure of nature and bring resilience of nature by revitalizing all living beings , using scientific and innovation power to tackle some of the global challenges and create value for our stakeholders and society at large


                    </p>
                    	<!-- Button -->
                        <a class="btn btn-type1" href="<?php echo base_url();?>appointment">Book An Appointment</a> 
                   	<!-- // Button -->
                  </div>
                    <div class="col-md-3 col-sm-6 marbot50-md-xs">
                      <div class="f-type2-address">
                        <h4 class="footer-title">Contact Details </h4>
                            <div class="footer-call">
                              <div class="media marbot20">
                                <div class="media-left">
                                        <i class="flaticon-technology-6"></i>
                                </div>        
                                    <div class="media-body">
                                      <p class="fontresize marbot0">
                                           Chitale Rd, Chaupati Karanja, Nalegaon, Ahmednagar, Maharashtra 414001 
                                      </p>
                                    </div>
                                </div>
                                
                                <div class="media marbot20">
                                  <div class="media-left">
                                        <i class="flaticon-clock"></i>
                                  </div>        
                                    <div class="media-body">
                                      <a href="tel:+91 9226195659">+91 9226195659</a>
                                      
                                  </div>
                                  
                                </div>
                            
                                <div class="media">
                                  <div class="media-left">
                                        <i class="fa flaticon-time-1"></i>
                                  </div>        
                                    <div class="media-body">
                                      <a href="#">info@sundernetralaya.in</a>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="visible-sm clearfix"></div>
                    
                    <div class="col-md-3 col-sm-6 marbot30-md-xs">
                      <h4 class="footer-title"> quick links </h4>
                        <div class="clearfix">
                          <ul class="list-type1">
                              <?php $getServices = getServices();
                              if($getServices){
                                  foreach($getServices as $s => $service){ ?>
                                      <li><a href="<?php echo base_url().'service-detail/'.$service['tag_url'];?>"><?php echo $service['name'];?></a></li>
                                 <?php }
                              }?>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                      <div class="clearfix table-min marbot30-md-xs">
                       	<h4 class="footer-title">Working Hours</h4>
                            <!-- Timing 1 -->
                        <dl class="dl-horizontal">
                       	  <dt>MON</dt>
                                <dd>9:00 AM - 6:00 PM</dd>
                            </dl>
                            <!-- Timing 1 -->
                                
                            <!-- Timing 2 -->
                       	<dl class="dl-horizontal">
                   		  <dt>TUES</dt>
                                <dd>9:00 AM - 6:00 PM</dd>
                            </dl>
                            <!-- Timing 2 -->
                                
                            <!-- Timing 3 -->
                            <dl class="dl-horizontal">
                                <dt>WED</dt>
                                <dd>9:00 AM - 6:00 PM</dd>
                            </dl>
                            <!-- Timing 3 -->
                                
                            <!-- Timing 4 -->
                       	<dl class="dl-horizontal">
                   		  <dt>THUR</dt>
                                <dd>9:00 AM - 6:00 PM</dd>
                            </dl>
                            <!-- Timing 4 -->
                                
                            <!-- Timing 5 -->
                       	<dl class="dl-horizontal">
                   		  <dt>FRI</dt>
                                <dd>9:00 AM - 6:00 PM</dd>
                            </dl>
                            <!-- Timing 5 -->
                                
                            <!-- Timing 6 -->
                       	<dl class="dl-horizontal marbot0">
                   		  <dt>SAT </dt>
                                <dd>9:00 AM - 6:00 PM</dd>
                            </dl>
                            <!-- Timing 6 -->
                      </div>
                    </div>
                </div>
            </div>
            
            <div class="border-seperator"></div>
                
            <div class="row">
                <div class="clearfix footer-bottom-strip">
                  <div class="col-md-6">
                    <div class="copyright marbot30-md-xs">
                        	Copyright © 2022 <span class="bold">Sunder Netralaya</span>. All Rights Reserved. Designed by <a href="https://spitertech.com"  target="_blank"><span class="bold">Spitertech Solutions</span></a>
                    </div>
                    </div>
                    <div class="col-md-6">
                      <div class="clearfix">
                        <ul class="footer-strip-menu list-unstyled">
                          <li><a href="<?php echo base_url();?>">Home</a></li> 
                                <li><a href="<?php echo base_url();?>aboutus">About Us</a></li>
                                <li><a href="<?php echo base_url();?>blogs">News  </a></li>
                                <li><a href="<?php echo base_url();?>contactus">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
        
        <!-- Back To Top -->
        <div class="footer-strip animatedParent">
            <a href="#" data-html="true" title="Back To Top" data-toggle="tooltip" class="back-to-top text-center"> 
                <i class="fa fa-angle-double-up transition fadeInUp animated"></i>            </a>
          <div class="footer-bottom-border"></div>
        </div>
      <!-- // Back To Top -->
    </div>
</footer>
<!-- // Footer Section
================================= -->

</div>
<!-- // Wrapper 
=============================-->

<!-- Java Scripts
================================= -->

<!-- Common Scripts -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.easing-1.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.slicknav.min.js"></script>

<!-- Smooth Scroll -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/sscr.js"></script>
<!-- // Smooth Scroll -->

<!-- Preloader Starts -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jpreloader.min.js"></script>
<!-- Preloader End -->

<!-- Light Box JS -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/ekko-lightbox.min.js"></script>
<!-- // Light Box JS -->

<!-- Image Hover Overlay Effect -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/modernizr-2.8.3.min.js"></script>	
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.hoverdir.js"></script>	
<!-- // Image Hover Overlay Effect -->

<!-- // Common Scripts -->

<!-- Date And Time Picker -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-datetimepicker.min.js"></script>
<!-- // Date And Time Picker -->

<!-- Google Map -->
<!-- <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyA83445LgI_7xAkWaYrsClIZcbW-Cc_t6Y&sensor=false"></script> -->
<!-- <script type="text/javascript" src="assets/js/custom-google-map.js"></script> -->
<!-- // Google Map -->


<!-- Twenty Twenty Slider -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.event.move.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.twentytwenty.js"></script>
<!-- // Twenty Twenty Slider -->

<!-- Owl Slider JS -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/custom-owl.js"></script>
<!-- // Owl Slider JS -->

<!-- BX Slider JS -->a
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/custom-bxslider.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.isotope.min.js"></script>
<!-- // BX Slider JS -->

<!-- Revolution Slider 4.6.5 -->
<script type="text/javascript" src="<?php echo base_url();?>assets/revolution-4.6.5/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/revolution-4.6.5/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/revolution-4.6.5/js/custom-renovation-slide-thumbs.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/scripts.js"></script>
<!-- Revolution Slider 4.6.5 -->

<script>
// DOM  starts here 

jQuery(document).ready(function($){
"use strict"; 
// Preloaer Script
jQuery("body").jpreLoader(
	  {
		splashID:"#jSplash",
		showPercentage:!0,
		autoClose:!0,
		showSplash: true,
		splashFunction:function(){
		$("#sk-spinner").delay(1250).animate({opacity:1},700,"linear");
 		}
	})
});
// dom END

</script>

<!-- Animate It -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/css3-animate-it.js"></script>
<!-- // Animate It -->

<!-- Custom General JS -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/custom-general.js"></script>
<!-- //  Custom General JS -->
    
<!-- //Java Scripts
================================= -->

</body>

 
</html>
