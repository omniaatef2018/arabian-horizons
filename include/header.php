<?php include 'config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#706d6c">
    <meta name="google-site-verification" content="ag1n2dhYDdo2CDqPkBgwzzCUGp1A21Fvvkmsyxda65s" />
    <title>Arabia Horizons | </title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="Arabia Horizons">
    <!-- favicon -->
    <link rel="icon" type="images/favicon.ico" sizes="32x32"
        href="<?php echo base_url('assets/images/favicon.ico'); ?>">
    <!-- Manifest file -->
    <link rel="manifest" href="<?php echo base_url('assets/js/manifest.json'); ?>">
    <!-- IOS support -->
    <link rel="apple-touch-icon" href="../assets/images/icons/icon-96x96.png">
    <link rel="apple-touch-icon" href="../assets/images/icons/icon-72x72.png">
    <link rel="apple-touch-icon" href="../assets/images/icons/icon-512x512.png">
    <link rel="apple-touch-icon" href="../assets/images/icons/icon-384x384.png">
    <link rel="apple-touch-icon" href="../assets/images/icons/icon-192x192.png">
    <link rel="apple-touch-icon" href="../assets/images/icons/icon-152x152.png">
    <link rel="apple-touch-icon" href="../assets/images/icons/icon-144x144.png">
    <link rel="apple-touch-icon" href="../assets/images/icons/icon-128x128.png">
    <meta name="apple-mobile-web-app-status-bar" content="#706d6c">
    <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
    <!-- swipper plugin -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- <link href='<?php echo base_url('assets/css/swipper.min.css'); ?>' rel='stylesheet' type='text/css' /> -->
    <link href='<?php echo base_url('assets/css/style.css'); ?>' rel='stylesheet' type='text/css' />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-83611584-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-83611584-1');
    </script>
</head>

<body>
    <!-- start loader -->
    <div id="preloader">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
    <!-- end loader -->
    <!-- start header -->
    <header class="main-header">
        <div class="desktop-menu">
            <div class="top-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            <div class="left-side">
                                <ul>
                                    <!-- <li><a href="<?php echo base_url('page/soon'); ?>" target="_blank">Flights</a></li> -->
                                    <!-- <li><a href="<?php echo base_url('hotels'); ?>" target="_blank"
                                    >Hotels</a></li> -->
                                    <li><a href="<?php echo base_url('things-to-do'); ?>" target="_blank"
                                    >Things To Do</a></li>
                                    <li><a href="<?php echo base_url('uae-visa'); ?>"  target="_blank"
                                    >UAE Visa</a></li>
                                    <!-- <li><a href="<?php echo base_url('car-rental'); ?>" target="_blank"
                                    >Car Rental</a></li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="right-side">
                                <nav>
                                    <ul>
                                        <!-- <li><a href="<?php echo base_url('page/soon'); ?>" target="_blank">Travel Agents</a></li> -->
                                        <li>
                                            <a href="<?php echo base_url('experience-dubai'); ?>"
                                                class="dp-menu" target="_blank" >Experience
                                                Dubai</a>
                                            <ul class="sub-menu">
                                                <li><a href="<?php echo base_url('things-to-do'); ?>" target="_blank"
                                                >Things to do</a>
                                                </li>
                                                <li><a href="<?php echo base_url('uae-visa'); ?>" target="_blank"
                                                >UAE Visa</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('corporate'); ?>" class="dp-menu" target="_blank">Corporate</a>
                                            <ul class="sub-menu">
                                                <li><a href="<?php echo base_url('business-travel'); ?>" target="_blank">Business
                                                        Travel</a>
                                                </li>
                                                <li><a href="<?php echo base_url('group-travel'); ?>" target="_blank">Group Travel</a>
                                                </li>
                                                <li><a href="<?php echo base_url('mice'); ?>" target="_blank">MICE</a></li>
                                                <li><a href="<?php echo base_url('vip-travel'); ?>" target="_blank">VIP Travel</a></li>
                                            </ul>
                                        </li>
                                        <!--
                                        <li class="user-icon">
                                            <a class="login-form" href="#popup-login">Login</a> /
                                            <a class="register-form" href="#popup-register">Register</a>
                                        </li>
                                        -->
                                        <!-- <li class="user-icon"><a class="login-form" href="#popup-login">Travel Agent Login</a></li> -->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- top-menu -->
            <!-- start logo section -->
            <div class="fixed-bar logo-menu">
                <div class="container">
                    <div class="row">
                        <div class="left-side">
                            <div class="col-sm">
                                <div class="main-logo"><a href="<?php echo base_url(''); ?>"><img
                                            src="<?php echo base_url('assets/images/logo.svg'); ?>"
                                            alt="arabia horizons"></a>
                                </div>
                            </div>
                        </div>
                        <!-- start what we do drop down -->
                        <div class="whatWeDo-dropdown">
                            <div class="col-sm">
                                <span class="dp-menu">What We Do</span>
                            </div>
                            <div class="home-dropdown">
                                <div class="row">
                                    <div class="list-item col-md-4 col-12">
                                        <img src="assets/images/ico/Adventure.png" alt="things to do icon">
                                        <p>Things To Do
                                        </p>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        <hr/>
                                        <ul>
                                            <li>
                                                <a href="#" target="_blank">Desert Safari</a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">Sightseeing</a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">Adventure</a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">Attractions & Experiences</a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">Cruising & Yachting</a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">Transportation</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="list-item col-md-4 col-12">
                                        <img src="assets/images/work-team2.svg" alt="corporate icon">
                                        <p>
                                            Corporate
                                        </p> 
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        <hr/>
                                        <ul>
                                            <li><a href="#" target="_blank">Business Travel</a></li>
                                            <li><a href="#" target="_blank">Group Travel</a></li>
                                            <li><a href="#" target="_blank">MICE</a></li>
                                            <li><a href="#" target="_blank">VIP Travel</a></li>
                                        </ul>
                                    </div>
                                    <div class="list-item col-md-4 col-12">
                                        <img src="assets/images/icon-09.svg" alt="Experience icon">
                                        <p>Experience Dubai
                                        </p>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        <hr/>
                                        <ul>
                                            <li><a href="#" target="_blank">UAE Visa</a></li>
                                            <li><a href="#" target="_blank">Things to Do in Dubai</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end what we do drop down -->
                        </div>
                        <div class="middle">
                                <div class="serach-box">
                                    <form method="get" class="searchform" id="search"
                                        action="<?php echo base_url('things-to-do/search'); ?>" novalidate="novalidate">
                                        <input type="text" autocomplete="off"
                                            placeholder="Search for experiences ..."
                                            name="ttdn" class="s-ip required" value="">
                                        <input type="submit" class="search-btn" value="">
                                        <div class="autocomplete-sec">
                                        <ul>
                                            <li>Desert Safari </li>
                                            <li>Sightseeing</li>
                                            <li>Adventure </li>
                                            <li>Attractions & Experiences </li>
                                            <li>Cruising & Yachting </li>
                                            <li>Transportation</li>
                                        </ul>
                                        </div>
                                    </form>
                                </div>
                        </div>
                        <div class="col-sm right-side">
                                <nav>
                                    <ul>
                                        <!--
                                        <li>
                                        <a href="#" class="dp-menu">Travel Form Dubai</a>
                                        <ul class="sub-menu">
                                        <li><a href="<?php echo base_url('page/soon'); ?>" target="_blank"
                                        >Flights</a></li>
                                        <li><a href="<?php echo base_url('page/soon'); ?>" target="_blank"
                                        >Hotels</a></li>
                                        <li><a href="<?php echo base_url('page/soon'); ?>" target="_blank"
                                        >Holidays</a></li>
                                        <li><a href="<?php echo base_url('page/soon'); ?>" target="_blank"
                                        >Travel Insurance</a></li>
                                        </ul>
                                        </li>
                                        -->
                                        <li class="language-btn">
                                            <a href="#" class="dp-menu"><span class="site-lang">ENG/EGP</span></a>
                                        </li>
                                        <li>
                                            <a href="#" title="help">
                                                <img src="assets/images/help.png" alt="help icon" class="nav-icon"/>
                                                <span>Help</span>
                                            </a>
                                        </li>                                        
                                        <li>
                                            <a href="#" title="wishlist">
                                                <img src="assets/images/heart.png" alt="heart icon" class="nav-icon"/>
                                                <span>WishList</span>
                                            </a>
                                        </li>
                                        <li class="cart-icon">
                                            <a href="<?php echo base_url('cart'); ?>" target="_blank">Cart
                                                <span>(4)</span>
                                             </a>
                                        </li>
                                        <li>
                                            <a href="#" class="dp-menu">
                                                <img src="assets/images/user.png" alt="user icon" class="nav-icon"/>
                                                <span>Profile</span>
                                            </a>
                                            <ul class="sub-menu huge-menu">
                                                <li>
                                                <img src="assets/images/user.png" alt="user icon" class="nav-icon"/>
                                                    <a href="#">LogIn</a>
                                                </li>
                                                <li>
                                                <img src="assets/images/history.png" alt="history icon" class="nav-icon"/>
                                                    <a href="#">History</a>
                                                </li>
                                            </ul>
                                        </li> 
                                        <li>
                                            <a href="#" class="btn signup-btn more-btn hvr-radial-out btn-light">
                                                SignUp
                                            </a>
                                        </li>   
                                    </ul>
                                </nav>
                                <!-- start languagae & currancy dropdown -->
                                <div class="language-dropdown">
                                    <div class="home-dropdown">
                                        <div class="row">
                                            <div class="list-item col-md-4 col-12">
                                                <p>Language
                                                </p>
                                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                <hr>
                                                <ul class="language-flaq">
                                                    <li>
                                                         <img src="assets/images/English.png" alt="english flaq">English</li>
                                                    <li><img src="assets/images/Arabic.png" alt="english flaq">Arabic</li>
                                                </ul>
                                            </div>
                                            <div class="list-item col-md-4 col-12">
                                                <p>
                                                    Currency
                                                </p> 
                                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                <hr>
                                                <ul>
                                                    <li><a href="#" target="_blank">UAE Dirham (AED)</a></li>
                                                    <li><a href="#" target="_blank">Egyptian Pound (EGP)</a></li>
                                                    <li><a href="#" target="_blank">US Dollar (USD)</a></li>
                                                    <li><a href="#" target="_blank">British Pound (GBP)</a></li>
                                                    <li><a href="#" target="_blank">Euro (EUR)</a></li>
                                                    <li><a href="#" target="_blank">Australian Dollar (AUD)</a></li>
                                                    <li><a href="#" target="_blank">Russian Ruble (RUB)</a></li>
                                                </ul>
                                            </div>
                                            <div class="list-item col-md-4 col-12">
                                                <p>test</p>
                                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                <hr style="background-color:transparent"/>
                                                <ul>
                                                <li><a href="#" target="_blank">UAE Dirham (AED)</a></li>
                                                <li><a href="#" target="_blank">Egyptian Pound (EGP)</a></li>
                                                <li><a href="#" target="_blank">US Dollar (USD)</a></li>
                                                <li><a href="#" target="_blank">British Pound (GBP)</a></li>
                                                <li><a href="#" target="_blank">Euro (EUR)</a></li>
                                                <li><a href="#" target="_blank">Australian Dollar (AUD)</a></li>
                                                <li><a href="#" target="_blank">Russian Ruble (RUB)</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end languagae & currancy dropdown -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end logo section -->
        <div class="mobile-menu">
            <div class="container">
                <div class="row">
                    <div class="col-6 main-logo">
                        <a href="<?php echo base_url(''); ?>"><img
                                src="<?php echo base_url('assets/images/logo.png'); ?>" alt="arabia horizons" />
                        </a>
                    </div>
                    <div id="mobile-header-menu" class="col-6">
                        <div class="row" style="float:right">
                           <!-- <div class="col-lg-5 col-md-4 col-sm-1 empty-sec"></div> -->
                            <div class="col-xl-2 col-md-1 col-sm-2 col-2 mb-sr">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-6 col-sm-7 col-6 cart-icon">
                                <a href="<?php echo base_url('cart'); ?>" target="_blank">Cart
                                    <span>(4)</span>
                                    </a>
                            </div>
                            <div class="col-xl-2 col-lg-1 col-sm-2 col-4 toggle-icon">
                                <a id="responsive-menu-button" class="mob-menu" href="#sidr-main"><span></span></a>
                            </div>
                            <div class="mb-search">
                                <form method="get" class="searchform" id="search-mobile"
                                    action="<?php echo base_url('things-to-do/search'); ?>" novalidate="novalidate">
                                    <input type="text" placeholder="Search for Experience..." name="ttdn" class="required"
                                        value="">
                                    <input type="submit" class="search-btn" value="">
                                    <span class="search_close"><i class="fa fa-times-circle" aria-hidden="true"></i></span>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- container -->
            <div id="navigation">
                <nav>
                    <ul>
                        <li>
                            <a href="<?php echo base_url('experience-dubai'); ?>" class="dp-menu" target="_blank">Experience Dubai</a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo base_url('things-to-do'); ?>" target="_blank">Things to do</a></li>
                                <li><a href="<?php echo base_url('uae-visa'); ?>" target="_blank">UAE Visa</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url('corporate'); ?>" class="dp-menu" target="_blank">Corporate</a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo base_url('business-travel'); ?>" target="_blank">Business Travel</a></li>
                                <li><a href="<?php echo base_url('group-travel'); ?>" target="_blank">Group Travel</a></li>
                                <li><a href="<?php echo base_url('mice'); ?>" target="_blank">MICE</a></li>
                                <li><a href="<?php echo base_url('vip-travel'); ?>" target="_blank">VIP Travel</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo base_url('hotels'); ?>" target="_blank">Hotels</a></li>
                        <li><a href="<?php echo base_url('things-to-do'); ?>" target="_blank">Things To Do</a></li>
                        <li><a href="<?php echo base_url('uae-visa'); ?>" target="_blank">UAE Visa</a></li>
                        <li><a href="<?php echo base_url('car-rental'); ?>" target="_blank">Car Rental</a></li>
                        <li><a href="<?php echo base_url('contact'); ?>" class="dp-menu" target="_blank">24/7 Support</a></li>
                        <li><a href="#" class="dp-menu">English/AED</a></li>
                        <li>
                            <a href="#" title="help">
                                <img src="assets/images/help.png" alt="help icon" class="nav-icon"/>
                                <span>Help</span>
                            </a>
                        </li>                                        
                        <li>
                            <a href="#" title="wishlist">
                                <img src="assets/images/heart.png" alt="heart icon" class="nav-icon"/>
                                <span>WishList</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dp-menu">
                                <img src="assets/images/user.png" alt="user icon" class="nav-icon"/>
                                <span>Profile</span>
                            </a>
                            <ul class="sub-menu huge-menu">
                                <li>
                                    <a href="#"> <img src="assets/images/user.png" alt="user icon" class="nav-icon"/> LogIn</a>
                                </li>
                                <li>
                                    <a href="#"><img src="assets/images/history.png" alt="history icon" class="nav-icon"/>History</a>
                                </li>
                            </ul>
                        </li> 
                        <li>
                            <a href="#" class="btn signup-btn">
                                SignUp
                            </a>
                        </li> 
                        <!-- <li><a href="<?php echo base_url('cart'); ?>" target="_blank">Cart</a></li> -->
                        <!--<li><a class="login-form" href="#popup-login">Travel Agent Login</a></li>
                        <li><a class="register-form" href="#popup-register">Register</a></li> -->
                    </ul>
                </nav>
                <a id="menuClose" href="#"></a>
            </div><!-- navigation  -->
            </div><!-- mobile-menu -->
            <!-- <div class="sticky-menu">
            <div class="desktop-menu">
            <div class="top-menu">
            <div class="container">
            <div class="left-side">
            <div class="main-logo"><a href="<?php echo base_url(''); ?>"><img
            src="<?php echo base_url('assets/images/sm-logo.png'); ?>"
            alt="arabia horizons"></a></div>
            <ul>
            <li><a href="<?php echo base_url('hotels'); ?>">Hotels</a></li> -->
                    <!-- <li><a href="<?php echo base_url('things-to-do'); ?>">THINGS TO DO</a></li>
            <li><a href="<?php echo base_url('uae-visa'); ?>">UAE VISA</a></li> -->
                    <!-- <li><a href="<?php echo base_url('car-rental'); ?>">Car Rental</a></li> -->
                    <!-- </ul>
            </div>

            <div class="middle">
            <div class="serach-box">
            <form method="get" class="searchform" id="search"
            action="<?php echo base_url('things-to-do/search'); ?>" novalidate="novalidate">
            <input type="text" autocomplete="off"
            placeholder="Search for experiences / activities/ attractions..." name="ttdn"
            class="s-ip required" value="">
            <input type="submit" class="search-btn" value="">
            </form>
            </div>
            </div> -->

                    <!-- <div class="right-side">
            <nav>
            <ul>
            <li><a href="#">Travel Agents</a></li>
            <li><a href="<?php echo base_url('contact'); ?>">24/7 Support</a></li>
            <li>
            <a href="#" class="dp-menu"><span class="site-lang">ENG</span>/<span
            class="site-currency">AED </span></a>
            <ul class="sub-menu huge-menu">
            <li>
            <h6>Language:</h6>
            <a class="active" data-lang="English" href="#">English</a>
            </li>
            <li>
            <h6>Currency:</h6>
            <a class="active" data-currency="AED" href="#">UAE Dirham (AED)</a>
            </li>
            </ul>
            </li>
            <li class="cart-icon"><a href="<?php echo base_url('cart'); ?>">Cart</a></li>
            <li class="user-icon"><a class="login-form" href="#popup-login">Travel Agent Login</a></li> -->
            <!-- </ul> -->
            <!-- </nav> -->
            <!-- </div> -->
            <!-- </div> -->
            <!-- </div>top-menu -->
            <!-- </div>desktop-menu -->
            <!-- </div>  -->
            <!-- sticky-menu -->

        <div id="toTop"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
        <div class="mobile-autocomplete-sec">
            <ul>
                <li>Desert Safari </li>
                <li>Sightseeing</li>
                <li>Adventure </li>
                <li>Attractions & Experiences </li>
                <li>Cruising & Yachting </li>
                <li>Transportation</li>
            </ul>
        </div>
    </header>