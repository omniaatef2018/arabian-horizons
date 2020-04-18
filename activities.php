<?php include 'include/header.php';?>
<?php include 'include/activity/activity-home-banner.php';?>
<?php include 'include/activity/top-10-things.php';?>
<?php include 'include/posts-from-blog.php';?>
<div class="explore-dubai activites-ed">
    <div class="container">
        <h1>Things to do</h1>
        <!--   <form class="category-filter" method="get">  
            <div class="input-box">
                <div class="outer-input">  
                    <span class="fix-location">Location</span> 
                    <p class="fix-place"><span>Dubai</span></p>
                </div>
            </div>
            <div class="input-box">
                <div class="selectDp">
                    <div class="clgry-sec">Categories</div>
                    <div class="selected-ctgry">
                        <span>Select one or more categories</span>
                    </div>
                </div>
                <ul class="accounts select-drop"> 
                <?php foreach($categories as $category){ ?>
                    <li><label><input type="checkbox" value="<?php echo $category['name']; ?>"/><?php echo $category['name']; ?></label>
                    <ul class="subaccounts">
                        <?php foreach($controller->get_subcategories_by_category_id($category['id']) as $subcategory){ ?>
                        <li><label><input type="checkbox" value="<?php echo $subcategory['name']; ?>"/> <?php echo $subcategory['name']; ?></label></li>
                        <?php } ?>
                    </ul>
                    </li>
                    <?php } ?>
                    <a href="javascript:void(0)" class="slt-btn">Done</a>
                </ul>
                
             </div>
        
            <div class="input-box">
                <span class="date-arrow"><input readonly type='text' class='Availability' placeholder="Availability"></span>
            </div>
            <div class="input-box">
                <span class="price-ftr">Price range</span>
                   <div class="range-slider-wrap">
                      <div class="">
                          <span id="value-min"></span> to 
                          <span id="value-max"></span>
                      </div>

                      <div id="slider-range"></div>
                       
                       <a href="javascript:void(0)" class="ok-btn">Done</a>
                    </div>
            </div>
            <div class="input-box">
                <select  data-placeholder="Enter City Name" class="sort-by">
                    <option class="hemant" selected disabled value="saab">Sort By:</option>
                    <option value="1"> Most Popular</option>
                    <option value="2">Best Reviewed</option>
                    <option value="3">Price (Low to high)</option>
                    <option value="4">Recently Added</option>
                    <option value="5">Recommended by Arabia Horizons</option>
                </select>
            </div>
            <div class="input-box">
                <input type="submit" class="filter-sr-btn" value="Search">
            </div>
        </form> -->
        <div class="box-outer-wrp">
            <div class="row">
                <!-- start box outer -->
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="box-outer">
                        <div class="box-inner">
                            <div class="img-box">
                                <div class="fav-iocn">
                                    <span><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                                </div>
                                <a href="<?php echo base_url('activity.php'); ?>"  target="_blank">
                                <img class="lazy" src="<?php echo base_url('assets/images/no-image.jpg'); ?>"
                                        data-src="<?php echo base_url('assets/images/no-image.jpg'); ?>" alt="offer3 ">
                                </a>
                                <div class="offer-box">
                                    <span class="spl-offer">Instant Confirmation</span>
                                </div>
                                <!--<div class="offer-box">
                                <span class="top-seller">TOP SELER</span>
                                <span class="cashback">5% CASHBACK</span>
                                <span class="spl-offer">SPECIAL OFFER</span>
                            </div>-->
                            </div>
                            <div class="text-box">
                                <a href="<?php echo base_url('activity.php'); ?>"  target="_blank">
                                    <h5>Dubai Evening Safari</h5>
                                </a>
                                <!--   <?php if(strpos($activity['operation_days'], date("D")) !== false || $activity['operation_days']=="All Days"){ ?>
                                <p class="available">Available today</p>
                            <?php }else{ ?>
                                <p class="available">&nbsp;</p>
                            <?php } ?> -->
                                <div class="review-price">
                                    <div class="rating-box">
                                        <div class="ratings">
                                            <div class="empty-stars"></div>
                                            <div class="full-stars" style="width:100%"></div>
                                        </div>
                                        <p>1000 Reviews</p>
                                    </div>
                                    <div class="price-box">
                                        <p>From</p>
                                        <div class="price">
                                            AED 100
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- box-inner -->
                    </div>
                </div>
                <!-- end box-outer -->
                <!-- start box-outer -->
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="box-outer">
                        <div class="box-inner">
                            <div class="img-box">
                                <div class="fav-iocn">
                                    <span><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                                </div>
                                <a href="<?php echo base_url('activity.php'); ?>"  target="_blank">
                                    <img class="lazy" src="<?php echo base_url('assets/images/no-image.jpg'); ?>"
                                        data-src="<?php echo base_url('assets/images/no-image.jpg'); ?>" alt="offer 2">
                                </a>
                                <div class="offer-box">
                                    <span class="spl-offer">Instant Confirmation</span>
                                </div>
                                <!--<div class="offer-box">
                                <span class="top-seller">TOP SELER</span>
                                <span class="cashback">5% CASHBACK</span>
                                <span class="spl-offer">SPECIAL OFFER</span>
                            </div>-->
                            </div>

                            <div class="text-box">
                                <a href="<?php echo base_url('activity.php'); ?>"  target="_blank">
                                    <h5>Dubai Evening Safari</h5>
                                </a>

                                <!--   <?php if(strpos($activity['operation_days'], date("D")) !== false || $activity['operation_days']=="All Days"){ ?>
                                <p class="available">Available today</p>
                            <?php }else{ ?>
                                <p class="available">&nbsp;</p>
                            <?php } ?> -->

                                <div class="review-price">

                                    <div class="rating-box">
                                        <div class="ratings">
                                            <div class="empty-stars"></div>
                                            <div class="full-stars" style="width:100%"></div>
                                        </div>
                                        <p>1000 Reviews</p>
                                    </div>


                                    <div class="price-box">
                                        <p>From</p>
                                        <div class="price">
                                            AED 100
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- box-inner -->
                    </div>
                </div>
                <!-- end box-outer -->
                <!-- start box-outer -->
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="box-outer">
                        <div class="box-inner">
                            <div class="img-box">
                                <div class="fav-iocn">
                                    <span><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                                </div>
                                <a href="<?php echo base_url('activity.php'); ?>"  target="_blank">
                                <img class="lazy"  src="<?php echo base_url('assets/images/no-image.jpg'); ?>"
                                        data-src="<?php echo base_url('assets/images/no-image.jpg'); ?>" alt="offer 1"></a>

                                <div class="offer-box">
                                    <span class="spl-offer">Instant Confirmation</span>
                                </div>
                                <!--<div class="offer-box">
                                <span class="top-seller">TOP SELER</span>
                                <span class="cashback">5% CASHBACK</span>
                                <span class="spl-offer">SPECIAL OFFER</span>
                            </div>-->
                            </div>

                            <div class="text-box">
                                <a href="<?php echo base_url('activity.php'); ?>"  target="_blank">
                                    <h5>Dubai Evening Safari</h5>
                                </a>

                                <!--   <?php if(strpos($activity['operation_days'], date("D")) !== false || $activity['operation_days']=="All Days"){ ?>
                                <p class="available">Available today</p>
                            <?php }else{ ?>
                                <p class="available">&nbsp;</p>
                            <?php } ?> -->

                                <div class="review-price">

                                    <div class="rating-box">
                                        <div class="ratings">
                                            <div class="empty-stars"></div>
                                            <div class="full-stars" style="width:100%"></div>
                                        </div>
                                        <p>1000 Reviews</p>
                                    </div>


                                    <div class="price-box">
                                        <p>From</p>
                                        <div class="price">
                                            AED 100
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- box-inner -->
                    </div>
                </div>
                <!-- end box-outer -->
            </div>
        </div>
        <!-- end box-outer-wrap -->
        <a href="<?php echo base_url('search.php'); ?>" class="more-btn hvr-radial-out"  target="_blank">Explore more</a>
    </div><!-- things-dubai-slider -->
</div> <!-- explore-dubai -->
<?php include 'include/reviews.php';?>
<?php include 'include/our-partners.php';?>
<?php include 'include/activity/dubai-city.php';?>
<?php include 'include/our-locations.php';?>
<?php include 'include/footer.php';?>
<?php include 'custom/activities-custom.php';?>
<?php include 'include/footer-bottom.php';?>