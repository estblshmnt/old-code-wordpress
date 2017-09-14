<article <?php post_class(); ?>>
	<header class="post-header-podcast">
		<h1 class="entry-title feature podcast"><span class="halfbackground"><?php the_title(); ?></span></h1>
				
				<div id="multimedia-holder-podcast">
				<div id="post-multimedia-holder" class="podcast">
					<div class="icon"><img src="<?php echo get_bloginfo('template_directory');?>/images/av_icons_PODCAST.png" /></div>
					<h2 class="tabletGothic uppercase podcast">podcast</h2>
					<div class="multimedia-divider"></div>
					<p class="excerpt">
						<?php the_excerpt(); ?>
						
					</p>
				<p class="author-podcast tabletGothic uppercase">by <?php the_author_posts_link(); ?></p>	
				</div>


				<div id="video">
					
				<?php $soundcloud = get_post_meta($post->ID, 'soundcloud_url', true);
					echo '<iframe width="100%" height="490" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/'. $soundcloud .'%3Fsecret_token%3Ds-ZTrEK&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>';?>

				</div>
				</div>
				
				</header>
		
				
		
		<div class="entry-divider"></div>

		<div class="lower-post clearfix">
					<h2 class="lower-grid-header tabletGothic uppercase">AUDIO + VISUAL</h2>
		<?php get_template_part('est', 'otherstories_av'); ?>
					
		</div>
		</div>
<!-- </div> -->
			

</article>

