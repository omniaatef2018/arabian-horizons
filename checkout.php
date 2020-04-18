<?php include 'include/header.php';?>
<style>
    input:invalid {
        background-color: #fff;
    }
</style>
<div class="alert alert-warning">
        If your travel plans change, we offer last-minute cancellation on all bookings. Cancel up to 24 hours in advance for a full refund. <a href="#">Learn more. </a>
    <i class="fa fa-times"></i>
</div>
<div class="checkout-page">
    <div class="container">
        <!-- start left side -->
        <div class="left-side">
            <div class="alert-error">Payment Error will be here</div>
            <p class="cart-counter-wrap"> We'll hold your spot for <span id="cart-counter">
                    <span id="mnt">59</span> : <span id="sec">00</span></span> minutes</p>

            <div class="main-outer">
                <h1>step1 : Guest Details</h1>
                <hr/>
            </div>
            <div class="travel-info">
                <form method="post" action="<?php echo base_url('activity/guest'); ?>">
                    <!-- start radio inputs -->
                    <div class="row">
                        <div class="col-4">
                            <div class="radio-form">
                                <input type="radio" id="Tourist" name="clientType">
                                <label for="Tourist">Tourist</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="radio-form">
                                <input type="radio" id="Resident" name="clientType">
                                <label for="Resident">Resident</label>
                            </div>
                        </div>
                    </div>  
                    <!-- end radio inputs -->
                    <div class="row">
                        <div class="col-md-2">
                            <div class="outer-secx">
                                <label>Title<b>*</b></label>
                                <select name="title" class="info-title" required>
                                    <option value="Mr."> Mr</option>
                                    <option value="Mrs."> Mrs</option>
                                    <option value="Miss"> Miss</option>
                                    <option value="Ms."> Ms</option>
                                    <option value="Dr."> Dr</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="outer-secx">
                                <label>First Name<b>*</b></label>
                                <input type="text" placeholder="Your First Name" name="first_name"
                                    value="<?php if(!empty($guest_details)){ echo $guest_details['first_name'];} ?>"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="outer-secx">
                                <label>Last Name<b>*</b></label>
                                <input type="text" placeholder="Your Last Name" name="last_name"
                                    value="<?php if(!empty($guest_details)){ echo $guest_details['last_name'];} ?>"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="outer-secx">
                                <label>Email Address<b>*</b></label>
                                <input type="email" placeholder="Voucher will be sent here, make sure it is correct"
                                    value="<?php if(!empty($guest_details)){ echo $guest_details['email'];} ?>"
                                    name="email" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="outer-secx">
                                <label>Mobile<b>*</b></label>
                                <input type="text" placeholder="Phone Number(In case of emergency)" name="mobile"
                                    value="<?php if(!empty($guest_details)){ echo $guest_details['mobile'];} ?>"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="outer-secx">
                                <label>Nationality<b>*</b></label>
                                <select name="nationality" class="country-list" required>
                                    <?php foreach($countries as $country){ ?>
                                    <option value="<?php echo $country['nationality'] ?>"
                                        <?php if(!empty($guest_details)){ if($guest_details['nationality']==$country['nationality']){echo 'selected';}} ?>>
                                        <?php echo $country['nationality'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <!-- <div class="col-md-6">
                            <div class="outer-secx">
                                <label>Visa Status<b>*</b></label>
                                <select name="visa_status" class="country-list" required>
                                    <option value="Tourist"
                                        <?php if(!empty($guest_details)){ if($guest_details['visa_status']=="Tourist"){echo 'selected';}} ?>>
                                        Tourist</option>
                                    <option value="GCC Resident"
                                        <?php if(!empty($guest_details)){ if($guest_details['visa_status']=="GCC Resident"){echo 'selected';}} ?>>
                                        GCC Resident</option>
                                    <option value="UAE Resident"
                                        <?php if(!empty($guest_details)){ if($guest_details['visa_status']=="UAE Resident"){echo 'selected';}} ?>>
                                        UAE Resident</option>
                                </select>
                            </div>
                        </div> -->
                    </div>
                    <hr style="background-color: #d2d2d2;">
                    <div class="tour-location-box">
                        <div class="tour-location-title">
                            <h6>Evening Desert Safari</h6>
                            <p><i class="fa fa-bus"></i> Free transfer is included in this activity</p>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="outer-secx">
                                    <label>Pickup Location<b>*</b></label>
                                    <input type="text" placeholder="Provie your address in order to arrange transfer"
                                        value="" name="pickup_location[]" required>
                                    <input type="hidden" value="" name="tour_booking_id[]">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="outer-secx">
                                    <label>Note</label>
                                    <input type="text" placeholder="Let us know if you have any special requirements"
                                        name="note[]" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7286615.899145397!2d30.8768375!3d26.906099949999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2seg!4v1586087769880!5m2!1sen!2seg" width="100%" height="330px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label class="custom-check">Add address on map
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <hr style="background-color: #d2d2d2;">
                     <!-- single item -->
                     <div class="tour-location-box">
                        <div class="tour-location-title">
                            <h6>Dune Buggy Safari</h6>
                            <p><i class="fa fa-bus"></i> Free transfer is included in this activity</p>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="outer-secx">
                                    <label>Pickup Location<b>*</b></label>
                                    <input type="text" placeholder="Provie your address in order to arrange transfer"
                                        value="" name="pickup_location[]" required>
                                    <input type="hidden" value="" name="tour_booking_id[]">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="outer-secx">
                                    <label>Note</label>
                                    <input type="text" placeholder="Let us know if you have any special requirements"
                                        name="note[]" value="">
                                </div>
                            </div>
                        </div>
                        <div id="map2">
                        <script async defer
                            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDM541_RXCwqkrGcN8DTZOvdxQ5bFpO-Gw&callback=initMap">
                        </script>    
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label class="custom-check">Add address on map
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                     <!-- single item -->
                    <div class="row">
                        <div class="left-info-section col-md-6">
                            Your order will be submitted once you proceed to pay. You can choose your payment method on the next page.
                        </div>
                        <div class="col-md-6">
                            <div class="in-outer">
                                <input type="submit" value="Save and Proceed" class="sub-btn more-btn hvr-radial-out"
                                    name="sub-btn">
                            </div>
                        </div>
                    </div>

                </form>
            </div><!-- travel-info -->
            <div class="payment-section main-outer">
                <h6>step 2 : Enter Payment Details</h6>
                <p><i class="fa fa-lock"></i> Payments are secure and encrypted</p>
            </div>
            <div class="payment-type">
                <div class="accordion-outer">
                    <div class="accordion-payment">
                        <input type='radio' id='DebitCredit' name='occupation' value='Working' required />
                        <label for="DebitCredit">Credit/Debit Card</label>
                        <div class="img-sec">
                            <img src="<?php echo base_url('assets/'); ?>images/pay-icon.png" alt="pay-icon"></div>
                    </div>
                    <div class="accordion-content creditcard">

                        <form id="payment" method="post"
                            action="<?php echo base_url('Payment/Payfort_Controller/paynow'); ?>">

                            <div class="row">
                                <div class="col-md-12">
                                    <label>Card Holder Name</label>
                                    <input type="text" placeholder="Name on your card" id="card_holder_name"
                                        name="name_on_card" class="input-fld">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Credit / Debit Card Number</label>
                                    <input type="text" placeholder="eg: xxxx xxxx xxxx xxxx" id="card_number"
                                        name="card_number" class="input-fld">
                                </div>
                                <div class="col-sm-2">
                                    <label>Expiry Date</label>
                                    <select name="exp_month" id="exp_month">
                                        <option value="01">Jan</option>
                                        <option value="02">Feb</option>
                                        <option value="03">Mar</option>
                                        <option value="04">Apr</option>
                                        <option value="05">May</option>
                                        <option value="06">Jun</option>
                                        <option value="07">Jul</option>
                                        <option value="08">Aug</option>
                                        <option value="09">Sep</option>
                                        <option value="10">Oct</option>
                                        <option value="11">Nov</option>
                                        <option value="12">Dec</option>
                                    </select>
                                </div>

                                <div class="col-sm-2">
                                    <label>Expiry Year</label>
                                    <select name="exp_year" id="exp_year">
                                        <?php for($i=date("Y");$i<date("Y")+15 ;$i++){?>
                                        <option value="<?php echo substr($i,2, 3); ?>"><?php echo $i; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="col-sm-2">
                                    <label>Security code</label>
                                    <input type="password" placeholder="CVV" name="ccv" id="ccv" class="input-fld">
                                </div>
                            </div>

                            <div class="sub-total-sec clearfix">
                                <button type="submit" id="pay" class="confirm-btn more-btn hvr-radial-out"
                                    style="display:block;">Confirm and pay</button>
                            </div>
                        </form>

                    </div>

                    <div class="accordion-payment">
                        <input type='radio' id='paypal' name='occupation' value='Working' required />
                        <label for="paypal">PayPal</label>
                        <div class="img-sec">
                            <img src="<?php echo base_url('assets/'); ?>images/paypal.png" alt="paypal"></div>
                    </div>
                    <div class="accordion-content paypal">
                        <span id="paypal-pay"></span>
                    </div>
                </div><!-- accordion-outer -->

                <div class="ftr-sec">
                    <p><i class="fa fa-lock"></i> Your card details are secured using 2048-bit SSL encryption.</p>
                    <p><i class="fa fa-check-square-o"></i> By clicking Pay Now, you agree that you have read and
                        understood our <a target="_blank" href="<?php echo base_url('terms'); ?>">Terms & Conditions</a>
                    </p>
                </div>

            </div><!-- Payment Type -->
            <!-- start total section -->
            <div class="total-price-checkout">
                <div class="row">
                    <hr style="background-color:#e4e4e4"/>
                    <div class="left-data col-6">
                        <p>Total (2 items)</p>
                    </div>
                    <div class="right-data col-6">
                        <h5>AED 3,008</h5>
                    </div>
                </div>
            <div class="row note">
                <p>By proceeding, you confirm that you accept our<a href="#"> general terms</a> and <a gref="#">privacy policy</a>.</p>
            </div>
            <div class="save-btn col-sm-6">
                <input type="submit" value="Save and Proceed" class="sub-btn more-btn hvr-radial-out" name="sub-btn">
            </div>
            </div>
            <!-- end total section -->
        </div>
        <!--end left-side -->
        <!--end right-side -->
        <div class="right-side">
            <div class="select-items">
                <div class="content-area">
                    <h5>Evening Desert Safari</h5>
                    <i class="fa fa-times" data-toggle="modal" data-target="#cancellation-confirm"></i>
                    <p>Shared Arabian Dunes Safari - Sharing without Dinner</p>

                    <div class="item-desc">
                        <img src="assets/images/date.png"/>
                        02 apr
                    </div>
                    <div class="row item">
                        <div class="col-md-6">
                           <img src="assets/images/user.png"/> 
                           334
                        </div>
                        <div class="col-md-6">
                            <span class="float-right">AED 700</span>
                        </div>
                    </div> 
                   <div class="row item">
                        <div class="left-data-item col-md-6">
                           total
                        </div>
                        <div class="right-data-item col-md-6">
                            <span class="float-right">AED 700</span>
                        </div>
                    </div>
                    <hr style="background-color:#e3e4e7"/>
                </div>
                <div class="content-area">
                    <h5>Evening Desert Safari</h5>
                    <i class="fa fa-times"  data-toggle="modal" data-target="#cancellation-confirm"></i>
                    <p>Shared Arabian Dunes Safari - Sharing without Dinner</p>

                    <div class="item-desc">
                        <img src="assets/images/date.png"/>
                        02 apr
                    </div>
                    <div class="row item">
                        <div class="col-md-6">
                           <img src="assets/images/user.png"/> 
                           334
                        </div>
                        <div class="col-md-6">
                            <span class="float-right">AED 700</span>
                        </div>
                    </div> 
                   <div class="row item">
                        <div class="col-md-6">
                           total
                        </div>
                        <div class="col-md-6">
                            <span class="float-right">AED 700</span>
                        </div>
                    </div>
                    <hr style="background-color:#e3e4e7"/>
                </div>
                <div class="row">
                <div class="col-12">
                    <div class="toggle-div">
                        <div class="image">
                            <img src="assets/images/small-offer.png" alt="promo code">
                        </div>
                        <span>Enter gift or promo code.</span>
                    </div>
                    <div class="input-promo-code">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Enter promo code">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <!-- total amount -->
                <div class="total-amout">
                <div class="price">
                    <p>Total (2 items)<b>AED 2,000</b></p>
                </div>
            </div>
            </div><!-- select-items -->
            <div class="total-price-checkout">
                <div class="row note">
                <p>By proceeding, you confirm that you accept our<a href="#"> general terms</a> and <a gref="#">privacy policy</a>.</p>
                </div>
                <div class="save-btn col-12">
                    <input type="submit" value="Proceed to Payment" class="sub-btn more-btn hvr-radial-out" name="sub-btn">
                 </div>
            </div>
        </div>
        <!-- right-side -->
    </div>
</div><!-- checkout-page -->
<?php include 'include/activity/recommended-things.php';?>
<?php include 'include/footer.php';?>
<?php include 'custom/checkout-custom.php';?>
<?php include 'include/footer-bottom.php';?>
<!-- start cancellation modal -->
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
<!-- end cancellation modal -->