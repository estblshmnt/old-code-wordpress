<?php get_header(); ?>
<div class="mh-wrapper clearfix">
	<div id="main-content" class="mh-content">

	<?php if ( have_posts() ) : ?>
				<?php 
					$cat_name = single_cat_title( '', false );
					$cat_id = get_cat_ID( $cat_name );
					
				?>

				
				
				<?php $counter=0;
				
				// The Loop
				while ( have_posts() ) : the_post(); 
				$counter++;
				?>
				
				<?php 
					if ($counter==1) {  ?>
						<a href="<?php the_permalink();?>"> 
								<h1 class="entry-title feature green"><span class="halfbackground"><?php the_title(); ?></span></h1>
								<div class="entry-image"><?php the_post_thumbnail( 'EST-SingleLarge' ); ?>
								</a>
								</div>
								<div class="entry-divider"></div>
								<header class="archive-header">
								<h2 class="lower-grid-header tabletGothic uppercase"><?php single_cat_title( '', true ); ?></h2>

								</header>
								<div id="column-left">
						<?php
					}
					
					elseif (($counter >= 2) && ($counter <= 10)) { ?>
									
									<div class="lower-grid-holder">								
									<a href="<?php the_permalink();?>"> 
									<div class="image-holder">
										<?php the_post_thumbnail( 'EST-MediumSqu' );    ?>
										<p class="category tabletGothic">
										<?php get_template_part('est', 'categorytag'); ?>
										</p>
									</div>
								
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
									
					endwhile; ?>
					
					<div id="next-page"><?php echo next_posts_link('Next Page &raquo;') ?></div>
					 <div id="previous-page"><?php previous_posts_link('&laquo; Previous Page') ?></div>
					 
				<?php else: ?>
				<p>Sorry, no posts matched your criteria.</p>
				
				
				<?php endif; ?>
					

																	
				</div>
				<div class="lower-fullwidth">
		
				<?php get_template_part('est', 'otherstories'); ?>

		</div>

								
	
</div>
<?php get_footer(); ?>