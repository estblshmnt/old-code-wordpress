<?php /* Template Name: Most Established */ ?>
<?php get_header(); ?>
<div class="mh-wrapper clearfix">
    <div id="main-content" class="mh-content">
		
<?php
    	if (have_posts()) :
//     		mh_before_page_content();
    		while (have_posts()) : the_post(); ?>
				<div <?php post_class(); ?>>
				
				<h1 class="entry-title feature green"><span class="halfbackground"><?php the_title(); ?></span></h1>

							
				</header>
				<div id="most-established-single">
					<?php 			
				if (function_exists( 'wpp_get_mostpopular' )) {
/* 						$post_ID= */	  wpp_get_mostpopular('cat=17&pid="128"&range=weekly&order_by=views&limit=5&excerpt_length=355&stats_views=0&post_type=post&stats_author=1&thumbnail_width=1160&thumbnail_height=650&post_html="<li>{title}<p><br /><span>by {author}</span><br /><span>{excerpt}</span></p>{thumb}</li>"');
							  
							}?>
				</div>
		</div>
		<div class="entry-divider pagetemplate"></div>
					
					
					
<!-- 	</div> -->
					
					
					
					</div>
		
		
		
		

			
		<div class="lower-fullwidth">
		
				<?php get_template_part('est', 'otherstories'); ?>
			
		</div>

				
				
				<?php
			endwhile;



        endif; ?>
    </div>

<!-- </div> -->
<?php get_footer(); ?>