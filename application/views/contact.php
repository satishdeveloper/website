<!-- Banner Section
================================= -->

<section class="animatedParent animateOnce subbanner subbanner-image subbanner-pattern-02 subbanner-type-2 subbanner-type-2-btn">
    <div class="container">
        <div class="subbanner-content banner-content">
            <div class="skew-effect fadeInLeft animated">
                <span class="fw-normal">Contact</span> Us            </div>
            <ol class="breadcrumb text-left fadeInRight animated">
                <li><a href="<?php echo base_url();?>">Home</a></li>
                <li><a href="#"> Contact us</a></li>
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

<!-- Contact Section
================================================== -->



<!-- // Contact Section
================================================== -->

<!-- Location Section
================================================== -->

<section class="top-bottom-spacing white-bg">
    <div class="container">
        <div class="row">
            <div class="clearfix">
                <!-- Section 1 -->
                <div class="col-md-8 marbot10">
                    
                    <div class="marbot0 clearfix">
                        <div class="row">
                        <div class="col-md-6 marbot30">
                            <!-- Location -->
                            <div class="media media-base-align">
                                <div class="media-left">
                                    <i class="flaticon-technology-6 color-light location-icon"></i>
                                </div>
                                <div class="media-body">
                                    <h3 class="contact-heading">Phytoelixir</h3>
                                    <p class="fontresize marbot10">
                                         Chitale Rd, Chaupati Karanja, Ahmednagar, Maharashtra 414001
                                    </p>
                                    <p class="fontresize">
                                        <span class="bold">Call: <a class="reverse" href="tel:+91 9226195659">+91 9226195659</a></span> <br />
                                    </p>
                                </div>
                            </div>
                            <!-- // Location -->
                            
                            <!-- Appointment -->
                            <div class="media media-base-align">
                                <div class="media-left">
                                    <i class="flaticon-clock color-light location-icon"></i>
                                </div>
                                <div class="media-body">
                                    <h3 class="contact-heading">Make an appointment</h3>
                                    <div class="call marbot0"><a class="reverse" href="tel:+91 9226195659">+91 9226195659</a></div>
                                </div>
                            </div>
                            <!-- // Appointment -->
                        </div>
                        
                        <div class="col-md-6 marbot30">
                            <p class="fontresize"> 
                                Sign-up using the form or call us at <span class="bold">234-567-8900+1-</span> to take advantage of this exclusive offer. 
                            </p>
                            <a href="<?php echo base_url();?>appointment" class="btn btn-type1-reverse marbot10"> Book an appointment </a>
                            <div class="border-seperator"></div>    
                            <!--<p class="fontresize"> Ordering your <span class="bold">contact lenses with no prescription</span> through below button, its very simple. </p>
                            <a href="order-contact-lenses.html" class="btn btn-type1-reverse"> Order Contact Lenses </a>
                            -->
                        </div>
                        </div>
                        
                    </div>
                </div>
                <!-- // Section 1 -->
                
                
                <!-- Section 2 -->
                <div class="col-md-4">
                    <div class="panel panel-body panel-dark-grey bottom-right marbot0">
                        <div class="panel-title">
                            <h3 class="text-center">Working Hours</h3>
                        </div>
                        <p class="fontresize text-center color-light bold"> 
                            Open 24 Hours Every Day Of The Year!
                        </p>
                        <div class="working-hours working-hours-type1">
                            <dl class="dl-horizontal">
                              <dt> Monday </dt>
                              <dd>08:30 AM - 19:00 PM</dd>
                            </dl>
                            <dl class="dl-horizontal">
                              <dt> Tuesday </dt>
                              <dd>08:30 AM - 16:00 PM</dd>
                            </dl>
                            <dl class="dl-horizontal">
                              <dt> Wednesday </dt>
                              <dd>08:30 AM - 17:00 PM</dd>
                            </dl>
                            <dl class="dl-horizontal">
                              <dt> Thursday </dt>
                              <dd>08:30 AM - 15:00 PM</dd>
                            </dl>
                            <dl class="dl-horizontal">
                              <dt> Friday </dt>
                              <dd>08:30 AM - 14:30 PM</dd>
                            </dl>
                             <dl class="dl-horizontal">
                              <dt> Sat </dt>
                              <dd>08:30 AM - 14:30 PM</dd>
                            </dl>
                            <dl class="dl-horizontal">
                              <dt> Sun </dt>
                              <dd>Closed</dd>
                            </dl>
                                                    
                        </div>
                    </div>
                </div>
            </div>
           <!-- // Section 2 -->
        </div>
    </div>
</section>

<!-- // Location Section
================================================== -->

<?php echo $this->load->view('contact_form',array('bgcolor'=>'grey-bg'));?>