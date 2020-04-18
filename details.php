<?php include 'include/header.php';?>
<div class="StickyMenuDetails">
    <div class="container">
        <div id="StickyMenuD">
            <ul class="menu-slider">
                <li><a href="#Highlights">Highlights</a></li>
                <li><a href="#Description">Description</a></li>
                <li><a href="#Itinerary"> Itinerary</a></li>
                <li><a href="#Included">Included</a></li>
                <li><a href="#Instructions">Instructions</a></li>
            </ul>
        </div>  
    </div>
</div> 
<div class="tour-details-page">
    <div class="container">
        <div class="left-side">
            <div class="tour-slider">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" data-interval="false">
                <ol class="carousel-indicators">
                    <i class="fa fa-play active"  data-target="#carouselExampleCaptions" data-slide-to="0" ></i>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item  active">
                        <div class="wrapper">
                        <a class="popup-youtube-tour" href="http://www.youtube.com/watch?v=0O2aH4XLbto">
                            <div class="video-popup-icon">
                                <img src="<?php echo base_url('assets/images/bj.jpg'); ?>" alt="">
                            </div>
                        </a> 
                        </div>  
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                    <img src="assets/images/main-banner.jpg" class="d-block w-100" alt="background">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                </div>
                <!-- <div class="items">
                    <div class="img-box">
                        <a class="popup-youtube-tour" href="http://www.youtube.com/watch?v=0O2aH4XLbto">
                          <div class="video-popup-icon"><img src="<?php echo base_url('assets/images/bj.jpg'); ?>" alt=""></div>
                        </a>    
                    </div>
                </div>items -->
                
                <!-- <div class="items">
                    <div class="img-box">
                        <img src="images/bj.jpg" alt="">
                    </div>
                </div>items -->
            </div><!-- tour-slider -->
            
            <div class="breadcrumb-tour">
                <ul>
                    <li><a href="#">United Arab Emirates</a></li>
                    <li><a href="#">Dubai</a></li>
                    <li>Burj Khalifa</li>
                </ul>
            </div><!-- breadcrumb-tour -->
            
            <div class="title-sec" id="sticker-titile">
                <h1>Burj Khalifa Tickets: Level 124 & 125</h1>
                <div class="rating-box">
                    <div class="ratings">
                        <div class="fa fa-star"></div>
                        <div class="fa fa-star"></div>
                        <div class="fa fa-star"></div>
                        <div class="fa fa-star"></div>
                        <div class="fa fa-star"></div>
                    </div>
                   <p><b>4.9</b></p>
                   <span><b>175 Reviews </b> |  230+ Booked</span>
                </div><!-- rating-box--> 
                <div class="fav-iocn">
                    <span><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                </div>
                
            <div class="sticky-sec">
                <ul>
                    <li>
                        <a href="#">
                            <span>
                            <img class="lazy" src="<?php echo base_url('assets/images/instant.png'); ?>"  alt="Instant Confirmation"></span><p>Instant Confirmation</p>
                        </a>
                    </li>
                    <li><a href="#"><span><img class="lazy" src="<?php echo base_url('assets/images/bus.png'); ?>" alt="Hotel Pick Up"></span><p>Hotel Pick Up</p></a></li>
                    <li><a href="#"><span><img class="lazy" src="<?php echo base_url('assets/images/group.png'); ?>"  alt="Join in Group"></span><p> Join in Group</p></a></li>
                    <li><a href="#"><span><img class="lazy" src="<?php echo base_url('assets/images/duration.png'); ?>"  alt="Duration: 7 Hours"></span><p>Duration: 7 Hours</p></a></li>
                    <li><a href="#"><span><img class="lazy" src="<?php echo base_url('assets/images/language.png'); ?>" alt="Language - English"></span><p>Language - English</p></a></li>
                    <li><a href="#"><span><img class="lazy" src="<?php echo base_url('assets/images/mobile.png'); ?>"  alt="Present Mobile or Printed Voucher"></span><p>Present Mobile or Printed Voucher</p></a></li>
                    <li><a href="#"><span><img class="lazy" src="<?php echo base_url('assets/images/cancellation.png'); ?>" alt="Free Cancellation before 48 Hrs"></span><p>Free Cancellation before 48 Hrs</p></a></li>
                </ul>
            </div><!-- sticky-sec -->
            </div><!-- title-sec -->
            <div class="content-area">
            <h2 id="Highlights">
                <div class="radio-custom">
                    <input type="radio" name="gender">
                </div> 
                Highlights
            </h2>
                <ul>
                    <li>Watching the magical sunset over the vast skyline</li>
                    <li> A taste of Arabic culture in an authentic Arabic camp </li>
                    <li> A signature BBQ dinner in a Bedouin setting</li> 
                    <li> Drop off time: 9:00PM-9: 15 PM</li>
                </ul>
            </div><!-- content-area -->
            <div class="package-option scroll-point" id="PackageDetails">
                <h2>Activity Options</h2>
    		<!--
                <div class="date-slt">
                   <div class="date-pic">
                       <span><input type='text' class='datepicker-here' data-language='en' placeholder="mm/dd/yyyy" id="txtDate" readonly/></span>
                    </div> 
                    <p>Please select a visit date</p>
                </div>
				-->
                
                <div class="accordion-container">
                  <div class="accordion-set">
                    <div class="title-ac">
                        <div class="row">
                            <div class="col-md-4 col-12">
                                <div class="left-se">
                                    <h3>Private Arabian Dunes Safari</h3> 
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="left-se middle-section">
                                    <div class=price><h5>AED  616</h5> <b>985</b></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="right-se">
                                    <a href="#" class="sl-btn">SELECT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <p>Shared tour with a maximum of 6 people in one four wheel drive vehicle. 
                            Includes Arabian dunes bashing, sandboarding & a brief camel ride
                            Pickup 2.30-3.00 pm and drop off: 6.00-6.30 pm </p>
                        <h6>Sharing without Dinner	</h6>
                        <div class="adult-number">
                            <div class="title-ac">
                                    <div class="row">
                                    <div class="col-md-4 col-12">
                                        <div class="left-se">
                                            <h5>Adult (11+ years)</h5> 
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="left-se middle-section">
                                            <div class="outer">
                                                <div class="input-group input-number-group">
                                                <div class="input-group-button input-group-button-left">
                                                    <span class="input-number-decrement adult-count">-</span>
                                                </div>
                                                <input class="input-number" type="text" value="2">
                                                <div class="input-group-button input-group-button-right">
                                                    <span class="input-number-increment">+</span>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="right-se">
                                            <del>AED 750</del>
                                            <span>AED 709</span>
                                        </div>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="adult-number">
                            <div class="title-ac">
                                    <div class="row">
                                    <div class="col-md-4 col-12">
                                        <div class="left-se">
                                            <h5>Adult (11+ years)</h5> 
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="left-se middle-section">
                                            <div class="outer">
                                                <div class="input-group input-number-group">
                                                <div class="input-group-button input-group-button-left">
                                                    <span class="input-number-decrement adult-count">-</span>
                                                </div>
                                                <input class="input-number" type="text" value="2">
                                                <div class="input-group-button input-group-button-right">
                                                    <span class="input-number-increment">+</span>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="right-se">
                                            <del>AED 750</del>
                                            <span>AED 709</span>
                                        </div>
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- content -->
                  </div>
                  <!-- accordion-set -->
                  <div class="accordion-set">
                    <div class="title-ac">
                        <div class="row">
                            <div class="col-md-4 col-12">
                                <div class="left-se">
                                    <h3>Private Arabian Dunes Safari</h3> 
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="left-se middle-section">
                                    <div class=price><h5>AED  616</h5> <b>985</b></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="right-se">
                                    <a href="#" class="sl-btn">SELECT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <p>Shared tour with a maximum of 6 people in one four wheel drive vehicle. 
                            Includes Arabian dunes bashing, sandboarding & a brief camel ride
                            Pickup 2.30-3.00 pm and drop off: 6.00-6.30 pm </p>
                        <h6>Sharing without Dinner	</h6>
                        <div class="adult-number">
                            <div class="title-ac">
                                    <div class="row">
                                    <div class="col-md-4 col-12">
                                        <div class="left-se">
                                            <h5>Adult (11+ years)</h5> 
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="left-se middle-section">
                                            <div class="outer">
                                                <div class="input-group input-number-group">
                                                <div class="input-group-button input-group-button-left">
                                                    <span class="input-number-decrement adult-count">-</span>
                                                </div>
                                                <input class="input-number" type="text" value="2">
                                                <div class="input-group-button input-group-button-right">
                                                    <span class="input-number-increment">+</span>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="right-se">
                                            <del>AED 750</del>
                                            <span>AED 709</span>
                                        </div>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="adult-number">
                            <div class="title-ac">
                                    <div class="row">
                                    <div class="col-md-4 col-12">
                                        <div class="left-se">
                                            <h5>Adult (11+ years)</h5> 
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="left-se middle-section">
                                            <div class="outer">
                                                <div class="input-group input-number-group">
                                                <div class="input-group-button input-group-button-left">
                                                    <span class="input-number-decrement adult-count">-</span>
                                                </div>
                                                <input class="input-number" type="text" value="2">
                                                <div class="input-group-button input-group-button-right">
                                                    <span class="input-number-increment">+</span>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="right-se">
                                            <del>AED 750</del>
                                            <span>AED 709</span>
                                        </div>
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- content -->
                  </div>
                  <!-- accordion-set -->
                  <div class="accordion-set">
                    <div class="title-ac">
                        <div class="row">
                            <div class="col-md-4 col-12">
                                <div class="left-se">
                                    <h3>Private Arabian Dunes Safari</h3> 
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="left-se middle-section">
                                    <div class=price><h5>AED  616</h5> <b>985</b></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="right-se">
                                    <a href="#" class="sl-btn">SELECT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <p>Shared tour with a maximum of 6 people in one four wheel drive vehicle. 
                            Includes Arabian dunes bashing, sandboarding & a brief camel ride
                            Pickup 2.30-3.00 pm and drop off: 6.00-6.30 pm </p>
                        <h6>Sharing without Dinner	</h6>
                        <div class="adult-number">
                            <div class="title-ac">
                                    <div class="row">
                                    <div class="col-md-4 col-12">
                                        <div class="left-se">
                                            <h5>Adult (11+ years)</h5> 
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="left-se middle-section">
                                            <div class="outer">
                                                <div class="input-group input-number-group">
                                                <div class="input-group-button input-group-button-left">
                                                    <span class="input-number-decrement adult-count">-</span>
                                                </div>
                                                <input class="input-number" type="text" value="2">
                                                <div class="input-group-button input-group-button-right">
                                                    <span class="input-number-increment">+</span>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="right-se">
                                            <del>AED 750</del>
                                            <span>AED 709</span>
                                        </div>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="adult-number">
                            <div class="title-ac">
                                    <div class="row">
                                    <div class="col-md-4 col-12">
                                        <div class="left-se">
                                            <h5>Adult (11+ years)</h5> 
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="left-se middle-section">
                                            <div class="outer">
                                                <div class="input-group input-number-group">
                                                <div class="input-group-button input-group-button-left">
                                                    <span class="input-number-decrement adult-count">-</span>
                                                </div>
                                                <input class="input-number" type="text" value="2">
                                                <div class="input-group-button input-group-button-right">
                                                    <span class="input-number-increment">+</span>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="right-se">
                                            <del>AED 750</del>
                                            <span>AED 709</span>
                                        </div>
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- content -->
                  </div>
                  <!-- accordion-set -->
                  <div class="accordion-set">
                    <div class="title-ac">
                        <div class="row">
                            <div class="col-md-4 col-12">
                                <div class="left-se">
                                    <h3>Private Arabian Dunes Safari</h3> 
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="left-se middle-section">
                                    <div class=price><h5>AED  616</h5> <b>985</b></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="right-se">
                                    <a href="#" class="sl-btn">SELECT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <p>Shared tour with a maximum of 6 people in one four wheel drive vehicle. 
                            Includes Arabian dunes bashing, sandboarding & a brief camel ride
                            Pickup 2.30-3.00 pm and drop off: 6.00-6.30 pm </p>
                        <h6>Sharing without Dinner	</h6>
                        <div class="adult-number">
                            <div class="title-ac">
                                    <div class="row">
                                    <div class="col-md-4 col-12">
                                        <div class="left-se">
                                            <h5>Adult (11+ years)</h5> 
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="left-se middle-section">
                                            <div class="outer">
                                                <div class="input-group input-number-group">
                                                <div class="input-group-button input-group-button-left">
                                                    <span class="input-number-decrement adult-count">-</span>
                                                </div>
                                                <input class="input-number" type="text" value="2">
                                                <div class="input-group-button input-group-button-right">
                                                    <span class="input-number-increment">+</span>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="right-se">
                                            <del>AED 750</del>
                                            <span>AED 709</span>
                                        </div>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="adult-number">
                            <div class="title-ac">
                                    <div class="row">
                                    <div class="col-md-4 col-12">
                                        <div class="left-se">
                                            <h5>Adult (11+ years)</h5> 
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="left-se middle-section">
                                            <div class="outer">
                                                <div class="input-group input-number-group">
                                                <div class="input-group-button input-group-button-left">
                                                    <span class="input-number-decrement adult-count">-</span>
                                                </div>
                                                <input class="input-number" type="text" value="2">
                                                <div class="input-group-button input-group-button-right">
                                                    <span class="input-number-increment">+</span>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="right-se">
                                            <del>AED 750</del>
                                            <span>AED 709</span>
                                        </div>
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- content -->
                  </div>
                  <!-- accordion-set -->
                </div><!-- package-option -->
            <div class="clearfix"></div>
            <div class="content-area">
                <h2 id="Description">
                    <div class="radio-custom">
                         <input type="radio" name="gender">
                    </div>
                    Your Experience (Description)
                </h2>                
                <p>The high adrenaline dune bashing safari starts with a pick up in Dubai at your scheduled time by a Safari captain in a 4wd. During the journey you’ll learn more about Dubai’s origin from way back to the present. 
                </p>
                <a href="#" class="show-more">Read more <i class="fa fa-angle-down"></i></a>
                <div class="more-section">
                    <p>The high adrenaline dune bashing safari starts with a pick up in Dubai at your scheduled time by a Safari captain in a 4wd. During the journey you’ll learn more about Dubai’s origin from way back to the present.</p>
                </div>
                <h2 id="Itinerary">
                    <div class="radio-custom">
                         <input type="radio" name="gender">
                    </div>
                    Itinerary 
                </h2>
                <ul>
                    <li>Pickup from Dubai between (Winter 2:00pm-2.30pm) (Spring & Atunmun 2:30pm-3:00pm) and (3:00pm-3:30pm in Summer).</li>
                    <li>  Arrival at the rest area/meeting point </li>
                    <li> Entry into the desert</li>
                    <li> Dune bashing</li>
                    <li>Sunset viewing stop then depart to the camp</li>
                    <li> Arrival at the desert camp </li>
                    <li> Indulge in the Arabic camp’s fun activities (camel riding, henna painting, belly dance and tanoura show, shisha etc)</li>
                    <li>BBQ dinner</li>
                    <li> End of the activity; and departure back to hotel or residence at 8:15PM.</li>
                    <li> Drop off 9:00PM-9:30PM</li>
                </ul>
                
                <h2 id="Included">
                     <div class="radio-custom">
                         <input type="radio" name="gender">
                    </div>
                    What’s Included 
                </h2>
                <div class="details">
                    <p><i class="fa fa-check"></i>Pick up from Dubai in a 4wd</li>
                    <p><i class="fa fa-check"></i>A 30-40 minutes desert dune bashing in a 4wd</p>
                    <p><i class="fa fa-check"></i>Sunset watch </p>
                    <p><i class="fa fa-check"></i>
                        A visit to the camp. The camp features unlimited mineral water, soft drinks, tea, coffee & sandwiches. Here you’re welcomed
                        with traditional Gahwa-A traditional Arabic coffee.
                    </p>
                    <p><i class="fa fa-check"></i>
                        An open Buffet & BBQ dinner featuring fresh grills, hot freshly baked breads, hot buffet, sumptuous desserts from a local 
                        kitchen & fresh fruits.  
                    </p>
                    <p><i class="fa fa-check"></i>
                        Indulge in a set of fun activities including; exploring a souvenir display stall, a henna tattoo corner, photos with Falcon
                        and a photo session clad in the traditional Dishdashas and Abayas. 
                    </p>
                    <p><i class="fa fa-check"></i>
                        Enjoy live shows from professional artists including a mesmerizing Tanoura Dance, Fire Show & an alluring Belly Dance
                    </p>
                    <p><i class="fa fa-check"></i>
                        Drop off back to your hotel or residence in Dubai in a Landcruiser.
                    </p>
                    <p><i class="fa fa-times"></i> 
                        Alcoholic beverages (available at extra cost)
                    </p>
                    <p><i class="fa fa-times"></i>Gratuities</p>
                    <p><i class="fa fa-times"></i>Souvenirs </p>
                </div>
                <div class="yellow-box" id="Instructions">
                    <h2>Trip Instructions  / Essentials </h2>
                    <ul>
                        <li> The evening desert safari is available every day of the week</li>
                        <li>Camel rides are brief as part of animal care </li>
                        <li>During the holy month of Ramadan, Belly dance, Tanoura dance and other entertainment activities are not availed. </li>
                        <li>Pets, Luggage or large bags are not allowed </li>
                        <li> The Safari Jeep can accommodate up to six people. Therefore, booking the evening desert safari in groups of
                        six is highly commendable. This allows you to have the entire jeep to yourselves. </li>
                    </ul>
                    <a href="#" class="show-more">Book with confidence <i class="fa fa-angle-down"></i>
                        <div class="more-section">
                        <p>The high adrenaline dune bashing safari starts with a pick up in Dubai at your scheduled time by a Safari captain in a 4wd. During the journey you’ll learn more about Dubai’s origin from way back to the present.</p>
                        </div>
                    </a>
                    <a href="#" class="show-more">Your safety comes first <i class="fa fa-angle-down"></i>
                        <div class="more-section">
                        <p>The high adrenaline dune bashing safari starts with a pick up in Dubai at your scheduled time by a Safari captain in a 4wd. During the journey you’ll learn more about Dubai’s origin from way back to the present.</p>
                        </div>
                    </a>
                    <a href="#" class="show-more">Bring with you<i class="fa fa-angle-down"></i>
                        <div class="more-section">
                        <p>The high adrenaline dune bashing safari starts with a pick up in Dubai at your scheduled time by a Safari captain in a 4wd. During the journey you’ll learn more about Dubai’s origin from way back to the present.</p>
                        </div>
                    </a>
                    <a href="#" class="show-more">Cancelation policy <i class="fa fa-angle-down"></i>
                        <div class="more-section">
                        <p>The high adrenaline dune bashing safari starts with a pick up in Dubai at your scheduled time by a Safari captain in a 4wd. During the journey you’ll learn more about Dubai’s origin from way back to the present.</p>
                        </div>
                    </a>
                </div><!-- yellow-box -->
                <div class="map-sec">
                <p>
                <img src="assets/images/map-icon.png" alt="map-icon">
                Meet Up Location <br/>
                    •   Tour is subject to changing weather conditions and may be cancelled during poor weather
                </p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.5695404007147!2d55.257387214326975!3d25.18400873841709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5cde8a72902b%3A0xf4e1441179597e30!2sArabia+Horizons+Tours+LLC!5e0!3m2!1sen!2sin!4v1555657608477!5m2!1sen!2sin" width="600" height="450" style="border:0" allowfullscreen></iframe>
                </div>
                <a href="#" class="view-in-google-map">View in Google Maps</a>

            </div><!-- content-area -->
            
            <div class="customer-review scroll-point" id="Reviews">
                <h2>Customer reviews</h2>
                <div class="review-graph">
                  <div class="inner">
                    <div class="outer-rt">
                    <div class="rating">
                      <span class="rating-num">4.5</span>
                      <div class="rating-stars">
                        <span><i class="active icon-star"></i></span>
                        <span><i class="active icon-star"></i></span>
                        <span><i class="active icon-star"></i></span>
                        <span><i class="active icon-star"></i></span>
                        <span><i class="icon-star"></i></span>

                        <div class="rating-users">
                            Out of 5
                        </div>
                      </div>
                    </div>
                     <div class="rating-box">
                        <div class="ratings">
                            <div class="empty-stars"></div>
                            <div class="full-stars" style="width:100%"></div>
                        </div>
                    </div>  
                    </div>    

                    <div class="histo">
                      <div class="histo-rate">
                        <span class="histo-star">
                          <i class="active icon-star"></i> Excellent</span>
                        <span class="bar-block">
                            <span class="bar" data-width="50%"></span>
                        </span>
                        <p>109</p>  
                      </div>

                      <div class="histo-rate">
                        <span class="histo-star">
                          <i class="active icon-star"></i>Very Good </span>
                        <span class="bar-block">
                            <span class="bar" data-width="30%"></span>
                        </span>
                        <p>40</p>  
                      </div> 

                      <div class="histo-rate">
                        <span class="histo-star">
                          <i class="active icon-star"></i>Average</span>
                        <span class="bar-block">
                            <span class="bar" data-width="20%"></span>
                        </span>
                        <p>7</p>   
                      </div>

                      <div class="histo-rate">
                        <span class="histo-star">
                          <i class="active icon-star"></i>Poor</span>
                        <span class="bar-block">
                            <span class="bar" data-width="10%"></span>
                        </span>
                        <p>4</p>
                      </div>

                      <div class="histo-rate">
                        <span class="histo-star">
                          <i class="active icon-star"></i>Terrible</span>
                        <span class="bar-block">
                          <span class="bar" data-width="5%"></span>
                        </span>
                        <p>1</p>  
                      </div>
                    </div>
                  </div>
                </div><!-- review-graph -->
            
                <div class="review-box">
                   <div class="user-img"><img class="lazy" src="assets/images/Image218.png" alt="client1"></div>
                    <div class="content-sec">
                        <div class="rating-box">
                            <div class="ratings">
                                <div class="empty-stars"></div>
                                <div class="full-stars" style="width:100%"></div>
                            </div>
                        </div>
                        <h6>Rachel<span>March, 2019</span></h6>
                       <p>Worth the trip. I was only able to go to 2 parks as I spent a lot of time at the Blossom Pavillon. The orchid show was awesome. The orchids were really eye catching and you just cant have enough of it. They beautifully arranged the orchids!!!! The other parks were also nice. Ordinary flowers were in abundance. Just arrange them well and you will get a beautiful garden.</p>
                        <ul class="images-sec">
                            <li><img class="lazy" src="assets/images/rw_01.jpg" alt="Rachel"></li>
                            <li><img class="lazy" src="assets/images/rw_02.jpg" alt="Rachel"></li>
                            <li><img class="lazy" src="assets/images/rw_03.jpg" alt="Rachel"></li>
                            <li><img class="lazy" src="assets/images/rw_04.jpg" alt="Rachel"></li>
                            <li><img class="lazy" src="assets/images/rw_05.jpg" alt="Rachel"></li>
                            <li><img class="lazy" src="assets/images/rw_06.jpg" alt="Rachel"></li>
                        </ul>
                  
                    </div> 
                </div><!-- review-box -->
                
                <div class="review-box">
                   <div class="user-img"><img class="lazy" src="assets/images/Image218.png"  alt="Stephen"></div>
                    <div class="content-sec">
                        <div class="rating-box">
                            <div class="ratings">
                                <div class="empty-stars"></div>
                                <div class="full-stars" style="width:100%"></div>
                            </div>
                        </div>
                        <h6>Stephen<span>March, 2019</span></h6>
                       <p>The view is amazing, staff well organized, it is expensive but it worthy....</p>
                    </div> 
                </div><!-- review-box -->
                
                <div class="review-box">
                   <div class="user-img"><img class="lazy" src="assets/images/Image218.png" alt="Beth"></div>
                    <div class="content-sec">
                        <div class="rating-box">
                            <div class="ratings">
                                <div class="empty-stars"></div>
                                <div class="full-stars" style="width:100%"></div>
                            </div>
                        </div>
                        <h6>Beth<span>March, 2019</span></h6>
                       <p>It is a world flora expo but they don't have only on flowers, they show the interesting exhibition through multimedia. I really love the exhibition from the national palace museum, though it' s small but the displays abouut horse are stunning.</p>
            
                    </div> 
                </div><!-- review-box -->
                
                <div class="review-box">
                   <div class="user-img"><img class="lazy" src="assets/images/Image218.png" alt="Chanavie"></div>
                    <div class="content-sec">
                        <div class="rating-box">
                            <div class="ratings">
                                <div class="empty-stars"></div>
                                <div class="full-stars" style="width:100%"></div>
                            </div>
                        </div>
                        <h6>Chanavie<span>March, 2019</span></h6>
                       <p>It's was a great experience and were able to see different and beautiful flowers! We went to the waipu exhibition center and it's easy to get there with public transport.</p>
            
                    </div> 
                </div><!-- review-box -->
                
                <a href="#" class="reviews-btn">Show all reviews</a>
            </div><!-- customer-review -->
        </div>
        </div><!-- left-side -->
        <div class="right-side sidebar">
            <div class="book-now-box">
                <div class="guarantee-price"><span><img class="lazy" src="assets/images/money.svg"  alt="money"></span>Arabia Horizons Guarantee<div class="tooltip"  data-tooltip="Arabia Horizons Guarantees you the best value-based pricing  (T&Cs apply)"></div></div>
                <div class="price">
                    <span>From</span>
                    AED  653<b>AED 1,254</b>
                </div>
                <li class="avaliable"><span><img class="lazy" src="assets/images/clock-gn.svg"  alt="Available Today"></span>Available Today</li>
                <div class="packages-box">
                    <select class="package-options" id="select-item">
                        <option value="1" name="package1">Shared Arabian Dunes Safari</option>
                        <option value="2" name="package2">Shared Arabian Dunes Safari</option>
                        <option value="3" name="package3">Shared Arabian Dunes Safari</option>
                    </select>
                </div>
                <div class="date-box"><input type='text' class='activity-date' data-language='en'  placeholder="Select Date" readonly /></div>
                <a href="#" class="book-now-btn hvr-sweep-to-right">Book Now</a>
                <a href="#" class="atc-btn book-now-btn">
                <img src="assets/images/cart.png" alt="cart">
                Add to cart</a>
            </div><!-- book-now-box -->
            <a href="#" class="gift-link">
            <img src="assets/images/gift.png" alt="gift">
                Give this as a gift</a>
            <!--
            <div class="why-choos">
                <h6>Why Choose Arabia Horizons</h6>
                <ul>
                    <li>Best Price Guaranteed </li>
                    <li>Fast & Easy Booking </li>
                    <li>Instant Confirmation </li>
                    <li>24/7 Customer Support</li>
                </ul>
            </div>
            
            <div class="tripadvisor">
                <a href="#">
                    <img class="lazy" src="assets/images/placeholder-image-1.png" data-src="assets/images/trip.jpg" alt="tripadvisor">
                </a>
            </div>
            
            
            <div class="share-icons">
                <div class="img-text">
                    <span><img class="lazy" src="assets/images/placeholder-image-1.png" data-src="assets/images/share-sm.svg" alt="share icon"></span>
                    <p>
                        <b>Share this Deal</b>
                        Certificate of Excellence
                    </p>
                </div>
                    <ul>
                        <li><a href="#" class="fb"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="tw"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="ink"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="inst"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
     
            </div>

            
            <div class="feefo-sec">
                <a href="#"><img class="lazy" src="assets/images/placeholder-image-1.png" data-src="assets/images/feefo.jpg" alt="feefo"></a>
            </div>
-->
     
        </div><!-- right-side -->  
    </div><!-- container -->
</div><!-- tour-details-page -->

     
<?php include 'include/activity/recommended-things.php';?>
<?php include 'include/footer.php';?>
<script src="assets/js/sticky-kit.min.js"></script>
<script src="assets/js/jquery.sticky.min.js"></script>
<!--
<script>
  $(document).ready(function(){
    
       $(".sticky-sec").sticky({bottomSpacing:2500});
  });
</script>
-->

<script>
    
     $(document).ready(function() {
        $('#select-item').SumoSelect();

        $('.accordion-set .sl-btn').click(function(e){
            e.preventDefault();
            var getId = $(this).parents('.accordion-set').find('h5').attr('id');
            console.log(getId);
            var getListText = $('select option[name="'+getId+'"]').text();
            console.log(getListText);
            $('.packages-box .options').find('li').each(function(){
                if($(this).find('label').html() == getListText){
                    console.log('found');
                    $(this).trigger('click');
                }
            });
        //   $('#select-item').SumoSelect();
        //   $('#select-item').find('option').attr("selected",false);
        //   $('#select-item').find('option[name="'+getId+'"]').attr("selected",true);
        //   $('#select-item')[0].sumo.reload();

        });
         
    });
    
 
</script>


<script>
$('body').addClass('activity-page'); // Explore section will load on pages where <body> has 'activity-page' class
// limiting search functionality only in Activities pages. Here, i am just adding a class to <body> tag onload. Later, if you are integrating it into any framework, you can remove this line of code, and initialize scrtipt based on body class(es) (main.js line 63)
    $(document).ready(function() {
        var today = new Date();
        
        $('.activity-date').datepicker({
        minDate: today,
        autoClose: true
        });

        $('.popup-youtube-tour').magnificPopup({
          disableOn: 0,
          type: 'iframe',
          mainClass: 'mfp-fade',
          removalDelay: 160,
          preloader: false,
          fixedContentPos: false
        });
        
        $(".sidebar").stick_in_parent({
            offset_top: 110
        });
        
        $(".accordion-set .sl-btn").click(function() {
            $('html,body').animate({
                scrollTop: $(".book-now-box").offset().top -500
            });
        });
        
        $(".accordion-set .sl-btn").click(function() {
            $('.packages-box p.CaptionCont.SelectBox').addClass('active');
            
         });
        
        $('.StickyMenuDetails ul li a').click(function(){
            $('html, body').animate({
                scrollTop: $( $.attr(this, 'href') ).offset().top - 100
            }, 1000);
            $('.StickyMenuDetails ul li a').not($(this)).removeClass('active-block');
            $(this).addClass('active-block');
            return false;
        });
    });

</script>


<script>

    $(function() {
        // var waypoints = $('.tour-details-page .left-side .scroll-point').waypoint(function(direction) {
        //     if (direction === 'down') {
        //         // Do stuff
        //     }, {
        //         offset: '50px'      
        //     });

        //    // console.log(' hit');
        //     var getId = $(this).attr('id');
        //     $('.menu-slider li a').removeClass('active-block');
        //     $('.menu-slider li a[href="#'+getId+'"]').addClass('active-block');
        //     console.log(getId);
        // }, {
        //     offset: '50px'      
        // })


        var $things = $('.tour-details-page .left-side .scroll-point');
        $things.waypoint(function(direction) {
        if (direction === 'down') {
            var getId = $(this).attr('id');
            $('.menu-slider li a').removeClass('active-block');
            $('.menu-slider li a[href="#'+getId+'"]').addClass('active-block');
        }
        }, {
        offset: '50px'
        });

        $things.waypoint(function(direction) {
        if (direction === 'up') {
            var getId = $(this).attr('id');
            $('.menu-slider li a').removeClass('active-block');
            $('.menu-slider li a[href="#'+getId+'"]').addClass('active-block');
        }
        });
    });
    
</script>


<?php include 'include/footer-bottom.php';?>