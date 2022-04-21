<!-- Banner Section
================================= -->
<section class="animatedParent animateOnce subbanner subbanner-image subbanner-pattern-03 subbanner-type-2 subbanner-type-2-btn">
    <div class="container">
        <div class="subbanner-content banner-content">
            <div class="skew-effect fadeInLeft animated">
                <span class="fw-normal">Our</span> Team
            </div>
            <ol class="breadcrumb text-left fadeInRight animated">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li><a href="#"> About Us </a></li>
                <li><a href="#">Our Team</a></li>
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

<!-- eye Section
================================= -->


<!-- Doctors Section
================================================== -->

<section class="hospital top-bottom-spacing white-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-pull-1 col-md-push-1">
                <div class="row clearfix">
                    <div class="col-md-6 marbot40">
                        <div class="grid image-effect2 text-center">
                            <a href="#">
                                <figure>
                                    <img src="<?php echo base_url(); ?>assets/images/Dr Anita Handore passport photo.jpeg" alt=" " class="img-responsive">
                                    <figcaption><i class="fa flaticon-link-1 gallery-icon transition"></i></figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="panel panel-body marbot0 text-center doctor-details">
                            <h3 class="marbot0">Dr.Anita V. Handore, Ph.D in Microbiology </h3>
                            <p class="fontresize marbot20 color-light"><em><span class="fw-500"> </span></em></p>
                            <ul class="social-icons-simple social-bg-grey clearfix">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="col-md-6 marbot40">
                        <div class="story">
                            <h2 class="marbot20">About Our Director</h2>
                            <p class="lead color-light marbot30">Ph.D in Microbiology,From SPPU, Pune.</p>



                            <p class="fontresize"> Dr.Anita V. Handore is Ph.D in Microbiology, SPPU, Pune. She has masterliness in Research
                                & Development sector including 17 years working experience in diverse sectors with multitasking
                                abilities .Till date, She has greatly contributed pioneering research in Biotechnology,
                                Microbiology, Wine, Agriculture ,Health care and Nutraceutical Sectors .She has credit of one
                                Patent Granted in Biotechnology field. Her next three patents of Biotechnology, Agriculture and
                                Healthcare sectors are under process of filing.
                                There are more than 52 research publications and presentations at reputed International and
                                National research Journals and platforms at her credit. Till date, she has 12 book chapters/books
                                published with world leading publishers. She has been effectively working as, Editor -Guest Editor
                                for International reputed Journals , as well as involved in guiding the masters students of reputed
                                Indian Universities.</p>

                            <!--<img src="<?php echo base_url(); ?>assets/images/sign.png" alt=" "> -->
                        </div>
                    </div>
                    <!-- Content -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- // Doctors Section
================================================== -->

<!-- Doctors List Section
================================= -->

<section class="top-bottom-spacing grey-bg">
    <div class="container">

        <div class="clearfix marbot10 animatedParent animateOnce" data-sequence='250'>
            <div class="row">
                <?php if ($doctorsList) {
                    foreach ($doctorsList as $d => $doctor) {
                        if ($d == 3 || $d == 7) { ?>
            </div>
            <div class="row">
            <?php }
            ?>
            <div class="col-md-4 marbot30 fadeInRight animated" data-id='<?php echo $d + 1; ?>'>
                <div class="text-center">
                    <!--<div class="grid image-effect2">-->
                    <!--    <a href="#">-->
                    <!--        <figure>-->
                    <!--            <img src="<?php echo base_url() . $doctor['image']; ?>" alt=" " class="img-responsive">-->
                    <!--            <figcaption><i class="fa flaticon-link-1 gallery-icon transition"></i></figcaption>-->
                    <!--        </figure>-->
                    <!--    </a>-->
                    <!--</div>-->
                    <div class="panel panel-body marbot0 clearfix doctor-details">
                        <h3 class="marbot0"><?php echo $doctor['name']; ?></h3>
                        <p class="fontresize marbot10 color-light"><em> <span class="fw-500"><?php echo $doctor['designation']; ?></span> </em></p>

                    </div>
                </div>
            </div>
    <?php }
                } ?>

            </div>
        </div>
    </div>
</section>

<!-- // Doctors List Section
================================= -->