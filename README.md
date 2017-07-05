Title : EFF Day of Action for WordPress

Date: July 5th, 2017
Version: 1.0.0
Author: Keith I Myers <https://kmyers.me>

Description: This plugin adds the following JavaScript to your wordpress site.


<!--[if !(lt IE 8)]><!-->
<script type="text/javascript"> 
  // The defaults are set below
  var banner_config = {
    disableDate: false, // If true, the banner shows even if the date is not yet 06/21/2016. Use for testing.
    debug: false // Reveals any errors and debug messages. For debugging purposes only.
  };
  (function(){
    var e = document.createElement('script'); e.type='text/javascript'; e.async = true;
    e.src = 'https://www.eff.org/doa/widget.min.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(e, s);
  })();
</script>
<!--<![endif]-->



This will display an EFF pro-Net Neutrality Banner on your website on July 12th of 2017 only. Read more at https://www.eff.org/deeplinks/2017/06/internet-activate-stand-net-neutrality-july-12
