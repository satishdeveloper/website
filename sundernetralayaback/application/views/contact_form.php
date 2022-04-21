<style>
    .hide{
        display:none;
    }
    .mrg38{
        margin-left: 38%;
    }
</style>

<section class="top-bottom-spacing-full contact-bg <?php echo $bgcolor;?>">

            <div class="container">
            	<div class="heading text-center marbot50">
                	<h2>HAVE ANY QUERY OR SUGGESSTIONS</h2>
                    <p class="fontresize">To get in touch, complete this form and we'll get back to you as quickly as possible.</p>
                </div>
            	
                <div class="row animatedParent animateOnce">
                    <div class="col-md-12 fadeInUp animated">
                        
                        <form  id="save_contact_form" class="save_contact_form" method="post" action="#">
                        <div class="row clearfix">
                          
                            <div class="col-md-5">
    
                            <div class="clearfix control-group">
                            <input name="leadName" id="leadName" type="text" class="contact_form_css textbox1" placeholder="Name" onFocus="this.placeholder = ''" onBlur="this.placeholder = '* Name :'"  />
                            </div>
    
                            <div class="clearfix control-group">
                           <input name="leadEmail" id="leadEmail" type="text" class="contact_form_css textbox1" placeholder="Email" onFocus="this.placeholder = ''" onBlur="this.placeholder = '* Email :'" />
                            </div>
                                                         
                            <div class="clearfix control-group">
                            <input name="leadMobile" id="leadMobile" type="text" class="contact_form_css Number textbox1" placeholder="Phone" onFocus="this.placeholder = ''" onBlur="this.placeholder = '* Phone :'" />
                            </div>
                        
                            </div>
                            
                            <div class="col-md-7">
                                <div class="clearfix control-group">
                                <textarea name="leadMessage" id="leadMessage" class="contact_form_css messagebox1" placeholder="Message" onFocus="this.placeholder = ''" onBlur="this.placeholder = '* Message :'"></textarea>
                                </div>
                                <div class="clearfix">
                                    <button type="submit" id="contact_lead_btn" class="btn btn-type1-reverse"> Submit </button>
                                </div>
                            </div>                        
                            
                        </div> 
                        </form>
                        <div id="post_message"><p class="fontresize success-msg marbot0 mrg38 hide"> Send  Successfully! </p></div>
                        
                    </div>    
                </div>
            </div>
            
</section>

<!-- // Contact map Section
================================================== -->

<!-- Map Section
================================================== -->
<div id="boxed">
<!--  Map Section -->
    <div class="map-section">
    <!-- map -->
        <div class="map_wrapper">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15081.042125514223!2d74.7327626!3d19.0962232!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x878a487b8bab710f!2sSunder%20Netralaya%20hospital!5e0!3m2!1sen!2sin!4v1648021080536!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
         <!--   <a class="btn btn-type1 map-close">-->
         <!--   	<i class="fa fa-times"></i>            </a>-->
        	<!--<div id="map_canvas"></div>-->
        </div>
    <!-- // map -->
        <section id="foot_top" class="show-googlemap plus"> 
            <div class="foot_top_txt animatedParent">
                <i class="fa flaticon-technology-6 map-marker foot_icon pulse animated" ></i>
                        
                 <a href="http://">View Our Location - Google Map</a> 
                <i class="fa fa-angle-right foot_icon foot_icon1"></i>
            </div>
        </section> 
    </div>
<!-- // Map Section -->   
</div>