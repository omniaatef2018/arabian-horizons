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

<script>
$(document).ready(function(){
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
         

     }); 


</script>