var payfortFort = (function () {
   return {
        validateCreditCard: function(element) {
            var isValid = false;
            var eleVal = $(element).val();
            eleVal = this.trimString(element.val());
            eleVal = eleVal.replace(/\s+/g, '');
            $(element).val(eleVal);
            $(element).validateCreditCard(function(result) {
                isValid = result.valid;
            });
            return isValid;
        },
        validateCvc: function(element) {
            $(element).val(this.trimString(element.val()));
            var cvc = $(element).val();
            if(cvc.length > 4 || cvc.length == 0) {
                return false;
            }
            if(!this.isPosInteger(cvc)) {
                return false;
            }
            return true;
        },
        isDefined: function(variable) {
            if (typeof (variable) === 'undefined' || typeof (variable) === null) {
                return false;
            }
            return true;
        },
        trimString: function(str){
            return str.trim();
        },
        isPosInteger: function(data) {
            var objRegExp  = /(^\d*$)/;
            return objRegExp.test( data );
        }
   };
})();

var payfortFortMerchantPage2 = (function () {
    return {
        validateCcForm: function () {
            this.hideError();
            isValid = payfortFort.validateCreditCard($('#card_number'));
            if(!isValid) {
                this.showError('Invalid Credit Card Number');
                return false;
            }
            isValid = payfortFort.validateCvc($('#ccv'));
            if(!isValid) {
                this.showError('Invalid Card CVV');
                return false;
            }
            return true;
        },
        showError: function(msg) {
            alert(msg);
        },
        hideError: function() {
            return;
        }
    };
})();
