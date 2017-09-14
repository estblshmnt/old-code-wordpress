<?php $temp_query = $wp_query; ?>
						<?php query_posts('cat=7&showposts=9'); ?>
						<?php while (have_posts()) : the_post(); ?>
							<div class="lower-grid-holder">
							<?php if ( has_post_thumbnail() ) { ?>
									<a href="<?php the_permalink();?>"> 
									<div class="image-holder">
										<?php the_post_thumbnail( 'EST-MediumSqu' );   } ?>
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
								
									<p id="post-<?php the_ID(); ?>" class="title" > <?php the_title(); ?> </p></a>
									 <?php the_excerpt(); ?>
									<p class="author tabletGothic uppercase">  <?php if ( function_exists( 'coauthors_posts_links' ) ) {
    coauthors();
} else {
    the_author();
} ?></p>
									
							</div> <!-- END DIV sec-col-1-holder --> 
							
			 			<?php endwhile; ?>
						<?php $wp_query = $temp_query; ?>