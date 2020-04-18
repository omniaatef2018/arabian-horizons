+<script src="<?php echo base_url('assets/js/sticky-kit.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.sticky.min.js'); ?>"></script>
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
        $('#select-item2').SumoSelect();

        $('.accordion-set .sl-btn').click(function(e){
            e.preventDefault();
            var getId = $(this).parents('.accordion-set').find('h5').attr('id');
            console.log(getId);
            var getListText = $('select option[value="'+getId+'"]').text();
            console.log(getListText);
            $('.packages-box .options').find('li').each(function(){
                if($(this).find('label').text() == getListText){
                 //   console.log('found');
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

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery-ui-custom.css'); ?>">
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
$('body').addClass('activity-page'); // Explore section will load on pages where <body> has 'activity-page' class
// limiting search functionality only in Activities pages. Here, i am just adding a class to <body> tag onload. Later, if you are integrating it into any framework, you can remove this line of code, and initialize scrtipt based on body class(es) (main.js line 63)
    $(document).ready(function() {
        var today = new Date();
      
        var blocked_days = <?php
        
        function get_blocked_date($value) {return $value['date_blocked'];}
        
        echo json_encode(array_map("get_blocked_date", $blocked_days)); ?>;
        
        $('#activity-date').datepicker({
        minDate: today,
        autoClose: true,
        dateFormat: 'dd/mm/yy',
        beforeShowDay: function(date){
             var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
             return [$.inArray(string, blocked_days) == -1];
         }
        });
        
        $('#ui-datepicker-div').css({});
        
        //$( "#activity-date" ).datepicker("option", "minDate", new Date(2020, 1, 25) );
        

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

<script>
    function calcTime(offset) {
        var d = new Date();
        var utc = d.getTime() + (d.getTimezoneOffset() * 60000);
        var nd = new Date(utc + (3600000*offset));
        return nd;
    }

    var BASE_URL = '<?php echo base_url(); ?>';
    
    <?php if($has_sharing_private){ ?>
        $('#select-item').on('change', function() {
            $('#topts').show();
            $("#select-item2").prop('disabled', false);
            
            var option_id = this.value;
            var max_pax = 0;
            
            var URL_PAX = BASE_URL+'activity/get_option_details/'+option_id;
            
            $.get(URL_PAX, function(data, status){
                var option_det = JSON.parse(data);
                max_pax = option_det.max_pax;
            });
            
            var URL = BASE_URL+'activity/get_option_tour_types/'+option_id;
           
            
            $('.ajaxloader').show();
            
            $.get(URL, function(data, status){
                var types = JSON.parse(data);
                $("#select-item2").empty();
                for(var i=0; i<types.length; i++){
    				 $('#select-item2')[0].sumo.add(types[i].ticket_type_id, types[i].tour_type);
                }
            
            $("#select-item2").attr("placeholder",types[0].tour_type);
            $("#select-item2")[0].sumo.enable();
            $("#select-item2")[0].sumo.reload();
               
               
               URL = BASE_URL+'activity/get_option_price/'+option_id; 
              
                  $.get(URL, function(data, status){
                        var price = JSON.parse(data);
                        $("#option-price").html(price.adult_price);
                       
                        $("#tt_name").html(price.ticket_type_name);
                        $('.ajaxloader').hide();
                        
                        $('#select-item2').find('option:nth-child(1)').prop('selected',true).trigger('change');
                  });
               
            });
        
    });
        
        $('#select-item2').on('change', function() {
            $("#activity-date").prop('disabled', false);
            
            var option_id = this.value;
            var max_pax = 0;
            var URL = BASE_URL+'activity/get_option_details/'+option_id; 
             
            $('.ajaxloader').show();
             $.get(URL, function(data, status){
                var option = JSON.parse(data);
                
                max_pax = option.max_pax;
                    
                if(option.type=="Private"){
                    $("#pax_counters").css("display", "block");
                    $("#unit_counter").css("display", "block");
                    
                    $("#unit_name").html(option.unit_name);
                    $("#count_type").val('units');
                }
                
                if(option.adult_age==" "){
                    $("#adult_age").html("("+option.adult_height+")");
                }else{
                    $("#adult_age").html("("+option.adult_age+"+ years)"); 
                }
                    
                if(option.child_age=="NA"){
                    $("#pax_child").prop('disabled', true);
                    $("#child_dec").css("display", "none");
                    $("#child_inc").css("display", "none");
                    $("#child_age").html("(NA)");
                    $("#child_box").hide();
                }else if(option.child_age==" "){
                    $("#child_age").html("("+option.child_height+")");
                }else{
                    $("#child_age").html("("+option.child_age+")");
                }
                
                if(option.infant_age=="NA"){
                    $("#pax_infant").prop('disabled', true);
                    $("#infant_dec").css("display", "none");
                    $("#infant_inc").css("display", "none");
                    $("#infant_box").hide();
                }
                
                if(option.cutoff_day!="NA"){
                    var activity_local_date = calcTime(4);
                    var activity_local_time = activity_local_date.toTimeString().split(' ')[0];
                    var day = activity_local_date.getDate();
                    var month = activity_local_date.getMonth();
                    var year = activity_local_date.getFullYear();
                    
                    if(option.cutoff_day==0){
                        if(option.cutoff_time < activity_local_time){ //time of booking has passed
                            $("#activity-date").datepicker("option", "minDate", new Date(year.toString(), month.toString(), (day+1).toString()));
                        }else{
                            $("#activity-date").datepicker("option", "minDate", new Date(year.toString(), month.toString(), (day).toString()));
                        }
                    }else if(option.cutoff_day==1){
                        if(option.cutoff_time < activity_local_time){ //time of booking has passed
                            $("#activity-date").datepicker("option", "minDate", new Date(year.toString(), month.toString(), (day+2).toString()));
                        }else{
                            $("#activity-date").datepicker("option", "minDate", new Date(year.toString(), month.toString(), (day+1).toString()));
                        }
                        
                    }
                }
                
                $("#pax_adult").attr({"value" : option.min_pax,"min" : option.min_pax});
                
                 URL = BASE_URL+'activity/get_option_price/'+option_id; 
              
                  $.get(URL, function(data, status){
                        var price = JSON.parse(data);
                        $("#option-price").html(price.adult_price);
                        if(option.type=="Private"){
                            if(max_pax>1){
                                $("#option-for").html('for '+max_pax+' people');
                            }else{
                                $("#option-for").html('for '+max_pax+' person');
                            }
                        }
                        $("#tt_name").html(price.ticket_type_name);
                        if(option.type=="Sharing"){
                          $("#pp").hide();
                          $("#adp").show();
                          $("#chp").show();
                          $("#inp").show();
                            
                          $("#adp").html('AED '+price.adult_price);
                          $("#chp").html('AED '+price.child_price);
                          $("#inp").html('AED '+price.infant_price);
                        }else{
                          $("#adp").hide();
                          $("#chp").hide();
                          $("#inp").hide();
                          $("#pp").show();
                          $("#ppp").html(price.adult_price);
                          $("#pmp").html(option.max_pax);  
                        }
                        
                        $('.ajaxloader').hide();
                  });
              });
        });
        
         $('#add-to-cart').on('click', function() {
             
        var option1 = $('#select-item').find(":selected").val();
        var option = $('#select-item2').find(":selected").val();
        var date = $('#activity-date').val();
        var adult = $('#pax_adult').val();
        var child = $('#pax_child').val();
        var infant = $('#pax_infant').val();
        var count_type = $("#count_type").val();
        var qty = $("#unit_count").val();
        
        var min_pax = $('#pax_adult').attr('min');
        
        var err = 0;
        
        if(option1=="Select"){
            $('.SelectBox').css("border", "1px solid red");
            err++;
        }else{
            $('.SelectBox').css("border", "1px solid rgba(109,110,112,0.2)");
        }
        
        if(date==""){
            $('#activity-date').css("border", "1px solid red");
            err++;
        }else{
            $('#activity-date').css("border", "1px solid rgba(109,110,112,0.2)");
        }
        
        if(count_type=="pax"){
            if(adult<min_pax){
                err++;
                alert('Selected option requires at least '+min_pax+' people to book');
             }
        }
        
        if(err==0){
            $('.ajax-ajaxloader').show();
            $('#add-to-cart').prop('disabled', true);
            $('#book-now').prop('disabled', true);
            
            URL = BASE_URL+'cart/addtocart'; 
            
            $.post(URL, {activity_id: option, date: date, adult: adult, child: child, infant: infant, qty: qty, redirect: 'cart'}, function(result){
               // res = JSON.parse(result);
              // window.location.replace(res);
              alert('Activity has been added to cart');
              $('.ajax-ajaxloader').hide();
              $('#add-to-cart').prop('disabled', false);
              $('#book-now').prop('disabled', false);
            });
        }
    });
    
    $('#book-now').on('click', function() {
        
        var option1 = $('#select-item').find(":selected").val();
        var option = $('#select-item2').find(":selected").val();
        var date = $('#activity-date').val();
        var adult = $('#pax_adult').val();
        var child = $('#pax_child').val();
        var infant = $('#pax_infant').val();
        var count_type = $("#count_type").val();
        var qty = $("#unit_count").val();
        
        var min_pax = $('#pax_adult').attr('min');
        
        var err = 0;
        
        if(option1=="Select"){
            $('.SelectBox').css("border", "1px solid red");
            err++;
        }else{
            $('.SelectBox').css("border", "1px solid rgba(109,110,112,0.2)");
        }
        
        if(date==""){
            $('#activity-date').css("border", "1px solid red");
            err++;
        }else{
            $('#activity-date').css("border", "1px solid rgba(109,110,112,0.2)");
        }
        
        if(count_type=="pax"){
            if(adult<min_pax){
                err++;
                alert('Selected option requires at least '+min_pax+' people to book');
             }
        }
        
        if(err==0){
            $('.book-ajaxloader').show();
            $('#add-to-cart').prop('disabled', true);
            $('#book-now').prop('disabled', true);
            
            URL = BASE_URL+'cart/addtocart'; 
            
            $.post(URL, {activity_id: option, date: date, adult: adult, child: child, infant: infant, qty: qty, redirect: 'pay'}, function(result){
                res = JSON.parse(result);
                window.location.replace(res);
            });
        }
    });
        
        
    <?php }else{ ?>
    
        $('#select-item').on('change', function() {
            $("#activity-date").prop('disabled', false);
            
            var option_id = this.value;
            var max_pax = 0;
            var URL = BASE_URL+'activity/get_option_details/'+option_id; 
             
            $('.ajaxloader').show();
             $.get(URL, function(data, status){
                var option = JSON.parse(data);
                
                max_pax = option.max_pax;
                    
                if(option.type=="Private"){
                    $("#pax_counters").css("display", "block");
                    $("#unit_counter").css("display", "block");
                    
                    $("#unit_name").html(option.unit_name);
                    $("#count_type").val('units');
                }
                
                if(option.adult_age==" "){
                    $("#adult_age").html("("+option.adult_height+")");
                }else{
                    $("#adult_age").html("("+option.adult_age+"+ years)"); 
                }
                
                    
                if(option.child_age=="NA"){
                    $("#pax_child").prop('disabled', true);
                    $("#child_dec").css("display", "none");
                    $("#child_inc").css("display", "none");
                    $("#child_age").html("(NA)");
                    $("#child_box").hide();
                }else if(option.child_age==" "){
                    $("#child_age").html("("+option.child_height+")");
                }else{
                    $("#child_age").html("("+option.child_age+")");
                }
                
                if(option.infant_age=="NA"){
                    $("#pax_infant").prop('disabled', true);
                    $("#infant_dec").css("display", "none");
                    $("#infant_inc").css("display", "none");
                    $("#infant_box").hide();
                }
                
                if(option.cutoff_day!="NA"){
                    var activity_local_date = calcTime(4);
                    var activity_local_time = activity_local_date.toTimeString().split(' ')[0];
                    var day = activity_local_date.getDate();
                    var month = activity_local_date.getMonth();
                    var year = activity_local_date.getFullYear();
                    
                    if(option.cutoff_day==0){
                        if(option.cutoff_time < activity_local_time){ //time of booking has passed
                            $("#activity-date").datepicker("option", "minDate", new Date(year.toString(), month.toString(), (day+1).toString()));
                        }else{
                            $("#activity-date").datepicker("option", "minDate", new Date(year.toString(), month.toString(), (day).toString()));
                        }
                    }else if(option.cutoff_day==1){
                        if(option.cutoff_time < activity_local_time){ //time of booking has passed
                            $("#activity-date").datepicker("option", "minDate", new Date(year.toString(), month.toString(), (day+2).toString()));
                        }else{
                            $("#activity-date").datepicker("option", "minDate", new Date(year.toString(), month.toString(), (day+1).toString()));
                        }
                        
                    }
                }
                
                $("#pax_adult").attr({"value" : option.min_pax,"min" : option.min_pax});
                
                 URL = BASE_URL+'activity/get_option_price/'+option_id; 
              
                  $.get(URL, function(data, status){
                        var price = JSON.parse(data);
                        $("#option-price").html(price.adult_price);
                        if(option.type=="Private"){
                            if(max_pax>1){
                                $("#option-for").html('for '+max_pax+' people');
                            }else{
                                $("#option-for").html('for '+max_pax+' person');
                            }
                        }
                        
                        $("#tt_name").html(price.ticket_type_name);
                        
                        if(option.type=="Sharing"){
                          $("#pp").hide();
                          $("#adp").show();
                          $("#chp").show();
                          $("#inp").show();
                            
                          $("#adp").html('AED '+price.adult_price);
                          $("#chp").html('AED '+price.child_price);
                          $("#inp").html('AED '+price.infant_price);
                        }else{
                          $("#adp").hide();
                          $("#chp").hide();
                          $("#inp").hide();
                          $("#pp").show();
                          $("#ppp").html(price.adult_price);
                          $("#pmp").html(option.max_pax);  
                        }
                        
                        $('.ajaxloader').hide();
                  });
              });
        });
        
         $('#add-to-cart').on('click', function() {
        var option = $('#select-item').find(":selected").val();
        var date = $('#activity-date').val();
        var adult = $('#pax_adult').val();
        var child = $('#pax_child').val();
        var infant = $('#pax_infant').val();
        var count_type = $("#count_type").val();
        var qty = $("#unit_count").val();
        
        var min_pax = $('#pax_adult').attr('min');
        
        var err = 0;
        
        if(option=="Select"){
            $('.SelectBox').css("border", "1px solid red");
            err++;
        }else{
            $('.SelectBox').css("border", "1px solid rgba(109,110,112,0.2)");
        }
        
        if(date==""){
            $('#activity-date').css("border", "1px solid red");
            err++;
        }else{
            $('#activity-date').css("border", "1px solid rgba(109,110,112,0.2)");
        }
        
        if(count_type=="pax"){
            if(adult<min_pax){
                err++;
                alert('Selected option requires at least '+min_pax+' people to book');
             }
        }
        
        if(err==0){
            $('.btn-ajaxloader').show();
            $('#add-to-cart').prop('disabled', true);
            $('#book-now').prop('disabled', true);
            
            URL = BASE_URL+'cart/addtocart'; 
            
            $.post(URL, {activity_id: option, date: date, adult: adult, child: child, infant: infant, qty: qty, redirect: 'cart'}, function(result){
                //res = JSON.parse(result);
                //window.location.replace(res);
                alert('Activity has been added to cart');
                $('.ajax-ajaxloader').hide();
                $('#add-to-cart').prop('disabled', false);
                $('#book-now').prop('disabled', false);
            });
        }
    });
    
    $('#book-now').on('click', function() {

        var option = $('#select-item').find(":selected").val();
        var date = $('#activity-date').val();
        var adult = $('#pax_adult').val();
        var child = $('#pax_child').val();
        var infant = $('#pax_infant').val();
        var count_type = $("#count_type").val();
        var qty = $("#unit_count").val();
        
        var min_pax = $('#pax_adult').attr('min');
        
        var err = 0;
        
        if(option=="Select"){
            $('.SelectBox').css("border", "1px solid red");
            err++;
        }else{
            $('.SelectBox').css("border", "1px solid rgba(109,110,112,0.2)");
        }
        
        if(date==""){
            $('#activity-date').css("border", "1px solid red");
            err++;
        }else{
            $('#activity-date').css("border", "1px solid rgba(109,110,112,0.2)");
        }
        
        if(count_type=="pax"){
            if(adult<min_pax){
                err++;
                alert('Selected option requires at least '+min_pax+' people to book');
             }
        }
        
        if(err==0){
            $('.btn-ajaxloader').show();
            $('#add-to-cart').prop('disabled', true);
            $('#book-now').prop('disabled', true);
            
            URL = BASE_URL+'cart/addtocart'; 
            
            $.post(URL, {activity_id: option, date: date, adult: adult, child: child, infant: infant, qty: qty, redirect: 'pay'}, function(result){
                res = JSON.parse(result);
                window.location.replace(res);
            });
        }
    });
        
    <?php } ?>
    
    
    $('#check-avail').on('click', function() {

        var option = $('#select-item').find(":selected").val();
        var date = $('#activity-date').val();
        var adult = $('#pax_adult').val();
        var child = $('#pax_child').val();
        var infant = $('#pax_infant').val();
        
        var err = 0;
        
        if(option=="Select"){
            $('.SelectBox').css("border", "1px solid red");
            err++;
        }else{
            $('.SelectBox').css("border", "1px solid rgba(109,110,112,0.2)");
        }
        
        if(date==""){
            $('#activity-date').css("border", "1px solid red");
            err++;
        }else{
            $('#activity-date').css("border", "1px solid rgba(109,110,112,0.2)");
        }
        
        if(err==0){
            $('.btn-ajaxloader').show();
            $('#check-avail').prop('disabled', true);
            
            var ref = <?php echo $activity[0]['api_ref_id']; ?>;
            var tour_id = <?php echo $activity[0]['tour_id']; ?>;
            
            URL = BASE_URL+'activity/check_availability'; 
            
            $.post(URL, {activity_id: option, tour_id: tour_id, date: date, adult: adult, child: child, infant: infant, ref: ref}, function(result){
                $('.btn-ajaxloader').hide();
                res = JSON.parse(result);

                if(res.response=="success"){
                    window.location.replace(res.redirect);
                }else{
                    alert(res.msg);
                }
            });
        }
    });
    $('#check-inv').on('click', function() {

        var option = $('#select-item').find(":selected").val();
        var date = $('#activity-date').val();
        var adult = $('#pax_adult').val();
        var child = $('#pax_child').val();
        var infant = $('#pax_infant').val();
        
        var err = 0;
        
        if(option=="Select"){
            $('.SelectBox').css("border", "1px solid red");
            err++;
        }else{
            $('.SelectBox').css("border", "1px solid rgba(109,110,112,0.2)");
        }
        
        if(date==""){
            $('#activity-date').css("border", "1px solid red");
            err++;
        }else{
            $('#activity-date').css("border", "1px solid rgba(109,110,112,0.2)");
        }
        
        if(err==0){
            $('.btn-ajaxloader').show();
            $('#check-avail').prop('disabled', true);
            
            var tour_id = <?php echo $activity[0]['tour_id']; ?>;
            
            URL = BASE_URL+'activity/check_inv_availability'; 
            
            $.post(URL, {activity_id: option, tour_id: tour_id, date: date, adult: adult, child: child, infant: infant}, function(result){
                $('.btn-ajaxloader').hide();
                res = JSON.parse(result);

                if(res.response=="success"){
                    window.location.replace(res.redirect);
                }else{
                    alert(res.msg);
                }
            });
        }
    });
</script>