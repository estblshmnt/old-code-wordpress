<article <?php post_class(); ?>>
	<header class="post-header">
		<h1 class="entry-title feature"><span class="halfbackground"><?php the_title(); ?></span></h1>
				<div class="entry-image"><?php the_post_thumbnail( 'EST-SingleLarge' );    
					
				?></div>
				
		</header>
		
		<div id="entry-details">
				<h2><span class="category">ADVICE</span></h2>
				<?php mh_post_header(); ?>
				<span class="date tabletGothic"><?php the_date(); ?></span>
				<?php get_template_part('est', 'social'); ?>				
				<p class="author tabletGothic uppercase">by <?php the_author_posts_link(); ?></p>
				</div>
		
		
		
		
	<div class="entry-divider-feature"></div>
	<div class="entry-wrapper">
			<div class="entry clearfix">
				
				
					<?php wp_reset_query();
				  the_content(); ?>
			</div>
			
			<div id="post-sidebar" class="tabletGothic">
			
			<?php 				
				if (function_exists( 'wpp_get_mostpopular' )) {
						$post_ID=	  wpp_get_mostpopular('cat=21&range=weekly&order_by=views&limit=3&stats_views=0&post_type=post&thumbnail_width=180&thumbnail_height=180&post_html="<li>{thumb}<p>{title}</p></li>"');
							  
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
					<p class="name uppercase"><?php the_author_meta('display_name',$user_id); 	?></p>	
					<p><?php the_author_meta('description',$user_id); 	?></p>	
				    
					<?php echo '</div>'; ?>
						
			
				</div>
<div class="lower-fullwidth">
		
				<?php get_template_part('est', 'featurelowerfullwidth'); ?>
			
		</div>	
</div>
</article>
