<?php if ( in_category( 'photoessay' )) { ?>
<img class="av_icon" src="<?php echo get_bloginfo('template_directory');?>/images/av_icons_PHOTOESSAY.png" title="AV Icon" alt="Photo Essay Icon" />

<?php } elseif (in_category( 'video')) { ?>
<img class="av_icon" src="<?php echo get_bloginfo('template_directory');?>/images/av_icons_VIDEO.png" title="AV Icon" alt="Video Icon" />
										
<?php } elseif (in_category( 'podcast')) { ?>
<img class="av_icon" src="<?php echo get_bloginfo('template_directory');?>/images/av_icons_PODCAST.png" title="AV Icon" alt="Podcast Icon" />
											
<?php } else {
	
}
?>
