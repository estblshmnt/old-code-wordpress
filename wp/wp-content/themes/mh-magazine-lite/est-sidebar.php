<div id="post-sidebar" class="tabletGothic">
			
			<?php 				
				if (function_exists( 'wpp_get_mostpopular' )) {
						$post_ID=	  wpp_get_mostpopular('cat=17&range=weekly&order_by=views&limit=3&stats_views=0&post_type=post&thumbnail_width=180&thumbnail_height=180&post_html="<li><p>{thumb}{title}</p></li>"');
							  
							}?>

</div>