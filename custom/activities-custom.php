<script>
$(window).on('load', function(){
  //  rbTitleHeight();
  //  testiHeight();

    var getTextHeight = $('.who-desc').outerHeight();
    //  console.log(getTextHeight);
      $('.who-desc').css('height','130px');
      //   $('#first').height(curHeight).animate({height: autoHeight}, 1000);
      $('.who-more a').on('click', function(e){
          e.preventDefault();
          if($(this).hasClass('hide-who-text')){
            $('.who-desc').animate({height: '130px'}, 600, function(){          
              $('.who-more a').removeClass('hide-who-text');
              $('.who-more a i').toggleClass('fa-angle-up fa-angle-down');
              $(this).removeClass('desc-full');
            });
          } else {
            $('.who-desc').animate({height: getTextHeight}, 600, function(){
              $('.who-more a').addClass('hide-who-text');
              $('.who-more a i').toggleClass('fa-angle-down fa-angle-up');
              $(this).addClass('desc-full');
            });
          }          
      });

});
</script>

<script>
    
    $('.sort-by').SumoSelect();
    
    function checkParents($li, state) {
      var $siblings = $li.siblings();
      var $parent = $li.parent().closest('li');
      state = state && $siblings.children('label').find('input').prop('checked');
      $parent.children('label').find('input').prop('checked', state);
      if ($parent.parents('li').length)
        checkParents($parent, state);
    }

    $('.select-drop input').change(function () {
      var $cb = $(this);
      var $li = $cb.closest('li');
      var state = $cb.prop('checked');
        
      // check all children
      $li.find('input').prop('checked', state);

      // check all parents, as applicable
        
//      if ($li.parents('li').length)
//        checkParents($li, state);
    });
   
        $('.selectDp').on("click", function(){
          $('.select-drop').slideToggle();
        });  
         
     
    
        $('.slt-btn').on("click", function(){
            var inputValue = '';
            $('.select-drop input').each(function(){
                if($(this).is(':checked')) {
                     inputValue += $(this).val() + ' - ';
                }
                
            });
            if(inputValue == ''){
               $( ".selected-ctgry" ).html( '<span> Select one or more categories </span>' ); 
            }
            else{
                $( ".selected-ctgry" ).html( '<span>'+ inputValue +'</span>' );
            }
            
           $('.select-drop').slideUp();
        });
    
</script>


    <script src="<?php echo base_url('assets/js/wNumb.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/nouislider.min.js'); ?>"></script>

<!--
    <script src="js/sticky-kit.min.js"></script>

    <script>
      $(document).ready(function(){
           if ($(window).width() > 1040) {
                $("#StickyFiltter").stick_in_parent();
           }
      });
    </script>
-->

<script src="<?php echo base_url('assets/'); ?>js/jquery.sticky.js"></script>
<!-- <script>
  $(document).ready(function(){
       if ($(window).width() > 1040) {
           $(".StickyFiltter").sticky({topSpacing:100});
       }
  });
</script> -->

<script>
    
    $(document).ready(function(){
        $('.menu-slider').slick({
            dots: false,
            infinite: false,
            speed: 1000,
            slidesToShow: 6,
            //slidesToScroll: 1,
            //variableWidth: true,
            // swipeToSlide: true,
            arrows: true,
            mobileFirst: true,
            responsive: [
                {
                breakpoint: 1200,
                    settings: {
                        slidesToShow: 6,
                    }
                },
                {
                breakpoint: 960,
                    settings: {
                        slidesToShow: 4,
                    }
                },
                {
                breakpoint: 840,
                    settings: {
                        slidesToShow: 4,
                }
                },
                {
                breakpoint: 640,
                    settings: {
                        slidesToShow: 3,
                }
                },
                {
                breakpoint: 520,
                    settings: {
                        slidesToShow: 2,
                }
                },
                {
                breakpoint: 380,
                    settings: {
                        slidesToShow: 1,
                }
                },
            ]
        });
    });
</script>

<script>


$('body').addClass('activity-page'); // Explore section will load on pages where <body> has 'activity-page' class
// limiting search functionality only in Activities pages. Here, i am just adding a class to <body> tag onload. Later, if you are integrating it into any framework, you can remove this line of code, and initialize scrtipt based on body class(es) (main.js line 63)

$(document).ready(function(){

    $('.more-abt-text a').on('click', function(e){
        e.preventDefault();        
        if($('.abt-dubai-text').hasClass('full-view')){
            $(this).text('More >');
            $('.abt-dubai-text').removeClass('full-view');
        } else {
            $(this).text('Less >');
            $('.abt-dubai-text').addClass('full-view');
        }       
        
    });

  var slider = document.getElementById('slider-range');

  noUiSlider.create(slider, {
      start: [0, 50],
      connect: true,
      range: {
          'min': 0,
          'max': 100
      },
      
      format: wNumb({
        decimals: 0,
        thousand: ',',
        prefix: '$',
    })
  });
    
    
    var paddingMin = document.getElementById('value-min');
    var paddingMax = document.getElementById('value-max');

    slider.noUiSlider.on('update', function (values, handle) {
        if (handle) {
            paddingMax.innerHTML = values[handle];
        } else {
            paddingMin.innerHTML = values[handle];
        }
    });
    
  });

</script>

<script>
    var tomorrow = new Date();
    var tomorrowDate = tomorrow.setDate(tomorrow.getDate() + 1);
    
    $('.Availability').datepicker({
      minDate: new Date(),
      autoClose: true,
      todayButton: new Date(),
      tomorrowButton: tomorrow
    });
</script>

<script>
    
    
    $(document).click(function(e){
        var container = $(".range-slider-wrap, .price-ftr");

        // if the target of the click isn't the container nor a descendant of the container
        if (!container.is(e.target) && container.has(e.target).length === 0) 
        {
            $('.range-slider-wrap').slideUp();
        }
     });

    $(document).click(function(e){
        var container = $(".select-drop, .selectDp");

        // if the target of the click isn't the container nor a descendant of the container
        if (!container.is(e.target) && container.has(e.target).length === 0) 
        {
            $('.select-drop').slideUp();
        }
    });
    
     $(document).ready(function(){
        $('.price-ftr').on("click", function(){
          $('.range-slider-wrap').slideToggle();
        }); 
         
        $('.ok-btn').on("click", function(){
            var valueMin = $('#value-min').text();
            var valueMax = $('#value-max').text();
            
            $('.price-ftr').text(valueMin + ' to ' + valueMax);
            $('.range-slider-wrap').slideUp();
            
        });
         
         
        $('.category-slider').slick({
          dots: false,
          infinite: false,
          speed: 300,
          slidesToShow: 5,
          slidesToScroll: 1,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
        });
    
     }); 
</script>