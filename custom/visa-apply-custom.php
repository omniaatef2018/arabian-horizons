<script src="https://www.paypal.com/sdk/js?client-id=AcIbDm5LcJvqVLCxhZA0gbgTdSwaUy-AI1zin1F5viMSiqh9ls0P1G9LBICFQ-_ecoL5GLL1VssM1OuC" data-namespace="paypal_sdk"></script>

<script src="<?php echo base_url('assets/payment/jquery.creditCardValidator.js'); ?>"></script>
<script src="<?php echo base_url('assets/payment/checkout.js'); ?>"></script>

<script>
    $('.accordion-content.creditcard').slideDown();
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
            value: '<?php echo round($visa_total,2); ?>'
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      return actions.order.capture().then(function(details) {
		console.log(JSON.stringify(details, null, 4));
		$.ajax({
           url: '<?php echo base_url('Payment/Paypal_Controller/complete') ?>',
		   dataType: 'json',
           type: 'POST',
		   cache: false,
		   data: {'orderID': data.orderID},
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
			
        $.ajax({
           url: '<?php echo base_url('Payment/Payfort_Controller/paynow') ?>',
		   dataType: 'json',
           type: 'POST',
		   cache: false,
		   data: {'amount': <?php echo $total; ?>},
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