<div class="content">
    <div class="wrapper"><?php if ($slider) { ?><div class="col-100 floatLft homeSlider">
                <div class="col-100 floatLft bigSlider"><?php foreach ($slider as $key => $row) { ?><div class="item"><img alt="" src="<?php echo base_url(); ?>uploads/slider/<?php echo $row['sliderBigImage']; ?>">
                            <div class="itemCnt">
                                <h1><?php echo $row['sliderTitle']; ?></h1>
                                <p><?php echo $row['sliderDesc']; ?></p><a href="#" class="button">Know More</a>
                            </div>
                        </div><?php } ?></div>
                <div class="thumbSlider"><?php foreach ($slider as $key => $value) { ?><div class="item"><img alt="" src="<?php echo base_url(); ?>uploads/slider/<?php echo $value['sliderThumbImage']; ?>">
                            <div class="scontent">
                                <h4><span><?php echo $value['sliderTitle']; ?></span></h4>
                            </div>
                        </div><?php } ?></div>
            </div><?php }
                            if ($FeaturedShows) { ?><div class="col-100 floatLft featureShow">
                <div class="title">
                    <h1>Featured Shows</h1>
                    <p>Aliquam at sem rhoncus, hendrerit neque eu, pharetra sapien. Aliquam erat volutpat.</p>
                </div>
                <div class="featureCnt">
                    <ul><?php foreach ($FeaturedShows as $key => $value) { ?><li>
                                <div class="imgBx"><img alt="" src="<?php echo base_url(); ?>uploads/our_shows/<?php echo $value['ourshowsImage']; ?>"></div>
                                <h2><?php echo $value['ourshowsTitle']; ?></h2>
                                <p><?php echo $value['showsTime']; ?></p>
                            </li><?php } ?></ul>
                </div>
            </div><?php } ?><?php if ($OurShows) { ?><div class="col-100 floatLft ourShow">
                <div class="title">
                    <h1>Our<br>Shows</h1>
                    <div class="customArrow"><a href="#" class="slidePrev"><img alt="" src="<?php echo base_url(); ?>backendAssets/front-css/images/prevArrow.png"></a><a href="#" class="slideNext"><img alt="" src="<?php echo base_url(); ?>backendAssets/front-css/images/rightArrow.png"></a></div><a href="<?php echo base_url('home/shows'); ?>" class="more">view all</a>
                </div>
                <div class="showCnt">
                    <ul><?php foreach ($OurShows as $key => $value) { ?><li>
                                <div class="imgBx"><img alt="" src="<?php echo base_url(); ?>uploads/our_shows/<?php echo $value['ourshowsImage']; ?>"></div>
                                <div class="cnt">
                                    <h3><?php echo $value['ourshowsTitle']; ?></h3>
                                </div>
                            </li><?php } ?></ul>
                </div>
            </div><?php } ?><div class="col-100 floatLft season"><?php $pageRss = $this->master_model->getSeasonByID(2); ?><div class="title">
                <h1>New Season</h1>
                <h2><?php echo $pageRss->newseasonTitle; ?></h2>
                <p><?php echo $pageRss->sinopsys; ?></p><a href="<?php echo base_url('home/newseason/' . base64_encode($pageRss->seasonImg)); ?>" class="button">Read More</a>
            </div>
            <div class="seasonCnt">
                <div class="imgBx"><img alt="" src="<?php echo base_url(); ?>uploads/newseason/<?php echo $pageRss->seasonImg; ?>"></div>
            </div>
        </div>
        <div class="col-100 floatLft nowplaying">
            <div class="title1">
                <p>On NOW <span>???</span></p>
                <div class="ico"><img alt="" src="<?php echo base_url(); ?>backendAssets/front-css/images/ico_tv.png"></div>
            </div>
            <div class="nowCnt">
                <ul>
                    <li class="active">
                        <div class="time">
                            <h4>10:30 <span>pm</span></h4>
                            <div class="ico"><img alt="" src="<?php echo base_url(); ?>backendAssets/front-css/images/ico_epg.png"></div>
                        </div>
                        <div class="details">
                            <h5>Gold Rush : Season 3</h5>
                            <p>Episode 4 - Parker battles to save his season</p>
                        </div>
                    </li>
                    <li>
                        <div class="time">
                            <h4>10:30 <span>pm</span></h4>
                            <div class="ico"><img alt="" src="<?php echo base_url(); ?>backendAssets/front-css/images/ico_epg.png"></div>
                        </div>
                        <div class="details">
                            <h5>Gold Rush : Season 3</h5>
                            <p>Episode 4 - Parker battles to save his season</p>
                        </div>
                    </li>
                    <li>
                        <div class="time">
                            <h4>10:30 <span>pm</span></h4>
                            <div class="ico"><img alt="" src="<?php echo base_url(); ?>backendAssets/front-css/images/ico_epg.png"></div>
                        </div>
                        <div class="details">
                            <h5>Gold Rush : Season 3</h5>
                            <p>Episode 4 - Parker battles to save his season</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="title2">
                <p>Full<br>Schedule</p>
            </div>
        </div><?php if ($Videos) { ?><div class="col-100 floatLft videos">
                <div class="title">
                    <h1>Videos</h1>
                </div>
                <div class="col-100 floatLft videoSlider"><?php foreach ($Videos as $key => $value) {
                                                                $video_id = explode("?v=", $value['youtubeLink']);
                                                                $video_id = $video_id[1];
                                                                $thumbnail = "http://img.youtube.com/vi/" . $video_id . "/maxresdefault.jpg"; ?><div class="item"><a href="<?php echo $value['youtubeLink']; ?>" class="popup-youtube"><span><img alt="" src="<?php echo base_url(); ?>backendAssets/front-css/images/ico_play.png"> </span><img alt="" src="<?php echo $thumbnail; ?>"></a></div><?php } ?></div><a href="<?php echo base_url('home/videos'); ?>" class="button">VIEW ALL</a>
            </div><?php } ?><div class="col-100 floatLft socialTimeLine">
            <div class="tweetInsta">
                <div class="twitterBx">
                    <div class="title">
                        <h2>Follow Us On</h2>
                        <h3>Discovery Channel IN</h3>
                        <div class="ico"><i aria-hidden="true" class="fa fa-twitter"></i></div>
                    </div>
                    <div class="tweetCnt">
                        <h2>@DiscoveryIN</h2><span>3rd March 2019</span>
                        <p>Let's give humanity another chance to save the animal kingdom! Watch an exclusive premiere of #Terra on 22nd March at 8 PM, only on Animal Planet. Subscribe to The Discovery Pack of all 9 channels at just Rs. 8 per month at <a href="#">http://www.seekhkasafar.com</a> #SafarSeekhKa #DiscoveryPacks</p>
                    </div>
                </div>
                <div class="instaBx">
                    <div class="title">
                        <h2>Follow Us On</h2>
                        <h3>discoverychannelin</h3>
                        <div class="ico"><i aria-hidden="true" class="fa fa-instagram"></i></div>
                    </div>
                    <div class="instaCnt">
                        <div class="imgBx"><img alt="" src="<?php echo base_url(); ?>backendAssets/front-css/images/instaImg.jpg"></div>
                        <div class="imgBx"><img alt="" src="<?php echo base_url(); ?>backendAssets/front-css/images/instaImg.jpg"></div>
                    </div>
                </div>
            </div>
            <div class="faceb"><img alt="" src="<?php echo base_url(); ?>backendAssets/front-css/images/facebook.jpg"></div>
        </div>
    </div>
</div>