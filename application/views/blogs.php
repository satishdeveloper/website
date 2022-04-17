<section class="animatedParent animateOnce subbanner subbanner-image subbanner-pattern-06 subbanner-type-2 subbanner-type-2-btn">
    <div class="container">
        <div class="subbanner-content banner-content">
            <div class="skew-effect fadeInLeft animated">
               News  <span class="fw-normal"> And </span>Health Tips
            </div>
            <ol class="breadcrumb text-left fadeInRight animated">
                <li><a href="<?php echo base_url();?>">Home</a></li>
                <li><a href="#"> Blogs</a></li>
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
        <div class="row animatedParent animateOnce">
            
            <div class="col-md-12 marbot40 fadeInLeft animated">
                <!-- Content -->
                <div class="row clearfix">
                    <?php if($blogResult){
                    foreach($blogResult as $b => $blog){ ?>
                    <div class="col-md-4">
                        <div class="clearfix marbot30">
                            <?php if($blog['youtube_link'] == ''){?>
                            <img src="<?php echo base_url().$blog['blogImage'];?>" alt=" " class="img-responsive">
                            <?php } else{?>
                            <div class="play-button">
                                <a href="<?php echo $blog['youtube_link'];?>" data-toggle="lightbox" data-gallery="accura-video1" data-title="<?php echo $blog['blogTitle'];?>" data-footer="">
                                    <img src="<?php echo base_url().$blog['blogImage'];?>" alt=" " class="img-responsive">
                                </a>
                            </div>
                            <?php } ?>
                            <div class="panel panel-body marbot0">
                                <div class="main-title text-capitalize marbot15"> <?php echo $blog['blogTitle'];?> </div>
                                <p class="fontresize"> <?php echo substr($blog['blogDescription'],0,100);?>...</p>
                                <a href="<?php echo base_url().'blog-detail/'.$blog['blogTag'];?>" class="btn btn-type1-reverse btn-sm">Continue reading</a>
                            </div>
                        </div>
                    </div>
                   <?php } }?>
                
               
                <!-- Content -->
                
               </div> 
                
            </div>

        </div>
    </div>
</section>
