<style>
 .alert-error{   
    background-color: bisque;
    padding: 15px !important;
    color: #940606;
    border-radius: 5px;
}

 .alert-success{   
    background-color: #b9e8a9;
    padding: 15px !important;
    color: #21460a;
    border-radius: 5px;
}
</style>
<script>
  $(document).ready(function(){
    $('.op-tab-link a').click(function(e){
      e.preventDefault();
      var getHref = $(this).attr('href');      
      var linkCategory = getHref.replace(/^#/, '');
      $('.op-tab-link a').removeClass('active-item');
      $(this).addClass('active-item');
      if(linkCategory == 'all'){
        $('.op-listing-item').fadeIn();        
      } else {
        $('.op-listing-item').show();
        $('.op-listing-item').not('[data-category="'+linkCategory+'"]').fadeOut();
      }
    })
  });
  
</script>