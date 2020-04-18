<script>
  
    $('.story-pop').magnificPopup({
      removalDelay: 500, //delay removal by X to allow out-animation
      callbacks: {
        beforeOpen: function() {
           this.st.mainClass = 'mfp-zoom-in';
        }
      },
      midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
    });
</script> 
    
<script>
    function makeNewsSameHeight(){
      var maxHeightNews = 0;
      $(".ab-news-content").each(function(){
        if ($(this).height() > maxHeightNews) { maxHeightNews = $(this).height(); }
      });
      $(".ab-news-content").height(maxHeightNews);
    }


function makeHeightSame(){
    var maxHeight2 = 0;
      $(".story-item-inner").each(function(){
        if ($(this).height() > maxHeight2) { maxHeight2 = $(this).height(); }
      });
      $(".story-item-inner").height(maxHeight2);
      // $(".story-item-inner").css('padding-bottom',maxHeight2);

      $('.story-item:nth-child(odd) .story-item-wrap').each(function(){
        // var getHeight = $(this).height();
        $(this).css('margin-bottom',maxHeight2 + 100);
      });
      
      $('.story-item:nth-child(even) .story-item-wrap').each(function(){
        // var getHeight = $(this).height();
        $(this).css('margin-top',maxHeight2 + 100);
      });


      var maxHeight = 0;
      $(".story-item").each(function(){
        if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
      });
      $(".story-item").height(maxHeight);
}


$(window).on('load', function() {
  //makeHeightSame();
  makeNewsSameHeight();
  //console.log('on load');
});

$(document).ready(function(){
  
    $('.section-news-slider').on('init', function(event, slick){
       makeNewsSameHeight();
    });

    $('.section-news-slider').slick({
          dots: false,
          arrows: true,
          infinite: true,
          slidesToShow: 3,
          slidesToScroll: 1,
          responsive: [              
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




    $('.story-slider').on('init', function(event, slick){
       // console.log("slider initialized");
        makeHeightSame();
    });

    $('.story-slider').slick({
          dots: false,
          arrows: true,
          infinite: false,
          slidesToShow: 4,
          slidesToScroll: 1,
          swipeToSlide: true,
          swipe: false,
          autoplay: false,
          responsive: [   
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1
              }
            },           
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            },              
            {
              breakpoint: 520,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }              
          ]
    });

});
</script>