<?php get_header(); ?>
<div class="mh-wrapper clearfix">
	<div id="main-content" class="mh-content"><?php
		mh_before_post_content();
		if (have_posts()) :
			while (have_posts()) : the_post();
				if ( in_category('feature')) {
					get_template_part('est', 'feature');}
				else if ( in_category('podcast')) {
					get_template_part('est', 'podcast');}
				else if ( in_category('photoessay')) {
					get_template_part('est', 'photoessay');}
				else if ( in_category('video')) {
					get_template_part('est', 'video');}	
				else if ( in_category('list')) {	
					get_template_part('est', 'list');}	
				else if ( in_category('advice')) {	
					get_template_part('est', 'advice');}
				else if ( in_category('look-at-this')) {	
					get_template_part('est', 'lookatthis');}
				else {
// 					get_template_part('content', get_post_format());
					get_template_part('est', 'feature');

				}
			endwhile;
// 			mh_after_post_content();
// 			comments_template();
		endif; ?>
<!-- 	</div> -->
<!-- 	<?php get_sidebar(); ?> -->
</div>
<?php get_footer(); ?>