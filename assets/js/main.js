$(document).ready(function () {
// start slider width in mobile
  var windowWidth = $(window).width() -30;
  $(".swiper-container").width(windowWidth);
  $(window).resize(function(){
    var windowWidth = $(window).width() -30;
    $(".swiper-container").width(windowWidth);
  })
// end slider width in mobile
// start yellow section height
if($(window).width()<= 767){
  var imageHeight = $(".hm-corporate .box-outer .corp-box img").outerHeight();
  var dataHeight = $(".hm-corporate .box-outer .box .bottom-text").innerHeight();
  var yellowHeight = imageHeight + dataHeight
  $(".hm-corporate .right-box").height(yellowHeight);  
}
$(window).resize(function(){
  if($(window).width()<= 767){
    var imageHeight = $(".hm-corporate .box-outer .corp-box img").outerHeight();
    var dataHeight = $(".hm-corporate .box-outer .box .bottom-text").innerHeight();
    var yellowHeight = imageHeight + dataHeight
    $(".hm-corporate .right-box").height(yellowHeight);  
  }
  else{
    $(".hm-corporate .right-box").css("height","498.4px");  
  }
});
if($(window).width()<= 767){
  var image_Height = $(".experience-dubai .box-outer .corp-box img").outerHeight();
  var data_Height = $(".experience-dubai .box-outer .box a .bottom-text").innerHeight();
  var yellow_Height = image_Height + data_Height + 42
  $(".experience-dubai .box-outer .box.left-box").height(yellow_Height);
}
$(window).resize(function(){
  if($(window).width()<= 767){
      var image_Height = $(".experience-dubai .box-outer .corp-box img").outerHeight();
      var data_Height = $(".experience-dubai .box-outer .box a .bottom-text").innerHeight();
      var yellow_Height = image_Height + data_Height + 42
      $(".experience-dubai .box-outer .box.left-box").height(yellow_Height);
  }
  else{
    $(".experience-dubai .box-outer .box.left-box").css("height","498.4px");  
  }
});
// end yellow section height
// start langauge effect
$('.main-header .logo-menu .right-side ul li:nth-of-type(1)').click(function(){
  $('.language-dropdown').slideToggle(400)
});
// end langauge effect
// start focus effect input in 404 page
$(".error-page .input-group input").focus(function(){
    $(this).css({"border":"1px solid #ededed","border-left":"none"});
    $(this).parent(".input-group").css({"box-shadow":"0 1px 12px 0 rgba(0, 0, 0, 0.12), 0 0 12px 0 rgba(0, 0, 0, 0.08)","border":"1px solid #ededed"});
    $(this).siblings(".input-group-prepend").children(".input-group-text").css("border","1px solid #ededed")
});
$(document).click(function (e) {
  if (!$(e.target).hasClass("input-group") 
  && $(e.target).parents(".sr-box").length === 0) 
  {
      $(".sr-box .input-group").css("box-shadow","none");
  }
  }); 
// end focus effect input in 404 page
// start FAQ effect in cart page
$(".cart-page .FAQ a.show-more").click(function(){
    $(".cart-page .FAQ a.show-more .more-section").hide();
    $(this).children(".more-section").toggle(500);
});
// end FAQ effect in cart page
//initialize swiper when document ready
    var mySwiper = new Swiper ('.swiper-container', {
      scrollbar: {
        el: '.swiper-scrollbar',
      },
    });
// start most popular things in dubai hover effect
  $(function () {
    var menu = $(".most-popular-things .filter-link ");
    var indicator = $('<span class="indicator"></span>');
    menu.append(indicator);
    position_indicator(menu.find("li.active"));
    setTimeout(function () {
      indicator.css("opacity", 1);
    }, 500);
    menu.find("li").mouseenter(function () {
      position_indicator($(this));
    });    
    menu.find("li").click(function () {
      position_indicator($(this));
    });
  
    function position_indicator(ele) {
      var left = ele.offset().left;
      var bottom = ele.offset().bottom;
      var width = ele.width();
      indicator.stop().animate({
        left: left,
        width: width
      });
    }
  });
  
  // end most popular things in dubai hover effect
  // start add to favorite effect
$('.fav-iocn').click(function(e) {
  console.log(e.target)
  $(this).find('span').toggleClass("active");
});
// end add to favorite effect
  // start fixed navbar
$(window).scroll(function () {
  var scroll = $(window).scrollTop();
  if (scroll >= 120) {
    // $(".desktop-menu").css({"position":"fixed","top":"0","right":"0","width":"100%","z-index":"9999999999999"})
    $(".desktop-menu").addClass("fixed-header");
    // $(".desktop-menu").addClass("fixed-header");
    // $('body').addClass('sticky-menu-showing');
  } else {
    // $(".desktop-menu").css({"position":"static","top":"auto","right":"auto","width":"100%"})
   $(".desktop-menu").removeClass("fixed-header");
    // $('body').removeClass('sticky-menu-showing');
  }
  // if ($(window).width() < 1024) {
  //   //$(".sticky-menu").removeClass('fixed-header animated slideInDown');
  //   $(".fixed-bar").removeClass('fixed-header');
  //   // $('body').removeClass('sticky-menu-showing');
  // }
});
// end fixed navbar
// show more in yellow box in details page
$(".yellow-box .show-more").click(function(){
  $(this).children('.more-section').slideToggle();
});
// end more in yellow box in details page
  // start floating video 
$(window).scroll(function () {
  var scroll = $(window).scrollTop();
  if (scroll >=400) {
    $(".mfp-iframe-scaler iframe").css({"position":"fixed","bottom":"10px","right":"10px","width":"360px","height":"360px","display":"block","top":"initial","left":"initial","z-index":"999999"});
  }
  else{
    $(".mfp-iframe-scaler iframe").css({"position":"absolute","top":"-10px","left":"0px","width":"100%","height":"100%","display":"block"});
  }
});
  // end floating video 
  // start show more btn in tour page
  $('.tour-details-page .content-area .show-more').click(function(){
    $(this).siblings(".more-section").slideToggle();
  })
  // end show more btn in tour page
  // start enter promo code effect
  $(".toggle-div").click(function(){
      $(this).hide();
      $(".input-promo-code").show();
  });
  $(".input-promo-code .input-group-append button").click(function(){
      $(".input-promo-code").hide();
      $(".toggle-div").show();
  });
  // end enter promo code effect
  // set catergory checked prperty when user checked on it 
  var grd = function(){
    $(".category-select").click(function() {
      var previousValue = $(this).children('input').attr('previousValue');
      var name = $(this).children('input').attr('name');
      if (previousValue == 'checked') {
        $(this).children('input').removeAttr('checked');
        $(this).children('input').attr('previousValue', false);
      } else {
        $(".category-select input[name="+name+"]:radio").attr('previousValue', false);
        $(this).children('input').attr('previousValue', 'checked');
      }
    });
  };
  grd('1');
  // end set catergory checked prperty when user checked on it 
  // start filter most popular things in dubai
  $(document).ready(function(){
    $('.most-popular-things .filter-link a').click(function(e){
      e.preventDefault();
      var getHref = $(this).attr('href');      
      var linkCategory = getHref.replace(/^#/, '');
      $('.most-popular-things .filter-link a').removeClass('active-item');
      $(this).addClass('active-item');
      if(linkCategory == 'all'){
        $('.most-popular-things .most-popular-slider .items').fadeIn();        
      } else {
        $('.most-popular-things .most-popular-slider .items').show();
        $('.most-popular-things .most-popular-slider .items a').attr("tabindex","0");
        $('.most-popular-things .most-popular-slider .items').not('[data-category="'+linkCategory+'"]').fadeOut();
      }
    })
  });
  // end filter most popular things in dubai
  $('.alert-warning .fa-times').click(function(){
    $(this).parent('.alert-warning').fadeOut();
  })
  // start home dropdown 
  $('.whatWeDo-dropdown .dp-menu').click(function(){
      $('.whatWeDo-dropdown .home-dropdown').toggle(500);
      $(".language-dropdown").hide();
  });
  // end home dropdown 
  // start disapear dropdown when click in any space 
  $(document).click(function (e) {
    if (!$(e.target).hasClass("home-dropdown") 
    && $(e.target).parents(".whatWeDo-dropdown").length === 0) 
    {
        $(".whatWeDo-dropdown .home-dropdown").hide();
    }
    });  
  // end disapear dropdown when click in any space 
  // start filter in search page 
  $(".show-listing.search-page .left-sidebar .fltr-top").click(function(){
    if($(window).width()<1024){
      $(".show-listing .left-sidebar .bottom-filter,.search-page .filter-links").slideToggle();
    }
    else{
      $(".show-listing .left-sidebar .bottom-filter,.search-page .filter-links").show();
    }
  })
  // end filter in search page 
  // start autocomplete effect
  $('.main-header .logo-menu .middle .serach-box input').keyup(function(){
    $(this).siblings('.autocomplete-sec').toggle();
    $(this).toggleClass('border-effect');
  });
  $('.mbrs .sr-box .input-group input').keyup(function(){
    $(this).parent().children('.autocomplete-sec').toggle();
    $(this).parent('.input-group').toggleClass('border-effect');
  });
  $('.mobile-menu .searchform input[type="text"]').focus(function(){
    $('.mobile-autocomplete-sec').toggle();
  });
  $('.error-page .input-group input').keyup(function(){
    $(this).parent().siblings('.autocomplete-sec').toggle();
  });
  // start autocomplete search in mobile
  var docHeight = $( document ).height();
  $('.mb-search .search_close').click(function(){
    $('.mobile-autocomplete-sec').hide();
  });
  // end autocomplete search in mobile
  $('.mobile-autocomplete-sec').css("height",docHeight);
  // end autocomplete effect
  // start select effect in radio btn
  $('.radio-select .category-select').click(function(){
      $('.radio-select .category-select').removeClass('border-effect');
      $(this).toggleClass('border-effect');
  });
  // end select effect in radio btn
  // start hide cokkies 
  $('.cookies .fa-times').click(function(){
    $('.cookies').fadeOut(800)
  });
  // end hide cookie
  var getURL = window.location.href;
  var currentPage = getURL.substring(getURL.lastIndexOf('/') + 1);
  $('.top-menu .left-side a[href="'+ currentPage +'"]').addClass('active');

   var ua = window.navigator.userAgent;
	var isIE = /MSIE|Trident/.test(ua);

	if (isIE) {
		//IE specific code goes here
		$('body').addClass('ie-browser');
	} 
    
  $('#preloader').fadeOut();
  // AOS.init({
  //   offset: 200,
  //   duration: 600,
  //   easing: 'ease-in-sine',
  //   delay: 100,
  //   disable: 'mobile',
  //  // once: true
  // });

  var options = {
    animateThreshold: 30,
    scrollPollInterval: 0
}
$('.aniview').AniView(options);

// validations
$("#flightRroundForm").validate({
  rules: {
    datepicker_r1 : "required",
    datepicker_r2 : "required",
    flyfromRound : "required",
    flytoRound : "required",
  },
  messages: {
    datepicker_r1 : "please pick a Departure date",
    datepicker_r2 : "please pick a Return date",
    flyfromRound : "Please choose a From location",
    flytoRound : "Please choose a To location",
  }
});

$("#flightOneWayForm").validate({
  rules: {
    datepicker_o1 : "required",
    datepicker_o2 : "required",
    flyFromOneway : "required",
    flyToOneway : "required",
  },
  messages: {
    datepicker_o1 : "please pick a Departure date",
    flyFromOneway : "Please choose a From location",
    flyToOneway : "Please choose a To location",
  }
});

$("#flightMultiForm").validate({
  rules: {
    dateStart : "required",
    dateEnd : "required",
    flyFromMulti : "required",
    flyToMulti : "required",
  },
  messages: {
    dateStart : "please pick a Departure date",
    dateEnd : "please pick a Return date",
    flyFromMulti : "Please choose a From location",
    flyToMulti : "Please choose a To location",
  }
});

$("#ActivityForm").validate({
  rules: {
    activity_city : "required",
    activity_type : "required",
    act_date_from : "required",
    act_date_to : "required",
  },
  messages: {
    activity_city : "please select one",
    activity_type : "please select one",
    act_date_from : "please pick a date",
    act_date_to : "please pick a date",
  }
});

$("#HolidayForm").validate({
  rules: {
    holi_location : "required",
    holi_type : "required",
    holi_from : "required",
    holi_to : "required",
  },
  messages: {
    holi_location : "please select one",
    holi_type : "please select one",
    holi_from : "please pick a date",
    holi_to : "please pick a date",
  }
});

$("#HotelForm").validate({
  rules: {
    hotel_location : "required",
    hotel_checkin : "required",
    hotel_checkout : "required",
  },
  messages: {
    hotel_location : "please select one",
    hotel_checkin : "please pick a date",
    hotel_checkout : "please pick a date",
  }
});

$("#FlyHotelRoundForm").validate({
  rules: {
    flyhotelRound_from : "required",
    flyhotelRound_to : "required",
    flyhotelRound_type : "required",
    flyhotelRound_dep : "required",
    flyhotelRound_return : "required",
  },
  messages: {
    flyhotelRound_from : "please select one",
    flyhotelRound_to : "please select one",
    flyhotelRound_type : "please select one",
    flyhotelRound_dep : "please pick a date",
    flyhotelRound_return : "please pick a date",
  }
});

$("#FlyHotelOneForm").validate({
  rules: {
    flyhotelOne_from : "required",
    flyhotelOne_to : "required",
    flyhotelOne_type : "required",
    flyhotelOne_date : "required",
  },
  messages: {
    flyhotelOne_from : "please select one",
    flyhotelOne_to : "please select one",
    flyhotelOne_type : "please select one",
    flyhotelOne_date : "please pick a date",
  }
});

$("#FlyHotelMultiForm").validate({
  rules: {
    flyhotelMulti_from : "required",
    flyhotelMulti_to : "required",
    flyhotelMulti_type : "required",
    dateStart : "required",
    dateEnd: "required",
  },
  messages: {
    flyhotelMulti_from : "please select one",
    flyhotelMulti_to : "please select one",
    flyhotelMulti_type : "please select one",
    dateStart : "please pick a date",
    dateEnd : "please pick a date",
  }
});

$("#visaForm").validate({
  rules: {
    visa_pass : "required",
    visa_citizen : "required",
    visa_living : "required",
    visa_type : "required",
  },
  messages: {
    visa_pass : "please fill",
    visa_citizen : "please select one",
    visa_living : "please select one",
    visa_type : "please select one",
  }
});



  $('.huge-menu li a[data-lang]').on('click', function(e){
      e.preventDefault();
      var getLang = $(this).attr('data-lang');
      $('.dp-menu span.site-lang').text(getLang);
      console.log(getLang);
  });

  $('.huge-menu li a[data-currency]').on('click', function(e){
    e.preventDefault();
    var getCurrency = $(this).attr('data-currency');
    $('.dp-menu span.site-currency').text(getCurrency);
    console.log(getCurrency);
});
});

$(window).scroll(function() {
  var scroll = $(window).scrollTop();
  if (scroll >= 500) {
      $(".StickyMenuDetails").addClass("fixed-header");
  } else {
      $(".StickyMenuDetails").removeClass("fixed-header");
  }
  if ($(window).width() < 1024) {
      $(".StickyMenuDetails").removeClass('fixed-header');
  }    

});

jQuery(document).ready(function ($) {

  $('.activity-page .serach-box .s-ip').click(function () {
    $('.MultiSearchBox').addClass('SrOpen');
    $('.MultiSearchBox').show();
    $('<div class="multiSearchBg"></div>').appendTo('.main-header');
    $('body').addClass('search-visible');
  });

  $('.activity-page .serach-box .s-ip').on("change paste keyup", function () {
    if ($(this).val() == '') {
      $('.MultiSearchBox').show();
    } else {
      $('.MultiSearchBox').hide();
    }
  });



  $(document).on('click', '.multiSearchBg', function () {
    $('.MultiSearchBox').removeClass('SrOpen');
    $('.MultiSearchBox').hide();
    $('body').removeClass('search-visible');
    $(this).remove();
  });

  $('.MenuLeft li').hover(
    function (event) {
      // The mouse has entered the element
      if (!$(this).hasClass('active')) {
        var getPos = $(this).index() + 1;
        var getRightContent = $('.RightBar .itemsBox:nth-child(' + getPos + ')');
        if (!$(getRightContent).hasClass('visible')) {
          $('.RightBar .itemsBox').not($(getRightContent)).removeClass('visible');
          $(getRightContent).addClass('visible');
          $('.MenuLeft li').not($(this)).removeClass('active');
          $(this).addClass('active');
        }
      }
    },
    function (event) {
      // The mouse has left the element
      event.stopPropagation();
    }
  );

  $('.counter span').counterUp({
     delay: 5,
    time: 2000
  });
  $('.view-map').magnificPopup({
    disableOn: 0,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
  });
  $('.huge-menu a').on('click', function (e) {
    e.preventDefault();
    if (!$(this).hasClass('active')) {
      $(this).siblings().removeClass('active');
      $(this).addClass('active');

    }
    // if($(this).attr('data-lang').length){
    //   var getLang = $(this).attr('data-lang');
    //   $('.site-lang').text(getLang);
    // }
    //   if ( $(this).attr('data-lang') !== '' ) {
    //     console.log('lang');
    // } else {
    //   console.log('curre');
    // }
  });


});
jQuery(document).ready(function () {
  jQuery('header nav ul > li.menu-item-has-children').prepend('<span class="sub-menu-icon trans"></span>');
  jQuery(function () {

    var pull = jQuery('#pull');
    menu = jQuery('nav > ul');
    menuHeight = menu.height();

    jQuery(pull).on('click', function (e) {
      e.preventDefault();
      menu.slideToggle();
      jQuery(".nav-icon").toggleClass('close');
    });

    jQuery(window).resize(function () {
      var w = jQuery(window).width();
      if (w > 300 && menu.is(':hidden')) {
        menu.removeAttr('style');
      }
    });
  });


  $('.login-form').magnificPopup({
    type: 'inline',
    preloader: false,
    closeBtnInside: true,
    closeOnBgClick: false,

  });

  $('.register-form').magnificPopup({
    type: 'inline',
    preloader: false,
    closeBtnInside: true,
    closeOnBgClick: false,
  });
  
  $('.corporate-register-form').magnificPopup({
    type: 'inline',
    preloader: false,
    closeBtnInside: true,
    closeOnBgClick: false,

  });
  
  $('.corporate-enquiry-form').magnificPopup({
    type: 'inline',
    preloader: false,
    closeBtnInside: true,
    closeOnBgClick: false,

  });

  $('.forgot-pass-link a').click(function (e) {
    e.preventDefault();
    $('.login-content').addClass('hide-login');
    $('.forgot-pass-content').show();
  });

  $('a.back-to-login').click(function (e) {
    e.preventDefault();
    $('.login-content').removeClass('hide-login');
    $('.forgot-pass-content').hide();
  });

});

function bindMenuHover() {
  var w = jQuery(window).width();
  if (w > 991) {
    jQuery("nav li").hover(function () {

      jQuery(this).children(".sub-menu").stop(true, true).fadeIn();

    }, function () {

      jQuery(this).children(".sub-menu").hide();

    }
    );

  } else {
    jQuery("nav li").unbind('mouseenter mouseleave')
  }
}

jQuery(document).ready(function () {
  // bindMenuHover();
  jQuery("nav li .sub-menu-icon").click(function (e) {
    jQuery(this).toggleClass("open");
    jQuery(this).parents('li').children(".sub-menu").slideToggle();
    e.preventDefault();
  });


  jQuery(".sub-menu").hover(function () {
    jQuery(this).parents("li").find("a").addClass("navActive2");
    jQuery(this).children("li").find("a").removeClass("navActive2");
  },
    function () {
      jQuery(this).parents("li").find("a").removeClass("navActive2");
      jQuery(this).children("li").find("a").removeClass("navActive2");
    });
});

jQuery(window).resize(function () {
  bindMenuHover();
});



$(document).ready(function () {
  $('#responsive-menu-button').sidr({
    name: 'sidr-main',
    source: '#navigation',
    onOpen: function () {
      $("#responsive-menu-button").toggleClass('ion-navicon');
      $("#responsive-menu-button").toggleClass('ion-android-close');
    },
    onClose: function () {
      $("#responsive-menu-button").toggleClass('ion-navicon');
      $("#responsive-menu-button").toggleClass('ion-android-close');
    },
    onOpenEnd: function () {
      // main menu drop down
      $('.sidr-class-menu li').each(function () {
        if ($(this).hasClass('sidr-class-menu-item-has-children')) {
          $(this).append('<span class="menu-click ion-android-add"></span>');
        }
      });
    },
  });

  $('#sidr-id-menuClose').click(function (e) {
    e.preventDefault();
    $.sidr('close', 'sidr-main');
  });


  $(".sidr-class-dp-menu").click(function (e) {
    e.preventDefault();
    $(this).toggleClass("sidr-class-sub-menu");
    $(this).parent('li').siblings().find("ul.sidr-class-sub-menu").slideUp();
    $(this).parent('li').siblings().find(".sidr-class-dp-menu").removeClass("sidr-class-sub-menu");
    $(this).parent('li').find("ul.sidr-class-sub-menu").slideToggle();

  });

  $('.mb-sr').click(function () {
    $(this).parent().find('.searchform').addClass('search-form-open');
  });

  $('.search_close ').click(function () {
    $(this).parent().removeClass('search-form-open');
  });


  $("#toTop").click(function () {
    return $("html, body").animate({
      scrollTop: 0
    }, 600), !1
  });

  $('.tour-slider').slick({
    dots: false,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,

  });
  // start social contacts 
  $('.social-contacts-wrapper .icons-section .container1').slick({
    dots: false,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows:false,
    autoplay:true,
    autoplaySpeed:1000
  });
  $('.social-contacts-wrapper .icons-section .container1').click(function(){
      $(".social-contacts-wrapper .links-section").toggle(500);
  });
  // end social contacts 

});


$(document).ready(function () {
  $(".accordion-set > .title-ac").on("click", function () {
    var titleBlock = $(this).closest('.title-ac');
    if ($(titleBlock).hasClass("active")) {
      $(titleBlock).removeClass("active");
      $(titleBlock)
        .siblings(".content")
        .slideUp(200);
      $(".accordion-set > .title-ac i")
        .removeClass("fa-angle-up")
        .addClass("fa-angle-down");
    } else {
      $(".accordion-set > .title-ac i")
        .removeClass("fa-angle-up")
        .addClass("fa-angle-down");
      $(titleBlock)
        .find("i")
        .removeClass("fa-angle-down")
        .addClass("fa-angle-up");
      $(".accordion-set > .title-ac").removeClass("active");
      $(titleBlock).addClass("active");
      $(".content").slideUp(200);
      $(titleBlock)
        .siblings(".content")
        .slideDown(200);
    }
  });

  $('.bar span').hide();



  setTimeout(function () {
    $('.bar span').fadeIn('slow');
  }, 1000);



  $('.input-group-button-right').click(function () {
    var $input = $(this).parents('.input-number-group').find('.input-number');
    var val = parseInt($input.val(), 10);
    $input.val(val + 1);
    $(".accordion-set").css("display",);
  });

  var lowestNumb = '';
  $('.input-group-button-left').click(function () {
    var $input = $(this).parents('.input-number-group').find('.input-number');
    var val = parseInt($input.val(), 10);
    if ($(this).hasClass('adult-count')) {
      lowestNumb = 1;
    } else {
      lowestNumb = 0;
    }

    if (val !== lowestNumb) {
      $input.val(val - 1);
    }

  });

  $('.top-deals-slider').slick({
    dots: false,
    arrows: true,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },

      {
        breakpoint: 680,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }

    ]
  });



  $('.partners-slider').slick({
    dots: true,
    arrows: false,
    infinite: true,
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
    speed: 1000,
    swipeToSlide: true,
   // variableWidth: true,


    responsive: [
      {
        breakpoint: 1000,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 558,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      }

    ]
  });

  $('.review-slider').slick({
    dots: false,
    arrows: true,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    prevArrow: $('.prev'),
    nextArrow: $('.next'),
    responsive: [
      {
        breakpoint: 1000,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },

      {
        breakpoint: 680,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });


  $('.best-place-slider').slick({
    dots: false,
    arrows: true,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    speed: 500,
    swipeToSlide: true,
    responsive: [
      {
        breakpoint: 1000,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },

      {
        breakpoint: 680,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },

      {
        breakpoint: 530,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }

    ]
  });
  // start most popular things in dubai slider
  $('.most-popular-slider').slick({
    dots: false,
    arrows: true,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 2000,
    speed: 500,
    swipeToSlide: true,
    responsive: [
      {
        breakpoint:992,
        settings: {
          slidesToShow:2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint:767,
        settings: {
          slidesToShow:1,
          slidesToScroll: 1
        }
      },
    ]
  });
  // end most popular things in dubai slider
  $('.visa-types').slick({
    dots: false,
    arrows: true,
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    speed: 500,
    swipeToSlide: true,
    responsive: [
      {
        breakpoint: 1000,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },

      {
        breakpoint: 680,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },

      {
        breakpoint: 530,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }

    ]
  });
  

});

$(document).ready(function () {

  var endDateStart = new Date();
  var endPicker = $('.endDate').datepicker({
    autoClose: true,
    minDate: new Date(),
    onHide: function (dp, animationCompleted) {
      $('#overlay').trigger('click');
    },
    onShow: function (dp, animationCompleted) {
      if (!animationCompleted) {
      } else {
        //console.log('start showing');
        var datepickerPos = $('.datepickers-container .datepicker.active').offset().top - $(window).height() + $('.datepickers-container .datepicker.active').height() + 30;
        $("body, html").animate({ scrollTop: datepickerPos }, 'fast');
      }
    },
  });

  $('.startDate').datepicker({
    minDate: new Date(),
    autoClose: true,
    onSelect: function onSelect(fd, date) {
      endDateStart = date;
      $('.endDate').datepicker({
        minDate: endDateStart
      });
    },
    onHide: function (dp, animationCompleted) {
      $('#overlay').trigger('click');
    },
    onShow: function (dp, animationCompleted) {
      if (!animationCompleted) {
      } else {
        var datepickerPos = $('.datepickers-container .datepicker.active').offset().top - $(window).height() + $('.datepickers-container .datepicker.active').height() + 30;
        $("body, html").animate({ scrollTop: datepickerPos }, 'fast');
      }
    },
  });


  var endDateStartHotel = new Date();
  var endPickerHotel = $('.hotelEnd').datepicker({
    autoClose: true,
    minDate: new Date(),
    onHide: function (dp, animationCompleted) {
      $('#overlay').trigger('click');
    },
    onShow: function (dp, animationCompleted) {
      if (!animationCompleted) {
      } else {
        var datepickerPos = $('.datepickers-container .datepicker.active').offset().top - $(window).height() + $('.datepickers-container .datepicker.active').height() + 30;
        $("body, html").animate({ scrollTop: datepickerPos }, 'fast');
      }
    },
  });

  $('.hotelStart').datepicker({
    minDate: new Date(),
    autoClose: true,
    onSelect: function onSelect(fd, date) {
      endDateStartHotel = date;
      $('.hotelEnd').datepicker({
        minDate: endDateStartHotel
      });
    },
    onHide: function (dp, animationCompleted) {
      $('#overlay').trigger('click');
    },
    onShow: function (dp, animationCompleted) {
      if (!animationCompleted) {
      } else {
        var datepickerPos = $('.datepickers-container .datepicker.active').offset().top - $(window).height() + $('.datepickers-container .datepicker.active').height() + 30;
        $("body, html").animate({ scrollTop: datepickerPos }, 'fast');
      }
    },
  });

  var ActivityEndDate = new Date();
  var endPickerAct = $('.ActivityEnd').datepicker({
    autoClose: true,
    minDate: new Date(),
    onHide: function (dp, animationCompleted) {
      $('#overlay').trigger('click');
    },
    onShow: function (dp, animationCompleted) {
      if (!animationCompleted) {
      } else {
        var datepickerPos = $('.datepickers-container .datepicker.active').offset().top - $(window).height() + $('.datepickers-container .datepicker.active').height() + 30;
        $("body, html").animate({ scrollTop: datepickerPos }, 'fast');
      }
    },
  });

  $('.ActivityStart').datepicker({
    minDate: new Date(),
    autoClose: true,
    onSelect: function onSelect(fd, date) {
      ActivityEndDate = date;
      $('.ActivityEnd').datepicker({
        minDate: ActivityEndDate
      });
    },
    onHide: function (dp, animationCompleted) {
      $('#overlay').trigger('click');
    },
    onShow: function (dp, animationCompleted) {
      if (!animationCompleted) {
      } else {
        var datepickerPos = $('.datepickers-container .datepicker.active').offset().top - $(window).height() + $('.datepickers-container .datepicker.active').height() + 30;
        $("body, html").animate({ scrollTop: datepickerPos }, 'fast');
      }
    },
  });

  $('.Availability').datepicker({
    minDate: new Date(),
    autoClose: true,
    onSelect: function onSelect(fd, date) {
      ActivityEndDate = date;
    },
    onShow: function (dp, animationCompleted) {
      if (!animationCompleted) {
      } else {
        var datepickerPos = $('.datepickers-container .datepicker.active').offset().top - $(window).height() + $('.datepickers-container .datepicker.active').height() + 30;
        $("body, html").animate({ scrollTop: datepickerPos }, 'fast');
      }
    },
  });

});


var $things = $('#Reviews');

$things.waypoint(function (direction) {
  if (direction === 'down') {
    $('.histo .bar').each(function () {
      var barwidth = $(this).attr('data-width');
      $(this).animate({ width: barwidth }, 2000);
    });
  }
}, {
    offset: '100%'
  });


$('.things-dubai-slider-mobile').slick({
  dots: false,
  arrows: true,
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  draggable: false,
  responsive: [
    {
      breakpoint:1022,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }

  ]
});

$(document).ready(function () {
  $('.top-dp li a').on("click", function () {
    $('.drop-down').toggleClass();
  });
});

$(document).on('click', '.switch-btn span', function () {
  $(this).parents('.location-select').toggleClass('rotated');
  var getFromLocation = $(this).parents('.location-select').find('.fly-from option:selected').val();
  var getToLocation = $(this).parents('.location-select').find('.fly-to option:selected').val();

  $(this).parents('.location-select').find('select.fly-to').val(getFromLocation);
  $(this).parents('.location-select').find('.search_test.fly-to')[0].sumo.reload();
  console.log('from '+getFromLocation);

  $(this).parents('.location-select').find('select.fly-from').val(getToLocation);
  $(this).parents('.location-select').find('.search_test.fly-from')[0].sumo.reload();
  console.log('to '+getToLocation);
});

// $(document).ready(function () {
//   $(document).on('click', '.hl-button', function () {
//     if (!$('body').hasClass('overlay-showing')) {
//       var docHeight = $(document).height();
//       $(this).parents('.tab-block').append("<div id='overlay'></div>");
//       if($('.outer-box').length){
//         var getOuterTop = $('.outer-box').offset().top;      
//         $('body').addClass('overlay-showing');
//         $("#overlay")
//           .css({
//             'opacity': 0.7,
//             'position': 'fixed',
//             'top': parseInt(0 - getOuterTop),
//             'left': 0,
//             'background-color': 'black',
//             'width': '100vw',
//             'z-index': 5000,
//             'height': parseInt(docHeight)
//           });
//       } else {
//         $('body').addClass('overlay-showing');
//         $("#overlay")
//           .css({
//             'opacity': 0,
//             'position': 'fixed',
//             'top': 0,
//             'left': 0,
//             'background-color': 'black',
//             'width': '100vw',
//             'z-index': 5000,
//             'height': parseInt(docHeight)
//           });
//       }
//       $(this).parent().addClass('highlighted_field');
//     }
//   });

//   $(document).on('click', '#overlay', function () {
//     if ($('.pass-content:visible').length) {
//       // console.log('yes');
//       $('.pass-content').slideUp(function () {
//         $('#overlay').remove();
//         $('body').removeClass('overlay-showing');
//         $('.hl-button').parent().removeClass('highlighted_field');
//       });
//     } else {
//       // console.log('no');
//       $('#overlay').remove();
//       $('body').removeClass('overlay-showing');
//       $('.hl-button').parent().removeClass('highlighted_field');
//     }
//   });

//   var roomBlock = $('.room-block ul').first().html();

//   $(document).on('click', '.room-block-plus', function (e) {
//     e.preventDefault();
//     var newRoomBlock = $('<ul>' + roomBlock + '</ul>').appendTo($(this).closest('.room-block'));
//     var totaLRoomCount = $(this).closest('.room-block').find('ul').length;
//     $(newRoomBlock).find('.room-block-title span').text('Room ' + totaLRoomCount);
//     var totalAdults = 0;
//     $(this).closest('.room-block').find('[data-person="adult"]').each(function () {
//       totalAdults += parseFloat($(this).text(), 10);
//       if (totalChilds >= 1) {
//         var totalChildCount = '<i class="child-total">' + totalChilds + '</i> Child, ';
//       }
//       $(this).parents('.passenger-count').find('.pass-ip span').html('<i class="adult-total">' + totalAdults + '</i> Adult, ' + totalChildCount + '<i class="room-total">' + totaLRoomCount + '</i> Room');
//     });

//     var totalChilds = 0;
//     $(this).closest('.room-block').find('[data-person="children"]').each(function () {
//       totalChilds += parseFloat($(this).text(), 10);
//       if (totalChilds >= 1) {
//         var totalChildCount = '<i class="child-total">' + totalChilds + '</i> Child, ';
//       } else {
//         var totalChildCount = ''
//       }
//       $(this).parents('.passenger-count').find('.pass-ip span').html('<i class="adult-total">' + totalAdults + '</i> Adult, ' + totalChildCount + '<i class="room-total">' + totaLRoomCount + '</i> Room');
//     });
//   });


//   $(document).on('click', '.room-block-minus', function (e) {
//     e.preventDefault();
//     var totaLRoomCount = $(this).closest('.room-block').find('ul').length - 1;

//     var totalAdults = 0;
//     $(this).closest('ul').siblings().find('[data-person="adult"]').each(function () {
//       totalAdults += parseFloat($(this).text(), 10);
//       if (totalChilds >= 1) {
//         var totalChildCount = '<i class="child-total">' + totalChilds + '</i> Child, ';
//       }
//       $(this).parents('.passenger-count').find('.pass-ip span').html('<i class="adult-total">' + totalAdults + '</i> Adult, ' + totalChildCount + '<i class="room-total">' + totaLRoomCount + '</i> Room');
//     });

//     var totalChilds = 0;
//     $(this).closest('ul').siblings().find('[data-person="children"]').each(function () {
//       totalChilds += parseFloat($(this).text(), 10);
//       if (totalChilds >= 1) {
//         var totalChildCount = '<i class="child-total">' + totalChilds + '</i> Child, ';
//       } else {
//         var totalChildCount = ''
//       }
//       $(this).parents('.passenger-count').find('.pass-ip span').html('<i class="adult-total">' + totalAdults + '</i> Adult, ' + totalChildCount + '<i class="room-total">' + totaLRoomCount + '</i> Room');
//     });
//     $(this).closest('ul').remove();
//     $('.room-block ul').each(function () {
//       var roomPos = parseInt($(this).index() + 1);
//       $(this).find('.room-block-title span').text('Room ' + roomPos);
//     });
//   });

//   var ageSelect = $('<li class="child-age"><div class="child-age-title">Child <span>1</span> age</div><select><option selected="selected">Age</option><option>Under 1</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option></select></li>');

//   $(document).on('click', '.room-counter .count-plus', function () {
//     var totaLRoomCount = $(this).closest('.room-block').find('ul').length;
//     var getCountAdult = $(this).parent().find('.get-count[data-person="adult"]');
//     var getCountChild = $(this).parent().find('.get-count[data-person="children"]');

//     var getCountAdultValue = parseInt($(getCountAdult).text());
//     var getCountChildValue = parseInt($(getCountChild).text());



//     if (getCountAdultValue <= 19) {
//       var newgetCountAdult = getCountAdultValue + 1;
//     } else {
//       var newgetCountAdult = getCountAdultValue;
//     }
//     if (getCountChildValue <= 5) {
//       var newgetCountChild = getCountChildValue + 1;
//       var countAttr = $(this).parent().find('.get-count').attr('data-person');
//       if (typeof countAttr === 'children' || countAttr === 'children') {
//         // console.log('yes');
//         var newAgeSlect = $(ageSelect).clone().appendTo($(this).closest('ul'));
//         $(newAgeSlect).find('.child-age-title span').text(newgetCountChild);
//       }
//     } else {
//       var newgetCountChild = getCountChildValue;
//     }
//     $(getCountAdult).text(newgetCountAdult);
//     $(getCountChild).text(newgetCountChild);

//     var totalAdults = 0;
//     $(this).parents('.room-block').find('[data-person="adult"]').each(function () {
//       totalAdults += parseFloat($(this).text(), 10);
//       if (totalChilds >= 1) {
//         var totalChildCount = '<i class="child-total">' + totalChilds + '</i> Child, ';
//       }
//       $(this).parents('.passenger-count').find('.pass-ip span').html('<i class="adult-total">' + totalAdults + '</i> Adult, ' + totalChildCount + '<i class="room-total">' + totaLRoomCount + '</i> Room');
//     });
//     var totalChilds = 0;
//     $(this).parents('.room-block').find('[data-person="children"]').each(function () {
//       totalChilds += parseFloat($(this).text(), 10);
//       if (totalChilds >= 1) {
//         var totalChildCount = '<i class="child-total">' + totalChilds + '</i> Child, ';
//       } else {
//         var totalChildCount = ''
//       }
//       $(this).parents('.passenger-count').find('.pass-ip span').html('<i class="adult-total">' + totalAdults + '</i> Adult, ' + totalChildCount + '<i class="room-total">' + totaLRoomCount + '</i> Room');
//     });
//   });

//   $(document).on('click', '.room-counter .count-minus', function () {
//     var totaLRoomCount = $(this).closest('.room-block').find('ul').length;
//     var getCountAdult = $(this).parent().find('.get-count[data-person="adult"]');
//     var getCountChild = $(this).parent().find('.get-count[data-person="children"]');
//     var getCountAdultValue = parseInt($(getCountAdult).text());
//     var getCountChildValue = parseInt($(getCountChild).text());

//     if (getCountAdultValue >= 2) {
//       var newgetCountAdult = getCountAdultValue - 1;
//     } else {
//       var newgetCountAdult = getCountAdultValue;
//     }
//     if (getCountChildValue >= 1) {
//       var newgetCountChild = getCountChildValue - 1;
//       var countAttr = $(this).parent().find('.get-count').attr('data-person');
//       if (typeof countAttr === 'children' || countAttr === 'children') {
//         //console.log('lowering');
//         $(this).closest('ul').find('.child-age').last().remove();
//         // $(newAgeSlect).find('.child-age-title span').text(newgetCountChild);
//       }
//     } else {
//       var newgetCountChild = getCountChildValue;
//     }

//     $(getCountAdult).text(newgetCountAdult);
//     $(getCountChild).text(newgetCountChild);
//     var totalAdults = 0;
//     $(this).parents('.room-block').find('[data-person="adult"]').each(function () {
//       totalAdults += parseFloat($(this).text(), 10);
//       if (totalChilds >= 1) {
//         var totalChildCount = '<i class="child-total">' + totalChilds + '</i> Child, ';
//       }
//       $(this).parents('.passenger-count').find('.pass-ip span').html('<i class="adult-total">' + totalAdults + '</i> Adult, ' + totalChildCount + '<i class="room-total">' + totaLRoomCount + '</i> Room');
//     });
//     var totalChilds = 0;
//     $(this).parents('.room-block').find('[data-person="children"]').each(function () {
//       totalChilds += parseFloat($(this).text(), 10);
//       if (totalChilds >= 1) {
//         var totalChildCount = '<i class="child-total">' + totalChilds + '</i> Child, ';
//       } else {
//         var totalChildCount = ''
//       }
//       $(this).parents('.passenger-count').find('.pass-ip span').html('<i class="adult-total">' + totalAdults + '</i> Adult, ' + totalChildCount + '<i class="room-total">' + totaLRoomCount + '</i> Room');
//     });
//   });


//   $('.passenger-count.basic-counter').each(function () {
//     var adultCount = 0;
//     var youthCount = 0;
//     var childrenCount = 0;
//     var infantCount = 0;
//     var totalCount = 1;
//     var newadultCount = '';
//     var newyouthCount = '';
//     var newchildrenCount = '';
//     var newinfantCount = '';
//     $(this).find('.count-btn').click(function () {
//       var $button = $(this);
//       var oldValue = $button.parent().find(".get-count").text();
//       var getName = $button.parent().find(".get-count").attr('data-person');
//       var TotalValueField = $(this).parents('.passenger-count').find('.pass-ip span');
//       // var getTotalAttr = $('.pass-ip span').attr('data-person-type');
//       // var getTotalValue = $(TotalValueField).html();

//       if ($button.hasClass('count-plus')) {
//         if (totalCount === 10) {
//           return false;
//         } else {
//           if (oldValue < 10) {
//             var newVal = parseFloat(oldValue) + 1;
//             totalCount = totalCount + 1;
//           }
//         }
//       } else {
//         // Don't allow decrementing below zero
//         if (getName === 'adult') {
//           // alert('test');
//           if (oldValue > 1) {
//             var newVal = parseFloat(oldValue) - 1;
//             totalCount = totalCount - 1;
//           } else {
//             newVal = 1;
//           }
//         } else {
//           if (oldValue > 0) {
//             var newVal = parseFloat(oldValue) - 1;
//             totalCount = totalCount - 1;
//           } else {
//             newVal = 0;
//           }
//         }
//       }


//       $button.parent().find(".get-count").text(newVal);

//       if (getName == 'adult') {
//         //  console.log('adult');
//         adultCount = $button.parent().find('span[data-person="adult"]').text();
//         // console.log(adultCount);          
//       } else if (getName == 'youth') {
//         // console.log('youth');
//         youthCount = $button.parent().find('span[data-person="youth"]').text();
//         // console.log(youthCount);
//       } else if (getName == 'children') {
//         //  console.log('children');
//         childrenCount = $button.parent().find('span[data-person="children"]').text();
//         //  console.log(childrenCount);
//       } else {
//         //  console.log('infant');
//         infantCount = $button.parent().find('span[data-person="infant"]').text();
//         //   console.log(infantCount);
//       }


//       if (adultCount >= 1) {
//         newadultCount = adultCount == 1 ? adultCount + ' Adult' : +adultCount + ' Adults';
//       } else {
//         newadultCount = '1 Adult';
//       }
//       if (youthCount >= 1) {
//         newyouthCount = youthCount == 1 ? ', ' + youthCount + ' Youth' : ', ' + youthCount + ' Youths';
//       } else {
//         newyouthCount = '';

//       }
//       if (childrenCount >= 1) {
//         newchildrenCount = childrenCount == 1 ? ', ' + childrenCount + ' Children' : ', ' + childrenCount + ' Childrens';
//       } else {
//         newchildrenCount = '';
//       }
//       if (infantCount >= 1) {
//         newinfantCount = infantCount == 1 ? ', ' + infantCount + ' Infant' : ', ' + infantCount + ' Infants';
//       } else {
//         newinfantCount = '';
//       }

//       //  console.log(totalCount);

//       $(TotalValueField).text(newadultCount + newyouthCount + newchildrenCount + newinfantCount);

//     });
//   });


//   $('.pass-ip').on('click', function () {
//     $(this).parent().find('.pass-content').slideDown(function () {
//       var getPassContent = $(this).parent().find('.pass-content');
//       var passContentPos = $(getPassContent).offset().top - $(window).height() + $(getPassContent).height() + 30;
//       // console.log(passContentPos);
//       $("body, html").animate({ scrollTop: passContentPos }, 'fast');
//     });
//   });

//   $('.done-btn a').click(function (e) {
//     e.preventDefault();
//     // $('.pass-content').slideUp();
//     $('#overlay').trigger('click');
//   });
//   $(document).on('click', '.SumoSelect li.opt', function () {
//     $('#overlay').trigger('click');
//   });

//   // $('select.hl-button').on('change', function () {
//   //   console.log('test');
//   //   $('#overlay').trigger('click');
//   // });




//   var cloneElements = $('.multi-form-holder').html();
//   $('.search_test').SumoSelect({ search: true, searchText: 'Search here..' });
//   $('.best-reviews-dp').SumoSelect();
//   $('.multi-form-holder').each(function () {
//     var multiNumber = 0;
//     var nameCounter = 1;

//     //   $('.trip-select').SumoSelect();
//     // $('.passenger-select').SumoSelect();
//     //  $('.class-select').SumoSelect();

//     $(this).parent().find('.multi-add-btn a').click(function (e) {
//       //  alert('test');
//       e.preventDefault();
//       if (multiNumber < 2) {
//         nameCounter++;
//         var getAppendDiv = $(this).parents('.tab-block').find('.multi-form-holder');
//         var newClonedItem = $(cloneElements).clone().appendTo(getAppendDiv);
//         $(newClonedItem).find('input, select').val('');
//         $(newClonedItem).find('input, select').each(function () {
//           var getName = $(this).attr('name');
//           $(this).attr('name', getName + '_' + nameCounter);
//         });

//         // console.log(newClonedItem);

//         $(newClonedItem).find('.search_test').SumoSelect({ search: true, searchText: 'Search here..' });
//         $('<div class="multi-form-close">close</div>').appendTo(newClonedItem);
//         var endDateStart = new Date();
//         var endPicker = $(newClonedItem).find('.endDate').datepicker({
//           autoClose: true,
//           minDate: new Date(),
//           onHide: function (dp, animationCompleted) {
//             $('#overlay').trigger('click');
//           },
//           onShow: function (dp, animationCompleted) {
//             if (!animationCompleted) {
//             } else {
//               var datepickerPos = $('.datepickers-container .datepicker.active').offset().top - $(window).height() + $('.datepickers-container .datepicker.active').height() + 30;
//               $("body, html").animate({ scrollTop: datepickerPos }, 'fast');
//             }
//           },
//         });

//         $(newClonedItem).find('.startDate').datepicker({
//           minDate: new Date(),
//           autoClose: true,
//           onSelect: function onSelect(fd, date) {
//             endDateStart = date;
//             $('.endDate').datepicker({
//               minDate: endDateStart
//             });
//           },
//           onHide: function (dp, animationCompleted) {
//             $('#overlay').trigger('click');
//           },
//           onShow: function (dp, animationCompleted) {
//             if (!animationCompleted) {
//             } else {
//               var datepickerPos = $('.datepickers-container .datepicker.active').offset().top - $(window).height() + $('.datepickers-container .datepicker.active').height() + 30;
//               $("body, html").animate({ scrollTop: datepickerPos }, 'fast');
//             }
//           },
//         });
//         multiNumber++;
//         //  console.log('multi '+multiNumber);
//         if (multiNumber == 2) {
//           $(this).addClass('multi-disabled');
//         }
//         //console.log('multi '+multiNumber);
//       } else {
//         return false;
//       }
//     });


//     $(document).on('click', '.multi-form-close', function () {
//       var getMultiFormItem = $(this).parent('.multi-form-item');
//       $(getMultiFormItem).fadeOut(function () {
//         $(getMultiFormItem).remove();
//       });
//       multiNumber--;
//       nameCounter--;
//       if (multiNumber < 2) {
//         $('.multi-add-btn a').removeClass('multi-disabled');
//       }
//       // console.log(multiNumber);
//     });
//   });


//   //   $('select.hl-button').on('change', function(){
//   //     $("#overlay").trigger('click');
//   //  })
// });
// $(window).load(function () {
//   if (window.location.hash) {
//     var getHash = window.location.hash;
//     console.log(getHash);
//     // Fragment exists
//     $('html, body').animate({
//       scrollTop: $(getHash).offset().top - 10
//     }, 1000);
//   }
// });

$(document).ready(function () {
  $('.logo-menu ul li a').click(function (e) {
    var getLink = $(this).attr('href').split('#')[1];
    console.log(getLink);
    if ($('#' + getLink).length) {
      e.preventDefault();
      $('html, body').animate({
        scrollTop: $('#' + getLink).offset().top - 10
      }, 1000);
      return false;
    }
  });

  $('.StickyFiltterTop li a').click(function(e){
    e.preventDefault();
    var currLink = $(this);
    $('.StickyFiltterTop li a').not(currLink).removeClass('active');
    $(currLink).addClass('active');
  });

});
// Lazyload script

var lazy = [];
// registerListener('load', setLazy);
// registerListener('load', lazyLoad);
registerListener('scroll', lazyLoad);
registerListener('resize', lazyLoad);
function setLazy() {
  // document.getElementById('listing').removeChild(document.getElementById('viewMore'));
  // document.getElementById('nextPage').removeAttribute('class');

  lazy = document.getElementsByClassName('lazy');
  //  console.log('Found ' + lazy.length + ' lazy images');
}
function lazyLoad() {
  for (var i = 0; i < lazy.length; i++) {
    if (isInViewport(lazy[i])) {
      if (lazy[i].getAttribute('data-src')) {
        lazy[i].src = lazy[i].getAttribute('data-src');
        lazy[i].removeAttribute('data-src');
      }
    }
  }

  cleanLazy();
}
function cleanLazy() {
  lazy = Array.prototype.filter.call(lazy, function (l) { return l.getAttribute('data-src'); });
}
function isInViewport(el) {
  var rect = el.getBoundingClientRect();

  return (
    rect.bottom >= 0 &&
    rect.right >= 0 &&
    rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.left <= (window.innerWidth || document.documentElement.clientWidth)
  );
}
function registerListener(event, func) {
  if (window.addEventListener) {
    window.addEventListener(event, func)
  } else {
    window.attachEvent('on' + event, func)
  }
}

// Lazyload script end
function initMap() {
  var nam = {lat:29.971274, lng: 30.950121};
  var map = new google.maps.Map(document.getElementById('map2'), {
    zoom:5,
    center: nam
  });
  var marker = new google.maps.Marker({
    position: nam,
    map: map
  });
}
