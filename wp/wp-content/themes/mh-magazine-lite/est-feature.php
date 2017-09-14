<article <?php post_class(); ?>>
	<header class="post-header">
		
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
	
		
		
		
				<div class="entry-image"><?php the_post_thumbnail( 'EST-SingleLarge' );    
				?></div>
				
		</header>
		
		<div id="entry-details">
				<h2><span class="category">FEATURE</span></h2>
				<span class="date tabletGothic"><?php the_date();?></span>
				<?php get_template_part('est', 'social'); ?>
				<p class="author tabletGothic uppercase">by <?php the_author_posts_link(); ?></p>
		</div>
		
		
		
		
		
	<div class="entry-divider-feature"></div>
	<div class="entry-wrapper">
			<div class="entry clearfix">
				
				
				<?php wp_reset_query();
				 
						the_content();?>
					
				   
				  
			</div>
			
			
			<div id="post-sidebar" class="tabletGothic">
			
			<?php 				
				if (function_exists( 'wpp_get_mostpopular' )) {
						$post_ID=	  wpp_get_mostpopular('cat=17&range=weekly&order_by=views&limit=3&stats_views=0&post_type=post&thumbnail_width=180&thumbnail_height=180&post_html="<li><p>{thumb}{title}</p></li>"');
							  
							}?>

			</div>
	</div>
		
				<div class="author-bio">
 					<?php  get_template_part('est', 'social'); ?> 
					<div class="entry-divider-feature"></div>
					<?php $user_id = get_the_author_meta('ID');?>

					<?php $size = 'Thumbnail';
				    // Get the image URL using the author ID and image size params
				    $imgURL = get_cupp_meta( $user_id, $size);
					echo '<div class="box">';	
				    // Print the image on the page				 

				    echo '<img src="'. $imgURL .'" >';?>
			    	<?php $author_url = get_author_posts_url( $user_id ); 
			    	?>
			    	
					<a href="<?php echo $author_url?>" title="<?php the_author_meta('display_name',$user_id); ?>">
					<p class="name uppercase"><?php the_author_meta('display_name',$user_id); 	?></p>	</a>
					<p><?php the_author_meta('description',$user_id); 	?></p>	
				    
					<?php echo '</div>'; ?>
						
			
				</div>

		
		<div class="lower-fullwidth">
		
				<?php get_template_part('est', 'otherstories'); ?>
			
<!-- 		</div> -->
<!-- 		</div> -->
		</div>
		
		</article>

