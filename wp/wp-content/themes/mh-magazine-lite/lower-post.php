<div id="full-width-container">
		
						<?php $temp_query = $wp_query; ?>
						<?php query_posts('showposts=6'); ?>
						<?php while (have_posts()) : the_post(); ?>
							
							<div class="full-width-container-holder">
							<?php if ( has_post_thumbnail() ) { ?>
								<a href="<?php the_permalink();?>"> 
								<?php the_post_thumbnail( 'EST-LargeLandscape' ); } ?>
								<div class="full-width-text">
									<p class="category tabletGothic">Testing</p>
									<p id="post-<?php the_ID(); ?>" class="title" > <?php the_title(); ?> </p>
									<p class="excerpt tabletGothic"> <?php the_excerpt(); ?></p> </a>
									<p class="author tabletGothic"> <?php the_author(); ?></p>
									<p class=" tabletGothic"> 
										<?php $categories = get_the_category();
											$separator = ' ';
											$output = '';
											if ( ! empty( $categories ) ) {
												foreach( $categories as $category ) {
													$output .= '<a href="' . 					esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
    }
    echo trim( $output, $separator );
} ?> </p>
								</div> <!-- END DIV full-width-text -->
							</div> <!-- END DIV full-width-container -->
			 			<?php endwhile; ?>
						<?php $wp_query = $temp_query; ?>
			
		
		
		
		</div> <!-- END DIV full-width-container -->