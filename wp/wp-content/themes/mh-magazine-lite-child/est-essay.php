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
		
		
		
		
				<?php the_post_thumbnail( 'EST-SingleLarge' );    
					
				?>
				
		</header>
		
		<div id="entry-details">
			<h2><span class="category uppercase">
				<?php $key = 'clever-copy';
$themeta = get_post_meta($post->ID, $key, TRUE);
if($themeta != '') {
echo $themeta;
} else {
echo 'ESSAY';
}?>	
					
					
				</span></h2>

			<?php mh_post_header(); ?>
				<span class="date tabletGothic"><?php the_date(); ?></span>
				<?php get_template_part('est', 'social'); ?>
				<p class="author tabletGothic uppercase">by <?php if ( function_exists( 'coauthors_posts_links' ) ) {
    coauthors_posts_links();
} else {
    the_author_posts_link();
} ?></p>
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
						$post_ID=	  wpp_get_mostpopular('cat=16&range=weekly&order_by=views&limit=3&stats_views=0&post_type=post&thumbnail_width=180&thumbnail_height=180&post_html="<li>{thumb}<p>{title}</p></li>"');
							  
							}?>

			</div>

	</div>
	<div class="author-bio">
 					<?php  get_template_part('est', 'social'); ?>
 					<div class="comments-line"><li class="comments-line">Looking for the comments section? <a class="comments-link" href="http://www.theestablishment.co/2015/11/19/why-we-dont-have-a-comments-section/">We don't have one.</a> <br /> Continue the conversation on <a class="comments-link" href="https://www.facebook.com/ESTBLSHMNT/">Facebook</a> and <a class="comments-link" href="https://twitter.com/estblshmnt">Twitter.</a></li></div> 
					<div class="entry-divider-feature"></div>
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
			

</div>
</article>