<script src="https://www.paypal.com/sdk/js?client-id=ATiLBDYJvYWRDrkget7QTpOsAkppyMRHoJ_6UULsZbGFCxiAUul1d7sTUgZd6dAyRUPQJeJVMZBUQCp1" data-namespace="paypal_sdk"></script>
<script src="<?php echo base_url('assets/payment/jquery.creditCardValidator.js'); ?>"></script>
<script src="<?php echo base_url('assets/payment/checkout.js'); ?>"></script>
<script>
    //$('.info-title').SumoSelect();
    //$('.country-list').SumoSelect();
   // $('.country-code').SumoSelect();
    
  //  $('#exp_month').SumoSelect();
  //  $('#exp_year').SumoSelect();

    $('#DebitCredit').on('click', function(){
        $('.accordion-content').slideUp();
        $('.accordion-content.creditcard').slideDown();
    });

    $('#paypal').on('click', function(){
        $('.accordion-content').slideUp();
        $('.accordion-content.paypal').slideDown();
    });
</script>

<script>  
   paypal_sdk.Buttons({
    createOrder: function(data, actions) {
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '100'
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      return actions.order.capture().then(function(details) {
		var ddd = JSON.stringify(details);
		$.ajax({
           url: '<?php echo base_url('Payment/Paypal_Controller/complete') ?>',
		   dataType: 'json',
           type: 'POST',
		   cache: false,
		   data: {'details': ddd},
           success: function(response) {
			   window.location.href = response.url;
           }
        });
		
		
      });
    }
  }).render('#paypal-pay');
</script>

<script>

    $('#payment').submit(function(e) {
        e.preventDefault();
		var isValid = payfortFortMerchantPage2.validateCcForm();
        if(isValid) {         
			$("#pay").html("Processing Payment..");
			$("#pay").prop('disabled', true);
			
			var chn = $("input[name='name_on_card']").val();
			
        $.ajax({
           url: '<?php echo base_url('Payment/Payfort_Controller/paynow') ?>',
		   dataType: 'json',
           type: 'POST',
		   cache: false,
		   data: {'amount': 100, 'chn': chn},
		   contentType: 'application/x-www-form-urlencoded',
           success: function(response) {
			   csrfName = response.csrfName;
			   csrfHash = response.csrfHash;
              if (response.form) {
				$('body').append(response.form);
					var mp2_params = {};
					mp2_params.card_holder_name = $("input[name='name_on_card']").val();
					mp2_params.card_number = $("input[name='card_number']").val();
					mp2_params.expiry_date = $('#exp_year').find(":selected").val()+''+$('#exp_month').find(":selected").val();
					mp2_params.card_security_code = $("input[name='ccv']").val();
					$.each(mp2_params, function(k, v){$('<input>').attr({type: 'hidden',id: k,name: k,value: v}).appendTo('#payfort_payment_form'); });
					$('#payfort_payment_form input[type=submit]').click();
				}
           }
        });
		}
    });
</script>

<script>
    var CounterDiv = document.getElementById('cart-counter'),
        CountSeconds = document.getElementById('sec').innerHTML,
        CountMinutes = document.getElementById('mnt').innerHTML,
        t;

    function add() {

            if(CountMinutes == 0 && CountSeconds == 01) {
           // clearTimeout(t);
            //    CounterDiv.textContent = 'Time Up';
            location.reload();
        } else {

        if(CountSeconds == 0) {
            if(CountMinutes > 0){
            CountMinutes--;
            }
            CountSeconds = 60
        }
        CountSeconds--;
        CounterDiv.textContent = (CountMinutes) + ":" + (CountSeconds > 9 ? CountSeconds : "0" + CountSeconds);
        timer();
        }    
    }
    function timer() {
        t = setTimeout(add, 1000);
    }
    timer();

</script>

<style>
 .alert-error{   
    background-color: bisque;
    padding: 15px !important;
    color: #940606;
    border-radius: 5px;
}
</style>