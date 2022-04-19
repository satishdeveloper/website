
<!-- Banner Section
================================= -->

<section class="animatedParent animateOnce subbanner subbanner-image subbanner-pattern-03 subbanner-type-2 subbanner-type-2-btn">
        <div class="container">
            <div class="subbanner-content banner-content">
                <div class="skew-effect fadeInLeft animated">
                    <span class="fw-normal">Patient</span> Stories              </div>
                <ol class="breadcrumb text-left fadeInRight animated">
                    <li><a href="<?php echo base_url();?>">Home</a></li>
                    <li><a href="#"> About Us </a></li>
                    <!-- <li><a href="#">Patient Stories</a></li> -->
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

<!-- Video Section
================================================== -->

<section class="white-bg top-bottom-spacing">
        <div class="container">
            <div class="row">
                <h2 class="marbot30">What people are saying</h2> 
                <?php if($patientVResult){
                    foreach($patientVResult as $k => $VPS){ 
                    if($k % 2== 0){
                    ?>
                        <div class="col-md-10 col-md-pull-1 col-md-push-1">
                            <div class="row animatedParent animateOnce"> 
                            
                                <div class="col-md-6 marbot40">  
                                    <!--<h2 class="marbot30">What people are saying</h2> -->                       
                                    <?php echo $VPS['description'];?>                                    
                                    <p class="fontresize marbot0">
                                        <span class="color-light bold"><?php echo $VPS['name'];?>  </span> .    
                                        <span><?php echo $VPS['designation'];?> </span>
                                    </p>
                                </div>
                                
                                <div class="col-md-6 marbot40 flipInY animated">
                                    <div class="clearfix">
                                        <div class="play-button absolute-video">
                                          <div class="embed-responsive embed-responsive-16by9">
                                              <iframe class="embed-responsive-item" src="<?php echo $VPS['video_link'];?> " allowfullscreen></iframe>
                                          </div>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }else{?>
                            
                         <div class="col-md-10 col-md-pull-1 col-md-push-1">
                            <div class="row animatedParent animateOnce"> 
                            
                                
                                
                                <div class="col-md-6 marbot40 flipInY animated">
                                    <div class="clearfix">
                                        <div class="play-button absolute-video">
                                          <div class="embed-responsive embed-responsive-16by9">
                                              <iframe class="embed-responsive-item" src="<?php echo $VPS['video_link'];?> " allowfullscreen></iframe>
                                          </div>
                                       </div>
                                    </div>
                                </div>
                                <div class="col-md-6 marbot40">  
                                    <!--<h2 class="marbot30">What people are saying</h2> -->                       
                                    <?php echo $VPS['description'];?>                                    
                                    <p class="fontresize marbot0">
                                        <span class="color-light bold"><?php echo $VPS['name'];?>  </span> .    
                                        <span><?php echo $VPS['designation'];?> </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                 <?php  } }
                }?>
                
            </div>
        </div>
</section>

<!-- // Video Section
================================================== -->

<!-- Testimonials Tweek Section
================================================== -->

<section class="top-bottom-spacing-full subbanner-pattern-03">
        <div class="container">
            <div class="row">
                <div class="slider-two-item">
                    
                        <!-- Section 1 -->
                        <?php if($patientResult){
                            foreach($patientResult as $p => $testimonial){ ?>
                            <div class="item col-md-12">
                                <div class="panel panel-body panel-dark marbot0"> 
                                    <div class="row">
                                        <div class="col-sm-4 testi-image">
                                            <img src="<?php echo base_url().$testimonial['image'];?>" alt=" " class="thumbnail img-responsive img-circle center-block marbot30-md-xs">
                                        </div> 
                                        <div class="col-sm-8">
                                            <?php echo $testimonial['description'];?> 
                                            <div class="author-info">
                                                <p class="fontresize marbot0">
                                                    <span class="color-light bold"><?php echo $testimonial['name'];?></span> .    
                                                    <span><?php echo $testimonial['designation'];?></span>
                                                </p>
                                            </div>
                                        </div>  
                                    </div>                             
                                </div>
                                </div>
                           <?php }
                        } ?>
                        
                        <!-- // Section 1 -->
                    
                   
                </div>
            </div>
        </div>
</section>

<!-- // Testimonials Tweek Section
================================================== -->

<!-- Services Content
================================================== -->

<section class="top-bottom-spacing grey-bg">
    <div class="container">
        <div class="clearfix marbot20">
            <h3>The type of vision problem</h3>
            <div class="row">
                <div class="col-md-4">
                    <p class="font-resizer">
                        The latest in medical technology in all aspects of eye care - from routine eye exams and refractive surgery to eyeglasses and contact lenses to more specialized eye services.
                    </p>
                </div>
                <div class="col-md-4">
                    <p class="font-resizer">
                        Cornea is the eye’s outermost layer. It is the clear, dome-shaped surface that covers the front of the eye. Glaucoma is slowly damages the eyes and can causes vision loss.
                    </p>
                </div>  
                <div class="col-md-4">
                    <p class="marbot20">
                        We offers a complete range of eye care services including LASIK and PRK refractive surgery, eye exams, vision testing for glasses and contacts.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- // Services Content
================================================== -->