<?php include 'include/header.php';?>
<div class="cart-page">
    <!-- start alert -->
    <div class="alert alert-warning">
        If your travel plans change, we offer last-minute cancellation on all bookings. Cancel up to 24 hours in advance for a full refund. <a href="#">Learn more. </a>
        <i class="fa fa-times"></i>
    </div>
    <!-- end alert -->
    <!-- start content -->
    <div class="container">
        <!-- start empty cart section -->
        <div class="cart-no-count">
            <h1><i class="fa fa-shopping-cart"></i> Your cart is empty</h1>
            <p>Explore amazing attractions & experiences and <a
                    href="<?php echo base_url('things-to-do/search'); ?>">add them to cart</a>.</p>
        </div>
        <!-- end empty cart section -->
        <h2>Shopping cart</h2>
        <div class="row">
            <!-- start left side -->
            <div class="col-md-8 col-12">
                <p class="cart-counter-wrap">We'll hold your spot for
                    <span id="cart-counter">
                        <span id="mnt">59</span> : <span id="sec">00</span></span> minutes</p>
                <div class="cart-outer" id="form_id">
                    <div class="cart-box-item">
                        <div class="cart-box">
                            <ul>
                                <li>
                                    <div class="text-box">
                                        <div class="img-box">
                                            <img src="<?php echo base_url('assets/images/home/things-to-do.png'); ?>"
                                                alt="no image">
                                        </div>
                                        <div class="content-sec">
                                            <h4>Tour Name Here</h4>
                                            <p><img src="assets/images/package.png" alt="package" class="package-image">
                                                Package Type: Bronze</p>
                                            <p><img src="assets/images/date.png" alt="date" /> Tour Date: 02 Apr 2020</p>
                                            <p>
                                                <img src="assets/images/user.png" alt="user" /> 
                                                1 Adult
                                            </p>
                                            <p>Cancel before 8:45 AM on July 1st for a full refund.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="cart-icons">
                                                <a href="#" class="delete-icon" data-toggle="modal" data-target="#cancellation-confirm">
                                                    <img src="assets/images/remove.png" />Delete</a>
                                                <a href="#" class="edit-icon">
                                                    <img src="assets/images/edit.png" alt="edit" /> Edit
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="price">
                                                AED 1,000
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div><!-- cart-box -->
                    </div>
                    <div class="cart-box-item">
                        <div class="cart-box">
                            <ul>
                                <li>
                                    <div class="text-box">
                                        <div class="img-box">
                                            <img src="<?php echo base_url('assets/images/home/things-to-do.png'); ?>"
                                                alt="no image">
                                        </div>
                                        <div class="content-sec">
                                            <h4>Tour Name Here</h4>
                                            <p>
                                                <img src="assets/images/package.png" alt="package"
                                                    class="package-image">
                                                Package Type: Bronze
                                            </p>
                                            <p><img src="assets/images/date.png" alt="date" /> Tour Date: 02 Apr 2020</p>
                                            <p>
                                            <img src="assets/images/user.png" alt="user" />
                                                1 Adult
                                            </p>
                                            <p>Cancel before 8:45 AM on July 1st for a full refund.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="cart-icons">
                                                <a href="#" class="delete-icon" data-toggle="modal" data-target="#cancellation-confirm">
                                                    <img src="assets/images/remove.png" alt="edit" /> Delete</a>
                                                <a href="#" class="edit-icon">
                                                    <img src="assets/images/edit.png" alt="edit" /> Edit
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="price">
                                                AED 1,000
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>

                        </div><!-- cart-box -->
                    </div>
                </div><!-- cart-oute -->
                <div class="total-price">
                    <div class="row">
                        <div class="left-side col-sm-6 col-12">
                            <div class="row">
                                <div class="col-12 toggle-div">
                                    <div class="image">
                                        <img src="assets/images/small-offer.png" alt="promo code" />
                                    </div>
                                    <span>Enter gift or promo code.</span>
                                </div>
                            </div>
                            <div class="input-promo-code">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Enter promo code">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="submit"
                                            id="button-addon2">Send</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right-side col-sm-6 col-12">
                            <div class="row">
                                <div class="col-12">  
                               
                                <h5> <sup>Total Price</sup>AED 3,008
                                    <br/>
                                    <span>No additional fees</span>
                                </h5></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <!-- end left side -->
             <!-- start right side -->
            <div class="col-md-4 col-12">
                <div class="select-pay">
                    <div class="row">
                            <div class="col-md-6">
                                <h6>Total (<span class="total_activity_count">2 Activities</span>)</h6>
                            </div>
                            <div class="col-md-6">
                                <h5>AED <span class="tot_price1"> 2,000</span></h5>
                            </div>
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="col-md-12 cart-btn">
                            <a href="<?php echo base_url('things-to-do/checkout'); ?>"
                                class="more-btn hvr-radial-out">Checkout</a>
                            <a href="<?php echo base_url('things-to-do/search'); ?>"
                                class="more-btn hvr-radial-out btn-light">Explore more activities</a>
                        </div>
                    </div>
                    <div class="create-links">
                        <p><a href="#">Create an account</a> or <a href="#">log in</a></p>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="FAQ">
                    <p>Frequently Asked Questions</p>
                    <hr/>
                    <a href="#" class="show-more">
                        Can I make changes to my booking after I book?
                        <i class="fa fa-angle-down"></i>
                        <div class="more-section">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, placeat est saepe maiores neque porro nam illum nulla? Quas ullam nobis eum. Labore quis quasi temporibus quisquam similique. Quidem, corporis?</p>
                        </div>
                    </a>                    
                    <a href="#" class="show-more">
                         How long are items in my cart saved for me?
                        <i class="fa fa-angle-down"></i>
                        <div class="more-section">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, placeat est saepe maiores neque porro nam illum nulla? Quas ullam nobis eum. Labore quis quasi temporibus quisquam similique. Quidem, corporis?</p>
                        </div>
                    </a>                    
                    <a href="#" class="show-more">
                        Is my payment secure?
                        <i class="fa fa-angle-down"></i>
                        <div class="more-section">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, placeat est saepe maiores neque porro nam illum nulla? Quas ullam nobis eum. Labore quis quasi temporibus quisquam similique. Quidem, corporis?</p>
                        </div>
                    </a>                    
                    <a href="#" class="show-more">
                        Is there a booking fee?
                        <i class="fa fa-angle-down"></i>
                        <div class="more-section">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, placeat est saepe maiores neque porro nam illum nulla? Quas ullam nobis eum. Labore quis quasi temporibus quisquam similique. Quidem, corporis?</p>
                        </div>
                    </a>
                </div>
            </div> 
            <!-- end right side -->
        </div> 
    </div>
</div><!-- cart-page -->
<?php include 'include/activity/recommended-things.php';?>
<?php include 'include/footer.php';?>
<?php include 'custom/cart-custom.php';?>
<?php include 'include/footer-bottom.php';?>
<!-- start delete modal -->
<div class="modal fade" id="cancellation-confirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
       Are you sure to delete ?
      </div>
      <div class="modal-footer">
          <div class="col-12 row">
              <div class="col-6">
                <button type="button" class="col-12 btn btn-danger" data-dismiss="modal">Yes</button>
             </div>
             <div class="col-6">
                <button type="button" class="col-12 btn btn-info"  data-dismiss="modal">Cancel</button>
             </div>
        </div>
      </div>
    </div>
  </div>
<!-- end delete modal -->