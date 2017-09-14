<?php $temp_query = $wp_query; ?>
						<?php $user_id = get_the_author_meta( 'ID'); ?> 
						<?php query_posts('showposts=6'); ?>
						
				
				
				
				<?php $counter=0;
				
				// The Loop
				while ( have_posts() ) : the_post(); 
				$counter++;
				?>
				
				
					
					<?php if ($counter == 1)  { ?>
								</div>
<!-- 							<div id="full-width-container"> -->
							<div class="full-width-container-holder category-list">
							<?php get_template_part('est', 'avicons'); ?>
							<?php if ( has_post_thumbnail() ) { ?>
								<a href="<?php the_permalink();?>"> 
								<?php the_post_thumbnail( 'EST-LargeLandscape' ); } ?>
								<div class="full-width-text">
									<p id="post-<?php the_ID(); ?>" class="title" > <?php the_title(); ?> </p>
									<p class="author tabletGothic"> <?php the_author(); ?></p>									
									<?php the_excerpt(); ?> </a>
									<p class="category tabletGothic">
									<?php get_template_part('est', 'categorytag'); ?>
									</p>
									
								</div> <!-- END DIV full-width-text -->
								</div>
								
						
						
					<?php }
					
					
					
					elseif (($counter >= 2) && ($counter <= 3) && (!is_author($user_id))) { ?>
									
							<div class="full-width-container-holder category-list">
							<?php get_template_part('est', 'avicons'); ?>
							<?php if ( has_post_thumbnail() ) { ?>
								<a href="<?php the_permalink();?>"> 
								<?php the_post_thumbnail( 'EST-LargeLandscape' ); } ?>
								<div class="full-width-text">
									<p id="post-<?php the_ID(); ?>" class="title" > <?php the_title(); ?> </p>
									<p class="author tabletGothic"> <?php the_author(); ?></p>
									 <?php the_excerpt(); ?> </a>
									<p class="category tabletGothic">
									<?php get_template_part('est', 'categorytag'); ?>
									</p>
									
																	</div> <!-- END DIV full-width-text -->
																	</div>
							<?php if ($counter == 3) { ?>
<!-- 							</div> --> <!-- END DIV full-width-container -->
								<?php } ?>
						
						
					<?php } 
	
						elseif (($counter >= 4) && ($counter <= 6) && (!is_author($user_id))) { ?>
	
						<?php $c++;
							if( $c == 1) :?>							
							<div class="lower-container-holder-left">
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
								<p class="author tabletGothic uppercase"> <?php the_author(); ?></p>

								<p class="excerpt tabletGothic "> <?php echo substr(get_the_excerpt(), 0,130); ?></p>
								</a>
								</div>
								</div>
								
							<?php else :?>
							<div class="lower-container-holder">
 							<div class="av-icon-holder">
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
								<div class="lower-container-thumbnail">

								<?php the_post_thumbnail( 'EST-LargeSqu' );   } ?>
								<p class="category tabletGothic">
									<?php get_template_part('est', 'categorytag'); ?>
								</p>
								</div>
								</div>

								<div class="lower-container-text">
								<a href="<?php the_permalink();?>">	
								<p id="post-<?php the_ID(); ?>" class="title" > <?php the_title(); ?> </p>
								<p class="author tabletGothic uppercase"><?php the_author(); ?></p>
								
								<p class="excerpt tabletGothic"> <?php echo substr(get_the_excerpt(), 0,130); ?></p>
								</a>
								</div>
								</div>
							<?php endif;?>
						
						
						
						
						
						<?php }
						
						
										
					 else { ?>
					
						
				
				<?php }
					endwhile; 
/*
				else: ?>
				<p>Sorry, no posts matched your criteria.</p>
				
				
				<?php endif; ?>
*/

							
							
							
							
							
							
							
							
/* 			 			<?php endwhile;  */?>
						<?php $wp_query = $temp_query; ?>