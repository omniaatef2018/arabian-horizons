<?php include 'include/header.php';?>

<script>
    var res = "";

    var verifyCallback = function (response) {
        res = response;
    };

    var resetResponse = function (response) {
        res = '';
    };

    function verifyForm() {
        if (res == "") {
            alert('Invalid Re-captcha answer');
        } else {
            $('#sub-contact').submit();
        }
    }

    var onloadCallback = function () {
        grecaptcha.render('contact_form', {
            'sitekey': '6LdMCckUAAAAAL9lhksyW9oYEZfZCtC6CGpfLQI-',
            'callback': verifyCallback,
            'expired-callback': resetResponse,
            'error-callback': resetResponse
        });
    };
</script>
<!-- start inner banner -->
<div class="inner-banenr" style="background-image:url(<?php echo base_url('assets/'); ?>images/contact/main-image.jpg)">
    <div class="container">
        <h1>Contact us <span>Any Question? Please Contact us,<br /> We're usually pretty quick.</span></h1>
    </div>
</div>
<!-- end inner banner -->
<!-- start contact section -->
<div class="contact-section">
    <div class="container">
        <div class="row">
            <!-- start left section -->
            <div class="col-lg-6 col-sm-12">
                <div class="left-sec">
                    <form class="contact-form" id="sub-contact" method="post"
                        action="<?php echo base_url('Home/send'); ?>">
                        <h6>Send us a Message</h6>

                        <?php if(isset($success)){ ?>
                        <div class="alert-success"><?php echo $success; ?></div>
                        <?php } ?>

                        <?php if(isset($error)){ ?>
                        <ul class="alert-error">
                            <?php foreach($error as $err){ ?>
                            <li><?php echo $err; ?></li>
                            <?php } ?>
                        </ul>
                        <?php } ?>
                        <ul>
                            <li>
                                <label>Name</label>
                                <input type="text" name="name" placeholder="Your Name"
                                    style="background-color: #f2f2f2;" required>
                            </li>
                            <li>
                                <label>Inquiry topic</label>
                                <input type="text" name="topic" placeholder="Select inquiry topic"
                                    style="background-color: #f2f2f2;" required>
                            </li>
                            <li>
                                <label>Email</label>
                                <input type="email" name="email" placeholder="Your email"
                                    style="background-color: #f2f2f2;" required>
                                <input type="hidden" name="client_ip" value="<?php echo $client_ip; ?>">
                            </li>


                            <li>
                                <label>Phone Number</label>
                                <input type="text" name="phone" placeholder="Phone" style="background-color: #f2f2f2;"
                                    required>
                            </li>

                            <li>
                                <label>Message</label>
                                <textarea name="message" placeholder="Enter..." style="background-color: #f2f2f2;"
                                    required></textarea>
                            </li>

                            <li>
                                <div class="contact-recaptcha" id="contact_form"></div>
                                <a href="javascript:void(0)" onclick="verifyForm()" class="inp-btn">Send Message</a>
                            </li>

                        </ul>

                    </form>
                    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async
                        defer>
                    </script>
                </div>
            </div>
            <!-- end left section -->
            <!-- start  right section -->
            <div class="col-lg-6 col-sm-12">
                <div class="right-sec">
                    <h5><span>Arabia Horizons</span> team provides one-stop travel booking services in 9 languages
                        through our
                        shops, kiosks, website and mobile app.</h5>

                    <div class="col-ms-box">
                        <div class="box">
                            <h6>For Reservations:</h6>
                            <a href="tel:97142946060">Tel: (+971-4) 294 6060</a>
                            <a href="tel:97143882244">Tel: (+971-4) 388 2244</a>
                            <a href="tel:971505402520">Mob: +971 (0) 50 540 2520</a>
                            <a href="tel:971557974121">Mob: +971 (0) 55 797 4121</a>

                        </div>
                        <div class="box">
                            <h6>For Corporate/Group bookings:</h6>
                            <a href="tel:9710529717425">Mob: +971 (0) 52 971 7425</a>
                        </div>
                    </div>
                    <div class="col-ms-box">
                        <!-- <div class="box">
                    <h6>Phone</h6>
                    <a href="tel:1230988754">(123) 098-87-54</a>
                    <a href="tel:1230744354">(123) 098-87-54</a>
                </div> -->
                        <!-- start follow us -->
                        <div class="box">
                            <h6>Follow us</h6>
                            <ul>
                                <li>
                                    <a target="_blank" rel="nofollow" href="<?php echo $facebook; ?>"
                                        class="fb hvr-float-shadow">
                                        <i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a target="_blank" rel="nofollow" href="<?php echo $twitter; ?>"
                                        class="tw hvr-float-shadow">
                                        <i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a target="_blank" rel="nofollow" href="<?php echo $linkedin; ?>"
                                        class="ink hvr-float-shadow">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a target="_blank" rel="nofollow" href="<?php echo $pinterest; ?>"
                                        class="pt hvr-float-shadow">
                                        <i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a target="_blank" rel="nofollow" href="<?php echo $instagram; ?>"
                                        class="inst hvr-float-shadow">
                                        <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!-- end follow us  -->
                    </div>

                </div>
            </div>
            <!-- end right section -->
        </div>
    </div>
</div>
<!-- end contact section -->
<?php include 'include/our-locations.php';?>
<?php include 'include/footer.php';?>
<?php include 'custom/contact-custom.php';?>
<?php include 'include/footer-bottom.php';?>