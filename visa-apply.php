<?php include 'include/header.php';?>
<!-- start inner banner -->
<div class="inner-banenr" style="background-image:url(<?php echo base_url('assets/'); ?>images/visa-banner.png)">
    <div class="container">
        <h1>Visa Name
            <span>Visa Caption</span></h1>
    </div>
</div>
<!-- end inner banner -->
<div class="tour-details-page visa-apply">
    <div class="container">
        <!-- start left side -->
            <div class="left-side">
                <div class="breadcrumb-tour">
                    <ul>
                        <li>United Arab Emirates</li>
                        <li>Dubai</li>
                        <li><a href="#" target="_blank">UAE Visa</a></li>
                        <li><a href="#" target="_blank">Visa Name</a></li>
                    </ul>
                </div><!-- breadcrumb-tour -->

                <div class="title-sec" id="sticker-titile">
                    <h2>Application Form - Visa</h2>
                </div><!-- title-sec -->

                <div class="content-area">
                    <p>We know this can be a time-consuming process, but we've minimized the amount of information you need
                        to provide to reflect the UAE Immigration requirements.</p>

                    <form name="frm-step1" id="frm-visa-form" method="post"
                        action="<?php echo base_url('Payment/Payfort_Controller/paynow'); ?>" autocomplete="off">

                        <input type="hidden" name="visa_total" value="" />
                        <div class="visa-regi-form visa-search-form checkout-page">
                            <div class="main-outer">
                                <h4>Guarantor Information</h4>
                            </div>
                            <div class="travel-info visa-form-box">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="g_name">Name</label>
                                        <input type="text" id="g_name" name="g_name" value="">

                                    </div>
                                    <div class="col-md-6">
                                        <label>Nationality</label>
                                        <select name="g_nationality" id="g_nationality">
                                            <option style="display:none" disabled selected>Select</option>
                                            <?php foreach($countries as $country){ ?>
                                            <option class="hemant" value="<?php echo $country['country_id']; ?>">
                                                <?php echo $country['country']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="g_email">Email</label>
                                        <input type="email" id="g_email" name="g_email" value="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="g_mobile">Mobile</label>
                                        <input type="text" id="g_mobile" name="g_mobile" value="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="g_relation">Relation between Guarantor & Applicant</label>
                                        <input type="text" id="g_relation" name="g_relation" value="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="g_purpose">Purpose of Visit</label>
                                        <input type="text" id="g_purpose" name="g_purpose" value="">
                                    </div>
                                </div>
                            </div> <!-- traveller-box -->

                            <div class="main-outer">
                                <h4>Payment Type <span class="visa-total">AED 1,000</span></h4>
                                <small><i class="fa fa-lock"></i> Your card details are secured using 2048-bit SSL
                                    encryption.</small>
                            </div>

                            <div class="payment-type">
                                <div class="accordion-outer">
                                    <div class="accordion-payment">
                                        <input type='radio' id="DebitCredit" name="payment-option" value="alternate"
                                            checked />
                                        <label for="DebitCredit">Credit/Debit Card</label>
                                        <div class="img-sec">
                                            <img src="<?php echo base_url('assets/'); ?>images/pay-icon.png" alt="pay-icon">
                                        </div>
                                    </div>
                                    <div class="accordion-content creditcard">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Card Holder Name</label>
                                                <input type="text" placeholder="Name on your card" id="card_holder_name"
                                                    name="name_on_card" class="input-fld">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Credit / Debit Card Number</label>
                                                <input type="text" placeholder="eg: xxxx xxxx xxxx xxxx" id="card_number"
                                                    name="card_number" class="input-fld">
                                            </div>
                                            <div class="col-md-2">
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

                                            <div class="col-md-2">
                                                <label><br /></label>
                                                <select name="exp_year" id="exp_year">
                                                    <?php for($i=date("Y");$i<date("Y")+15 ;$i++){?>
                                                    <option value="<?php echo substr($i,2, 3); ?>"><?php echo $i; ?>
                                                    </option>
                                                    <?php } ?>
                                                </select>
                                            </div>

                                            <div class="col-md-3">
                                                <label>Security code</label>
                                                <input type="text" placeholder="CVV" name="ccv" id="ccv" class="input-fld">
                                            </div>
                                        </div>

                                        <div class="sub-total-sec clearfix">
                                            <button type="submit" class="confirm-btn more-btn hvr-radial-out"><i
                                                    class="fa fa-lock"></i> Confirm & Pay Now</button>
                                        </div>
                                    </div>

                                    <div class="accordion-payment">
                                        <input type="radio" id="paypal" name="payment-option" value="paypal" />
                                        <!--<input type='radio' id='paypal' name='occupation' value='Working' required /> -->
                                        <label for="paypal">PayPal</label>
                                        <div class="img-sec"><img src="<?php echo base_url('assets/'); ?>images/paypal.png"
                                                alt="paypal"></div>
                                    </div>
                                    <div class="accordion-content paypal">
                                        <span id="paypal-pay"></span>
                                    </div>
                                </div><!-- accordion-outer -->
                            </div><!-- Payment Type -->
                        </div>
                    </form>

                </div><!-- content-area -->
                <div class="box-notice">
                    <i class="fa fa-info-circle"></i> <strong>Disclaimer:</strong> Please be informed that the role of
                    Arabia Horizons Tours LLC is limited to application submission only. We are a private agency, not
                    affiliated with the Government of Dubai. Visa Approval / Rejection is under the sole discretion of UAE
                    immigration authorities.
                </div>
            </div>
        <!-- end left side -->
        <!-- start right side -->
            <div class="right-side sidebar">
                <div class="row">
                    <!-- start visa form -->
                    <div class="col-lg-12 col-md-6 col-12">
                        <div class="visa-right book-now-box">
                            <h5>Apply UAE Visa</h5>
                            <form name="frm-visa-right" id="frm-visa-right" method="get"
                                action="<?php echo base_url('uae-visa/apply/'.$visa[0]['visa_id']); ?>">

                                <div class="packages-box">
                                    <label>I'm a citizen of</label>
                                    <select class="package-options" name="nationality">
                                        <option style="display:none" disabled selected>Select</option>
                                        <?php foreach($countries as $country){
                                    if($country['country_id']==$nationality){
                                        echo '<option class="hemant" value="'.$country['country_id'].'" selected>'.$country['country'].'</option>';
                                    }else{
                                        echo '<option class="hemant" value="'.$country['country_id'].'">'.$country['country'].'</option>';
                                    }
                                    } ?>
                                    </select>
                                </div>
                                <div class="packages-box">
                                    <label>Visa Type</label>
                                    <select class="package-options" name="visa_id">
                                        <option style="display:none" disabled selected>Select</option>
                                        <?php foreach($visas as $vi){
                                    if($vi['visa_id']==$visa_id){
                                        echo '<option class="hemant" value="'.$vi['visa_id'].'" selected>'.$vi['visa_name'].'</option>';
                                    }else{
                                        echo '<option class="hemant" value="'.$vi['visa_id'].'">'.$vi['visa_name'].'</option>';
                                    }
                                    } ?>
                                    </select>
                                </div>
                                <div class="packages-box">
                                    <label>No. of applicants</label>
                                    <select class="package-options" name="pax">
                                        <?php
                                    for($p=1;$p<=10;$p++){
                                        if($p==$pax){
                                            echo '<option selected>'.$p.'</option>';
                                        }else{
                                            echo '<option>'.$p.'</option>';
                                        }
                                    }
                                    ?>
                                    </select>
                                </div>
                                <div class="btn-outers">
                                    <button type="submit" form="frm-visa-right" class="book-now-btn hvr-sweep-to-right"
                                        value="Submit">Apply Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end visa form -->
                    <!-- start visa information -->
                    <div class="col-lg-12 col-md-6 col-12">
                        <div class="why-choos  visa-information">
                            <h5>Visa Information</h5>
                            <ul class="visa-info">
                                <li><i class="fa fa-angle-double-right"></i> Type of Visa : <span>Visa Name</span></li>
                                <li><i class="fa fa-angle-double-right"></i> Visa Fee : <span>AED 1,000 / person</span></li>
                                <li><i class="fa fa-angle-double-right"></i> Visa Validity: <span>3 Months</span></li>
                                <li><i class="fa fa-angle-double-right"></i> Stay Validity: <span>30 Days</span></li>
                                <li><i class="fa fa-angle-double-right"></i> Processing Time: <span>1 Day</span></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end visa information -->
                    <!-- start help & support-->
                    <div class="col-lg-12 col-12">
                        <div class="why-choos">
                            <h5>Help & Support</h5>
                            <p>If you need any assistance in regards to your visa application, please call us:</p>
                            <p><b>Phone: +971 4 294 6060</b></p>
                            <p><b>Mobile: +971 (0)50 540 2520</b></p>
                        </div>
                    </div>
                    <!-- end help & support-->
                </div>
            </div>
        <!-- end right-side -->
    </div><!-- container -->
</div><!-- tour-details-page -->
<?php include 'include/our-locations.php';?>
<?php include 'include/footer.php';?>
<?php include 'custom/visa-apply-custom.php';?>
<?php include 'include/footer-bottom.php';?>