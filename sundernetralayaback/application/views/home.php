
<section class="home">
		<div id="slider" class="slider1 slider-light">
			<div class="tp-banner-container">
				<div class="tp-banner" >
					<ul>	
					<!-- SLIDE  -->
					<?php if($sliderResult){
					    foreach($sliderResult as $s => $slider){ ?>
					        <li data-transition="3dcurtain-horizontal" data-slotamount="7" data-masterspeed="500" >
    							<!-- MAIN IMAGE -->
    							<img src="<?php echo base_url().$slider['image_url'];?>"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
    							<div class="tp-caption large_bold_white skewfromrightshort customout" 
                                	data-x="" data-y="200" 
                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                    data-speed="500" data-start="1200" 
                                    data-easing="Back.easeOut" 
                                    data-endspeed="500" 
                                    data-endeasing="Power4.easeIn" 
                                    data-captionhidden="on" style="z-index: 4; text-shadow: 0 1px 2px rgba(0, 0, 0, 0.5)"><?php echo $slider['title'];?> </div>
     
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption miami_content_light customin ltl" 
                            	data-x="" data-y="275" 
                                data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" 
                            	data-speed="1000" data-start="1500" 
                                data-easing="Back.easeInOut" 
                                data-endspeed="400" 
                                data-endeasing="Back.easeIn" style="z-index: 14;"><?php echo $slider['description'];?></div>
                                
                               
                            <!-- LAYER NR. 3 -->
                                <div class="tp-caption light_medium_30_shadowed lfb ltt tp-resizeme start" 
                                	data-x="470" data-y="345" 
                                    data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" 
                                    data-speed="1000" data-start="2000" 
                                    data-easing="Back.easeInOut" 
                                    data-endspeed="400" 
                                    data-endeasing="Back.easeIn" style="z-index: 14;"><a class="btn btn-type1" href="<?php echo base_url();?>appointment">Request An Appointment</a>                            </div>							
    					  </li>
					    <?php } 
					}
					?>
						
					</ul>
					<div class="tp-bannertimer"></div>
			  </div>
			</div>
			<div class="banner-thumbs visible-md visible-lg animatedParent animateOnce">
				<div class="container fadeInUp animated">
					<!-- slide-buttons -->
					<ul class="slider-thumbnails">
					    <?php if($sliderResult){
    					    foreach($sliderResult as $s1 => $slider1){
    					        $activecls = '';
        					    if($s1 == 0){ 
        					        $activecls = 'active';
        					    }
        					    ?>
        						<li class="<?php echo $activecls;?>">
        							<a href="#" class="slide-thumbs" id="slidethumb<?php echo $s1+1;?>" data-slide="<?php echo $s1+1;?>">
        								<span><?php echo $s1+1;?></span>
                                        <h3><?php echo $slider1['name'];?></h3>
                                        <p class="fontresize"><?php echo $slider1['synopsis'];?></p>	</a>						
                                </li>
                            
                            <?php } 
                        } ?>
					
					</ul>
				</div>
			</div>
		</div>
  <!-- END REVOLUTION SLIDER -->
    
<!-- // Home Slider Banner -->
</section>

<!-- // Banner Section
=============================-->  


<!-- Content Section
================================================== -->
<section class="top-bottom-spacing white-bg">
	<div class="container">
    	<div class="row animatedParent animateOnce" data-sequence='300'>
        	<div class="hover-content-section">
            	<div class="col-md-3 marbot40 fadeInLeft animated" data-id='1'>
                    <div class="box1-cta">
                        <h2><span class="fw-normal">Total Eye Care for  </span>  Childrens &amp; Adults</h2>
                        <p class="fontresize">	
                             Sunder Netralay provides advanced diagnostic and specialist services in all aspects of Ophthalmology under one roof.
                        </p>
                        <p class="fontresize"> 
                           
Sunder Netralay is well known and respected for our refractive practice and efforts in direction to offer spectacle independence
                        </p>
                    </div>
                   <!-- <a href="<?php echo base_url();?>services" class="btn btn-type1-reverse transition"> View All Services </a>-->
                </div>
                <!-- cta 1 Section -->
                <?php if($servicesResult){
                    foreach($servicesResult as $sr => $service){ 
                    if($sr <3){
                    ?>
                        <div class="col-md-3 marbot40 fadeInRight animated" data-id='2'>
                            <div class="clearfix text-center">
                                <div class="hover-content cta-content">
                                    <div class="pentagon">
                                        <div class="mask mask-img mask-img-xs transition marbot10 center-block">
                                            <img src="<?php echo base_url().$service['image_url'];?>" alt=" " class="img-responsive">
                                        </div>
                                    </div>
                                    <h4><?php echo $service['name'];?></h4>
                                    
                                </div>
                                <p class="fontresize">
                                <?php echo substr($service['synopsis'], 0, 100);?>
                                </p>
                            
                                <a href="<?php echo base_url();?>service-detail/<?php echo $service['tag_url'];?>" class="read-more transition">Read More...</a>
                            </div>
                        </div>
                    <?php } 
                    }
                } ?>
                
                
                
            </div>
       </div>
    </div>
</section>
<!-- Content Section
================================================== -->

<!-- Center Banner Section
================================= -->
<section class="center-banner top-bottom-spacing banner-parallax">
    <div class="color-overlay"></div>
    <div class="container">
        <div class="row">
            <!-- Left Section -->
            <div class="col-md-8 animatedParent animateOnce">
                <div class="center-banner-content">
                	<div class="clearfix">
                   	  <div class="center-banner-title text-capitalize"><small class="label label-default">Important</small></div>
                        <div class="offer">
                             <small>WHEN TO CONSULT EYE DOCTOR?</small>
                        </div>
                        <div class="center-banner-title">Sunder netralay specialists recommend eye checkups at various stages, starting at the age of 03 years. For adults, yearly visit to their eye specialist can help in preventing severe eye diseases.
</div>
                    </div>
                <a href="appointment.html" class="btn btn-type1 btn-big text-uppercase growIn animated slowest">Book aour appointment today <i class="fa fa-fw fa-chevron-right"></i></a>
                    <div class="row">
                        <div class="col-md-4 media marbot10">
                            <div class="media-left">
                                <i class="fa flaticon-medical-21 circle-icon"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="marbot10">Patient Care</h4>
                                <p class="fontresize">
                                    Both our surgeons and most of our staff have taken care of the patient.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 media marbot10">
                            <div class="media-left">
                                <i class="fa flaticon-medical-1 circle-icon"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="marbot10">High-Quality Standards</h4>
                                <p class="fontresize">
                                    Patient safety is considered as a top priority .
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 media marbot10">
                            <div class="media-left">
                                <i class="fa flaticon-medical-8 circle-icon"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="marbot10">Experienced Team Of Doctors</h4>
                                <p class="fontresize">
                                   experienced team of doctors .
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Left Section -->
            
            <!-- Right Section -->
            <div class="col-md-4">                
            
            </div>
            <!-- Right Section -->
        </div>
    </div>
</section>

<!-- // Center Banner Section
================================= -->

<section class="top-bottom-spacing grey-bg">
    <div class="container">
        <div class="row">
            <div class="clearfix">
                <!-- Section 1 -->
                <div class="col-md-4 marbot10">
                	<h1>
                    	<span class="fw-normal">INTRODUCING THE QUALITY </span>Our Sunder Netralay
                    </h1>
                </div>
                <!-- // Section 1 -->
                
                <div class="col-md-8">
                	<div class="row marbot20">
                        <!-- Section 2 -->
                        <div class="col-md-6">
                            <p class="fontresize">
                                Sunder Netralay is a super speciality eye hospital in  Nalegaon, Ahmednagar committed to delivering high-quality eye care,
                            </p>
                            <p class="fontresize">
                                 where Dr Seema Gore and Dr Sundar Gore have worked untiringly to bring together state-of-the-art technology and trained experienced personnel.
                            </p>
                        </div>
                        <!-- // Section 2 -->
                        
                        <!-- Section 3 -->
                        <div class="col-md-6">
                            <p class="fontresize">
                               It is his passion for offering the best clinical and service quality that Sunder Netralay has made a lot of progress, adding newer techniques and technology. 
                            </p>
                            <p class="fontresize">
                               Sunder Netralay provides advanced diagnostic and specialist services in all aspects of Ophthalmology under one roof. Total refractive solutions for all.
                            </p>
                        </div>
                        <!-- // Section 3 -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- doctors Section
================================= -->

<section class="hospital top-bottom-spacing white-bg">
   <div class="container">
      <div class="row">
         <div class="col-md-10 col-md-pull-1 col-md-push-1">
            <div class="row clearfix">
               <div class="col-md-6 marbot40">
                  <div class="grid image-effect2 text-center">
                     <a href="./our-team">
                        <figure>
                           <img src="./assets/images/drsundar.jpg" alt=" " class="img-responsive"> 
                           <figcaption><i class="fa flaticon-link-1 gallery-icon transition"></i></figcaption>
                        </figure>
                     </a>
                  </div>
                  <div class="panel panel-body marbot0 text-center doctor-details">
                     <h3 class="marbot0">Dr. Sundar Gore </h3>
                             <p class="fontresize marbot14 color-light"><em><span class="fw-500"> M.B.B.S., D.O., M.S.(Pune Univercity)</span></em></p>
                                      <p class="fontresize marbot20 color-light"><em><span class="fw-500"> ??????????????? ???????????? </span></emcity/>
</p>                      <!--<ul class="social-icons-simple social-bg-grey clearfix">-->
                     <!--   <li><a href="#"><i class="fa fa-facebook"></i></a></li>-->
                     <!--   <li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
                     <!--   <li><a href="#"><i class="fa fa-youtube"></i></a></li>-->
                     <!--</ul>-->
                  </div>
               </div>
               <!-- Content --> 
               <div class="col-md-6 marbot40">
                  <div class="story">
                     <h2 class="marbot20">About Our Director</h2>
                     <p class="lead color-light marbot30">Dr. Sundar Gore, M.B.B.S., D.O., <span class="marbot30">M.S.(Pune Univercity)Reg. No. 66711</span>.</p>
                     <p class="fontresize marbot30">Premium, High Risk & High Volume Cataract, Phaco Microphaco (MICS), Glucoma and Cosmetic Eye Surgeon</p>
                     <p class="fontresize"> Specialize in curing the most complex conditions related to eyes and guarantee a positive change in your life after the treatment, Clear Eye care services to everyone with affordable expense.</p>
               <a href="<?php echo base_url();?>our-team" class="read-more transition">Read More...</a>
                     <!--<img src="http://sundernetralaya.in/sundernetralaya/assets/images/sign.png" alt=" "> -->
                  </div>
               </div>
               <!-- Content --> 
            </div>
         </div>
      </div>
   </div>
</section>
<!-- // doctors Section
================================= -->
<section class="top-bottom-spacing grey-bg">
	<div class="container">
    	<div class="row animatedParent animateOnce" data-sequence='300'>
        	<div class="hover-content-section">
            	<div class="col-md-3 marbot40 fadeInLeft animated" data-id='1'>
                    <div class="box1-cta">
                        <h2><span class="fw-normal"> </span>News  </h2>
                        <p class="fontresize">	
                        Phytoelixir's Way Of Working :
                          
                        </p>
                         <p class="fontresize">	
                        
                           
                           -we only give best care to your eyes.
                           <br>
                            -sunder netralay hospital helping your visions
                         
                        </p>
                      
                       
                    </div>
                    <a href="<?php echo base_url();?>blogs" class="btn btn-type1-reverse transition"> View All News  </a>
                </div>
                <!-- cta 1 Section -->
                <?php if($blogResult){
                foreach($blogResult as $b => $blog){ 
                if($b <3){?>
                
                <div class="col-md-3 marbot40 fadeInRight animated" data-id='2'>
                    <div class="clearfix text-center">
                        <div class="hover-content cta-content">
                            <div class="">
                                <div class=" transition marbot10 center-block">
                                    <img src="<?php echo base_url().$blog['blogImage'];?>" alt=" " class="img-responsive">
                                </div>
                            </div>
                           
                        </div>
                        <p class="fontresize">
                        <?php echo substr($blog['blogDescription'],0,100);?>
                        </p>
                    
                        <a href="<?php echo base_url();?>blog-detail/<?php echo $blog['blogTag'];?>" class="read-more transition">Read More...</a>
                    </div>
                </div>
                <?php } } }?>
                
            </div>
       </div>
    </div>
</section>

<?php echo $this->load->view('contact_form',array('bgcolor'=>'grey-bg'));?>