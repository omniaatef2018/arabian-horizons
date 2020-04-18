<?php include 'include/header.php';?>
<!-- start inner banner -->
<div class="inner-banenr" style="background-image:url(<?php echo base_url('assets/'); ?>images/visa-banner.png)">
    <div class="container">
        <h1>Visa Name
            <span>Visa Caption</span></h1>
    </div>
</div>
<!-- end inner banner -->
<!-- start tour details page -->
<div class="tour-details-page">
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
                    <h2>UAE Tourist Visa - Visa Name</h2>
                </div><!-- title-sec -->

                <div class="content-area">
                    Visa Description

                    <div class="tour_head1 l-info-pack-days days">
                        <h5>Documentation Required</h5>
                        <p>The supporting documentation that has to be submitted by an applicant is dependent on the Country
                            of Residence.</p>
                        <p>The Mandatory Documents that are required to be submitted are below:</p>
                        <p><strong>Passport</strong>: A coloured scan copy of the passport, both first and last page with
                            minimum 06 months validity. Certain nationalities have important information on the last page of
                            their passport e.g. India.</p>
                        <p><strong>Photograph</strong>: Each applicant needs to submit a clear colour photograph of
                            themselves. The photograph has to be coloured. Black and White copies will not be accepted.</p>
                    </div>

                    <div class="tour_head1 visa-terms">
                        <h5>Terms and conditions for obtaining UAE visa</h5>
                        <ul>
                            <li>Visa applications will only be processed once all the document requirements are completed
                            </li>
                            <li>We use the documents based on the assumption that all documents are valid and original and
                                we do not take nay responsibility if forged / similar documents are submitted for processing
                            </li>
                            <li>All visa applications and charges depend on the nationality of the said passenger</li>
                            <li>We recommend applying you visa atleast 05 - 07 days prior to the scheduled travel dates.
                                DubaiVisa.ae does not take any responsibility incase there may be a delay in the processing
                                of the visa from the Immigration departments.</li>
                            <li>Visa Approval is at sole discretion of the Immigration Officials. DubaiVisa.ae cannot
                                guarantee that all applications will be approved by the immigration department. Once your
                                Visa Application is submitted to Immigration Department, the Visa Application Fee is
                                non-refundable under any circumstances.</li>
                            <li>We recommend that all passengers enter the country within 14 days of the issuance of the
                                visa.</li>
                            <li>Any crimes made during the visit of the traveller sponsored by us will be dealt with the UAE
                                Police Department.</li>
                            <li>Please note that our company is not responsible for any traveller having medical problems.
                                Should you wish to make any travel insurance for the traveller, you may let us know in
                                advance before making the visa.</li>
                            <li>Above mentioned visa charges are excluding any transfer charges / convenience fees if
                                applicable.</li>
                        </ul>
                    </div>
                </div><!-- content-area -->



            </div>
        <!-- end left side  -->
        <!-- start right side  -->
        <div class="right-side sidebar">
            <div class="row">
                <!-- start visa form -->
                <div class="col-lg-12 col-md-6 col-12">
                    <div class="visa-right book-now-box">
                        <h5>Apply UAE Visa</h5>
                        <form name="frm-visa-right" id="frm-visa-right" method="post"
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
                                    <?php foreach($visas as $vi){ ?>
                                    <option class="hemant" value="<?php echo $vi['visa_id']; ?>"><?php echo $vi['visa_name']; ?>
                                    </option>
                                    <?php } ?>
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
                    <div class="why-choos visa-information">
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
        <!-- end right side -->
    </div>
    <!-- container -->
</div>
<!-- end tour-details-page -->
<!-- start best places -->
<div class="best-places inner-rw">
    <div class="container">
        <h4>You might also like...</h4>
        <div class="visa-types">
            <div class="items">
                <div class="box-outer">
                    <a href="<?php echo base_url('uae-visa/'.$visa['visa_id']); ?>" target="_blank">
                        <div class="img-box">
                            <img src="<?php echo base_url('assets/images/home/things-to-do.png'); ?>"
                                alt="things-to-do">
                        </div>
                        <div class="text-box">
                            <div class="title-outer">
                                <h5>Visa Name</h5>
                            </div>
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
                                    <div class="price">AED 1,000</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div> <!-- items -->

            <div class="items">
                <div class="box-outer">
                    <a href="<?php echo base_url('uae-visa/'.$visa['visa_id']); ?>" target="_blank">
                        <div class="img-box">
                            <img src="<?php echo base_url('assets/images/home/things-to-do.png'); ?>"
                                alt="things-to-do">
                        </div>

                        <div class="text-box">
                            <div class="title-outer">
                                <h5>Visa Name</h5>
                            </div>
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
                                    <div class="price">AED 1,000</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div> <!-- items -->

            <div class="items">
                <div class="box-outer">
                    <a href="<?php echo base_url('uae-visa/'.$visa['visa_id']); ?>" target="_blank">
                        <div class="img-box">
                            <img src="<?php echo base_url('assets/images/home/things-to-do.png'); ?>"
                                alt="things-to-do">
                        </div>

                        <div class="text-box">
                            <div class="title-outer">
                                <h5>Visa Name</h5>
                            </div>
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
                                    <div class="price">AED 1,000</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div> <!-- items -->

            <div class="items">
                <div class="box-outer">
                    <a href="<?php echo base_url('uae-visa/'.$visa['visa_id']); ?>" target="_blank">
                        <div class="img-box">
                            <img src="<?php echo base_url('assets/images/home/things-to-do.png'); ?>"
                                alt="things-to-do">
                        </div>

                        <div class="text-box">
                            <div class="title-outer">
                                <h5>Visa Name</h5>
                            </div>
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
                                    <div class="price">AED 1,000</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div> <!-- items -->

        </div><!-- best-place-slider -->
    </div>
</div>
<!-- end best places -->
<?php include 'include/our-locations.php';?>
<?php include 'include/footer.php';?>
<?php include 'custom/visa-details-custom.php';?>
<?php include 'include/footer-bottom.php';?>