<article <?php post_class(); ?>>
	<header class="post-header look-at-this">
		
					<?php 
					foreach((get_the_category()) as $category) {
						if ($category->cat_name == 'Society+Politics'){
							?>
			<h1 class="entry-title arts category_10"><span class="halfbackground"><?php the_title(); ?></span></h1><?php;
						
						} 
						elseif ($category->cat_name == 'Arts+Creators') {
							?>
			<h1 class="entry-title arts category_11"><span class="halfbackground"><?php the_title(); ?></span></h1><?php;
						
							
						}
						 
						elseif ($category->cat_name == 'Brain+Body') {
							?>
			<h1 class="entry-title arts category_12"><span class="halfbackground"><?php the_title(); ?></span></h1><?php;
						
							
						}
						 
						elseif ($category->cat_name == 'Lust+Liaisons') {
							?>
			<h1 class="entry-title arts category_13"><span class="halfbackground"><?php the_title(); ?></span></h1><?php;
						
							
						}
						elseif ($category->cat_name == 'Wit+Whimsy') {
							?>
			<h1 class="entry-title arts category_6"><span class="halfbackground"><?php the_title(); ?></span></h1><?php;
						
							
						} 
						else {
							
						}
						
					}	?>
	
		
		
		
			<div class="entry clearfix look-at-this">
				
				
				<?php wp_reset_query();
				 
						the_content();?>
					
				   
				  
			</div>
	</header>
			

		
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

		
		<div class="lower-fullwidth">
		
				<?php get_template_part('est', 'otherstories'); ?>
			
<!-- 		</div> -->
<!-- 		</div> -->
		</div>
		
		</article>

