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
				
			
				<h2><span class="category uppercase">
				<?php $key = 'clever-copy';
$themeta = get_post_meta($post->ID, $key, TRUE);
if($themeta != '') {
echo $themeta;
} else {
echo 'FEATURE';
}?>	
					
					
				</span></h2>
				
				
				
							
			
<!-- 				<h2><span class="category">FEATURE</span></h2> -->
				<span class="date tabletGothic"><?php the_date();?></span>
				<?php get_template_part('est', 'social'); ?>
				<p class="author tabletGothic uppercase">by <?php coauthors_posts_links(); ?></p>
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
					$content = get_post_field( 'post_content', $post->ID );
					$word_count = str_word_count( strip_tags( $content ) );
					if ($word_count > 500 && $word_count < 1500) {
// 					the_category_id(true);
						$portholes= "'cat=\"". the_category_id(false) ."\"&pid=". get_the_id() ."&range=monthly&freshness=1&order_by=views&limit=6&stats_views=0&post_type=post&thumbnail_width=180&thumbnail_height=180&post_html=\"<li><p>{thumb}{title}</p></li>\"'";
//  						echo $portholes; 
						
// 								wpp_get_mostpopular('cat=17&pid=""&range=weekly&order_by=views&limit=3&stats_views=0&post_type=post&thumbnail_width=180&thumbnail_height=180&post_html="<li><p>{thumb}{title}</p></li>"');
	
								wpp_get_mostpopular( $portholes);							  
							} else if ($word_count < 500) {
								$portholes= "'cat=\"". the_category_id(false) ."\"&pid=". get_the_id() ."&range=monthly&freshness=1&order_by=views&limit=3&stats_views=0&post_type=post&thumbnail_width=180&thumbnail_height=180&post_html=\"<li><p>{thumb}{title}</p></li>\"'";
//  						echo $portholes; 
						
// 								wpp_get_mostpopular('cat=17&pid=""&range=weekly&order_by=views&limit=3&stats_views=0&post_type=post&thumbnail_width=180&thumbnail_height=180&post_html="<li><p>{thumb}{title}</p></li>"');
	
								wpp_get_mostpopular( $portholes);
							} else if ($word_count > 1500) { 
										$portholes= "'cat=\"". the_category_id(false) ."\"&pid=". get_the_id() ."&range=monthly&freshness=1&order_by=views&limit=8&stats_views=0&post_type=post&thumbnail_width=180&thumbnail_height=180&post_html=\"<li><p>{thumb}{title}</p></li>\"'";
//  						echo $portholes; 
						
// 								wpp_get_mostpopular('cat=17&pid=""&range=weekly&order_by=views&limit=3&stats_views=0&post_type=post&thumbnail_width=180&thumbnail_height=180&post_html="<li><p>{thumb}{title}</p></li>"');
							wpp_get_mostpopular( $portholes);
							}}?>

			</div>
	</div>
		
				<div class="author-bio">
 					<?php  get_template_part('est', 'social'); ?>
 					<div class="comments-line"><li class="comments-line">Looking for the comments section? <a class="comments-link" href="http://www.theestablishment.co/2015/11/19/why-we-dont-have-a-comments-section/">We don't have one.</a><br/ > Continue the conversation on <a class="comments-link" href="https://www.facebook.com/ESTBLSHMNT/">Facebook</a> and <a class="comments-link" href="https://twitter.com/estblshmnt">Twitter.</a></li></div> 
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
		
				<?php get_template_part('results', 'custom'); ?>
			
<!-- 		</div> -->
<!-- 		</div> -->
		</div>
		
		</article>

