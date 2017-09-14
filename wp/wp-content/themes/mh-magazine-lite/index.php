<?php get_header(); ?>
<div class="mh-wrapper clearfix">
	<div id="main-content" class="mh-content">


<!-- 		<?php mh_before_page_content(); ?> -->
<!-- 		<?php the_category() ?> -->


		<h1 class="category-title tabletGothic uppercase"><?php single_cat_title() ?></h1>

		<?php if (category_description()) { ?>
			<section class="cat-desc">
				<?php echo category_description(); ?>
<!-- 				<p>testing</p> -->
				</section>
		<?php } ?>
		
		
		
		
		
		
 		<?php mh_loop_content(); ?> 
	</div>
<!-- 	<?php get_sidebar(); ?> -->
</div>
<?php get_footer(); ?>