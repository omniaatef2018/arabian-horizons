    <script src="<?php echo base_url('assets/js/wNumb.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/nouislider.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.sticky.js'); ?>"></script>
<script>
$('body').addClass('activity-page'); // Explore section will load on pages where <body> has 'activity-page' class
// limiting search functionality only in Activities pages. Here, i am just adding a class to <body> tag onload. Later, if you are integrating it into any framework, you can remove this line of code, and initialize scrtipt based on body class(es) (main.js line 63)
$(document).ready(function(){
    $("#check1").click(function(){
	     if ($(this).is(':checked')) {
         	$('#cat1 li input,#cat1 ul li input').attr('checked',true);
    	} else {
         	$('#cat1 li input,#cat1 ul li input').removeAttr('checked');
    	}
    });

    $('.nested input[type=checkbox]').click(function () {
        $(this).parent().find('li input[type=checkbox]').prop('checked', $(this).is(':checked'));
        var sibs = false;
        $(this).closest('ul').children('li').each(function () {
            if($('input[type=checkbox]', this).is(':checked')) sibs=true;
        })
        $(this).parents('ul').prev().prop('checked', sibs);
    });


/*
    if ($(window).width() > 1040) {
        $(".StickyFiltter").sticky({topSpacing:0});
    }
  
    $('.menu-slider').slick({
        dots: false,
        infinite: false,
        speed: 1000,
         slidesToShow: 6,
         slidesToScroll: 1,
       // variableWidth: true,
        // swipeToSlide: true,
        arrows: true,
        responsive: [
            {
            breakpoint: 1200,
                settings: {
                    slidesToShow: 5,
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
*/

  var slider = document.getElementById('slider-range');

  noUiSlider.create(slider, {
      start: [<?php if($this->input->get('pmin')!=""){echo $this->input->get('pmin');}else{echo '99';} ?>, <?php if($this->input->get('pmax')!=""){echo $this->input->get('pmax');}else{echo '2999';} ?>],
      connect: true,
      range: {
          'min': 99,
          'max': 2999
      },
      
      format: wNumb({
        decimals: 0,
        thousand: ',',
        prefix: 'AED ',
    })
  });
    
    
    var paddingMin = document.getElementById('value-min');
    var paddingMax = document.getElementById('value-max');

    slider.noUiSlider.on('update', function (values, handle) {
        if (handle) {
            paddingMax.innerHTML = values[handle];
            //ur current uri + &price-max=values[handle]
        } else {
            paddingMin.innerHTML = values[handle];
            //ur current uri + &price-min=values[handle]
        }
    });
    
    slider.noUiSlider.on('change', function( values, handle ) {
    	var minArr = $('#value-min').text().split(' ');
    	var maxArr = $('#value-max').text().split(' ');

        var min = minArr[1];
        var max = maxArr[1];
        
        min = min.replace(/,/g, '');
        max = max.replace(/,/g, '');
    	
    	var url = '<?php echo current_url().'?'; ?>';
        var qs = '<?php echo $_SERVER['QUERY_STRING']; ?>';
        
        if (qs!="") {
            if (qs.indexOf("pmin=") >= 0 || qs.indexOf("pmax=") >= 0){
                var regEx = /([?&]pmin)=([^#&]*)/g;
                var regEx2 = /([?&]pmax)=([^#&]*)/g;
                
                var nqs = qs.replace(regEx, '$1='+min);
                nqs = nqs.replace(regEx2, '$1='+max);
                window.location.href=url+nqs;
            }else{
               window.location.href=url+qs+'&pmin='+min+'&pmax='+max; 
            }
        }else{
            window.location.href=url+qs+'pmin='+min+'&pmax='+max; 
        }
    });
  });


    $('.accordion-ftr a').click(function(){
        $(this).toggleClass('active');
        $(this).siblings().toggleClass('active');
    });
    

</script>

<script>
      $('#sorting').on('change', function() {
        var url = '<?php echo current_url().'?'; ?>';
        var qs = '<?php echo $_SERVER['QUERY_STRING']; ?>';
        
        if (qs!="") {
            if (qs.indexOf("sort=") >= 0){
                var regEx = /([?&]sort)=([^#&]*)/g;
                var nqs = qs.replace(regEx, '$1='+this.value);
                window.location.href=url+nqs; 
            }else{
               window.location.href=url+qs+'&sort='+this.value; 
            }
        }else{
            window.location.href=url+qs+'sort='+this.value;
        }
     });
</script>