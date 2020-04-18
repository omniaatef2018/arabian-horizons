<script>
  $( document ).ready(function() {
        $('.things-dubai-slider').slick({
              dots: false,
              arrows: true,
              infinite: true,
              slidesToShow: 1,
              slidesToScroll: 1,
              draggable:false
        });
        
        $('.popular-slider').slick({
              dots: true,
              arrows: false,
              infinite: true,
              slidesToShow: 1,
              slidesToScroll: 1,
        });
      
           $('.travel-with-us ul li a').click(function(e){
            var getLink = $(this).attr('href').split('#')[1];
            console.log(getLink);
            e.preventDefault();
            $('html, body').animate({
                scrollTop: $('#'+getLink).offset().top - 180
            }, 1000);
            return false;
        }); 
    
    });
</script>