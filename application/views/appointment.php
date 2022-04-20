<section class="animatedParent animateOnce subbanner subbanner-image subbanner-pattern-02 subbanner-type-2 subbanner-type-2-btn">
    	<div class="container">
        	<div class="subbanner-content banner-content">
            	<div class="skew-effect fadeInLeft animated">
                   	<span class="fw-normal">Schedule </span>Appointment				</div>
                <ol class="breadcrumb text-left fadeInRight animated">
                    <li><a href="<?php echo base_url();?>">Home</a></li>
                    <li><a href="#">Schedule Appointment</a></li>
                </ol>
            </div>
        </div>
        <!-- Breadcrumb -->
        <div class="banner-strip">
        	<div class="container">
            	
            </div>
        </div>
		<!-- // Breadcrumb -->
</section>

<!-- // Banner Section
================================= -->

<!-- Services Section
================================================== -->

<section class="top-bottom-spacing grey-bg">
    <div class="container">
        <div class="row">
            <div class="clearfix">
                <!-- Section 1 -->
                <div class="col-md-4">
                	<div class="heading marbot40">
                        <h2>Fix appointment with our doctors</h2>
                        <p class="fontresize marbot0">Please bring to your appointment any available medical records, including images such as x-rays and MRI.  Please fill out the appointment request form here.	</p>
                        
                  	</div>
                    
                    <div class="appointment-sidebar panel panel-body panel-grey bottom-right marbot40">
                        <ul class="cont-det">
                            <li class="border-seperator">
                            	<h4>For Emergency</h4>
                                <a href="tel:+91 9226195659" class="reverse fw-500">
                                   <i class="fa fa-fw flaticon-clock location-icon color-light"></i> +91 9226195659
                                </a>
                            </li>
                            <li class="border-seperator">
                            	<h4>House Visit</h4>
                                <a href="tel:+91 9226195659" class="reverse fw-500">
                                   <i class="fa fa-fw flaticon-medical-21 location-icon color-light"></i> +91 9226195659
                                </a>
                            </li>
                            <li>
                            	<h4>Appointment by mail</h4>
                                <a href="#" class="reverse fw-500">
                                   <i class="fa fa-fw flaticon-symbol location-icon color-light"></i> info@phytoelixir.in
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                </div>
                <!-- // Section 1 -->
                
                <!-- Section 2 -->
                <div class="col-md-8">
                    <form id="appointment_form" class="appointment panel panel-body marbot40 panel-grey" method="post" action="#">
                        <h3>Fix an appointment</h3>
                        
                        <!-- Form Section -->
                        <div class="row clearfix">
                        	<div class="clearfix">
                            <div class="col-md-6">
                                <div class="clearfix form-group">
                                    <label for="name">Full Name</label>
                                    <input name="name" type="text" id="name" class="contact_form_css textbox1" placeholder="">
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="clearfix form-group">
                                    <label for="email">Email</label>
                                    <input name="email" type="text" class="contact_form_css form-control" id="email" placeholder="">
                                </div>
                            </div>
                            </div>
                            
                           
                            <div class="clearfix">
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label for="mobile">Phone number</label>
                                    <input name="mobile" type="text" class="form-control contact_form_css Number" id="mobile" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">                                
                                <div class="form-group">
                                    <div class="clearfix marbot20">
                                        <label for="appointmentDate">Select Date</label>
                                        <div id="datetimepicker" class="input-group date form_datetime" data-date-format="dd-mm-yyyy" data-link-field="dtp_input1">
                                        <input name="appointmentDate" class="contact_form_css" type="text" value="" id="appointmentDate" readonly>
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>                
                                        </div>
                                        <input type="hidden" id="dtp_input1" value="" />
                                    </div>
                                </div> 
                            </div>
                            
                           
                            </div>
                            
                        </div>
                        
                        
                        <div class="row clearfix marbot30">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="content">Content</label>
                                    <textarea name="content" class="form-control" rows="4" id="content"> </textarea>
                                </div>
                            </div>
                        
                            <div class="col-md-3"> 
                            
                            </div>
                        </div>
                          
                        <div class="row clearfix">
                            <div class="col-md-12">
                                <button type="submit" id="appointment_btn" class="btn btn-type1-reverse">Book Appointment</button>
                                <div id="post_message"><p class="fontresize success-msg hide">Appointment Booked! </p></div>
                            </div>
                        </div>
                        <!-- // Form Section -->
                    </form>
                    
                    
                </div>
                <!-- // Section 2 -->

            </div>
        </div>
    </div>
</section>