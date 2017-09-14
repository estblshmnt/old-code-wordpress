<?php $temp_query = $wp_query; ?>
						<?php query_posts(array('cat' => 7, 'showposts'=> 18,'post__not_in' => array($post->ID))); ?>
						
				
				
				
				<?php $counter=0;
				
				// The Loop
				while ( have_posts() ) : the_post(); 
				$counter++;
				?>
				
				
									
									<div class="lower-grid-holder">								
									<a href="<?php the_permalink();?>"> 
									<div class="image-holder">
										<?php the_post_thumbnail( 'EST-MediumSqu' );    ?></a>
										<p class="category tabletGothic">
										<?php $include = array("Feature","Podcast","Video","List","Advice","Essay","Photoessay");
												$g = 0;
												$catagorystring = '';
												foreach((get_the_category()) as $category)
													{   //if not in the exclude array
														if (in_array($category->cat_name, $include) && $g < 2)
														{ $catagorystring .= '<a href="">'.$category->name.'</a>, ';
															$g++;	}
													}
												echo substr($catagorystring, 0, strrpos($catagorystring, ','));  ?>	
	</p>
									</div>
									<a href="<?php the_permalink();?>"> 
									<p id="post-<?php the_ID(); ?>" class="title" > <?php the_title();  ?> </p></a>
									<p class="author tabletGothic uppercase"> <?php the_author(); ?></p>
									 <?php the_excerpt(); ?>
						
								</div>
						
						
						
					
					<?php endwhile; ?>

							
							</div>
							
				<div class="lower-fullwidth">
		
				<?php get_template_part('est', 'otherstories'); ?>


					
							
							
							
						<?php $wp_query = $temp_query; ?>