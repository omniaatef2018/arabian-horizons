<?php include 'include/header-white.php';?>
<div class="top-search-bar">

</div>
<!--
<div class="StickyFiltterTop">
    <div class="StickyFiltter">
        <div class="container">
            <ul class="menu-slider listing-stickyUL">
                <?php foreach($categories as $category){ ?>
                    <li><a href="<?php echo base_url('activity/category/'.$category['id']); ?>"><span><img src="https://media.arabiagateway.com/categories_icons/<?php echo $category['icon']; ?>" alt="<?php echo $category['slug']; ?>" /></span><?php echo $category['name']; ?></a></li>
                <?php } ?>
            </ul>
        </div>  
    </div>
</div>  -->

<div class="show-listing">
    <div class="container">
        <div class="left-sidebar">
            <div class="fltr-top">
                <p>Filter by <a href="#">Reset all</a></p>
            </div>
            
            <div class="accordion-ftr">
                <div class="accordion-item">
                  <a class="ftr-title active">Categories</a>
                  <div class="content active">
                      <ul class="nested">
                        <li><a class="" href=""><i class="fa fa-square-o"></i> All Activities</a></li>
                        <li><a class="active" href="#"><i class="fa fa-check-square-o"></i> Category Name</a>
							<div class="content active">
								<ul class="nested">
									<li><a class="active" href="#"><i class="fa fa fa-square-o"></i> Sub-Category Name</a></li>
								</ul>
							</div>
						</li>
						<li><a class="" href="#"><i class="fa fa-square-o"></i> Category Name</a>
                      </ul>  
                  </div>
                </div><!-- accordion-item -->
                
                 <div class="accordion-item">
                  <a class="ftr-title active">Your Budget</a>
                  <div class="content active">
                      <div class="range-slider-wrap ">
                          <div id="slider-range"></div>
                          <div class="price-slider-text">
                              <span id="value-min"></span>
                              <span id="value-max"></span>
                          </div>
                        </div>
                  
                  </div>
                </div><!-- accordion-item -->
            </div><!-- accordion-ftr -->
        </div> <!-- left-sidebar -->
        
        <div class="right-side">
            <div class="top-title">
                <h2>Showing 123 things to do in Dubai</h2>
                  <div class="sr-box">
                    <select class="best-reviews-dp" id="sorting">
                    <option value="" selected disabled style="display:none;">Sort By</option>
                    <option value="asc">A-Z</option>
                    <option value="desc">Z-A</option>
                    <option value="lth">Price (Low to High)</option>
                    <option value="htl">Price (High to Low)</option>
                    </select>
                 </div>
            </div>
            
            <div class="listing-box">
                <div class="img-box">
                  <a href="#"><img src="<?php echo base_url('assets/images/no-image.jpg'); ?>" alt=""></a>
                   
                   <div class="offer-box">
                       <span class="spl-offer">Instant Confirmation</span>
					   <span class="top-seller">TOP SELER</span>
					   <span class="spl-offer">SPECIAL OFFER</span>
                    </div>
                </div><!-- img-box -->
                
                <div class="text-box">
                    <h3><a href="#">This is activity name</a>
                    </h3>
                   
                    <div class="review-price">
                        <div class="rating-box">
                            <div class="ratings">
                                <div class="empty-stars"></div>
                                <div class="full-stars" style="width:100%"></div>
                            </div>
                            <p>548 Reviews</p>
                            <p class="available">Available today</p>
                        </div>
                    </div>
                    
                    <div class="text-price">
                        <p class="activity-content-box">This is the description of the activity.......</p>
                        
                        <div class="price-box">
                            <p>From</p>
                            <div class="price">AED 1,000</div>
                        </div>
                    </div>
                    
                    <div class="list-btm">
                        <div class="time"><i class="fa fa-clock-o" aria-hidden="true"></i> Duration: 4 - 6 hours</div>
                        <div class="rt-box">
                            <a href="#" class="book-now-btn">View & Book</a>
                        </div>
                        
                    </div>
                    
                </div><!-- text-box -->
            </div><!-- listing-box -->

            
         <!--   <div class="pagination-outer">
                <ul class="pagination">
                  <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                </ul>
            </div><!-- pagination-outer --> 
            
        </div> <!-- right-side-->   
    </div>
</div><!-- show-listing-->
<?php include 'include/activity/recommended-things.php';?> 
<?php include 'include/footer.php';?>
<?php include 'custom/activities-listing-custom.php';?>
<?php include 'include/footer-bottom.php';?>