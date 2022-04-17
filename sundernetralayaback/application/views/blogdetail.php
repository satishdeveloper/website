

<section class="animatedParent animateOnce subbanner subbanner-image subbanner-pattern-08 subbanner-type-2 subbanner-type-2-btn">
    <div class="container">
        <div class="subbanner-content banner-content">
            <div class="skew-effect fadeInLeft animated">
                <span class="fw-normal">Blog</span> Details
            </div>
            <ol class="breadcrumb text-left fadeInRight animated">
                <li><a href="<?php echo base_url();?>">Home</a></li>
                <li><a href="<?php echo base_url();?>blogs"> Blogs </a></li>
                <li><a href="#"> <?php echo $blogsResult['blogTitle'];?></a></li>
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

<!-- Content 
================================================== -->

<section class="top-bottom-spacing blog grey-bg">
    <div class="container">
        <div class="row marbot10 animatedParent animateOnce">
            
            <div class="col-md-8 fadeInLeft animated">
                <!-- Content -->
                <div class="clearfix">
                    <img src="<?php echo base_url(). $blogsResult['blogDetailImage1'];?>"  alt=" " class="img-responsive">                        
                    <div class="panel panel-body marbot30">
                    	<h3><?php echo $blogsResult['blogTitle'];?> </h3>
                        
                        <?php echo $blogsResult['blogDescription'];?>
                    
                        
                        
                    </div>
                    
                    
                </div>
                
                <!-- Content -->
            </div>
            
			<!-- Sidebar -->
                <div class="col-md-4 marbot30">
                    <div class="panel panel-body panel-grey marbot0">
                        <div class="clearfix">
                            <h3 class="text-center sidebar-heading"> More Blogs </h3>
                            <ul class="list-type1-small fontresize">
                                <?php 
                                if($blogsMResult){
                                    foreach($blogsMResult as $mb => $moreBlog){ ?>
                                        <li><a href="<?php echo base_url().'blog-detail/'.$moreBlog['blogTag'];?>" class="reverse"><?php echo $moreBlog['blogTitle'];?></a></li>
                                    <?php }
                                }
                                ?>
                                
                            </ul>
                        </div>
                        
                    </div>
                    <div class="panel panel-body panel-grey marbot0">
                        <div class="clearfix">
                            <h3 class="text-center sidebar-heading"> Our Services </h3>
                            <ul class="list-type1-small fontresize">
                                <?php 
                                if($servicesResult){
                                    foreach($servicesResult as $s => $service){ ?>
                                        <li><a href="<?php echo base_url().'service-detail/'.$service['tag_url'];?>" class="reverse"><?php echo $service['name'];?></a></li>
                                    <?php }
                                }
                                ?>
                                
                            </ul>
                        </div>
                        
                    </div>
                    
                    
                    <div class="panel panel-body panel-grey marbot0">
                        <div class="clearfix">
                            <h3 class="text-center sidebar-heading"> Our Specialities </h3>
                            <ul class="list-type1-small fontresize">
                                <?php 
                                if($specialitiesResult){
                                    foreach($specialitiesResult as $sp => $speciality){ ?>
                                        <li><a href="<?php echo base_url().'speciality-detail/'.$speciality['tag_url'];?>" class="reverse"><?php echo $speciality['name'];?></a></li>
                                    <?php }
                                }
                                ?>
                                
                            </ul>
                        </div>
                        
                    </div>
                    
                <!-- Sidebar -->
                </div>
            
      </div>
    </div>
</section>

<!-- // Content 
================================================== -->