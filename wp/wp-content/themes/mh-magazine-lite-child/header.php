<!DOCTYPE html>
<html class="no-js<?php mh_html_class(); ?>" <?php language_attributes(); ?>>
<head>
<script type="text/javascript">var _sf_startpt=(new Date()).getTime()</script>	
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
<?php wp_head(); ?>
<script src="https://use.typekit.net/got8xvj.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<meta name="pinterest-rich-pin" content="false" />
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69059414-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body <?php body_class(); ?>>
<div class="mh-container">
<header class="header-wrap clearfix">
<div class="responsive search"><?php get_search_form( true ); ?></div>
<div class="repsonsive"><?php  mh_logo();  ?></div>
	<nav class="main-nav ">
		<?php  mh_logo();  ?>
		
	
	<div class="social-wrap">
		<ul>

		<li><a href="http://www.youtube.com/channel/UC_6id7DnZZKq7LmCvZ4fJbQ 
" target="_blank">
			<img src="<?php echo get_bloginfo('template_directory');?>/images/est_social_youtube.png"/>
		</a></li>		
		<li><a href="http://ESTBLSHMNT.tumblr.com" target="_blank">
			<img src="<?php echo get_bloginfo('template_directory');?>/images/est_social_tumblr.png"/>
		</a></li>
		<li><a href="http://www.instagram.com/the_ESTBLSHMNT" target="_blank">
			<img src="<?php echo get_bloginfo('template_directory');?>/images/est_social_instagram.png"/>
		</a></li>
		<li><a href="http://www.twitter.com/ESTBLSHMNT" target="_blank">
			<img src="<?php echo get_bloginfo('template_directory');?>/images/est_social_twitter.png"/>
		</a></li>
		<li><a href="http://www.pinterest.com/ESTBLSHMNT" target="_blank">
			<img src="<?php echo get_bloginfo('template_directory');?>/images/est_social_pinterest.png"/>
		</a></li>

		<li><a href="http://www.facebook.com/ESTBLSHMNT" target="_blank">
			<img src="<?php echo get_bloginfo('template_directory');?>/images/est_social_facebook.png"/>
		</a></li>
		<li class="searchbar">&#124;</li>

		<li class="search-button"><a href="#" target="_blank">
			<img src="<?php echo get_bloginfo('template_directory');?>/images/est_social_search.png"/>
		</a></li>
		<li class="searchbox"><?php get_search_form( true ); ?></li>		
		</ul>
		</div>
		<?php wp_nav_menu(array('theme_location' => 'main_nav')); ?>
	
	
	</nav>
	<div class="mobile-nav"></div>
	
	

</header>