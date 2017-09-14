<?php get_header(); ?>
<div class="mh-wrapper clearfix">
	<div id="main-content" class="mh-content">
		<?php
		$user_id = get_the_author_meta('ID');?>
		
		<h1 class="entry-title green feature category_<?php echo $cat_id?>"><span class="halfbackground">
				<?php the_author_meta('display_name',$user_id); ?>
		</span></h1>			
		
		<div id="author-wrapper">

	
		<?php $size = 'EST-StaffLarge';
	    // Get the image URL using the author ID and image size params
	    $imgURL = get_cupp_meta( $user_id, $size);
		echo '<div class="box">';	
	    // Print the image on the page
	    echo '<img src="'. $imgURL .'" alt="'. $name .'">';
		echo '</div>'; ?>
		
		<div class="author-bio">
		<?php // the_author_meta('description',$user_id); 
			
			$userdata = get_userdata(intval($author));
			$user_description = apply_filters("the_content",$userdata->user_description);
			echo $user_description;
			
			?>		
		
			<div class="author-social">
				
				<p class="follow"> FOLLOW <?php the_author_meta('first_name',$user_id); ?> ON:</p>
				<ul >
				<?php $key = 'facebook';
					  $themeta = get_the_author_meta( $key, $user_id);
					  if($themeta != '') { ?>
						<li><a href="<?php the_author_meta('facebook',$user_id); ?>" target="_blank">
							<img src="<?php echo get_bloginfo('template_directory');?>/images/social_facebook.png"/>
						</a></li> <?php }
							else {
							}	?>	
							
				<?php $key = 'tumblr';
					  $themeta = get_the_author_meta( $key, $user_id);
					  if($themeta != '') { ?>			
						<li><a href="<?php the_author_meta('tumblr',$user_id); ?>" target="_blank">
							<img src="<?php echo get_bloginfo('template_directory');?>/images/social_tumblr.png"/>
						</a></li><?php }
							else {
							}	?>	
							
				<?php $key = 'instagram';
					  $themeta = get_the_author_meta( $key, $user_id);
					  if($themeta != '') { ?>				
						<li><a href="<?php the_author_meta('instagram',$user_id); ?>" target="_blank">
							<img src="<?php echo get_bloginfo('template_directory');?>/images/social_instagram.png"/>
						</a></li><?php }
							else {
							}	?>	
						
				<?php $key = 'twitter';
					  $themeta = get_the_author_meta( $key, $user_id);
					  if($themeta != '') { ?>			
						<li><a href="<?php the_author_meta('twitter',$user_id); ?>" target="_blank">
							<img src="<?php echo get_bloginfo('template_directory');?>/images/social_twitter.png"/>
						</a></li><?php }
							else {
							}	?>	
						
				<?php $key = 'pinterest';
					  $themeta = get_the_author_meta( $key, $user_id);
					  if($themeta != '') { ?>			
						<li><a href="<?php the_author_meta('pinterest',$user_id); ?>" target="_blank">
							<img src="<?php echo get_bloginfo('template_directory');?>/images/social_pinterest.png"/>
						</a></li><?php }
							else {
							}	?>	
						
				<?php $key = 'youtube';
					  $themeta = get_the_author_meta( $key, $user_id);
					  if($themeta != '') { ?>			
						<li><a href="<?php the_author_meta('youtube',$user_id); ?>" target="_blank">
							<img src="<?php echo get_bloginfo('template_directory');?>/images/social_youtube.png"/>
						</a></li><?php }
							else {
							}	?>	
				</ul>
		

			</div>
		
		
		</div>
		
		
		
		
		</div> <!-- END AUTHOR-WRAPPER -->
		
		<div class="entry-divider"></div>

		<div class="lower-post clearfix">
					<h2 class="lower-grid-header tabletGothic uppercase"><?php the_author_meta('first_name',$user_id); ?>'s articles</h2>
		</div>
		
		
		
	
 <?php// if ( have_posts() ) : ?>
<!--
				<?php 
					$cat_name = single_cat_title( '', false );
					$cat_id = get_cat_ID( $cat_name );
					
				?>
-->

				
				
							<?php $counter=0;
				
				// The Loop
				while ( have_posts() ) : the_post(); 
				$counter++;
				?>
				
				<?php 
					if ($counter==1) {  ?>
						<div class="lower-grid-holder">								
									<a href="<?php the_permalink();?>" title="<?php the_title();?>"> 
									<div class="image-holder">
										<?php the_post_thumbnail( 'EST-MediumSqu' );    ?></a>
										<p class="category tabletGothic">
										<?php get_template_part('est', 'categorytag'); ?>
										</p>
									</div>
									<a href="<?php the_permalink();?>" title="<?php the_title();?>">
									<p id="post-<?php the_ID(); ?>" class="title" > <?php the_title();  ?> </p></a>
									<p class="author tabletGothic uppercase"> <?php if ( function_exists( 'coauthors_posts_links' ) ) {
    coauthors();
} else {
    the_author();
} ?></p>
									 <?php the_excerpt(); ?>
						
								</div>
						
						<?php
					}
					
					elseif (($counter > 1) && ($counter < 9)) { ?>
									
									<div class="lower-grid-holder">								
									<a href="<?php the_permalink();?>" title="<?php the_title();?>"> 
									<div class="image-holder">
										<?php the_post_thumbnail( 'EST-MediumSqu' );    ?></a>
										<p class="category tabletGothic">
										<?php get_template_part('est', 'categorytag'); ?>
										</p>
									</div>
									<a href="<?php the_permalink();?>" title="<?php the_title();?>">
									<p id="post-<?php the_ID(); ?>" class="title" > <?php the_title();  ?> </p></a>
									<p class="author tabletGothic uppercase"> <?php if ( function_exists( 'coauthors_posts_links' ) ) {
    coauthors();
} else {
    the_author();
} ?></p>
									 <?php the_excerpt(); ?>
						
								</div>
						
						
						
					<?php }
					

						
						
										
					 else { 
						 
				
				 }?>
					
					 
					 

								<?php 
									
					endwhile; ?><!-- 				<p>Sorry, no posts matched your criteria.</p> -->
				<div id="next-page"><?php echo next_posts_link('Next Page &raquo;') ?></div>
					 <div id="previous-page"><?php previous_posts_link('&laquo; Previous Page') ?></div>
				
				<?php /* endif; */ ?>
				
												
<!-- 				</div> -->
				
	</div>
								
	
</div><?php get_footer(); ?>