<article <?php post_class(); ?>>
	<header class="post-header-photoessay">
		<h1 class="entry-title feature podcast"><span class="halfbackground"><?php the_title(); ?></span></h1>
				
				<div id="multimedia-holder">
				<div id="post-multimedia-holder" class="photoessay">
					<!-- <div class="icon"><img src="<?php echo get_bloginfo('template_directory');?>/images/av_icons_PHOTOESSAY.png" /></div> -->
					<h2 class="tabletGothic uppercase podcast">photo essay</h2>
					<div class="multimedia-divider"></div>
					<p class="excerpt">
						<?php the_excerpt(); ?>
						
						
					</p>
				<p class="author-podcast tabletGothic uppercase">by <?php if ( function_exists( 'coauthors_posts_links' ) ) {
    coauthors_posts_links();
} else {
    the_author_posts_link();
}; ?></p>	
				</div>
				<?php the_post_thumbnail( 'EST-SingleMedium' );    	
				?>
				</div>
				
				</header>
			
			<div id="entry-details" class="mobile">
				
			
				<h2><span class="category uppercase">
				<?php $key = 'clever-copy';
$themeta = get_post_meta($post->ID, $key, TRUE);
if($themeta != '') {
echo $themeta;
} else {
echo 'PHOTO ESSAY';
}?>	
					
					
				</span></h2>
				
				
				
							
			
				<span class="date tabletGothic"><?php the_date();?></span>
				<?php get_template_part('est', 'social'); ?>
				<p class="author tabletGothic uppercase">by <?php if ( function_exists( 'coauthors_posts_links' ) ) {
    coauthors_posts_links();
} else {
    the_author_posts_link();
} ?></p>
		</div>


		
		<div class="entry-divider-feature mobile"></div>

		
		<div class="entry clearfix photoessay">
		
		
			<?php wp_reset_query();
		  the_content(); ?>
		</div>
		<div class="author-bio">
 					<?php  get_template_part('est', 'social'); ?>
 					<div class="comments-line"><li class="comments-line">Looking for the comments section? <a class="comments-link" href="http://www.theestablishment.co/2015/11/19/why-we-dont-have-a-comments-section/">We don't have one.</a><br /> Continue the conversation on <a class="comments-link" href="https://www.facebook.com/ESTBLSHMNT/">Facebook</a> and <a class="comments-link" href="https://twitter.com/estblshmnt">Twitter.</a></li></div> 
					<div class="entry-divider-feature"></div>
					</div>
					<div class="author-bio"><?php 
						if ( class_exists( 'coauthors_plus' ) ) {
							// Get the Co-Authors for the post
							$co_authors = get_coauthors();
							// For each Co-Author, echo a wrapper div, their name, and their bio if they have one
							foreach ( $co_authors as $key => $co_author ) {
								$co_author_classes = array(
								'co-author-wrap',
								'co-author-number-' . ( $key + 1 ),
								'co-author-img',
								'co-author-url',
							);
							echo '<div class="' . implode( ' ', $co_author_classes ) . '">';
							$imgURL = get_cupp_meta( $co_author->ID, $size);
							echo '<div class="box">';	
							// Print the image on the page				 
							echo '<img src="'. $imgURL .'" >';
							echo '<p class="name uppercase"><a href="' . get_author_posts_url($co_author->ID )  . '">' . $co_author->display_name . '</a></p>';
							// Only print the description if the description exists
							if ( $description = get_the_author_meta( 'medium_bio', $co_author->ID ) )
								echo '<p>' . $description . '</p>';
								echo '</div>';
							}
						} echo '</div>';?>
				</div>	
</article>
		<div class="entry-divider"></div>

		<div class="lower-post clearfix">
					<h2 class="lower-grid-header tabletGothic uppercase">AUDIO + VISUAL</h2>
		<?php get_template_part('est', 'otherstories_av'); ?>
					

<!-- 		</div> -->
</div>
	
		

	

</article>

