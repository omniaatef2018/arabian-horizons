  <!-- WhatsApp Button -->
    <script>
    (function () {
    var options = {
    whatsapp: "+971565031294", // WhatsApp number
    call_to_action: "", // Call to action
    position: "left", // Position may be 'right' or 'left'
    };
    var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
    var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
    s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
    var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
    </script>
    <!-- /WhatsApp Button --> 
    <script src="<?php echo base_url('assets/js/zopim.js'); ?>"></script>
  </body>
</html>