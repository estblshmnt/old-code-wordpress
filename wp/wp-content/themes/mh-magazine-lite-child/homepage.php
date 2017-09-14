<?php /* Template Name: Homepage */ ?>
<?php get_header(); ?>
<div class="mh-wrapper hp clearfix">
	<div id="main-content" class="mh-content">
		

		
		<div id="upper-featured-container">
			
			<div id="upper-featured-right" class="clearfix">
					<?php $temp_query = $wp_query; ?>
						<?php query_posts('cat=9&showposts=2'); ?>
						<?php while (have_posts()) : the_post(); ?>
								<div class="featured-right-holder">
									<?php if ( has_post_thumbnail() ) { ?>
										
										<a href="<?php the_permalink();?>" class="hover-link"> 
										<?php the_post_thumbnail( 'EST-Feature' );   } ?>

										<p id="post-<?php the_ID(); ?>" class="title" > <span class="hover-title"><?php the_title();  ?></span><span class="hover-excerpt"><?php echo substr(get_the_excerpt(), 0,90); ?> </span>
											<p class="category tabletGothic">
												
											<?php get_template_part('est', 'categorytag'); ?>
		
											</p>
											</p> </a>
<!-- 										<p class="excerpt "> <?php the_excerpt(); ?></p> -->
							</div>
								
						
						
							
<!-- 						<p id="post-<?php the_ID(); ?>" class="upper-featured-right-text" > <?php the_title(); ?> </p> -->
						
			 						<?php endwhile; ?>
						<?php $wp_query = $temp_query; ?>
					
					
					
					</div> <!-- END DIV upper-featured-right -->
						
					
					<div id="upper-featured" class="upper-featured-main">
						<?php $temp_query = $wp_query; ?>
						<?php query_posts('cat=14&showposts=1'); ?>
						<?php while (have_posts()) : the_post(); ?>
						
						<?php if ( has_post_thumbnail() ) { ?>
								<a href="<?php the_permalink();?>" class="hover-link">
								<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'EST-MainFeature' );
								echo '<img id="upper-featured-image" src="' . $large_image_url[0] . '" title="' . the_title_attribute( 'echo=0' ) . '">';  } ?>
						
						
							
						<p id="post-<?php the_ID(); ?>" class="upper-featured-text" > 
						<span class="hover-title"><?php the_title();  ?></span><span class="hover-excerpt"><?php echo substr(get_the_excerpt(), 0,90); ?> </span> 
						<p class="category tabletGothic">
								
											<?php get_template_part('est', 'categorytag'); ?>

						</p></a>
						</p>
						
						<!--<p class="est-featured-excerpt"> <?php the_excerpt(); ?></p> -->
			 						<?php endwhile; ?>
						<?php $wp_query = $temp_query; ?>			
					</div>
					
					
					
		</div> <!-- END DIV upper-featured-container -->
		
		
	<!-- 		+++++++++++++++++++++++++++Section Break++++++++++++++++++++++++ -->	
		
		
		<div id="secondary-container" >
								
				<div id="secondary-col-1">
					<?php $temp_query = $wp_query; ?>
						<?php query_posts('cat=26&showposts=3'); 
							$c=0;
						?>
						<?php while (have_posts()) : the_post(); ?>
							
							<?php $c++;
							if( $c == 1) :?>
							<div class="sec-col-1-holder">
							<?php if ( has_post_thumbnail() ) { ?>
									<a href="<?php the_permalink();?>"> 
									<div class="sec-col-1-image">
										<?php the_post_thumbnail( 'EST-MediumSqu' );   } ?>
										<p class="category tabletGothic">											
										<?php get_template_part('est', 'categorytag'); ?>

									</p></a>
									</div>
									
									<div class="text">
									<a href="<?php the_permalink();?>">
									<p id="post-<?php the_ID(); ?>" class="title" > <?php the_title(); ?> </p>
									</a>
									 
									<p class="author tabletGothic">by <?php if ( function_exists( 'coauthors_posts_links' ) ) {
    coauthors();
} else {
    the_author();
} ?></p>
								<p class="excerpt "> <?php echo substr(get_the_excerpt(), 0,90); ?></p>
									</div>
							</div> <!-- END DIV sec-col-1-holder --> 
							
							<?php elseif( $c == 2) :?>
							<div class="sec-col-1-holder-2">
							<?php if ( has_post_thumbnail() ) { ?>
								<a href="<?php the_permalink();?>"> 
									<div class="sec-col-1-image">
										
								<?php the_post_thumbnail( 'EST-MediumSqu' );   } ?>
								<p class="category tabletGothic">
								<?php get_template_part('est', 'categorytag'); ?>
	
								</p>
									</div>
								
								<a href="<?php the_permalink();?>">
									<p id="post-<?php the_ID(); ?>" class="title" > <?php the_title(); ?> </p>
									</a>
								
								<p class="author tabletGothic">by <?php if ( function_exists( 'coauthors_posts_links' ) ) {
    coauthors();
} else {
    the_author();
} ?></p>
								<p class="excerpt "> <?php echo substr(get_the_excerpt(), 0,90); ?></p>
							</div> <!-- END DIV sec-col-1-holder -->
							
							<?php else :?>
							
							
							
							<div class="sec-col-1-holder-3">
								
								<?php if ( has_post_thumbnail() ) { ?>
								<a href="<?php the_permalink();?>">
								<div class="sec-col-1-image-large">

								<?php the_post_thumbnail( 'EST-MediumLandscape' );   } ?>
								<p class="category tabletGothic">
									<?php get_template_part('est', 'categorytag'); ?>

								</p>
								</div></a>
								
								<a href="<?php the_permalink();?>">
									<p id="post-<?php the_ID(); ?>" class="title" > <?php the_title(); ?> </p>
									</a>								
								<p class="author tabletGothic">by <?php if ( function_exists( 'coauthors_posts_links' ) ) {
    coauthors();
} else {
    the_author();
} ?></p>
								<p class="excerpt "> <?php echo substr(get_the_excerpt(), 0,90); ?></p>
								
							
							
							</div> <!-- END DIV sec-col-1-holder --> 
							<?php endif;?>

							
							
			 			<?php endwhile; ?>
						<?php $wp_query = $temp_query; ?>
					
				</div> <!-- END DIV secondary-col-1 -->
				
				
				
				<div id="secondary-col-2">  <!-- MOST ESTABLISHED -->
					<a href="<?php echo get_bloginfo('url');?>/mostestablished"><div id="most-established">
						<p id="header" class="tabletGothic uppercase">Most Established</p>
					</div></a>
					
					<div id="most-established-articles">
						<?php
							
							if (function_exists( 'wpp_get_mostpopular' )) {
							  wpp_get_mostpopular('range=weekly&order_by=views&limit=5&stats_views=0&post_type=post&stats_author=3&post_html="<li><p>{title}<span>by {author}</span></p>"');
							  

							  
							}
							?>
<!--
						<?php while (have_posts()) : the_post(); ?>	
							<div class="most-established-holder">
							<a href="<?php the_permalink();?>" > 
							<p id="post-<?php the_ID(); ?>" class="most-established-title"> <?php the_title(); ?> </a>
							<span class="most-established-author">by <?php the_author(); ?></span></p>
							</div> <!-- END OF DIV most-established-holder -->
<!--
							<div class="line"></div>
							<?php endwhile; ?>
						<?php $wp_query = $temp_query; ?>
-->	
		
					</div>
					
					
				</div> <!-- END DIV secondary-col-2 -->
				
				<div id="secondary-col-3">
					
					<?php $temp_query = $wp_query; ?>
						<?php query_posts('cat=27&showposts=3'); 
							
						?>
						<?php while (have_posts()) : the_post(); ?>
							
							<?php $c++;
							if( $c >= 4) { ?>
									<?php if ( has_post_thumbnail() ) 
										{?>
									<div class="secondary-col-3-holder">
										<p class="category tabletGothic">
											
										<?php get_template_part('est', 'categorytag'); ?>
	
								
										</p>

									<a href="<?php the_permalink();?>"> 
									<?php the_post_thumbnail( 'EST-MidSquRight' );   }
									} ?>
									
									<p id="post-<?php the_ID(); ?>" class="title" > <?php the_title(); ?> </p>
									</a>									</div>
												
							
						<?php endwhile; ?>
						<?php $wp_query = $temp_query; ?>
					
				
				</div> <!-- END DIV secondary-col-3 -->
				
		</div> <!-- END DIV secondary-container -->
	
	
	
	<!-- 		+++++++++++++++++++++++++++Section Break++++++++++++++++++++++++ -->
	
	
		<div id="contributors-container">
		<h3 class="contributors tabletGothic">Contributors</h3>
		
		<?php
			
// 			wpb_random_users( );

$args = array(
    'exclude' => array( 1, ),
    'fields' => 'ID',
);
$users = get_users( $args );
$user_posts = count_many_users_posts( $users );
foreach( $user_posts as $user => $posts ) {
    if( $posts < 1 ) {
        unset( $user_posts[$user] );
    }
}
$user_ids = array_keys( $user_posts );
shuffle( $user_ids );
for( $i = 0; $i <=5; $i++ ) {
    $user = get_userdata( $user_ids[$i] );
    $user_id = $user->ID;
    $user_name = $user->display_name;
	$author_url = get_author_posts_url( $user_id );
	$size = 'EST-StaffThumb';
	$imgURL = get_cupp_meta($user_id, $size);
    
    
    echo '<div class="contributor-holder">';
			echo '<p class="contributor-name tabletGothic uppercase"><a href="'. $author_url . '">' . esc_html( $user_name ) . '</p>';
				 // Retrieve The Post's Author ID
			     
			echo '<div class="box"><div class="overlay">';
			    // Print the image on the page
			echo '<img class="contributor" src="'. $imgURL .'" alt="'. esc_html( $user_name ) .'"></a></div></div>';
    
    $recent = get_posts(array(
						    'author'=>$user->ID,
						    'orderby'=>'date',
						    'order'=>'desc',
						    'numberposts'=>1
						));
	$title = get_the_title($recent[0]->ID);
	echo '<p class="contributor-title clavo"><a href="' . get_permalink($recent[0]->ID) . '">'. $title .'</p>';					
    
    echo '</div>';
    
    
    
    // display your user info here
}

				
				
				
			
			
			
			?>

		


		
		</div> <!-- END DIV contributors-container -->		
	
	<!-- 		+++++++++++++++++++++++++++Section Break++++++++++++++++++++++++ -->	
		
		<div id="full-width-container">
		
						<?php $temp_query = $wp_query; ?>
						<?php query_posts('cat=28&showposts=3'); ?>
						<?php while (have_posts()) : the_post(); ?>
							
							<div class="full-width-container-holder">
								
								
								<?php if ( in_category( 'photoessay' )) { ?>
											<img class="av_icon" src="<?php echo get_bloginfo('template_directory');?>/images/av_icons_PHOTOESSAY.png" title="AV Icon" alt="Photo Essay Icon" />
										<?php } elseif (in_category( 'video')) { ?>
											<img class="av_icon" src="<?php echo get_bloginfo('template_directory');?>/images/av_icons_VIDEO.png" title="AV Icon" alt="Video Icon" />
										<?php } elseif (in_category( 'podcast')) { ?>
											<img class="av_icon" src="<?php echo get_bloginfo('template_directory');?>/images/av_icons_PODCAST.png" title="AV Icon" alt="Podcast Icon" />
											
										<?php } else {
											
										}
										?>

							<?php if ( has_post_thumbnail() ) { ?>
							
								<a href="<?php the_permalink();?>"> 
									
								<?php the_post_thumbnail( 'EST-LargeLandscape' ); } ?>

								
								<div class="full-width-text">
									<p id="post-<?php the_ID(); ?>" class="title" > <?php the_title(); ?> </p>
									<p class="author tabletGothic"> <?php coauthors_posts_links(); ?></p>
									<p class="excerpt tabletGothic"> <?php echo substr(get_the_excerpt(), 0,90); ?></p> </a>
									
									<p class="category tabletGothic">
										
										<?php get_template_part('est', 'categorytag'); ?>

	
										
									</p>
									
																	</div> <!-- END DIV full-width-text -->
							</div> <!-- END DIV full-width-container -->
			 			<?php endwhile; ?>
						<?php $wp_query = $temp_query; ?>
			
		
		
		
		</div> <!-- END DIV full-width-container -->		
		
	<!-- 		+++++++++++++++++++++++++++Section Break++++++++++++++++++++++++ -->
		
		<div id="lower-container" class="clearfix">
			
		<?php $temp_query = $wp_query; ?>
						<?php query_posts('cat=29&showposts=3'); 
						$c=0;
						?>

						<?php while (have_posts()) : the_post(); ?>
							
							<?php $c++;
							if( $c == 1) :?>							
							<div class="lower-container-holder-left">
<!-- 							<div class="av-icon-holder"> -->
 								<?php get_template_part('est', 'avicons'); ?>								
							<?php if ( has_post_thumbnail() ) { ?>
<!-- 							<?php get_template_part('est', 'avicons'); ?> -->
							
							
								<a href="<?php the_permalink();?>">
									
									<div class="lower-container-thumbnail">
								<?php the_post_thumbnail( 'EST-LargeSqu' );   } ?>
								<p class="category tabletGothic">
									
								<?php get_template_part('est', 'categorytag'); ?>

	

									
								</p>
									</div>
<!-- 								</div>  --><!-- END DIV AV ICON HOLDER -->
									
								<div class="lower-container-text">
								<a href="<?php the_permalink();?>">		
								<p id="post-<?php the_ID(); ?>" class="title" > <?php the_title(); ?> </p>
								<p class="author tabletGothic uppercase"> <?php if ( function_exists( 'coauthors_posts_links' ) ) {
    coauthors();
} else {
    the_author();
} ?></p>
								<p class="excerpt tabletGothic "> <?php echo substr(get_the_excerpt(), 0,130); ?></p>
								</a>
								
								</div>
								</div>
								
							<?php else :?>
							<div class="lower-container-holder">
								<div class="av-icon-holder">
 								<?php get_template_part('est', 'avicons'); ?> 
								
							<?php if ( has_post_thumbnail() ) { ?>
								<a href="<?php the_permalink();?>">
								<div class="lower-container-thumbnail">

								<?php the_post_thumbnail( 'EST-LargeSqu' );   } ?>
								
								<p class="category tabletGothic">
									<?php get_template_part('est', 'categorytag'); ?>
								</p>
								</div>
								</div> <!-- END DIV AV ICON HOLDER -->

								<div class="lower-container-text">
								<a href="<?php the_permalink();?>">	
								<p id="post-<?php the_ID(); ?>" class="title" > <?php the_title(); ?> </p>
								<p class="author tabletGothic uppercase"><?php if ( function_exists( 'coauthors_posts_links' ) ) {
    coauthors();
} else {
    the_author();
} ?></p>
								<p class="excerpt tabletGothic"> <?php echo substr(get_the_excerpt(), 0,130); ?></p>
								</a>
								
								</div>
								</div>
							<?php endif;?>
	
								
							
			 			<?php endwhile; ?>
						<?php $wp_query = $temp_query; ?>
		
		
		
		</div> <!-- END DIV lower-container -->
				
		
	</div> <!-- END DIV main-content -->
		
		
	
</div> <!-- END DIV mh-wrapper hp clearfix -->
<?php get_footer(); ?>