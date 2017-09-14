<?php /* Loop Template used for index/archive/search */ ?>

<article <?php post_class(); ?>>
	
	
	<div class="loop-wrap clearfix">
		
		
		
		<div class="loop-thumb">
						<a href="<?php the_permalink(); ?>">
						<div class="image">
							<?php if (has_post_thumbnail()) { the_post_thumbnail('EST-MediumSqu'); } 
							else { echo '<img src="' . get_template_directory_uri() . '/images/noimage_174x131.png' . '" alt="No Picture" />'; } ?>
						</a>
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
							
						<header class="loop-data">
			
						
						<h3 class="loop-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
						
								

						</header>
						<p class="excerpt tabletGothic"> <?php echo substr(get_the_excerpt(), 0,130); ?></p>
								</a>
						<p class="author tabletGothic uppercase"><?php the_author(); ?></p>
	</div>
	</div>
</article>


