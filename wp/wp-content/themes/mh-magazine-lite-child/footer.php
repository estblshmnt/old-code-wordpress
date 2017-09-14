<!-- <footer class="mh-footer row clearfix">
	id="footer-nav" -->
<footer class="clearfix">

<div id="footer-logo">
<?php $bloginfo = get_bloginfo( 'url' ); ?>
 
<a href="<?php echo $bloginfo; ?>">
	<img class="stamp" src="<?php echo get_bloginfo('template_directory');?>/images/EST.png" />
</a>
</div>

<div id="footer-nav">

		<ul  class="tabletGothic uppercase">
			
				<li><a href="<?php echo get_bloginfo('url');?>/aboutus">About Us</a></li>
				
			<li><a href="<?php echo get_bloginfo('url');?>/contactus">Contact Us</a></li>
			<li><a href="<?php echo get_bloginfo('url');?>/pitchus">Pitch Us</a></li>
			<li><a href="<?php echo get_bloginfo('url');?>/newsletter">Subscribe to our Newsletter</a></li>
		</ul>
</div>

<div id="footer-social">
	
	<ul>
		<li><a href="http://www.facebook.com/ESTBLSHMNT" target="_blank"><img src="<?php echo get_bloginfo('template_directory');?>/images/pda_social_w_facebook.png" /></a></li>
		<li><a href="http://www.pinterest.com/ESTBLSHMNT" target="_blank"><img src="<?php echo get_bloginfo('template_directory');?>/images/pda_social_w_pinterest.png" /></a></li>
		<li><a href="http://www.twitter.com/ESTBLSHMNT" target="_blank"><img src="<?php echo get_bloginfo('template_directory');?>/images/pda_social_w_twitter.png" /></a></li>
		<li><a href="http://www.instagram.com/the_ESTBLSHMNT" target="_blank"><img src="<?php echo get_bloginfo('template_directory');?>/images/pda_social_w_instagram.png"/></a></li>
		<li><a href="http://ESTBLSHMNT.tumblr.com" target="_blank"><img src="<?php echo get_bloginfo('template_directory');?>/images/pda_social_w_tumblr.png"/></a></li>
		<li><a href="http://www.youtube.com/channel/UC_6id7DnZZKq7LmCvZ4fJbQ" target="_blank"><img src="<?php echo get_bloginfo('template_directory');?>/images/pda_social_w_youtube.png"/></a></li>
		
</div>

</footer>

</div>
<?php wp_footer(); ?>
<script type="text/javascript">
  var _sf_async_config = { uid: 61719, domain: 'theestablishment.co', useCanonical: true };
  (function() {
    function loadChartbeat() {
      window._sf_endpt = (new Date()).getTime();
      var e = document.createElement('script');
      e.setAttribute('language', 'javascript');
      e.setAttribute('type', 'text/javascript');
      e.setAttribute('src','//static.chartbeat.com/js/chartbeat.js');
      document.body.appendChild(e);
    };
    var oldonload = window.onload;
    window.onload = (typeof window.onload != 'function') ?
      loadChartbeat : function() { oldonload(); loadChartbeat(); };
  })();
</script>
<!-- Quantcast Tag -->
<script type="text/javascript">
var _qevents = _qevents || [];

(function() {
var elem = document.createElement('script');
elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
elem.async = true;
elem.type = "text/javascript";
var scpt = document.getElementsByTagName('script')[0];
scpt.parentNode.insertBefore(elem, scpt);
})();

_qevents.push({
qacct:"p-7nkd6axRCjEkQ"
});
</script>
</body>
</html>