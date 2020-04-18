<?php include 'include/header.php';?>
<div class="home activities-categories">
<!-- start home banner -->
<div class="home-banner" style="background-image:url(<?php echo base_url('assets/'); ?>images/act-ctgry.jpg);">
    <div class="container">
        <div class="outer-box">
            <div class="left-section">
                <h1>Sightseeing</h1>
                <p>Discover and book amazing things to do at exclusive prices</p>
                <div class="tab-section">
                    <div id="parentHorizontalTab">
                        <ul class="resp-tabs-list hor_1">
                            <li><div class="flight"></div><span>Things To Do</span></li>
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
                   <img class="lazy" src="<?php echo base_url('assets/');?>images/placeholder-image-1.png" data-src="<?php echo base_url('assets/'); ?>images/ad-3.jpg" alt="ad-3"></a></div>
            </div>right-section -->
        </div>
    </div>
        <!-- start banner bottom home -->
        <div class="banner-bottom">
            <div class="container">
                <h2>Why Book With Arabia Horizons</h2>
                <div class="inner-wrp">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="inner-section">
                                <span><img src="<?php echo base_url('assets/images/bb01.svg'); ?>" alt="Superior Customer Support" /></span>
                                <h5>Superior Customer <br /> Support</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="inner-section">
                                <span><img src="<?php echo base_url('assets/images/credit-card.png'); ?>"
                                        alt="Fast and Easy Booking" /></span>
                                <h5>Fast and Easy<br /> Booking</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="inner-section">
                                <span><img src="<?php echo base_url('assets/images/bb03.svg'); ?>" alt="Genuine Reviews & Photos" /></span>
                                <h5>Genuine Reviews &<br /> Photos</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="last-item inner-section">
                                <span><img src="<?php echo base_url('assets/images/happy.png'); ?>" alt="No Hidden Fees" /></span>
                                <h5>No Hidden <br />Fees</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end banner bottom home -->
</div>
 <!-- end home-banner -->  
 <!-- start sightseeing-sec -->  
<div class="col-12 sightseeing-sec">
<div class="container">
        <h2>Sightseeing</h2>
        <div class="who-text-outer">
            <div class="who-text">
                <div class="who-desc">
                <p>This is category description</p>
                </div>
            </div>
        <div class="who-more">
            <a style="background:none;" href="javascript:void(0)"></a>
        </div>
    </div>
</div>        
</div>
<!-- end sightseeing-sec -->  
<!-- start sub-categories -->
<!--
<div class="sub-categories">
<div class="container">
    <h2>Sub-categories</h2>
    <ul>
        <?php foreach($subcategories as $sub){ ?>
            <li>
            <a href="#">
                <div class="img-box"> 
                    <img class="lazy" src="<?php echo base_url('assets/'); ?>images/placeholder-image-1.png" data-src="<?php echo base_url('assets/'); ?>images/ml01.jpg" alt="subcategries">
                </div>

                <div class="text-box">
                    <h5><?php echo $sub['name']; ?></h5>
                </div>
            </a>
        </li>
        <?php } ?>
    </ul>
</div>    
</div>-->
<!-- end sub-categories --> 
  
<div class="explore-dubai activites-ed">
<div class="container">
<h2>Sub Category Name</h2>    
    
    <div class="box-outer-wrp">
            <div class="row">
                <!-- start box outer -->
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="box-outer">
                        <div class="img-box">
                            <div class="fav-iocn">
                                <span><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                            </div>
                            <img class="lazy" src="<?php echo base_url('assets/'); ?>images/sm-02.jpg" alt="TOP SELER">
                            <div class="offer-box">
                                <span class="top-seller">TOP SELER</span>
                            </div>    
                        </div>
                        <div class="text-box">
                            <a href="activities-listing.php" target="_blank"><h5>Seaplane Flight from Dubai to Abu Dhabi with Ferrari World Admission Ticket</h5></a>
                            <p class="available">Available Today</p>
                            <div class="review-price">
                                <div class="rating-box">
                                    <div class="ratings">
                                        <div class="empty-stars"></div>
                                        <div class="full-stars" style="width:100%"></div>
                                    </div>
                                <p>458 Reviews</p>
                                </div>
                                <div class="price-box">
                                    <p>From</p>
                                    <div class="price">AED 453<span>AED 1,254</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end box-outer -->
                <!-- start box outer -->
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="box-outer">
                        <div class="img-box">
                            <div class="fav-iocn">
                                <span><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                            </div>
                            <img class="lazy" src="<?php echo base_url('assets/'); ?>images/sm-03.jpg" alt="TOP SELER">
                            <div class="offer-box">
                                <span class="top-seller">TOP SELER</span>
                                <span class="cashback">5% CASHBACK</span>
                            </div>    
                        </div>
                        <div class="text-box">
                            <a href="#" target="_blank"><h5>Abu Dhabi City Tour with Louvre Museum Visit</h5></a>
                            <p class="available">Available today</p>
                            <div class="review-price">
                                <div class="rating-box">
                                    <div class="ratings">
                                        <div class="empty-stars"></div>
                                        <div class="full-stars" style="width:100%"></div>
                                    </div>
                                <p>458 Reviews</p>
                                </div>
                                <div class="price-box">
                                    <p>From</p>
                                    <div class="price">AED 1,253</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end box-outer -->
                <!-- start box outer -->
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="box-outer">
                        <div class="img-box">
                            <div class="fav-iocn">
                                <span><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                            </div>
                            <img class="lazy" src="<?php echo base_url('assets/'); ?>images/sm-04.jpg" alt="SPECIAL OFFER">
                            <div class="offer-box">
                                <span class="spl-offer">SPECIAL OFFER</span>
                            </div>    
                        </div>
                        <div class="text-box">
                            <a href="#" target="_blank"><h5>Heritage Desert Overnight Safari from Dubai with Dinner and Bedouin Breakfast</h5></a>
                            <p class="available">Available Today</p>
                            <div class="review-price">
                                <div class="rating-box">
                                    <div class="ratings">
                                        <div class="empty-stars"></div>
                                        <div class="full-stars" style="width:100%"></div>
                                    </div>
                                <p>458 Reviews</p>
                                </div>
                                <div class="price-box">
                                    <p>From</p>
                                    <div class="price">AED 653</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end box-outer -->
                <!-- start box outer -->
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="box-outer">
                        <div class="img-box">
                            <div class="fav-iocn">
                                <span><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                            </div>
                            <img class="lazy" src="<?php echo base_url('assets/'); ?>images/sm-03.jpg" alt="TOP SELER">
                            <div class="offer-box">
                                <span class="top-seller">TOP SELER</span>
                                <span class="cashback">5% CASHBACK</span>
                            </div>    
                        </div>
                        <div class="text-box">
                            <a href="#" target="_blank"><h5>Abu Dhabi City Tour with Louvre Museum Visit</h5></a>
                            <p class="available">Available today</p>
                            <div class="review-price">
                                <div class="rating-box">
                                    <div class="ratings">
                                        <div class="empty-stars"></div>
                                        <div class="full-stars" style="width:100%"></div>
                                    </div>
                                <p>458 Reviews</p>
                                </div>
                                <div class="price-box">
                                    <p>From</p>
                                    <div class="price">AED 1,253</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end box-outer -->
                <!-- start box outer -->
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="box-outer">
                        <div class="img-box">
                            <div class="fav-iocn">
                                <span><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                            </div>
                            <img class="lazy" src="<?php echo base_url('assets/'); ?>images/sm-04.jpg" alt="SPECIAL OFFER 2">
                            <div class="offer-box">
                                <span class="spl-offer">SPECIAL OFFER</span>
                            </div>    
                        </div>
                        <div class="text-box">
                            <a href="#" target="_blank"><h5>Heritage Desert Overnight Safari from Dubai with Dinner and Bedouin Breakfast</h5></a>
                            <p class="available">Available Today</p>
                            <div class="review-price">
                                <div class="rating-box">
                                    <div class="ratings">
                                        <div class="empty-stars"></div>
                                        <div class="full-stars" style="width:100%"></div>
                                    </div>
                                <p>458 Reviews</p>
                                </div>
                                <div class="price-box">
                                    <p>From</p>
                                    <div class="price">AED 653</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end  box-outer -->
                <!-- start box outer -->
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="box-outer">
                        <div class="img-box">
                            <div class="fav-iocn">
                                <span><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                            </div>
                            <img class="lazy" src="<?php echo base_url('assets/'); ?>images/sm-01.jpg" alt="TOP SELER 2">
                            <div class="offer-box">
                                <span class="top-seller">TOP SELER</span>
                                <span class="cashback">5% CASHBACK</span>
                            </div>    
                        </div>
                        <div class="text-box">
                            <a href="#" target="_blank"><h5>Hajar Mountains Safari Full Day Tour by 4WD with Lunch</h5></a>
                            <p class="available-from">Available from 25 May 2019</p>
                            <div class="review-price">
                                <div class="rating-box">
                                    <div class="ratings">
                                        <div class="empty-stars"></div>
                                        <div class="full-stars" style="width:100%"></div>
                                    </div>
                                <p>458 Reviews</p>
                                </div>
                                <div class="price-box">
                                    <p>From</p>
                                    <div class="price">AED 253<span>AED 1,254</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end box-outer -->
                <!-- start box outer -->
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="box-outer">
                        <div class="img-box">
                            <div class="fav-iocn">
                                <span><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                            </div>
                            <img class="lazy" src="<?php echo base_url('assets/'); ?>images/sm-02.jpg" alt="TOP SELER 3">
                            
                            <div class="offer-box">
                                <span class="top-seller">TOP SELER</span>
                            </div>    
                        </div>
                        <div class="text-box">
                            <a href="#" target="_blank"><h5>Seaplane Flight from Dubai to Abu Dhabi with Ferrari World Admission Ticket</h5></a>
                            <p class="available">Available Today</p>
                            <div class="review-price">
                                <div class="rating-box">
                                    <div class="ratings">
                                        <div class="empty-stars"></div>
                                        <div class="full-stars" style="width:100%"></div>
                                    </div>
                                <p>458 Reviews</p>
                                </div>
                                <div class="price-box">
                                    <p>From</p>
                                    <div class="price">AED 453<span>AED 1,254</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end box-outer -->
                <!-- start box outer -->
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="box-outer">
                        <div class="img-box">
                            <div class="fav-iocn">
                                <span><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                            </div>
                            <img class="lazy" src="<?php echo base_url('assets/'); ?>images/sm-03.jpg" alt="TOP SELER 3">
                            
                            <div class="offer-box">
                                <span class="top-seller">TOP SELER</span>
                                <span class="cashback">5% CASHBACK</span>
                            </div>    
                        </div>
                        <div class="text-box">
                            <a href="#" target="_blank"><h5>Abu Dhabi City Tour with Louvre Museum Visit </h5></a>
                            <p class="available">Available today</p>
                            <div class="review-price">
                                <div class="rating-box">
                                    <div class="ratings">
                                        <div class="empty-stars"></div>
                                        <div class="full-stars" style="width:100%"></div>
                                    </div>
                                <p>458 Reviews</p>
                                </div>
                                <div class="price-box">
                                    <p>From</p>
                                    <div class="price">AED 1,253</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end box-outer -->
                <!-- start box outer -->
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="box-outer">
                        <div class="img-box">
                            <div class="fav-iocn">
                                <span><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                            </div>
                            <img class="lazy" src="<?php echo base_url('assets/'); ?>images/sm-04.jpg" alt="SPECIAL OFFER 5">
                            <div class="offer-box">
                                <span class="spl-offer">SPECIAL OFFER</span>
                            </div>    
                        </div>
                        <div class="text-box">
                            <a href="#" target="_blank"><h5>Heritage Desert Overnight Safari from Dubai with Dinner and Bedouin Breakfast</h5></a>
                            <p class="available">Available Today</p>
                            <div class="review-price">
                                <div class="rating-box">
                                    <div class="ratings">
                                        <div class="empty-stars"></div>
                                        <div class="full-stars" style="width:100%"></div>
                                    </div>
                                <p>458 Reviews</p>
                                </div>

                                <div class="price-box">
                                    <p>From</p>
                                    <div class="price">AED 653</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- end box-outer -->
            </div>
            <!-- start pagination -->
            <div class="pagination">
                <ul>
                    <li><span><i class="fa fa-angle-left" aria-hidden="true"></i></span></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></li>
                </ul>
            </div>
            <!-- end pagination -->
        </div>
        <!-- items -->
    </div><!-- things-dubai-slider -->
</div> <!-- explore-dubai -->
<?php include 'include/footer.php';?>
<?php include 'custom/activities-custom.php';?>
<?php include 'include/footer-bottom.php';?>