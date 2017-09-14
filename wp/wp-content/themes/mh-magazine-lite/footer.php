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
		<li><a href="http://www.facebook.com"><img src="<?php echo get_bloginfo('template_directory');?>/images/social_w_facebook.png"/></a></li>
		<li><a href="http://www.pinterest.com"><img src="<?php echo get_bloginfo('template_directory');?>/images/social_w_pinterest.png"/></a></li>
		<li><a href="http://www.twitter.com"><img src="<?php echo get_bloginfo('template_directory');?>/images/social_w_twitter.png"/></a></li>
		<li><a href="http://www.instagram.com"><img src="<?php echo get_bloginfo('template_directory');?>/images/social_w_instagram.png"/></a></li>
		<li><a href="http://www.tumblr.com"><img src="<?php echo get_bloginfo('template_directory');?>/images/social_w_tumblr.png"/></a></li>
		<li><a href="http://www.youtube.com"><img src="<?php echo get_bloginfo('template_directory');?>/images/social_w_youtube.png"/></a></li>
		
</div>

</footer>

</div>
<?php wp_footer(); ?>
</body>
</html>