<?php $mh_magazine_lite_options = mh_magazine_lite_theme_options(); ?>
<?php get_header(); ?>
<div class="mh-wrapper clearfix">
    <div id="main-content" class="mh-content">

<?php
    	if (have_posts()) :
//     		mh_before_page_content();
    		while (have_posts()) : the_post(); ?>
				<div <?php post_class(); ?>>
				
				<h1 class="entry-title feature green"><span class="halfbackground"><?php the_title(); ?></span></h1>
				<img class="flowchart" src="<?php echo get_bloginfo('template_directory');?>/images/EST_flowchart.jpg" />

							
				</header>
		
		<div class="entry-divider pagetemplate"></div>
					<h2 class="about-lower-grid-header tabletGothic uppercase">WHO WE ARE</h2>
					<div class="entry clearfix pagetemplate">
						<?php the_content(); ?>
					</div>
		
		</div>
		<div class="entry-divider pagetemplate"></div>
					
					
					<div id="staff">
					
					<h2 class="about-lower-grid-header tabletGothic uppercase">STAFF</h2>
					
					
					<div class="staff-bios">
					<?php
					$blogusers = get_users( 'role=editor&orderby=ID' );
					// Array of WP_User objects.
					foreach ( $blogusers as $user ) {  ?>
						<div class="contributor-holder">
						<?php 
						 // Retrieve The Post's Author ID
					    $user_id = $user->ID; ?>
					    
					    <?php // Set the image size. Accepts all registered images sizes and array(int, int)
					    $size = 'EST-StaffLarge';
					
					    // Get the image URL using the author ID and image size params
					    $imgURL = get_cupp_meta($user_id, $size);
						echo '<div class="box">';
						echo '<div class="overlay">';	
					    // Print the image on the page
					    echo '<img class="contributor" src="'. $imgURL .'" alt="'. esc_html( $user->display_name ) .'">';
						echo '</div>';
						echo '</div>';
						echo '<p class="contributor-name tabletGothic uppercase">' . esc_html( $user->display_name ) . '</p>';
						
								  $bio = get_the_author_meta('tiny_bio', $user_id);
								  echo '<p class="contributor-title clavo">' . $bio . '</p>';
														echo '</div>';
					}?>
					
						</div>					
					
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