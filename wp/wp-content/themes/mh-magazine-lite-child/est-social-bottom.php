<div class="post-social">
		
		<ul >
			
			<li><a href="http://www.facebook.com/share.php?u=<?php echo the_permalink()?>" target="_blank">
				<img src="<?php echo get_bloginfo('template_directory');?>/images/est_social_facebook.png"/>
			</a></li>		
<!--
			<li><a href="http://ESTBLSHMNT.tumblr.com" target="_blank">
				<img src="<?php echo get_bloginfo('template_directory');?>/images/social_tumblr.png"/>
			</a></li>
-->
<!--
			<li><a href="#" target="_blank">
				<img src="<?php echo get_bloginfo('template_directory');?>/images/social_instagram.png"/>
			</a></li>
-->
			
			<?php $permalink = get_permalink();
				$find = array( 'http://', 'https://' );
				$replace = '';
				$find2 = '/';
				$replace2 = '%2F';
				$output = str_replace( $find, $replace, $permalink ); 
				$output2 = str_replace( $find2, $replace2, $output);
/* 				echo $output2; */?>




			<li><a href="https://twitter.com/intent/tweet?url=http%3A%2F%2F<?php echo $output2; ?>&text=<?php echo the_title();?>&via=ESTBLSHMNT" >
				<img src="<?php echo get_bloginfo('template_directory');?>/images/est_social_twitter.png"/>
			</a></li>
			
			
			
			
			
			<!--
			<li><a href="//www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark">
				<img src="<?php echo get_bloginfo('template_directory');?>/images/est_social_pinterest.gif"/>
			</a></li>
-->
<!--
			<li><a href="www.youtube.com/channel/UC_6id7DnZZKq7LmCvZ4fJbQ" target="_blank">
				<img src="<?php echo get_bloginfo('template_directory');?>/images/social_youtube.png"/>
			</a></li>
-->
		</ul>
		</div>


<!-- <a href="http://pinterest.com/pin/create/button/?url={URI-encoded URL of the page to pin}&media={URI-encoded URL of the image to pin}&description={optional URI-encoded description}" class="pin-it-button" count-layout="horizontal"> -->
