<script>
$(document).ready(function(){
     $('.awards-slider-for').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          asNavFor: '.awards-slider-nav',
          swipe:true
    });
    $('.awards-slider-nav').slick({
          slidesToShow: 3,
          slidesToScroll: 1,
          asNavFor: '.awards-slider-for',
          dots: false,
          centerMode: true,
          swipe:false,
          responsive: [
            {
              breakpoint: 630,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            },
        ]
          
    });
});

</script>