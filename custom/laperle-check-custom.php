<script src="<?php echo base_url('assets/js/sticky-kit.min.js'); ?>"></script>
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
        $('#select-section').SumoSelect();
    });
    
    $('body').addClass('activity-page'); 
</script>

<script>
    var BASE_URL = '<?php echo base_url(); ?>';
    
    $('#select-item').on('change', function() {
        var event_id = this.value;
        var ticket_type = $('#ticket-type').val();
        var URL = BASE_URL+'activity/get_laperle_sections/'+event_id+'/'+ticket_type; 
         
        $('.ajaxloader').show();
         $.get(URL, function(data, status){
            var sections = JSON.parse(data);
            
            $("#select-section").empty();
            for(var i=0; i<sections.length; i++){
				 $('#select-section')[0].sumo.add(sections[i].id, sections[i].name);
            }
            
            $("#select-section").attr("placeholder",sections[0].name);
            $("#select-section")[0].sumo.enable();
            $("#select-section")[0].sumo.reload();
            
            $('.ajaxloader').hide();
        });
    });
    
    $('#add-to-cart').on('click', function() {
        var option = $('#select-item').find(":selected").val();
        var section = $("#select-section").val();
        var ticket_type = $('#ticket-type').val();
        var date = $('#activity-date').val();
        var adult = $('#pax_adult').val();
        var supplier_id = $('#supplier-id').val();
        
        var err = 0;
        
        if(option=="Select"){
            $('.SelectBox').css("border", "1px solid red");
            err++;
        }else{
            $('.SelectBox').css("border", "1px solid rgba(109,110,112,0.2)");
        }
        
        if(section==null){
            $('.SelectBox').css("border", "1px solid red");
            err++;
        }else{
            $('.SelectBox').css("border", "1px solid rgba(109,110,112,0.2)");
        }
        
        if(err==0){
            $('.btn-ajaxloader').show();
            $('#add-to-cart').prop('disabled', true);
            $('#book-now').prop('disabled', true);
            
            URL = BASE_URL+'activity/addLaperletocart'; 
            
            $.post(URL, {time: option, section: section, date: date, adult: adult, ticket_type: ticket_type, supplier_id: supplier_id, redirect: 'cart'}, function(result){
                res = JSON.parse(result);
                window.location.replace(res);
            });
        }
    });
    
    $('#book-now').on('click', function() {
        var option = $('#select-item').find(":selected").val();
        var section = $("#select-section").val();
        var ticket_type = $('#ticket-type').val();
        var date = $('#activity-date').val();
        var adult = $('#pax_adult').val();
        
        var err = 0;
        
        if(option=="Select"){
            $('.SelectBox').css("border", "1px solid red");
            err++;
        }else{
            $('.SelectBox').css("border", "1px solid rgba(109,110,112,0.2)");
        }
        
        if(section==null){
            $('.SelectBox').css("border", "1px solid red");
            err++;
        }else{
            $('.SelectBox').css("border", "1px solid rgba(109,110,112,0.2)");
        }
        if(err==0){
            $('.btn-ajaxloader').show();
            $('#add-to-cart').prop('disabled', true);
            $('#book-now').prop('disabled', true);
            
            URL = BASE_URL+'activity/addLaperletocart'; 
            
            $.post(URL, {time: option, section: section, date: date, adult: adult, ticket_type: ticket_type, redirect: 'pay'}, function(result){
                res = JSON.parse(result);
                window.location.replace(res);
            });
        }
    });
</script>