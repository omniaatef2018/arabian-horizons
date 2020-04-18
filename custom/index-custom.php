<script>
        $(document).ready(function(){
            $('.what-we-do ul li a').click(function(e){
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: $( $.attr(this, 'href') ).offset().top - 160
                }, 1000);
                return false;
            })
        });
    </script>