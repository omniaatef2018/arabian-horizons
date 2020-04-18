<?php include 'include/header.php';?>
<div class="home landing-page">
    <!-- start home banner -->
    <div class="home-banner" style="background-image:url(<?php echo base_url('assets/'); ?>images/landing-page-background.jpg);">
        <div class="container">
            <div class="outer-box">
                <div class="left-section">
                    <h1>Sightseeing</h1>
                    <p>Discover and book amazing things to do at exclusive prices</p>
                    <div class="tab-section">
                        <div id="parentHorizontalTab">
                            <ul class="resp-tabs-list hor_1">
                                <li>
                                    <div class="flight"></div><span>Things To Do</span>
                                </li>
                            </ul>
                            <div class="resp-tabs-container hor_1">
                                <!-- Activities Tab -->
                                <?php include 'include/search-tabs/tab-activities.php';?>
                            </div><!-- resp-tabs-container -->
                        </div>
                    </div><!-- tab-section -->
                </div><!-- left-section -->
                <!-- <div class="right-section">
                    <div class="ad-section"><a href="javascript:void(0);">
                            <img class="lazy" src="<?php echo base_url('assets/');?>images/placeholder-image-1.png"
                                data-src="<?php echo base_url('assets/'); ?>images/ad-3.jpg" alt="ad-3"></a></div>
                </div>right-section -->
            </div>
        </div>
    </div>
    <!-- end home-banner -->
    <!-- start most popular -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Most Popular</h2>
                <!-- start first card -->
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4 image-box">
                            <img src="assets/images/hotels/main-image.jpg" class="card-img" alt="main image">
                            <div class="offer-sec">
                            <span>35% OFF</span>
                        </div>
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <div class="row">
                                 <div class="col-6">
                                    <h3 class="card-title">Dune Buggy Safari</h3>
                                 </div>
                                 <div class="col-6 fav-iocn">
                                    <span>
                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    </span>
                                 </div>
                            </div>
                            <div class="review">
                                <span><i class="fa fa-star"></i>4.9</span>
                                <p>304 Reviews  50K+ Booked</p>
                            </div>
                            <p class="card-text">
                                The dune buggy safari is a truly exciting tour of the Arabian Desert while riding a dune buggy. The experience is an opportunity to fly over high sand dunes along the extraordinary desert terrain.
                            </p>
                            <div class="price">
                                <span>from</span>
                                <p>AED 485</p>
                                <del>AED 45</del>
                            </div>
                            <p class="duration">
                                <small class="text-muted">
                                     <i class="fa fa-clock-o"></i>Duration: 2 - 4 Hours
                                </small>
                                <span class="badge badge-primary">Best seller</span>
                                <span>Available Tomorrow</span>
                            </p>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- end first card -->
                <!-- start second card -->
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4 image-box">
                            <img src="assets/images/hotels/main-image.jpg" class="card-img" alt="main image">
                            <div class="offer-sec">
                            <span>35% OFF</span>
                        </div>
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <div class="row">
                                 <div class="col-6">
                                    <h3 class="card-title">Dune Buggy Safari</h3>
                                 </div>
                                 <div class="col-6 fav-iocn">
                                    <span>
                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    </span>
                                 </div>
                            </div>
                            <div class="review">
                                <span><i class="fa fa-star"></i>4.9</span>
                                <p>304 Reviews  50K+ Booked</p>
                            </div>
                            <p class="card-text">
                                The dune buggy safari is a truly exciting tour of the Arabian Desert while riding a dune buggy. The experience is an opportunity to fly over high sand dunes along the extraordinary desert terrain.
                            </p>
                            <div class="price">
                                <span>from</span>
                                <p>AED 485</p>
                                <del>AED 45</del>
                            </div>
                            <p class="duration">
                                <small class="text-muted">
                                     <i class="fa fa-clock-o"></i>Duration: 2 - 4 Hours
                                </small>
                                <span class="badge badge-primary">Best seller</span>
                                <span>Available Tomorrow</span>
                            </p>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- end second card -->
                <a href="#" class="more-btn hvr-radial-out btn-light">View all Desert Safaris in Dubai</a>
            </div>
        </div>
    </div>
    <!-- end most popular -->
</div>
<?php include 'include/activity/recommended-things.php';?>
<?php include 'include/footer.php';?>
<?php include 'custom/activities-custom.php';?>
<?php include 'include/footer-bottom.php';?>