<?php include 'include/header.php';?>

<!-- start banner -->
<div class="inner-banenr"
    style="background-image:url(<?php echo base_url('assets/'); ?>images/careers/career-banner.png)">
    <div class="container">
        <h1>Careers at Arabia Horizons
            <span>Let's change how the world travels together.</span></h1>
    </div>
</div>
<!-- end banner -->
<!-- start why join us -->
<div class="why-join-wrap careers image-blocks-wrap">
    <div class="container">
        <div class="aniview" data-av-animation="fadeInUp">
            <h2>Why Join Arabia Horizons</h2>
            <p class="join-desc">We believe in Teamwork and everything in our company reflects that. Arabia Horizons is
                not a traditional company you work with. We have a very open and flexible culture where team members
                continually support each other to grow. The best part of working with us is that you get the chance to
                try the best activities in Dubai for FREE!!!!</p>
        </div>
        <div class="row careers-image-block">
            <div class="image-block col-lg-3 col-sm-6 col-12">
                <div class="image-block-inner">
                    <div class="ib-image">
                        <img class="lazy" src="https://yallatrips.com/AHT/assets/images/ib-1.jpg"
                            alt="fast growing team image">
                    </div>
                </div>
            </div>
            <div class="image-block col-lg-3 col-sm-6 col-12">
                <div class="image-block-inner">
                    <div class="ib-text">
                        <div class="ib-icon">
                            <img class="lazy" src="https://yallatrips.com/AHT/assets/images/ib-icon1.svg"
                                alt="work team image"></div>
                        <h6>Fast-growing company</h6>
                        <p>Transforming from being a small startup with a team of 2, to become among the top travel and
                            tourism in Dubai with a team of more than 110 members.</p>
                    </div>
                    <div class="ib-image">
                        <img class="lazy" src="https://yallatrips.com/AHT/assets/images/ib-2.jpg"
                            alt="team meeting image">
                    </div>
                </div>
            </div>
            <div class="image-block col-lg-3 col-sm-6 col-12">
                <div class="image-block-inner">
                    <div class="ib-image">
                        <img class="lazy" src="https://yallatrips.com/AHT/assets/images/ib-3.jpg"
                            alt="healthy environment image">
                    </div>
                </div>
            </div>
            <div class="image-block col-lg-3 col-sm-6 col-12">
                <div class="image-block-inner">
                    <div class="ib-image">
                        <img class="lazy" src="https://yallatrips.com/AHT/assets/images/ib-4.jpg"
                            alt="award icon image">
                    </div>
                    <div class="ib-text">
                        <div class="ib-icon">
                            <img class="lazy" src="https://yallatrips.com/AHT/assets/images/ib-icon2.svg"
                                alt="award team image"></div>
                        <h6>Award-Winning Company</h6>
                        <p>At Arabia Horizons, we are being awarded by both our customers and our suppliers which
                            reflects our business excellence.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end why join us -->
<!-- start apply form -->
<div class="openings-wrap careers">
    <div class="container">
        <h4>Full Stack</h4>
        <h6>Development - Full Time - Developer</h6>
        <p><i class="fa fa-map-marker"></i> Dubai</p>

        <div class="careers-text row">
            <div class="col-lg-6 col-12">
                Job description here
            </div>
            <!-- end job description -->
            <div id="applyform" class="col-lg-6 col-12 careers-form">
                <form class="application-form" method="post" action="<?php echo base_url('apply'); ?>"
                    enctype="multipart/form-data">
                    <h6>Application Form</h6>
                    <div class="alert-success">Success</div>
                    <ul class="alert-error">
                        <li>Error</li>
                    </ul>
                    <ul>
                        <li>
                            <label>Name*</label>
                            <input type="text" name="name" placeholder="Your Name">
                        </li>
                        <li>
                            <label>Email*</label>
                            <input type="email" name="email" placeholder="Your email">
                        </li>
                        <li>
                            <label>Phone Number*</label>
                            <input type="text" name="phone" placeholder="Phone">
                        </li>
                        <li>
                            <label>Resume*</label>
                            <input name="resume" type="file" placeholder="Your Resume (PDF / DOC files only)"
                                accept=".doc, .docx, .pdf" />
                        </li>
                        <li>
                            <div class="captcha">
                                <div class="g-recaptcha" data-sitekey="6Ldh0KgUAAAAAJWL_wfGjeWsjYmBAv2K79LkkikG"></div>
                            </div>

                            <input type="submit" value="Submit Application" class="inp-btn">
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end apply form -->
<?php include 'include/footer.php';?>
<?php include 'custom/career-custom.php';?>
<?php include 'include/footer-bottom.php';?>