<?php $temp_query = $wp_query; ?>
						<?php query_posts('cat=7&showposts=3'); ?>
						<?php while (have_posts()) : the_post(); ?>
							
							<div class="container">
							<?php if ( has_post_thumbnail() ) { ?>
								<a href="<?php the_permalink();?>"> 
								<?php the_post_thumbnail( 'EST-LargeLandscape' ); } ?>
								<div class="text">
									<p id="post-<?php the_ID(); ?>" class="title" > <?php the_title(); ?> </p>
									<p class="excerpt tabletGothic"> <?php the_excerpt(); ?></p> </a>
									<p class="author tabletGothic"> <?php the_author(); ?></p>
									<p class="category tabletGothic">
										
												<?php $include = array("Feature","Podcast","Video","List","Advice","Essay","Photoessay");
												$g = 0;
												$catagorystring = '';
												foreach((get_the_category()) as $category)
													{   //if not in the exclude array
														if (in_array($category->cat_name, $include) && $g < 2)
														{ $catagorystring .= '<a href="'.get_bloginfo(url).get_option('category_base').'/'.$category->slug.'">'.$category->name.'</a>, ';
															$g++;	}
													}
												echo substr($catagorystring, 0, strrpos($catagorystring, ','));  ?>	


						
										
										
									</p>
									
																	</div> <!-- END DIV full-width-text -->
							</div> <!-- END DIV full-width-container -->
							
							
															
							
										
			 			<?php endwhile; ?>
						<?php $wp_query = $temp_query; ?>