<?php $mh_magazine_lite_options = mh_magazine_lite_theme_options(); ?>
<?php get_header(); ?>
<div class="mh-wrapper clearfix">
    <div id="main-content" class="mh-content">
	    <h1 class="entry-title feature green"><span class="halfbackground"><?php the_title(); ?></span></h1>
<div class="entry-image"><?php the_post_thumbnail( 'EST-SingleLarge' );    
				?></div>
<!--
<?php

    	if (have_posts()) :
//     		mh_before_page_content();
    		while (have_posts()) : the_post(); ?>
				<div <?php post_class(); ?>>
					
				<h1 class="entry-title feature green"><span class="halfbackground"><?php the_title(); ?></span></h1>
				
				<div id="multimedia-holder">
				<div id="post-multimedia-holder">
					<div class="icon"><img src="<?php echo get_bloginfo('template_directory');?>/images/av_icons_VIDEO.png" /></div>
					<h2 class="tabletGothic uppercase">Contact Us</h2>
					<div class="multimedia-divider"></div>
					<p class="excerpt">
						<?php the_excerpt(); ?>
						
					</p>
				<p class="author-podcast tabletGothic uppercase">by the establishment </p>	
				</div>
				<?php the_post_thumbnail( 'EST-SingleMedium' );    	
				?>
				</div>
-->

				
				</header>
		
		<div class="entry-divider pagetemplate"></div>
					<h2 class="about-lower-grid-header tabletGothic uppercase">CONTACT US</h2>
					<div class="entry clearfix pagetemplate">
						<?php the_content(); ?>
<!-- 					</div> -->
				</div><?php
			endwhile;
/*
			if (isset($mh_magazine_lite_options['comments_pages']) ? $mh_magazine_lite_options['comments_pages'] : false) :
				comments_template();
			endif;
*/
        endif; ?>
        
        
        
    </div>
<!--     <?php get_sidebar(); ?> -->
</div>
<?php get_footer(); ?>