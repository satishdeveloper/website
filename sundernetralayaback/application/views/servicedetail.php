<!-- Banner Section
================================= -->

<section class="animatedParent animateOnce subbanner subbanner-image subbanner-pattern-06 subbanner-type-2 subbanner-type-2-btn">
    	<div class="container">
        	<div class="subbanner-content banner-content">
            	<div class="skew-effect fadeInLeft animated">
                   	<span class="fw-normal">Service</span> Details
				</div>
                <ol class="breadcrumb text-left fadeInRight animated">
                    <li><a href="<?php echo base_url();?>">Home</a></li>
                    <li><a href="#"> Service </a></li>
                    <li><a href="#"> <?php echo $servicesResult['name'];?> </a></li>
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
<!--<section class="top-bottom-spacing grey-bg">
    <div class="container">
    	<h1 class="text-center">
            <span class="fw-normal"><?php echo $servicesResult['name'];?>  </span>
        </h1>
        
    </div>
</section>
-->
<!-- // Services Section
================================================== -->

<!--  Services Content Section
================================================== -->
<section class="top-bottom-spacing blog grey-bg">
    <div class="container">
        <div class="row marbot10 animatedParent animateOnce">
            
            <div class="col-md-6 fadeInLeft animated">
                <!-- Content -->
                <div class="clearfix">
                    <img src="<?php echo base_url().$servicesResult['image_url'];?>"  alt=" " class="img-responsive">                        
                    
                <!-- Content -->
            </div>
            
			
      </div>
             <div class="col-md-6 fadeInLeft animated">
                <!-- Content -->
                <div class="clearfix">
                    <div class="panel panel-body marbot30">
                        <h1><?php echo $servicesResult['name'];?></h1>
                    	<?php echo $servicesResult['synopsis'];?>
                    </div>
                    
                    
                <!-- Content -->
            </div>
            
			
      </div>
    </div>
</section>
<!-- // Services Content Section
================================================== -->

<!--  Services Content Section
================================================== -->
<section class="content-with-sidebar top-bottom-spacing white-bg">
	<div class="container">
    	<div class="panel panel-body marbot30">
                        <div class="row clearfix">
                                <div class="col-md-12 marbot30-md-xs">
                                    
                                    <?php echo $servicesResult['description'];?>
                                
                                    <h4><?php echo $servicesResult['utilities_heading'];?></h4>
                                    
                                    <div class="panel-group accordion accordion-type1" id="accordion-commercial">
                                <!-- Toggle Section 1 -->
                                <?php if($servicesUtilities){
                                    foreach($servicesUtilities as $su => $utility){ ?>
                                    
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <a class="panel-title accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-commercial" href="#accordion-commercial<?php echo $su;?>">
                                            <?php echo $utility['title'];?>
                                          </a>                                </div>
                                        <div id="accordion-commercial<?php echo $su;?>" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p class="fontresize">
                                                    <?php echo $utility['description'];?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }
                                } ?>
                                
                                </div>
                            </div>
                        
                    </div>
    </div>
</section>

<!-- // Services Content Section
================================================== -->