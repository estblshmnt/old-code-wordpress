<?php $temp_query = $wp_query; ?>

								<a href="<?php the_permalink();?>">		
								<p id="post-<?php the_ID(); ?>" class="title" > <?php the_title(); ?> </p>
								<p class="excerpt tabletGothic "> <?php echo substr(get_the_excerpt(), 0,130); ?></p>
								</a>
								<p class="author tabletGothic uppercase"> <?php the_author(); ?></p>
								</div>
								</div>
								
							<?php else :?>
							<div class="lower-trio-holder">
							<?php if ( has_post_thumbnail() ) { ?>
								<a href="<?php the_permalink();?>">
								<div class="lower-trio-thumbnail">

								<?php the_post_thumbnail( 'EST-LargeSqu' );   } ?>
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
								</div>

								<div class="lower-trio-text">
								<a href="<?php the_permalink();?>">	
								<p id="post-<?php the_ID(); ?>" class="title" > <?php the_title(); ?> </p>
								<p class="excerpt tabletGothic"> <?php echo substr(get_the_excerpt(), 0,130); ?></p>
								</a>
								<p class="author tabletGothic uppercase"><?php the_author(); ?></p>
								</div>
								</div>
							<?php endif;?>
	
								
							
			 			<?php endwhile; ?>
						<?php $wp_query = $temp_query; ?>
		
		