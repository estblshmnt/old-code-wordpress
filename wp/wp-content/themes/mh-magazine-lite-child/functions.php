<?php

/***** Fetch Options *****/

$mh_magazine_lite_options = get_option('mh_options');

// EST Custom Functions
add_image_size ( 'EST-MainFeature', 720 , 630, true);
add_image_size ( 'EST-Feature', 425,305, true);
add_image_size ( 'EST-MediumSqu',265,230, true);
add_image_size ( 'EST-MediumLandscape',570,310, true);
add_image_size ( 'EST-LargeLandscape', 575,325, true);
add_image_size ( 'EST-LargeSqu', 375,325, true);
add_image_size ( 'EST-SingleLarge', 1160, 650, true);
add_image_size ( 'EST-SingleMedium', 830, 490, true);
add_image_size ( 'EST-StaffThumb', 226, 226, true);
add_image_size ( 'EST-StaffLarge', 500, 500, true);
add_image_size ( 'EST-MidSquRight', 325, 290, true);



function add_social_contactmethods( $contactmethods ) {
  // Add Twitter
    $contactmethods['facebook'] = 'Facebook';
    $contactmethods['pinterest'] = 'Pinterest';
	$contactmethods['twitter'] = 'Twitter';
	$contactmethods['instagram'] = 'Instagram';
	$contactmethods['tumblr'] = 'Tumblr';
	$contactmethods['tiny_bio'] = 'Tiny Bio';
	$contactmethods['medium_bio'] = 'Medium Bio';
    return $contactmethods;
}
add_filter('user_contactmethods','add_social_contactmethods',10,1); 



function get_the_popular_excerpt(){
	$excerpt = get_the_content();
	$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, 40);
	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
	$excerpt = $excerpt.'... <a href="'.$permalink.'">more</a>';
	return $excerpt;
}

function wpb_mce_buttons_2($buttons) {
	array_unshift($buttons, 'styleselect');
	return $buttons;
}
add_filter('mce_buttons_2', 'wpb_mce_buttons_2');


/*
* Callback function to filter the MCE settings
*/

function my_mce_before_init_insert_formats( $init_array ) {  

// Define the style_formats array

	$style_formats = array(  
		// Each array child is a format with it's own settings
		array(  
			'title' => 'Pull Quote',  
			'block' => 'span',  
			'classes' => 'pull-quote',
			'wrapper' => true,
		),
		array(  
			'title' => 'Sub Header Est-Green',  
			'block' => 'span',  
			'classes' => 'sub-header-est-green',
			'wrapper' => true,
		),
		array(  
			'title' => 'Sub Header society-politics',  
			'block' => 'span',  
			'classes' => 'sub-header-politics',
			'wrapper' => true,
		),
		array(  
			'title' => 'Sub Header arts-creators',  
			'block' => 'span',  
			'classes' => 'sub-header-arts',
			'wrapper' => true,
		),
		array(  
			'title' => 'Sub Header brain-body',  
			'block' => 'span',  
			'classes' => 'sub-header-brain',
			'wrapper' => true,
		),
		array(  
			'title' => 'Sub Header lust-liasions',  
			'block' => 'span',  
			'classes' => 'sub-header-lust',
			'wrapper' => true,
		),
		array(  
			'title' => 'Sub Header wit-whimsy',  
			'block' => 'span',  
			'classes' => 'sub-header-wit',
			'wrapper' => true,
		),
		array(  
			'title' => 'Sub Header AV',  
			'block' => 'span',  
			'classes' => 'sub-header-av',
			'wrapper' => true,
		),
	); 
	  
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );  
	
	return $init_array;  
  
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' ); 


function exclude_post_categories($excl='', $spacer=' ') {
  $categories = get_the_category($post->ID);
  if (!empty($categories)) {
    $exclude = $excl;
    $exclude = explode(",", $exclude);
    $thecount = count(get_the_category()) - count($exclude);
    foreach ($categories as $cat) {
      $html = '';
      if (!in_array($cat->cat_ID, $exclude)) {
        $html .= '<a href="' . get_category_link($cat->cat_ID) . '" ';
        $html .= 'title="' . $cat->cat_name . '">' . $cat->cat_name . '</a>';
        if ($thecount > 1) {
          $html .= $spacer;
        }
        $thecount--;
        echo $html;
      }
    }
  }
}

/***** Custom Hooks *****/

function mh_html_class() {
    do_action('mh_html_class');
}
function mh_before_page_content() {
    do_action('mh_before_page_content');
}
function mh_before_post_content() {
    do_action('mh_before_post_content');
}
function mh_after_post_content() {
    do_action('mh_after_post_content');
}
function mh_post_header() {
    do_action('mh_post_header');
}
function mh_loop_content() {
    do_action('mh_loop_content');
}

/***** Enable Shortcodes inside Widgets	*****/

add_filter('widget_text', 'do_shortcode');

/***** Theme Setup *****/

function mh_magazine_lite_setup() {
	global $content_width;
	if (!isset($content_width)) {
		$content_width = 620;
	}
	$header = array(
		'default-image' => '',
		'width' => 300,
		'height' => 100,
		'flex-width' => true,
		'flex-height' => true,
		'header-text' => false
	);
	add_theme_support('custom-header', $header);
	load_theme_textdomain('mh-magazine-lite', get_template_directory() . '/languages');
	add_theme_support('title-tag');
	add_theme_support('automatic-feed-links');
	add_theme_support('custom-background');
	add_theme_support('post-thumbnails');
	add_image_size('content', 620, 264, true);
	add_image_size('loop', 174, 131, true);
	add_image_size('cp_small', 70, 53, true);
	add_editor_style();
	register_nav_menu('main_nav', __('Main Navigation', 'mh-magazine-lite'));
}
add_action('after_setup_theme', 'mh_magazine_lite_setup');

/***** Add Backwards Compatibility for Title Tag *****/

if (!function_exists('_wp_render_title_tag')) {
	function mh_magazine_lite_render_title() { ?>
		<title><?php wp_title('|', true, 'right'); ?></title><?php
	}
	add_action('wp_head', 'mh_magazine_lite_render_title');
}

/***** Load CSS & JavaScript *****/

if (!function_exists('mh_scripts')) {
	function mh_scripts() {
		wp_enqueue_style('mh-google-fonts', '//fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,600', array(), null);
		wp_enqueue_style('mh-style', get_stylesheet_uri(), false, '1.8.8');
		wp_enqueue_script('mh-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'));
		
		if (!is_admin()) {
			if (is_singular() && comments_open() && (get_option('thread_comments') == 1))
				wp_enqueue_script('comment-reply');
		}
	}
}

add_action('wp_enqueue_scripts', 'mh_scripts');

if (!function_exists('mh_magazine_lite_admin_scripts')) {
	function mh_magazine_lite_admin_scripts($hook) {
		if ('appearance_page_magazine' === $hook || 'widgets.php' === $hook) {
			wp_enqueue_style('mh-admin', get_template_directory_uri() . '/admin/admin.css');
		}
	}
}
add_action('admin_enqueue_scripts', 'mh_magazine_lite_admin_scripts');

/***** Register Widget Areas / Sidebars	*****/

if (!function_exists('mh_widgets_init')) {
	function mh_widgets_init() {
		register_sidebar(array('name' => __('Sidebar', 'mh-magazine-lite'), 'id' => 'sidebar', 'description' => __('Widget area (sidebar left/right) on single posts, pages and archives', 'mh-magazine-lite'), 'before_widget' => '<div class="sb-widget">', 'after_widget' => '</div>', 'before_title' => '<h4 class="widget-title">', 'after_title' => '</h4>'));
		register_sidebar(array('name' => __('Home 1', 'mh-magazine-lite'), 'id' => 'home-1', 'description' => __('Widget area on homepage', 'mh-magazine-lite'), 'before_widget' => '<div class="sb-widget home-1 home-wide">', 'after_widget' => '</div>', 'before_title' => '<h4 class="widget-title">', 'after_title' => '</h4>'));
		register_sidebar(array('name' => __('Home 2', 'mh-magazine-lite'), 'id' => 'home-2', 'description' => __('Widget area on homepage', 'mh-magazine-lite'), 'before_widget' => '<div class="sb-widget home-2">', 'after_widget' => '</div>', 'before_title' => '<h4 class="widget-title">', 'after_title' => '</h4>'));
		register_sidebar(array('name' => __('Home 3', 'mh-magazine-lite'), 'id' => 'home-3', 'description' => __('Widget area on homepage', 'mh-magazine-lite'), 'before_widget' => '<div class="sb-widget home-3">', 'after_widget' => '</div>', 'before_title' => '<h4 class="widget-title">', 'after_title' => '</h4>'));
		register_sidebar(array('name' => __('Home 4', 'mh-magazine-lite'), 'id' => 'home-4', 'description' => __('Widget area on homepage', 'mh-magazine-lite'), 'before_widget' => '<div class="sb-widget home-4 home-wide">', 'after_widget' => '</div>', 'before_title' => '<h4 class="widget-title">', 'after_title' => '</h4>'));
		register_sidebar(array('name' => __('Home 5', 'mh-magazine-lite'), 'id' => 'home-5', 'description' => __('Widget area on homepage', 'mh-magazine-lite'), 'before_widget' => '<div class="sb-widget home-5">', 'after_widget' => '</div>', 'before_title' => '<h4 class="widget-title">', 'after_title' => '</h4>'));
		register_sidebar(array('name' => __('Posts 1', 'mh-magazine-lite'), 'id' => 'posts-1', 'description' => __('Widget area above single post content', 'mh-magazine-lite'), 'before_widget' => '<div class="sb-widget posts-1">', 'after_widget' => '</div>', 'before_title' => '<h4 class="widget-title">', 'after_title' => '</h4>'));
		register_sidebar(array('name' => __('Posts 2', 'mh-magazine-lite'), 'id' => 'posts-2', 'description' => __('Widget area below single post content', 'mh-magazine-lite'), 'before_widget' => '<div class="sb-widget posts-2">', 'after_widget' => '</div>', 'before_title' => '<h4 class="widget-title">', 'after_title' => '</h4>'));
		register_sidebar(array('name' => __('Footer 1', 'mh-magazine-lite'), 'id' => 'footer-1', 'description' => __('Widget area in footer', 'mh-magazine-lite'), 'before_widget' => '<div class="footer-widget footer-1">', 'after_widget' => '</div>', 'before_title' => '<h6 class="footer-widget-title">', 'after_title' => '</h6>'));
		register_sidebar(array('name' => __('Footer 2', 'mh-magazine-lite'), 'id' => 'footer-2', 'description' => __('Widget area in footer', 'mh-magazine-lite'), 'before_widget' => '<div class="footer-widget footer-2">', 'after_widget' => '</div>', 'before_title' => '<h6 class="footer-widget-title">', 'after_title' => '</h6>'));
		register_sidebar(array('name' => __('Footer 3', 'mh-magazine-lite'), 'id' => 'footer-3', 'description' => __('Widget area in footer', 'mh-magazine-lite'), 'before_widget' => '<div class="footer-widget footer-3">', 'after_widget' => '</div>', 'before_title' => '<h6 class="footer-widget-title">', 'after_title' => '</h6>'));
		register_sidebar(array('name' => __('Footer 4', 'mh-magazine-lite'), 'id' => 'footer-4', 'description' => __('Widget area in footer', 'mh-magazine-lite'), 'before_widget' => '<div class="footer-widget footer-4">', 'after_widget' => '</div>', 'before_title' => '<h6 class="footer-widget-title">', 'after_title' => '</h6>'));
	}
}
add_action('widgets_init', 'mh_widgets_init');

/***** Add CSS classes to HTML tag *****/

if (!function_exists('mh_magazine_lite_html_class')) {
	function mh_magazine_lite_html_class() {
		$mh_magazine_lite_options = mh_magazine_lite_theme_options();
		isset($mh_magazine_lite_options['full_bg']) && $mh_magazine_lite_options['full_bg'] == 1 ? $fullbg = ' fullbg' : $fullbg = '';
		echo $fullbg;
	}
}
add_action('mh_html_class', 'mh_magazine_lite_html_class');

/***** Add CSS classes to body tag *****/

if (!function_exists('mh_magazine_lite_body_class')) {
	function mh_magazine_lite_body_class($classes) {
		$mh_magazine_lite_options = mh_magazine_lite_theme_options();
		$classes[] = 'mh-' . $mh_magazine_lite_options['sb_position'] . '-sb';
		return $classes;
	}
}
add_filter('body_class', 'mh_magazine_lite_body_class');

/***** Logo / Header Image Fallback *****/

if (!function_exists('mh_logo')) {
	function mh_logo() {
		$header_img = get_header_image();
		echo '<div class="logo-wrap" role="banner">' . "\n";
		if ($header_img) {
			echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '" rel="home"><img src="' . esc_url($header_img) . '" height="100"'  . ' width="300"' . ' alt="' . esc_attr(get_bloginfo('name')) . '" /></a>' . "\n";
		} else {
			echo '<div class="logo">' . "\n";
			echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '" rel="home">' . "\n";
			echo '<h1 class="logo-name">' . esc_attr(get_bloginfo('name')) . '</h1>' . "\n";
			echo '<h2 class="logo-desc">' . esc_attr(get_bloginfo('description')) . '</h2>' . "\n";
			echo '</a>' . "\n";
			echo '</div>' . "\n";
		}
		echo '</div>' . "\n";
	}
}

/***** Page Title Output *****/

if (!function_exists('mh_page_title')) {
	function mh_page_title() {
		if (!is_front_page()) {
			echo '<div class="page-title-top"></div>' . "\n";
			echo '<h1 class="page-title">';
			if (is_archive()) {
				if (is_category() || is_tax()) {
					single_cat_title();
				} elseif (is_tag()) {
					single_tag_title();
				} elseif (is_author()) {
					global $author;
					$user_info = get_userdata($author);
					printf(_x('Articles by %s', 'post author', 'mh-magazine-lite'), esc_attr($user_info->display_name));
				} elseif (is_day()) {
					echo get_the_date();
				} elseif (is_month()) {
					echo get_the_date('F Y');
				} elseif (is_year()) {
					echo get_the_date('Y');
				} else {
					_e('Archives', 'mh-magazine-lite');
				}
			} else {
				if (is_home()) {
					echo get_the_title(get_option('page_for_posts', true));
				} elseif (is_404()) {
					_e('Page not found (404)', 'mh-magazine-lite');
				} elseif (is_search()) {
					printf(__('Search Results for %s', 'mh-magazine-lite'), esc_attr(get_search_query()));
				} else {
					the_title();
				}
			}
			echo '</h1>' . "\n";
		}
	}
}
add_action('mh_before_page_content', 'mh_page_title');

/***** Subheading on Posts *****/

if (!function_exists('mh_subheading')) {
	function mh_subheading() {
		global $post;
		if (get_post_meta($post->ID, "mh-subheading", true)) {
			echo '<div class="subheading-top"></div>' . "\n";
			echo '<h2 class="subheading">' . esc_attr(get_post_meta($post->ID, "mh-subheading", true)) . '</h2>' . "\n";
		}
	}
}
add_action('mh_post_header', 'mh_subheading');

/***** Featured Image on Posts *****/

if (!function_exists('mh_featured_image')) {
	function mh_featured_image() {
		global $post;
		if (has_post_thumbnail() && !is_attachment()) {
			$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'content');
			echo "\n" . '<div class="post-thumbnail">' . "\n";
				echo '<img src="' . esc_url($thumbnail[0]) . '" alt="' . esc_attr(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true)) . '" title="' . esc_attr(get_post(get_post_thumbnail_id())->post_title) . '" />' . "\n";
				if (get_post(get_post_thumbnail_id())->post_excerpt) {
					echo '<span class="wp-caption-text">' . wp_kses_post(get_post(get_post_thumbnail_id())->post_excerpt) . '</span>' . "\n";
				}
			echo '</div>' . "\n";
		}
	}
}

/***** Author box *****/

if (!function_exists('mh_author_box')) {
	function mh_author_box($author_ID = '') {
		$mh_magazine_lite_options = mh_magazine_lite_theme_options();
		if (isset($mh_magazine_lite_options['author_box'])) {
			if (!$mh_magazine_lite_options['author_box'] && !is_attachment() && get_the_author_meta('description', $author_ID)) {
				$author_ID = get_the_author_meta('ID');
				$ab_output = true;
			} else {
				$ab_output = false;
			}
		} elseif (!is_attachment() && get_the_author_meta('description', $author_ID)) {
			$author_ID = get_the_author_meta('ID');
			$ab_output = true;
		} else {
			$ab_output = false;
		}
		if ($ab_output) {
			echo '<section class="author-box">' . "\n";
				echo '<div class="author-box-wrap clearfix">' . "\n";
					echo '<div class="author-box-avatar">' . get_avatar($author_ID, 113) . '</div>' . "\n";
					echo '<h5 class="author-box-name">' . __('About ', 'mh-magazine-lite') . esc_attr(get_the_author_meta('display_name', $author_ID)) . '</h5>' . "\n";
					echo '<div class="author-box-desc">' . wp_kses_post(get_the_author_meta('description', $author_ID)) . '</div>' . "\n";
				echo '</div>' . "\n";
			echo '</section>' . "\n";
		}
	}
}
add_action('mh_after_post_content', 'mh_author_box');

/***** Post / Image Navigation *****/

if (!function_exists('mh_postnav')) {
	function mh_postnav() {
		global $post;
		$mh_magazine_lite_options = mh_magazine_lite_theme_options();
		if (isset($mh_magazine_lite_options['post_nav']) && $mh_magazine_lite_options['post_nav']) {
			$parent_post = get_post($post->post_parent);
			$attachment = is_attachment();
			$previous = ($attachment) ? $parent_post : get_adjacent_post(false, '', true);
			$next = get_adjacent_post(false, '', false);

			if (!$next && !$previous)
			return;

			if ($attachment) {
				$attachments = get_children(array('post_type' => 'attachment', 'post_mime_type' => 'image', 'post_parent' => $parent_post->ID));
				$count = count($attachments);
			}
			echo '<nav class="section-title clearfix" role="navigation">' . "\n";
				if ($previous || $attachment) {
					echo '<div class="post-nav left">' . "\n";
						if ($attachment) {
							if ($count == 1) {
								echo '<a href="' . esc_url(get_permalink($parent_post)) . '">' . __('&larr; Back to article', 'mh-magazine-lite') . '</a>';
							} else {
								previous_image_link('%link', __('&larr; Previous image', 'mh-magazine-lite'));
							}
						} else {
							previous_post_link('%link', __('&larr; Previous article', 'mh-magazine-lite'));
						}
					echo '</div>' . "\n";
				}
				if ($next || $attachment) {
					echo '<div class="post-nav right">' . "\n";
						if ($attachment) {
							next_image_link('%link', __('Next image &rarr;', 'mh-magazine-lite'));
						} else {
							next_post_link('%link', __('Next article &rarr;', 'mh-magazine-lite'));
						}
					echo '</div>' . "\n";
				}
			echo '</nav>' . "\n";
		}
	}
}
add_action('mh_after_post_content', 'mh_postnav');

/***** Loop Output *****/

if (!function_exists('mh_loop')) {
	function mh_loop() {
		if (have_posts()) {
			while (have_posts()) : the_post();
				get_template_part('loop', get_post_format());
			endwhile;
			mh_pagination();
		} else {
			get_template_part('content', 'none');
		}
	}
}
add_action('mh_loop_content', 'mh_loop');

/***** Custom Excerpts *****/

if (!function_exists('mh_magazine_lite_excerpt_length')) {
	function mh_magazine_lite_excerpt_length($length) {
		$mh_magazine_lite_options = mh_magazine_lite_theme_options();
		$excerpt_length = absint($mh_magazine_lite_options['excerpt_length']);
		return $excerpt_length;
	}
}
add_filter('excerpt_length', 'mh_magazine_lite_excerpt_length', 999);

if (!function_exists('mh_magazine_lite_excerpt_more')) {
	function mh_magazine_lite_excerpt_more($more) {
		global $post;
		$mh_magazine_lite_options = mh_magazine_lite_theme_options();
		return ' <a class="mh-excerpt-more" href="' . esc_url(get_permalink($post->ID)) . '" title="' . the_title_attribute('echo=0') . '">' . esc_attr($mh_magazine_lite_options['excerpt_more']) . '</a>';
	}
}
add_filter('excerpt_more', 'mh_magazine_lite_excerpt_more');

if (!function_exists('mh_magazine_lite_excerpt_markup')) {
	function mh_magazine_lite_excerpt_markup($excerpt) {
		$markup = '<div class="mh-excerpt">' . $excerpt . '</div>';
		return $markup;
	}
}
add_filter('the_excerpt', 'mh_magazine_lite_excerpt_markup');

/***** Custom Commentlist *****/

if (!function_exists('mh_comments')) {
	function mh_comments($comment, $args, $depth) {
		$GLOBALS['comment'] = $comment; ?>
		<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
			<div id="comment-<?php comment_ID(); ?>">
				<div class="vcard meta">
					<?php echo get_avatar($comment->comment_author_email, 30); ?>
					<?php echo get_comment_author_link() ?> //
					<a href="<?php echo esc_url(get_comment_link($comment->comment_ID)) ?>"><?php printf(__('%1$s at %2$s', 'mh-magazine-lite'), get_comment_date(),  get_comment_time()) ?></a> //
					<?php if (comments_open() && $args['max_depth']!=$depth) { ?>
					<?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
					<?php } ?>
					<?php edit_comment_link(__('(Edit)', 'mh-magazine-lite'),'  ','') ?>
				</div>
				<?php if ($comment->comment_approved == '0') : ?>
					<div class="comment-info"><?php _e('Your comment is awaiting moderation.', 'mh-magazine-lite') ?></div>
				<?php endif; ?>
				<div class="comment-text">
					<?php comment_text() ?>
				</div>
			</div><?php
	}
}

/***** Custom Comment Fields *****/

if (!function_exists('mh_comment_fields')) {
	function mh_comment_fields($fields) {
		$commenter = wp_get_current_commenter();
		$req = get_option('require_name_email');
		$aria_req = ($req ? " aria-required='true'" : '');
		$fields =  array(
			'author'	=>	'<p class="comment-form-author"><label for="author">' . __('Name ', 'mh-magazine-lite') . '</label>' . ($req ? '<span class="required">*</span>' : '') . '<br/><input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30"' . $aria_req . ' /></p>',
			'email' 	=>	'<p class="comment-form-email"><label for="email">' . __('Email ', 'mh-magazine-lite') . '</label>' . ($req ? '<span class="required">*</span>' : '' ) . '<br/><input id="email" name="email" type="text" value="' . esc_attr($commenter['comment_author_email']) . '" size="30"' . $aria_req . ' /></p>',
			'url' 		=>	'<p class="comment-form-url"><label for="url">' . __('Website', 'mh-magazine-lite') . '</label><br/><input id="url" name="url" type="text" value="' . esc_attr($commenter['comment_author_url']) . '" size="30" /></p>'
		);
		return $fields;
	}
}
add_filter('comment_form_default_fields', 'mh_comment_fields');

/***** Pagination *****/

if (!function_exists('mh_pagination')) {
	function mh_pagination() {
		global $wp_query;
	    $big = 9999;
		echo paginate_links(array('base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))), 'format' => '?paged=%#%', 'current' => max(1, get_query_var('paged')), 'prev_next' => true, 'prev_text' => __('&laquo;', 'mh-magazine-lite'), 'next_text' => __('&raquo;', 'mh-magazine-lite'), 'total' => $wp_query->max_num_pages));
	}
}

if (!function_exists('mh_posts_pagination')) {
	function mh_posts_pagination($content) {
		if (is_singular() && is_main_query()) {
			$content .= wp_link_pages(array('before' => '<div class="pagination">', 'after' => '</div>', 'link_before' => '<span class="pagelink">', 'link_after' => '</span>', 'nextpagelink' => __('&raquo;', 'mh-magazine-lite'), 'previouspagelink' => __('&laquo;', 'mh-magazine-lite'), 'pagelink' => '%', 'echo' => 0));
		}
		return $content;
	}
}
add_filter('the_content', 'mh_posts_pagination', 1);

/***** Add Featured Image Size to Media Gallery Selection *****/

if (!function_exists('custom_image_size_choose')) {
	function custom_image_size_choose($sizes) {
		$custom_sizes = array('content' => 'Featured Image');
		return array_merge($sizes, $custom_sizes);
	}
}
add_filter('image_size_names_choose', 'custom_image_size_choose');

/***** Add CSS3 Media Queries Support for older versions of IE *****/

function mh_magazine_lite_media_queries() {
	echo '<!--[if lt IE 9]>' . "\n";
	echo '<script src="' . get_template_directory_uri() . '/js/css3-mediaqueries.js"></script>' . "\n";
	echo '<![endif]-->' . "\n";
}
add_action('wp_head', 'mh_magazine_lite_media_queries');


function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


function get_the_eighty_excerpt(){
$excerpt = get_the_content();
$excerpt = strip_shortcodes($excerpt);
$excerpt = strip_tags($excerpt);
$the_str = substr($excerpt, 0, 80);
return $the_str;
}


/*
function est_custom_category() {
	//include these from displaying
	$include = array("Feature","Podcast","Video","List","Advice","Essay","Photoessay");
	// Set initial counter to limit display of only one category
	$g = 0;
	//set up an empty categorystring
	$catagorystring = '';
	//loop through the categories for this post
	foreach((get_the_category()) as $category)
		{   //if not in the exclude array
			if (in_array($category->cat_name, $include) && $g < 2)
			{
			//add category with link to categorystring
			$catagorystring .= '<a href="'.get_bloginfo(url).get_option('category_base').'/'.$category->slug.'">'.$category->name.'</a>, ';
			// Add to counter after category loop
			$g++;
			}
		}
			//strip off last comma (and space) and display
		echo substr($catagorystring, 0, strrpos($catagorystring, ','));
								
}
*/


/***** Include Functions *****/

if (is_admin()) {
	require_once('admin/admin.php');
}

require_once('includes/mh-options.php');
require_once('includes/mh-widgets.php');

//Remove pages from search results
function exclude_pages_from_search($query) {
if ($query->is_search) {
$query->set('post_type', 'post');
}
return $query;
}
add_filter('pre_get_posts','exclude_pages_from_search');




function get_users_ordered_by_post_date($args = '') {
    // Prepare arguments
    if (is_string($args) && '' !== $args)
        parse_str($args, $args);
    $asc = (isset($args['order']) && 'ASC' === strtoupper($args['order']));
    unset($args['orderby']);
    unset($args['order']);

    // Get ALL users
    $users = get_users($args);
    $post_dates = array();
    if ($users) {
        // For EACH user ...
        foreach ($users as $user) {
            $ID = $user->ID;

            // ... get ALL posts (per default sorted by post_date), ...
            $posts = get_posts('author='.$ID);
            $post_dates[$ID] = '';

            // ... then use only the first (= newest) post
            if ($posts) $post_dates[$ID] = $posts[0]->post_date;
        }
    }

    // Sort dates (according to order), ...
    if (! $asc)
        arsort($post_dates);

    // ... then set up user array
    $users = array();
    foreach ($post_dates as $key => $value) {
        // $user = get_userdata($key);
        // $users[] = $user->ID;
        $users[] = get_userdata($key);
    }
    return $users;
}


// Random User 
function wpb_random_users() { 

global $wpdb;
		
		
			// Query database for users
$usernames = $wpdb->get_results("SELECT display_name, user_nicename, ID FROM $wpdb->users WHERE ID <> 1 ORDER BY RAND() LIMIT 6  ");

		// Display users in a list
		foreach ($usernames as $username) {
			$user_id = $username->ID;
			$author_url = get_author_posts_url( $user_id );
			$size = 'EST-StaffThumb';
			$imgURL = get_cupp_meta($user_id, $size);
			
			echo '<div class="contributor-holder">';
			echo '<p class="contributor-name tabletGothic uppercase"><a href="'. $author_url . '">' . esc_html( $username->display_name ) . '</p>';
				 // Retrieve The Post's Author ID
			     
			echo '<div class="box"><div class="overlay">';
			    // Print the image on the page
			echo '<img class="contributor" src="'. $imgURL .'" alt="'. esc_html( $username->display_name ) .'"></a></div></div>';
							
				$recent = get_posts(array(
						    'author'=>$user_id,
						    'orderby'=>'date',
						    'order'=>'desc',
						    'numberposts'=>1
						));
				
				if( $recent ){
						  $title = get_the_title($recent[0]->ID);
						  echo '<p class="contributor-title clavo"><a href="' . get_permalink($recent[0]->ID) . '">'. $title .'</p>';
						}else{
						  //No published posts
						}
						
 						//}  else { }
						
				
				echo '</div>';

		
		}
		}

wp_enqueue_script('script', get_template_directory_uri() . '/js/mobile-fix.js', array('jquery'));

?>