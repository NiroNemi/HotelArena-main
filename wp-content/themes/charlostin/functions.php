<?php
$charlostin_redux_demo = get_option('redux_demo');

//Custom fields:
require_once get_template_directory() . '/framework/widget/recent-post.php';
require_once get_template_directory() . '/framework/wp_bootstrap_navwalker.php';
require_once get_template_directory() . '/visual/shortcodes.php';
require_once get_template_directory() . '/visual/vc_shortcode.php';
//Theme Set up:
function charlostin_theme_setup() {
    /*
     * This theme uses a custom image size for featured images, displayed on
     * "standard" posts and pages.
     */
	add_theme_support( 'custom-header' ); 
	add_theme_support( 'custom-background' );
	$lang = get_template_directory_uri() . '/languages';
    load_theme_textdomain('charlostin', $lang);

    add_theme_support( 'post-thumbnails' );
    // Adds RSS feed links to <head> for posts and comments.
    add_theme_support( 'automatic-feed-links' );
    // Switches default core markup for search form, comment form, and comments
    // to output valid HTML5.
    add_theme_support( "title-tag" );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );
    // This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
    'primary' =>  esc_html__( 'Primary Navigation Menu: Chosen menu in single, blog, pages ...', 'charlostin' ),
    'one-page' =>  esc_html__( 'One Page Navigation Menu: Chosen menu in Home page', 'charlostin' ),
	) );
    // This theme uses its own gallery styles.
}
add_action( 'after_setup_theme', 'charlostin_theme_setup' );
if ( ! isset( $content_width ) ) $content_width = 900;
 
function charlostin_fonts_url() {
    $font_url = '';

    if ( 'off' !== _x( 'on', 'Google font: on or off', 'charlostin' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Raleway:300,400,700,800%7CLato:300,400,700&subset=latin,latin-ext' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}

function charlostin_theme_scripts_styles() {
	$charlostin_redux_demo = get_option('redux_demo');
	$protocol = is_ssl() ? 'https' : 'http';
    wp_enqueue_style( 'charlostin-fonts', charlostin_fonts_url(), array(), '1.0.0' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_style( 'liner-icon', get_template_directory_uri().'/assets/vendors/linericon/style.css');
    wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css');
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri().'/assets/vendors/owl-carousel/assets/owl.carousel.min.css');
    wp_enqueue_style( 'simple-lightbox', get_template_directory_uri().'/assets/vendors/lightbox/simpleLightbox.css');
    wp_enqueue_style( 'nice-select', get_template_directory_uri().'/assets/vendors/nice-select/css/nice-select.css');
    wp_enqueue_style( 'animate-css', get_template_directory_uri().'/assets/vendors/animate-css/animate.css');
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri().'/assets/vendors/popup/magnific-popup.css');
    wp_enqueue_style( 'stroke-icon', get_template_directory_uri().'/assets/vendors/stroke-icon/style.css');
    wp_enqueue_style( 'flaticon', get_template_directory_uri().'/assets/vendors/flaticon/flaticon.css');
    wp_enqueue_style( 'tempusdominus', get_template_directory_uri().'/assets/vendors/bootstrap-datepicker/tempusdominus-bootstrap-4.min.css');
    wp_enqueue_style( 'settings', get_template_directory_uri().'/assets/vendors/revolution/css/settings.css');
    wp_enqueue_style( 'layers', get_template_directory_uri().'/assets/vendors/revolution/css/layers.css');
    wp_enqueue_style( 'navigation', get_template_directory_uri().'/assets/vendors/revolution/css/navigation.css');
    wp_enqueue_style( 'animate-css', get_template_directory_uri().'/assets/vendors/animate-css/animate.css');
    wp_enqueue_style( 'charlostin-css', get_template_directory_uri().'/assets/css/style.css');
    wp_enqueue_style( 'responsive', get_template_directory_uri().'/assets/css/responsive.css');
    
    wp_enqueue_style( 'charlostin-style', get_stylesheet_uri(), array(), '2018-10-10' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
    wp_enqueue_script( 'comment-reply' );

    if(!is_singular('hb_room')){
        wp_enqueue_script("charlostin-jquery", get_template_directory_uri()."/assets/js/jquery-3.3.1.min.js",array(),false,true);
    }
    wp_enqueue_script("popper", get_template_directory_uri()."/assets/js/popper.min.js",array(),false,true);
    wp_enqueue_script("bootstrap", get_template_directory_uri()."/assets/js/bootstrap.min.js",array(),false,true);
    wp_enqueue_script("themepunch-tools", get_template_directory_uri()."/assets/vendors/revolution/js/jquery.themepunch.tools.min.js",array(),false,true);
    wp_enqueue_script("themepunch-revolution", get_template_directory_uri()."/assets/vendors/revolution/js/jquery.themepunch.revolution.min.js",array(),false,true);
    wp_enqueue_script("actions", get_template_directory_uri()."/assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js",array(),false,true);
    wp_enqueue_script("extension-video", get_template_directory_uri()."/assets/vendors/revolution/js/extensions/revolution.extension.video.min.js",array(),false,true);
    wp_enqueue_script("slideanims", get_template_directory_uri()."/assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js",array(),false,true);
    wp_enqueue_script("layeranimation", get_template_directory_uri()."/assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js",array(),false,true);
    wp_enqueue_script("navigation", get_template_directory_uri()."/assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js",array(),false,true);
    wp_enqueue_script("lightbox", get_template_directory_uri()."/assets/vendors/lightbox/simpleLightbox.min.js",array(),false,true);
    wp_enqueue_script("nice-select", get_template_directory_uri()."/assets/vendors/nice-select/js/jquery.nice-select.min.js",array(),false,true);
    wp_enqueue_script("imagesloaded", get_template_directory_uri()."/assets/vendors/isotope/imagesloaded.pkgd.min.js",array(),false,true);
    wp_enqueue_script("isotope", get_template_directory_uri()."/assets/vendors/isotope/isotope.pkgd.min.js",array(),false,true);
    wp_enqueue_script("owl-carousel", get_template_directory_uri()."/assets/vendors/owl-carousel/owl.carousel.min.js",array(),false,true);
    wp_enqueue_script("waypoints", get_template_directory_uri()."/assets/vendors/counter-up/jquery.waypoints.min.js",array(),false,true);
    wp_enqueue_script("counter-up", get_template_directory_uri()."/assets/vendors/counter-up/jquery.counterup.min.js",array(),false,true);
    wp_enqueue_script("magnific-popup", get_template_directory_uri()."/assets/vendors/popup/jquery.magnific-popup.min.js",array(),false,true);
    wp_enqueue_script("flex-slider", get_template_directory_uri()."/assets/vendors/flex-slider/jquery.flexslider-min.js",array(),false,true);
    wp_enqueue_script("moment", get_template_directory_uri()."/assets/vendors/bootstrap-datepicker/moment.min.js",array(),false,true);
    wp_enqueue_script("tempus-dominus", get_template_directory_uri()."/assets/vendors/bootstrap-datepicker/tempusdominus-bootstrap-4.min.js",array(),false,true);
    wp_enqueue_script("countdown", get_template_directory_uri()."/assets/vendors/countdown/countdown.js",array(),false,true);
    wp_enqueue_script("charlostin-theme", get_template_directory_uri()."/assets/js/theme.js",array(),false,true);
   }
   
add_action( 'wp_enqueue_scripts', 'charlostin_theme_scripts_styles' );



//Custom Excerpt Function
function charlostin_do_shortcode($content) {
    global $shortcode_tags;
    if (empty($shortcode_tags) || !is_array($shortcode_tags))
        return $content;
    $pattern = get_shortcode_regex();
    return preg_replace_callback( "/$pattern/s", 'do_shortcode_tag', $content );
}


// Widget Sidebar
function charlostin_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Primary Sidebar', 'charlostin' ),
        'id'            => 'sidebar-1',        
    	'description'   => esc_html__( 'Appears in the sidebar section of the site.', 'charlostin' ),        
    	'before_widget' => '<div id="%1$s" class="single-widget mb-30 %2$s">',        
    	'after_widget'  => '</div>',        
    	'before_title'  => '<h3 class="widget-title">',        
    	'after_title'   => '</h3>'
    ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Footer One Widget', 'charlostin' ),
    'id'            => 'footer-area-1',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'charlostin' ),
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Footer Two Widget', 'charlostin' ),
    'id'            => 'footer-area-2',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'charlostin' ),
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Footer Three Widget', 'charlostin' ),
    'id'            => 'footer-area-3',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'charlostin' ),
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Footer Four Widget', 'charlostin' ),
    'id'            => 'footer-area-4',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'charlostin' ),
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ) );

}
add_action( 'widgets_init', 'charlostin_widgets_init' );

//function tag widgets
function charlostin_tag_cloud_widget($args) {
	$args['number'] = 0; //adding a 0 will display all tags
	$args['largest'] = 18; //largest tag
	$args['smallest'] = 11; //smallest tag
	$args['unit'] = 'px'; //tag font unit
	$args['format'] = 'list'; //ul with a class of wp-tag-cloud
	$args['exclude'] = array(20, 80, 92); //exclude tags by ID
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'charlostin_tag_cloud_widget' );
function charlostin_excerpt() {
  $charlostin_redux_demo = get_option('redux_demo');
  if(isset($charlostin_redux_demo['blog_excerpt'])){
    $limit = $charlostin_redux_demo['blog_excerpt'];
  }else{
    $limit = 80;
  }
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

//pagination
function charlostin_pagination($pages='') {
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    if($pages==''){
        global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
    }
    $pagination = array(
    'base'      => str_replace( 999999999, '%#%', get_pagenum_link( 999999999 ) ),
    'format'    => '',
    'current'     => max( 1, get_query_var('paged') ),
    'total'     => $pages,
    'prev_text' => wp_specialchars_decode(esc_html__( '<i class="fa fa-angle-left"></i>', 'charlostin' ), ENT_QUOTES),
    'next_text' => wp_specialchars_decode(esc_html__( '<i class="fa fa-angle-right"></i>', 'charlostin' ), ENT_QUOTES),   
    'type'      => 'list',
    'end_size'    => 3,
    'mid_size'    => 3
);
    $return =  paginate_links( $pagination );
  echo str_replace( "<ul class='page-numbers'>", '<ul class="pagination">', $return );
}

function charlostin_search_form( $form ) {
    $form = '
  <form  method="get" class="search-form" action="' . esc_url(home_url('/')) . '"> 
            <input type="search" class="form-control" placeholder="'.esc_attr__('Search', 'charlostin').'" value="' . get_search_query() . '" name="s" id="s"> 
  </form>
	';
    return $form;
}
add_filter( 'get_search_form', 'charlostin_search_form' );
//Custom comment List:

// Comment Form
function charlostin_theme_comment($comment, $args, $depth) {
    //echo 's';
   $GLOBALS['comment'] = $comment; ?>
<?php if(get_avatar($comment,$size='70' )!=''){?>
   <div class="media">
        <div class="d-flex">
             <?php echo get_avatar($comment,$size='70' ); ?>
        </div>
        <div class="media-body">
            <a><h4><?php printf( get_comment_author_link()) ?></h4></a>
            <p><?php comment_text() ?></p>
            <div class="date_rep">
                <a href="#"><?php comment_time('F j, Y'); ?></a>
                <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
            </div>
        </div>
    </div>
    <?php }else{  ?>
    <div class="media no_avatar">
        <div class="media-body">
            <a><h4><?php printf( get_comment_author_link()) ?></h4></a>
            <p><?php comment_text() ?></p>
            <div class="date_rep">
                <a href="#"><?php comment_time('F j, Y'); ?></a>
                <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
            </div>
        </div>
    </div>
<?php } ?>
   
<?php
}


function charlostin_custom_css_classes_for_vc_row_and_vc_column($class_string, $tag) {
    if($tag=='vc_row' || $tag=='vc_row_inner') {
        $class_string = str_replace('vc_row-fluid', '', $class_string);
    }
    if($tag=='vc_column' || $tag=='vc_column_inner') {
    $class_string = preg_replace('/vc_col-sm-12/', 'col-md-12', $class_string);
    $class_string = preg_replace('/vc_col-sm-6/', 'col-md-6', $class_string);
    $class_string = preg_replace('/vc_col-sm-4/', 'col-md-4', $class_string);
    $class_string = preg_replace('/vc_col-sm-3/', 'col-md-3', $class_string);
    $class_string = preg_replace('/vc_col-sm-5/', 'col-md-5', $class_string);
    $class_string = preg_replace('/vc_col-sm-7/', 'col-md-7', $class_string);
    $class_string = preg_replace('/vc_col-sm-8/', 'col-md-8', $class_string);
    $class_string = preg_replace('/vc_col-sm-9/', 'col-md-9', $class_string);
    $class_string = preg_replace('/vc_col-sm-10/', 'col-md-10', $class_string);
    $class_string = preg_replace('/vc_col-sm-11/', 'col-md-11', $class_string);
    $class_string = preg_replace('/vc_col-sm-1/', 'col-md-1', $class_string);
    $class_string = preg_replace('/vc_col-sm-2/', 'col-md-2', $class_string);
    }
    return $class_string;
}
// Filter to Replace default css class for vc_row shortcode and vc_column
add_filter('vc_shortcodes_css_class', 'charlostin_custom_css_classes_for_vc_row_and_vc_column', 10, 2); 
// Add new Param in Row
if(function_exists('vc_add_param')){

vc_add_param('vc_row',array(
                             'type' => 'dropdown',
                             'heading' => esc_html__( 'Chosen type row', 'charlostin' ),
                             'param_name' => 'type_row',
                             'value' => array(
                                esc_html__( 'None Section', 'charlostin' ) => 'type2',
                                esc_html__( 'Slider Area', 'charlostin' ) => 'slider_area',
                                esc_html__( 'Service Home 1', 'charlostin' ) => 'service_home_1',
                                esc_html__( 'Counter Home 1', 'charlostin' ) => 'counter_home_1',
                                esc_html__( 'Testimonial Home 1', 'charlostin' ) => 'testimonial_home_1',
                                esc_html__( 'Offer Home 1', 'charlostin' ) => 'offer_home_1',
                                esc_html__( 'Slider Home 2', 'charlostin' ) => 'slider_home_2',
                                esc_html__( 'Produce Home 2', 'charlostin' ) => 'produce_home_2',
                                esc_html__( 'Facilities Home 2', 'charlostin' ) => 'facilities_home_2',
                                esc_html__( 'Facilities Home 3', 'charlostin' ) => 'facilities_home_3',
                                esc_html__( 'Counter Home 3', 'charlostin' ) => 'counter_home_3',
                                esc_html__( 'Testimonial Home 3', 'charlostin' ) => 'testimonial_home_3',
                                esc_html__( 'Facilities Home 4', 'charlostin' ) => 'facilities_home_4',
                                esc_html__( 'Direction Home 5', 'charlostin' ) => 'direction_home_5',
                                esc_html__( 'Gallery Home 5', 'charlostin' ) => 'gallery_home_5',
                                esc_html__( 'Contact Home 5', 'charlostin' ) => 'contact_home_5',
                                esc_html__( 'Offer Page Service', 'charlostin' ) => 'offer_page_service',
                                esc_html__( 'Page Testimonials', 'charlostin' ) => 'page_testimonials',
                                esc_html__( 'Special Dishes Restaurant', 'charlostin' ) => 'special_dishes_restaurant',
                                esc_html__( 'Book A Table in Restaurant', 'charlostin' ) => 'book_a_table_restaurant',
                                esc_html__( 'Our Activities', 'charlostin' ) => 'page_activities',
                                esc_html__( 'Page Contact', 'charlostin' ) => 'page_contact',
                                esc_html__( 'Menu Page Restaurant', 'charlostin' ) => 'menu_page_restaurant',

                             ),
                             'description' => esc_html__( 'Select type row', 'charlostin' )
      )); 

vc_add_param('vc_row',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Section Title', 'charlostin'),
                              "param_name" => "ses_title",
                              "value" => "",
                              "description" => esc_html__("Title of Section, Leave a blank do not show frontend.", "charlostin"),   
    ));
vc_add_param('vc_row',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Section Title 2', 'charlostin'),
                              "param_name" => "ses_title2",
                              "value" => "",
                              "description" => esc_html__("Title of Section, Leave a blank do not show frontend.", "charlostin"),   
    ));
vc_add_param('vc_row',array(
                              "type" => "textarea",
                              "heading" => esc_html__('Section Subtitle', 'charlostin'),
                              "param_name" => "ses_subtitle",
                              "value" => "",
                              "description" => esc_html__("Section Subtitle, Leave a blank do not show frontend.", "charlostin"),   
    ));
vc_add_param('vc_row',array(
                              "type" => "textarea",
                              "heading" => esc_html__('Section Subtitle 2', 'charlostin'),
                              "param_name" => "ses_subtitle2",
                              "value" => "",
                              "description" => esc_html__("Section Subtitle 2, Leave a blank do not show frontend.", "charlostin"),   
    ));
vc_add_param('vc_row',array(
                              "type" => "textarea",
                              "heading" => esc_html__('Section Desc', 'charlostin'),
                              "param_name" => "ses_desc",
                              "value" => "",
                              "description" => esc_html__("Section Desc, Leave a blank do not show frontend.", "charlostin"),   
    ));
vc_add_param('vc_row',array(
                              "type" => "textarea",
                              "heading" => esc_html__('Section Link 1', 'charlostin'),
                              "param_name" => "ses_link1",
                              "value" => "",
                              "description" => esc_html__("Section Link 1, Leave a blank do not show frontend.", "charlostin"),   
    ));
vc_add_param('vc_row',array(
                             'type' => 'attach_image',
                             'heading' => esc_html__( 'Image Background', 'charlostin' ),
                             'param_name' => 'ses_image',
                             'value' => '',
                             'description' => esc_html__( 'Select image from media library to do your signature.', 'charlostin' )
      ));
vc_add_param('vc_row',array(
                             'type' => 'attach_image',
                             'heading' => esc_html__( 'Image Background', 'charlostin' ),
                             'param_name' => 'ses_image1',
                             'value' => '',
                             'description' => esc_html__( 'Select image from media library to do your signature.', 'charlostin' )
      ));
// Add new Param in Column  
vc_add_param('vc_column',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Column Title', 'charlostin'),
                              "param_name" => "title",
                              "value" => "",
                              "description" => esc_html__("Title of column", "charlostin"),      
                            ) 
    );
vc_add_param('vc_column',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Column Title 2', 'charlostin'),
                              "param_name" => "title2",
                              "value" => "",
                              "description" => esc_html__("Title 2 of column", "charlostin"),      
                            ) 
    );
vc_add_param('vc_column',array(
                              "type" => "textarea",
                              "heading" => esc_html__('Column Subtitle', 'charlostin'),
                              "param_name" => "subtitle",
                              "value" => "",
                              "description" => esc_html__("Subtitle of column", "charlostin"),      
                            ) 
    );
vc_add_param('vc_column',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Container Class', 'charlostin'),
                              "param_name" => "wap_class",
                              "value" => "",
                              "description" => esc_html__("Container Class", "charlostin"),      
                            ) 
    );
vc_add_param('vc_column',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Column id', 'charlostin'),
                              "param_name" => "column_id",
                              "value" => "",
                              "description" => esc_html__("Column ID, Only use for content slider.", "charlostin"),      
                            ) 
    );  
vc_add_param('vc_column',array(
                             'type' => 'dropdown',
                             'heading' => esc_html__( 'Type', 'charlostin' ),
                             'param_name' => 'type',
                             'value' => array(
                                esc_html__( 'None', 'charlostin' ) => 'none',
                                esc_html__( 'Column', 'charlostin' ) => 'column',
                                esc_html__( 'Check Home 2', 'charlostin' ) => 'check_home_2',
                                esc_html__( 'Slider Home 2', 'charlostin' ) => 'slider_home_2',
                                esc_html__( 'Direction Home 5', 'charlostin' ) => 'direction_home_5',
                                esc_html__( 'Drop A Message', 'charlostin' ) => 'drop_a_message',
                                esc_html__( 'Get In Touch', 'charlostin' ) => 'get_in_touch',
                                esc_html__( 'Book A Table In Restaurant', 'charlostin' ) => 'book_a_table_restaurant',
                                esc_html__( 'Drop A Message Page_Contact', 'charlostin' ) => 'message_page_contact',
                                esc_html__( 'Menu Page_Restaurant Column 1', 'charlostin' ) => 'menu_page_restaurant_col_1',
                                esc_html__( 'Menu Page_Restaurant Column 2', 'charlostin' ) => 'menu_page_restaurant_col_2',
                                esc_html__( 'Menu Page_Restaurant Column 3', 'charlostin' ) => 'menu_page_restaurant_col_3',
                             ),
                             'description' => esc_html__( 'Select type section content', 'charlostin' )
      )); 
vc_add_param('vc_column',array(
                             'type' => 'attach_image',
                             'heading' => esc_html__( 'Image Background', 'charlostin' ),
                             'param_name' => 'image',
                             'value' => '',
                             'description' => esc_html__( 'Select image from media library to do your signature.', 'charlostin' )
      )); 
}

/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1
 * @author     Thomas Griffin <thomasgriffinmedia.com>
 * @author     Gary Jones <gamajo.com>
 * @copyright  Copyright (c) 2014, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/thomasgriffin/TGM-Plugin-Activation
 */
/**
 * Include the TGM_Plugin_Activation class.
 */
require_once get_template_directory() . '/framework/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'charlostin_theme_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
 
 
function charlostin_theme_register_required_plugins() {
    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(
        // This is an example of how to include a plugin from the WordPress Plugin Repository.
      array(
            'name'      => esc_html__( 'Contact Form 7', 'charlostin' ),
            'slug'      => 'contact-form-7',
            'required'  => true,
        ),
      array(
            'name'      => esc_html__( 'One Click Demo Import', 'charlostin' ),
            'slug'      => 'one-click-demo-import',
            'required'  => true,
        ), 
      array(
            'name'      => esc_html__( 'Classic Editor', 'charlostin' ),
            'slug'      => 'classic-editor',
            'required'  => true,
        ),
      array(
            'name'               => esc_html__( 'WPBakery Visual Composer', 'charlostin' ), // The plugin name.
            'slug'               => 'visualcomposer',
            'source'             => get_template_directory_uri() . '/framework/plugins/js_composer.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        ),
      array(
            'name'               => esc_html__( 'WP Hotel Booking', 'charlostin' ), // The plugin name.
            'slug'               => 'wp-hotel-booking',
            'source'             => get_template_directory_uri() . '/framework/plugins/wp-hotel-booking.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        ),
      array(
            'name'               => esc_html__( 'WP Custom Register Login', 'charlostin' ), // The plugin name.
            'slug'               => 'wp-custom-register-login',
            'source'             => get_template_directory_uri() . '/framework/plugins/wp-custom-register-login.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        ),
      array(
            'name'               => esc_html__( 'Widget Importer Exporter', 'charlostin' ), // The plugin name.
            'slug'               => 'widget-importer-exporter',
            'source'             => get_template_directory_uri() . '/framework/plugins/widget-importer-exporter.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        ),
      array(
            'name'                     => esc_html__( 'Charlostin Common', 'charlostin' ),
            'slug'                     => 'charlostin-common',
            'required'                 => true,
            'source'                   => get_template_directory() . '/framework/plugins/charlostin-common.zip',
        )
    );
    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        'strings'      => array(
            'page_title'                      => esc_html__( 'Install Required Plugins', 'charlostin' ),
            'menu_title'                      => esc_html__( 'Install Plugins', 'charlostin' ),
            'installing'                      => esc_html__( 'Installing Plugin: %s', 'charlostin' ), // %s = plugin name.
            'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'charlostin' ),
            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'charlostin' ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'charlostin' ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'charlostin' ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'charlostin' ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'charlostin' ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'charlostin' ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'charlostin' ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'charlostin' ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'charlostin' ),
            'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'charlostin' ),
            'return'                          => esc_html__( 'Return to Required Plugins Installer', 'charlostin' ),
            'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'charlostin' ),
            'complete'                        => esc_html__( 'All plugins installed and activated successfully. %s', 'charlostin' ), // %s = dashboard link.
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );
    tgmpa( $plugins, $config );
}





function charlostin_import_files() {
    return array(
        array(
            'import_file_name'           => 'Demo Import Charlostin',
            'import_file_url'            => 'http://shtheme.com/import/charlostin/content.xml',
            'import_widget_file_url'     => 'http://shtheme.com/import/charlostin/widgets.json',
            'import_preview_image_url'   => 'http://shtheme.com/import/charlostin/Image-Preview.jpg',
            'import_notice'              => esc_html__( 'Import data example Charlostin', 'charlostin' ),
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'charlostin_import_files' );




function charlostin_after_import_setup() {
    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Primary Menu', 'primary' );
    

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
            
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home Page 1' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'charlostin_after_import_setup' );



?>