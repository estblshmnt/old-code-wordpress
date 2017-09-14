<!DOCTYPE html>
<html class="no-js<?php mh_html_class(); ?>" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
<?php wp_head(); ?>
<script src="//use.typekit.net/jxh1tmz.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>
<body <?php body_class(); ?>>
<div class="mh-container">
<header class="header-wrap clearfix">
	

	<nav class="main-nav ">
		<?php  mh_logo();  ?>
	
	<div class="social-wrap">
		<ul >

		<li><a href="http://www.youtube.com" target="_blank">
			<img src="<?php echo get_bloginfo('template_directory');?>/images/social_youtube.png"/>
		</a></li>		
		<li><a href="http://ESTBLSHMNT.tumblr.com" target="_blank">
			<img src="<?php echo get_bloginfo('template_directory');?>/images/social_tumblr.png"/>
		</a></li>
		<li><a href="http://www.instagram.com/the_ESTBLSHMNT" target="_blank">
			<img src="<?php echo get_bloginfo('template_directory');?>/images/social_instagram.png"/>
		</a></li>
		<li><a href="http://www.twitter.com/ESTBLSHMNT" target="_blank">
			<img src="<?php echo get_bloginfo('template_directory');?>/images/social_twitter.png"/>
		</a></li>
		<li><a href="http://www.pinterest.com" target="_blank">
			<img src="<?php echo get_bloginfo('template_directory');?>/images/social_pinterest.png"/>
		</a></li>

		<li><a href="http://www.facebook.com/ESTBLSHMNT" target="_blank">
			<img src="<?php echo get_bloginfo('template_directory');?>/images/social_facebook.png"/>
		</a></li>
		<li class="searchbar">&#124;</li>

		<li class="search-button"><a href="#" target="_blank">
			<img src="<?php echo get_bloginfo('template_directory');?>/images/social_search.png"/>
		</a></li>
		<li class="searchbox"><form><input type="text" name="search"></form></li>		
		</ul>
		</div>
		<?php wp_nav_menu(array('theme_location' => 'main_nav')); ?>
	
	
	</nav>
	<div class="mobile-nav"></div>
	
</header>