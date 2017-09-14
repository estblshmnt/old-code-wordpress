<article <?php post_class(); ?>>
	<header class="post-header-photoessay">
		<h1 class="entry-title feature podcast"><span class="halfbackground"><?php the_title(); ?></span></h1>
				
				<div id="multimedia-holder">
				<div id="post-multimedia-holder" class="photoessay">
					<div class="icon"><img src="<?php echo get_bloginfo('template_directory');?>/images/av_icons_PHOTOESSAY.png" /></div>
					<h2 class="tabletGothic uppercase podcast">photo essay</h2>
					<div class="multimedia-divider"></div>
					<p class="excerpt">
						<?php the_excerpt(); ?>
						
						
					</p>
				<p class="author-podcast tabletGothic uppercase">by <?php the_author_posts_link(); ?></p>	
				</div>
				<?php the_post_thumbnail( 'EST-SingleMedium' );    	
				?>
				</div>
				
				</header>
			
		
		<div class="entry clearfix photoessay">
		
		
			<?php wp_reset_query();
		  the_content(); ?>
		</div>
<div class="entry-divider"></div>

		<div class="lower-post clearfix">
					<h2 class="lower-grid-header tabletGothic uppercase">AUDIO + VISUAL</h2>
		<?php get_template_part('est', 'otherstories_av'); ?>
					

		</div>
</div>
	
		

	

</article>

