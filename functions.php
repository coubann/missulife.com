<?php


// Load scripts

if ( !function_exists( 'scherzo_scripts' ) ) :

	function scherzo_scripts() {

	    if (!is_admin()) {
	      
			wp_register_script( 'html5shiv', 'http://html5shiv.googlecode.com/svn/trunk/html5.js');
			wp_enqueue_script( 'html5shiv' );

	    }
	}

	add_action('init', 'scherzo_scripts');

endif;


// Define the custom width

if ( ! isset( $content_width ) ) $content_width = 522;


// Set up three 'contextual' sidebar areas */

if( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'before_widget' => '<li class="widget">', // widget 的开始标签
		'after_widget' => '</li>', // widget 的结束标签
		'before_title' => '<h3>', // 标题的开始标签
		'after_title' => '</h3>' // 标题的结束标签
	));
}

add_custom_background();

add_theme_support('automatic-feed-links');

// Allow custom headers

define('HEADER_TEXTCOLOR', '444444');
define('HEADER_IMAGE_WIDTH', 816);
define('HEADER_IMAGE_HEIGHT', 144);

	// gets included in the site header
	
	if ( !function_exists( 'scherzo_header_style' ) ) :
	
		function scherzo_header_style() {
		
			if ( 'blank' == get_header_textcolor() ) {
			
				echo "<style>#site-header, #tag {text-indent: -9999px;}</style>";

			}
	
			?><style>
		
				#site-header {
					background-image: url(<?php header_image(); ?>);
				}
			
				#site-title,
				#tag {
					color: #<?php HEADER_TEXTCOLOR(); ?>;
				}
			
			</style>
			
			<?php
		
		}
		
	endif;	
	
	// gets included in the admin header
	
	if ( !function_exists( 'scherzo_admin_header_style' ) ) :
	
		function scherzo_admin_header_style() {
	
			?><style type="text/css">
				#headimg {
					width: <?php echo HEADER_IMAGE_WIDTH; ?>px;
					height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
				}
			</style><?php
		
		}
		
	endif;
	
	add_custom_image_header('scherzo_header_style', 'scherzo_admin_header_style');

?>
