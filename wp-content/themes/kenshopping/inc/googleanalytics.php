<?php
/**
 * Custom Google Analytics Page for KenAfrica
 * Version: 1.0.0
 * Author: JamesVanWaza @jeezysevenrwd
 * AuthorURI: https://dosbranding.com
 * Email: jgacuca@dosbranding.com
 */

add_action('wp_footer', 'kenshopping_googleanalytics');
function kenshopping_googleanalytics()
{?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-80799407-1', 'auto');
  ga('send', 'pageview');
</script>
<?php }?>