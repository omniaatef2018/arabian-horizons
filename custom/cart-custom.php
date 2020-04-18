<script>
var formblock;
    var forminputs;
    function prepare() {
      formblock= document.getElementById('form_id');
      forminputs = formblock.getElementsByTagName('input');
       selectinput1 = document.getElementById('select_input_all1');
       selectinput2 = document.getElementById('select_input_all2');
     // selectinput =document.getElementsByClassName("select_input");
    }
 
    function select_all(name) {
        for (i = 0; i < forminputs.length; i++) {
            var regex = new RegExp(name, "i");
            if (regex.test(forminputs[i].getAttribute('name'))) {
                if (selectinput1.checked==true) {
                forminputs[i].checked = true;
                select_input_all1.checked = true;
                select_input_all2.checked = true;
                } else {
                forminputs[i].checked = false;
                select_input_all1.checked = false;
                select_input_all2.checked = false;
                }
            }
        }
    }
    function select_all2(name) {
        for (i = 0; i < forminputs.length; i++) {
            var regex = new RegExp(name, "i");
            if (regex.test(forminputs[i].getAttribute('name'))) {
                if (selectinput2.checked==true) {
                forminputs[i].checked = true;
                select_input_all1.checked = true;
                select_input_all2.checked = true;
                } else {
                forminputs[i].checked = false;
                select_input_all1.checked = false;
                select_input_all2.checked = false;
                }
            }
        }
    }
 
    if (window.addEventListener) {
      window.addEventListener("load", prepare, false);
    } else if (window.attachEvent) {
      window.attachEvent("onload", prepare)
    } else if (document.getElementById) {
      window.onload = prepare;
    }
</script>

<script>
    // function wcqib_refresh_quantity_increments() {
    //     jQuery("div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)").each(function(a, b) {
    //         var c = jQuery(b);
    //         c.addClass("buttons_added"), c.children().first().before('<input type="button" value="-" class="minus" />'), c.children().last().after('<input type="button" value="+" class="plus" />')
    //     })
    // }
    // String.prototype.getDecimals || (String.prototype.getDecimals = function() {
    //     var a = this,
    //         b = ("" + a).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
    //     return b ? Math.max(0, (b[1] ? b[1].length : 0) - (b[2] ? +b[2] : 0)) : 0
    // }), jQuery(document).ready(function() {
    //     wcqib_refresh_quantity_increments()
    // }), jQuery(document).on("updated_wc_div", function() {
    //     wcqib_refresh_quantity_increments()
    // }), jQuery(document).on("click", ".plus, .minus", function() {
    //     var a = jQuery(this).closest(".quantity").find(".qty"),
    //         b = parseFloat(a.val()),
    //         c = parseFloat(a.attr("max")),
    //         d = parseFloat(a.attr("min")),
    //         e = a.attr("step");
    //     b && "" !== b && "NaN" !== b || (b = 0), "" !== c && "NaN" !== c || (c = ""), "" !== d && "NaN" !== d || (d = 0), "any" !== e && "" !== e && void 0 !== e && "NaN" !== parseFloat(e) || (e = 1), jQuery(this).is(".plus") ? c && b >= c ? a.val(c) : a.val((b + parseFloat(e)).toFixed(e.getDecimals())) : d && b <= d ? a.val(d) : b > 0 && a.val((b - parseFloat(e)).toFixed(e.getDecimals())), a.trigger("change")
    // });
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
        CounterDiv.textContent = (CountMinutes) + " : " + (CountSeconds > 9 ? CountSeconds : "0" + CountSeconds);
        timer();
        }    

    }
    function timer() {
        t = setTimeout(add, 1000);
    }
    timer();

    function total_price(){
        var total_price = 0;
        $('.cart-box-item').each(function(){            
            var getPrice = $(this).find('.box-ftr .price i').text();
            total_price = total_price + parseInt(getPrice);
        });
        $('.tot_price').text(total_price);
    }

    function total_activity(){
        var totalActivityCount = $('.cart-box-item').length;
        if(totalActivityCount>1){
            $('.total_activity_count').text(totalActivityCount + "Activities");
        }else{
            $('.total_activity_count').text(totalActivityCount + "Activity");
        }
    }

    $(document).ready(function(){
        total_price();
        total_activity();
        
        $(document).on('click', '.delete-selected', function(){
            var cartLength = $('.cart-box-item').length;
            $('.cart-box-item').each(function(index, element){
                if($(this).find('input.styled-checkbox').is(':checked')) {
                    $(this).fadeOut(function(){
                        $(this).remove();
                        cartLength = $('.cart-box-item').length;
                        if(cartLength === 0){
                            $('.cart-no-count').show();
                            $('.total_activity_count').hide();
                            $('.tot_price').text('AED 0');
                            $('.pay_btn').hide();
                            select_input_all1.checked = false;
                            select_input_all2.checked = false;
                            clearTimeout(t);
                            $('.cart-counter-wrap, .delete-selected').fadeOut();
                        }
                        total_price();
                        total_activity(); 
                    });                    
                }                
            });         
          //  setTimeout(function(){
                 
          //  }, 1);             
        });
        $('.cart-box-item').on('click', '.delete', function() {
            $(this).closest('.cart-box-item').fadeOut(function(){
                $(this).remove();
                total_price();
                total_activity();
                cartLength = $('.cart-box-item').length;
                if(cartLength === 0){
                    $('.cart-no-count').show();
                    $('.total_activity_count').hide();
                    $('.tot_price').text('AED 0');
                    $('.pay_btn').hide();
                    clearTimeout(t);
                    $('.cart-counter-wrap, .delete-selected').fadeOut();
                }
            });
         //   setTimeout(function(){
          //  }, 1);
        });
        $('.cart-caty').SumoSelect();   
        $('.rmd-slider').slick({
            dots: false,
            infinite: true,
            speed: 1000,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            arrows: false,

            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                },

                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });
</script>