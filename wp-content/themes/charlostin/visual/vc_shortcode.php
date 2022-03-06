<?php 
$textdoimain = 'charlostin';
global $pre_text;

$pre_text = 'VG ';


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Slider Area", 'charlostin'),
   "base" => "slider_area",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'charlostin'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'charlostin')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'charlostin'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("ID", 'charlostin'),
      "param_name" => "id",
      "value" => "",
      "description" => __("ID", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'charlostin'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Btn", 'charlostin'),
      "param_name" => "text_btn",
      "value" => "",
      "description" => __("Text Btn", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title Width", 'charlostin'),
      "param_name" => "data_width",
      "value" => "",
      "description" => __("Title Width", 'charlostin')
   ),
   array(
      'type' => 'attach_image',
      'heading' => __( 'Image', 'charlostin' ),
      'param_name' => 'image',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'charlostin' )
   ), 
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Book Table Home 1", 'charlostin'),
   "base" => "book_table_home_1",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Produce Home 1", 'charlostin'),
   "base" => "produce_home_1",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'charlostin'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'charlostin')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle 1", 'charlostin'),
      "param_name" => "subtitle1",
      "value" => "",
      "description" => __("Subtitle 1", 'charlostin')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle 2", 'charlostin'),
      "param_name" => "subtitle2",
      "value" => "",
      "description" => __("Subtitle 2", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'charlostin'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Btn", 'charlostin'),
      "param_name" => "text_btn",
      "value" => "",
      "description" => __("Text Btn", 'charlostin')
   ),
   array(
      'type' => 'attach_image',
      'heading' => __( 'Image 1', 'charlostin' ),
      'param_name' => 'image',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'charlostin' )
   ),
   array(
      'type' => 'attach_image',
      'heading' => __( 'Image 2', 'charlostin' ),
      'param_name' => 'image1',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'charlostin' )
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Room Home 1", 'charlostin'),
   "base" => "room_home_1",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'charlostin'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'charlostin')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'charlostin'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'charlostin')
   ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Unit", 'charlostin'),
      "param_name" => "unit",
      "value" => "",
      "description" => __("Unit", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Rental Period", 'charlostin'),
      "param_name" => "rental_period",
      "value" => "",
      "description" => __("Rental Period", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Btn", 'charlostin'),
      "param_name" => "text_btn",
      "value" => "",
      "description" => __("Text Btn", 'charlostin')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Service Home 1", 'charlostin'),
   "base" => "service_home_1",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'charlostin'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'charlostin')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'charlostin'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Class Icon", 'charlostin'),
      "param_name" => "icon",
      "value" => "",
      "description" => __("Class Icon", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'charlostin'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'charlostin')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Our Hotel Home 1", 'charlostin'),
   "base" => "our_hotel_home_1",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 1", 'charlostin'),
      "param_name" => "title1",
      "value" => "",
      "description" => __("Title 1", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 2", 'charlostin'),
      "param_name" => "title2",
      "value" => "",
      "description" => __("Title 2", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Year", 'charlostin'),
      "param_name" => "year",
      "value" => "",
      "description" => __("Year", 'charlostin')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'charlostin'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'charlostin'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'charlostin')
   ),
   array(
      'type' => 'attach_image',
      'heading' => __( 'Image 1', 'charlostin' ),
      'param_name' => 'image',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'charlostin' )
   ),
   array(
      'type' => 'attach_image',
      'heading' => __( 'Image 2', 'charlostin' ),
      'param_name' => 'image1',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'charlostin' )
   ),
    )));
}
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Counter Home 1", 'charlostin'),
   "base" => "counter_home_1",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'charlostin'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Number", 'charlostin'),
      "param_name" => "number",
      "value" => "",
      "description" => __("Number", 'charlostin')
   ),
    )));
}
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Testimonial Home 1", 'charlostin'),
   "base" => "testimonial_home_1",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Client", 'charlostin'),
      "param_name" => "client",
      "value" => "",
      "description" => __("Client", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Position", 'charlostin'),
      "param_name" => "position",
      "value" => "",
      "description" => __("Position", 'charlostin')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'charlostin'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'charlostin')
   ),
   array(
         'type' => 'dropdown',
         'heading' => __( 'Vote Star', 'charlostin' ),
         'param_name' => 'stars_select',
         'value' => array(
            __( '1 star', 'charlostin' ) => '1',
            __( '2 star', 'charlostin' ) => '2',
            __( '3 star', 'charlostin' ) => '3',
            __( '4 star', 'charlostin' ) => '4',
            __( '5 star', 'charlostin' ) => '5',
         ),
         'description' => __( 'Select number of star do you want to vote.', 'charlostin' )
      ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'charlostin' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'charlostin' )
      ), 
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Video Home 1", 'charlostin'),
   "base" => "video_home_1",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'charlostin'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'charlostin')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'charlostin'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Button", 'charlostin'),
      "param_name" => "text_btn",
      "value" => "",
      "description" => __("Text Button", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Class Icon", 'charlostin'),
      "param_name" => "icon",
      "value" => "",
      "description" => __("Class Icon", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link 1", 'charlostin'),
      "param_name" => "link1",
      "value" => "",
      "description" => __("Link 1", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link 2", 'charlostin'),
      "param_name" => "link2",
      "value" => "",
      "description" => __("Link 2", 'charlostin')
   ),
   array(
      'type' => 'attach_image',
      'heading' => __( 'Image', 'charlostin' ),
      'param_name' => 'image',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'charlostin' )
   ), 
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Offer Home 1", 'charlostin'),
   "base" => "offer_home_1",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'charlostin'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'charlostin')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text subtitle", 'charlostin'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Text subtitle", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Sale", 'charlostin'),
      "param_name" => "sale",
      "value" => "",
      "description" => __("Sale", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Button", 'charlostin'),
      "param_name" => "text_btn",
      "value" => "",
      "description" => __("Text Button", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'charlostin'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'charlostin')
   ),
   array(
      'type' => 'attach_image',
      'heading' => __( 'Image', 'charlostin' ),
      'param_name' => 'image',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'charlostin' )
   ), 
    )));
}



if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Blog Home 1", 'charlostin'),
   "base" => "blog_home_1",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'charlostin'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'charlostin')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'charlostin'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'charlostin')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number of Post You want show.", 'progarden'),
         "param_name" => "number",
         "value" => "3",
         "description" => __("Number of Post You want show.", 'progarden')
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Sort Order', 'progarden' ),
         'param_name' => 'orderpost',
         'value' => array(
            __( 'DESC : highest to lowest', 'progarden' ) => 'DESC',
            __( 'ASC : lowest to highest', 'progarden' ) => 'ASC',
         ),
         'description' => __( 'Select field do you want Order.', 'progarden' )
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Order by', 'progarden' ),
         'param_name' => 'orderby',
         'value' => array(
            __( 'Date', 'progarden' ) => 'date',
            __( 'Title', 'progarden' ) => 'title',
            __( 'Random', 'progarden') => 'rand',
         ),
         'description' => __( 'Select field do you want Order.', 'progarden' )
      ),
    )));
} 

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Gallery Home 1", 'charlostin'),
   "base" => "gallery_home_1",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'charlostin'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Class Icon", 'charlostin'),
      "param_name" => "icon",
      "value" => "",
      "description" => __("Class Icon", 'charlostin')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number of Post You want show.", 'charlostin'),
         "param_name" => "number",
         "value" => "3",
         "description" => __("Number of Post You want show.", 'charlostin')
      ),
   array(
      'type' => 'dropdown',
      'heading' => __( 'Sort Order', 'charlostin' ),
      'param_name' => 'orderpost',
      'value' => array(
         __( 'DESC : highest to lowest', 'charlostin' ) => 'DESC',
         __( 'ASC : lowest to highest', 'charlostin' ) => 'ASC',
      ),
      'description' => __( 'Select field do you want Order.', 'charlostin' )
   ),
   array(
      'type' => 'dropdown',
      'heading' => __( 'Order by', 'charlostin' ),
      'param_name' => 'orderby',
      'value' => array(
         __( 'Date', 'charlostin' ) => 'date',
         __( 'Title', 'charlostin' ) => 'title',
         __( 'Random', 'charlostin') => 'rand',
      ),
      'description' => __( 'Select field do you want Order.', 'charlostin' )
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Book Table Home 2", 'charlostin'),
   "base" => "book_table_home_2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Slider Home 2", 'charlostin'),
   "base" => "slider_home_2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'charlostin'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'charlostin')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'charlostin'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'charlostin'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Button", 'charlostin'),
      "param_name" => "text_btn",
      "value" => "",
      "description" => __("Text Button", 'charlostin')
   ),
    )));
}


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Produce Home 2", 'charlostin'),
   "base" => "produce_home_2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'charlostin'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'charlostin'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'charlostin')
   ),
   array(
      'type' => 'attach_image',
      'heading' => __( 'Image', 'charlostin' ),
      'param_name' => 'image',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'charlostin' )
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Facilities Home 2", 'charlostin'),
   "base" => "facilities_home_2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'charlostin'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'charlostin')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'charlostin'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Class Icon", 'charlostin'),
      "param_name" => "icon",
      "value" => "",
      "description" => __("Class Icon", 'charlostin')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Slider Home 3", 'charlostin'),
   "base" => "slider_home_3",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 1", 'charlostin'),
      "param_name" => "title1",
      "value" => "",
      "description" => __("Title 1", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 2", 'charlostin'),
      "param_name" => "title2",
      "value" => "",
      "description" => __("Title 2", 'charlostin')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text subtitle", 'charlostin'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Text subtitle", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'charlostin'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'charlostin')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Button", 'charlostin'),
      "param_name" => "text_btn",
      "value" => "",
      "description" => __("Text Button", 'charlostin')
   ),   
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Facilities Home 3", 'charlostin'),
   "base" => "facilities_home_3",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'charlostin'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'charlostin'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Class Icon", 'charlostin'),
      "param_name" => "icon",
      "value" => "",
      "description" => __("Class Icon", 'charlostin')
   ),   
    )));
}


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Portfolio Home 3", 'charlostin'),
   "base" => "portfolio_home_3",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(    
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Class Icon", 'charlostin'),
         "param_name" => "icon",
         "value" => "",
         "description" => __("Class Icon", 'charlostin')
      ),   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number of Post You want show.", 'charlostin'),
         "param_name" => "number",
         "value" => "3",
         "description" => __("Number of Post You want show.", 'charlostin')
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Sort Order', 'charlostin' ),
         'param_name' => 'orderpost',
         'value' => array(
            __( 'DESC : highest to lowest', 'charlostin' ) => 'DESC',
            __( 'ASC : lowest to highest', 'charlostin' ) => 'ASC',
         ),
         'description' => __( 'Select field do you want Order.', 'charlostin' )
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Order by', 'charlostin' ),
         'param_name' => 'orderby',
         'value' => array(
            __( 'Date', 'charlostin' ) => 'date',
            __( 'Title', 'charlostin' ) => 'title',
            __( 'Random', 'charlostin') => 'rand',
         ),
         'description' => __( 'Select field do you want Order.', 'charlostin' )
      ),

    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Testimonial Home 3", 'charlostin'),
   "base" => "testimonial_home_3",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'charlostin'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Client", 'charlostin'),
      "param_name" => "client",
      "value" => "",
      "description" => __("Client", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Position", 'charlostin'),
      "param_name" => "position",
      "value" => "",
      "description" => __("Position", 'charlostin')
   ),
   array(
         'type' => 'dropdown',
         'heading' => __( 'Vote Star', 'charlostin' ),
         'param_name' => 'stars_select',
         'value' => array(
            __( '1 star', 'charlostin' ) => '1',
            __( '2 star', 'charlostin' ) => '2',
            __( '3 star', 'charlostin' ) => '3',
            __( '4 star', 'charlostin' ) => '4',
            __( '5 star', 'charlostin' ) => '5',
         ),
         'description' => __( 'Select number of star do you want to vote.', 'charlostin' )
      ),
   array(
      'type' => 'attach_image',
      'heading' => __( 'Image', 'charlostin' ),
      'param_name' => 'image',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'charlostin' )
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Feature Home 4", 'charlostin'),
   "base" => "feature_home_4",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'charlostin'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'charlostin')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'charlostin'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Number of Post You want show.", 'charlostin'),
      "param_name" => "number",
      "value" => "3",
      "description" => __("Number of Post You want show.", 'charlostin')
   ),
   array(
      'type' => 'dropdown',
      'heading' => __( 'Sort Order', 'charlostin' ),
      'param_name' => 'orderpost',
      'value' => array(
         __( 'DESC : highest to lowest', 'charlostin' ) => 'DESC',
         __( 'ASC : lowest to highest', 'charlostin' ) => 'ASC',
      ),
      'description' => __( 'Select field do you want Order.', 'charlostin' )
   ),
   array(
      'type' => 'dropdown',
      'heading' => __( 'Order by', 'charlostin' ),
      'param_name' => 'orderby',
      'value' => array(
         __( 'Date', 'charlostin' ) => 'date',
         __( 'Title', 'charlostin' ) => 'title',
         __( 'Random', 'charlostin') => 'rand',
      ),
      'description' => __( 'Select field do you want Order.', 'charlostin' )
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."About Home 5", 'charlostin'),
   "base" => "about_home_5",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'charlostin'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'charlostin')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle 1", 'charlostin'),
      "param_name" => "subtitle1",
      "value" => "",
      "description" => __("Subtitle 1", 'charlostin')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle 2", 'charlostin'),
      "param_name" => "subtitle2",
      "value" => "",
      "description" => __("Subtitle 2", 'charlostin')
   ),
   array(
      'type' => 'attach_image',
      'heading' => __( 'Image', 'charlostin' ),
      'param_name' => 'image',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'charlostin' )
   ),  
      
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Direction Home 5", 'charlostin'),
   "base" => "direction_home_5",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 1", 'charlostin'),
      "param_name" => "title1",
      "value" => "",
      "description" => __("Title 1", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 2", 'charlostin'),
      "param_name" => "title2",
      "value" => "",
      "description" => __("Title 2", 'charlostin')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'charlostin'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link 1", 'charlostin'),
      "param_name" => "link1",
      "value" => "",
      "description" => __("Link 1", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link 2", 'charlostin'),
      "param_name" => "link2",
      "value" => "",
      "description" => __("Link 2", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Button 1", 'charlostin'),
      "param_name" => "text_btn1",
      "value" => "",
      "description" => __("Text Button 1", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Button 2", 'charlostin'),
      "param_name" => "text_btn2",
      "value" => "",
      "description" => __("Text Button 2", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Icon", 'charlostin'),
      "param_name" => "icon",
      "value" => "",
      "description" => __("Icon", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("ID1", 'charlostin'),
      "param_name" => "id1",
      "value" => "",
      "description" => __("ID1", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("ID2", 'charlostin'),
      "param_name" => "id2",
      "value" => "",
      "description" => __("ID2", 'charlostin')
   ),
   array(
      'type' => 'attach_image',
      'heading' => __( 'Image', 'charlostin' ),
      'param_name' => 'image',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'charlostin' )
   ),
   array(
      'type' => 'dropdown',
      'heading' => __( 'Active', 'charlostin' ),
      'param_name' => 'type',
      'value' => array(
         __( 'no', 'charlostin' ) => '0',
         __( 'yes', 'charlostin' ) => '1',
      ),
      'description' => __( 'Select field do you want Order.', 'charlostin' )
   ),     
)));
}



if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Direction_2 - Home_5", 'charlostin'),
   "base" => "direction_2_home_5",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'charlostin'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'charlostin')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'charlostin'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'charlostin')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Distance 1", 'charlostin'),
      "param_name" => "distance1",
      "value" => "",
      "description" => __("Distance 1", 'charlostin')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Distance 2", 'charlostin'),
      "param_name" => "distance2",
      "value" => "",
      "description" => __("Distance 2", 'charlostin')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("From 1", 'charlostin'),
      "param_name" => "From1",
      "value" => "",
      "description" => __("From 1", 'charlostin')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("From 2", 'charlostin'),
      "param_name" => "From2",
      "value" => "",
      "description" => __("From 2", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'charlostin'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Button", 'charlostin'),
      "param_name" => "text_btn",
      "value" => "",
      "description" => __("Text Button", 'charlostin')
   ),
   array(
      'type' => 'attach_image',
      'heading' => __( 'Image', 'charlostin' ),
      'param_name' => 'image',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'charlostin' )
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Gallery Home 5", 'charlostin'),
   "base" => "gallery_home_5",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'charlostin'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("ID", 'charlostin'),
      "param_name" => "id",
      "value" => "",
      "description" => __("ID", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Class Icon", 'charlostin'),
      "param_name" => "icon",
      "value" => "",
      "description" => __("Class Icon", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Number of Post You want show.", 'charlostin'),
      "param_name" => "number",
      "value" => "3",
      "description" => __("Number of Post You want show.", 'charlostin')
   ),
   array(
      'type' => 'dropdown',
      'heading' => __( 'Sort Order', 'charlostin' ),
      'param_name' => 'orderpost',
      'value' => array(
         __( 'DESC : highest to lowest', 'charlostin' ) => 'DESC',
         __( 'ASC : lowest to highest', 'charlostin' ) => 'ASC',
      ),
      'description' => __( 'Select field do you want Order.', 'charlostin' )
   ),
   array(
      'type' => 'dropdown',
      'heading' => __( 'Order by', 'charlostin' ),
      'param_name' => 'orderby',
      'value' => array(
         __( 'Date', 'charlostin' ) => 'date',
         __( 'Title', 'charlostin' ) => 'title',
         __( 'Random', 'charlostin') => 'rand',
      ),
      'description' => __( 'Select field do you want Order.', 'charlostin' )
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Get In Touch", 'charlostin'),
   "base" => "get_in_touch",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'charlostin'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'charlostin')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'charlostin'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'charlostin')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Offer Page_Service", 'charlostin'),
   "base" => "offer_page_service",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'charlostin'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'charlostin'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'charlostin')
   ),
   array(
      'type' => 'attach_image',
      'heading' => __( 'Image', 'charlostin' ),
      'param_name' => 'image',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'charlostin' )
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Page Testimonial", 'charlostin'),
   "base" => "page_testimonial",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Client", 'charlostin'),
      "param_name" => "client",
      "value" => "",
      "description" => __("Client", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Position", 'charlostin'),
      "param_name" => "position",
      "value" => "",
      "description" => __("Position", 'charlostin')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'charlostin'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'charlostin')
   ),
   array(
         'type' => 'dropdown',
         'heading' => __( 'Vote Star', 'charlostin' ),
         'param_name' => 'stars_select',
         'value' => array(
            __( '1 star', 'charlostin' ) => '1',
            __( '2 star', 'charlostin' ) => '2',
            __( '3 star', 'charlostin' ) => '3',
            __( '4 star', 'charlostin' ) => '4',
            __( '5 star', 'charlostin' ) => '5',
         ),
         'description' => __( 'Select number of star do you want to vote.', 'charlostin' )
      ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'charlostin' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'charlostin' )
      ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Page Gallery 1", 'charlostin'),
   "base" => "page_gallery_1",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(    
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Class Icon", 'charlostin'),
         "param_name" => "icon",
         "value" => "",
         "description" => __("Class Icon", 'charlostin')
      ),   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number of Post You want show.", 'charlostin'),
         "param_name" => "number",
         "value" => "3",
         "description" => __("Number of Post You want show.", 'charlostin')
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Sort Order', 'charlostin' ),
         'param_name' => 'orderpost',
         'value' => array(
            __( 'DESC : highest to lowest', 'charlostin' ) => 'DESC',
            __( 'ASC : lowest to highest', 'charlostin' ) => 'ASC',
         ),
         'description' => __( 'Select field do you want Order.', 'charlostin' )
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Order by', 'charlostin' ),
         'param_name' => 'orderby',
         'value' => array(
            __( 'Date', 'charlostin' ) => 'date',
            __( 'Title', 'charlostin' ) => 'title',
            __( 'Random', 'charlostin') => 'rand',
         ),
         'description' => __( 'Select field do you want Order.', 'charlostin' )
      ),

    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Page Gallery 2", 'charlostin'),
   "base" => "page_gallery_2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(    
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Class Icon", 'charlostin'),
         "param_name" => "icon",
         "value" => "",
         "description" => __("Class Icon", 'charlostin')
      ),   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number of Post You want show.", 'charlostin'),
         "param_name" => "number",
         "value" => "3",
         "description" => __("Number of Post You want show.", 'charlostin')
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Sort Order', 'charlostin' ),
         'param_name' => 'orderpost',
         'value' => array(
            __( 'DESC : highest to lowest', 'charlostin' ) => 'DESC',
            __( 'ASC : lowest to highest', 'charlostin' ) => 'ASC',
         ),
         'description' => __( 'Select field do you want Order.', 'charlostin' )
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Order by', 'charlostin' ),
         'param_name' => 'orderby',
         'value' => array(
            __( 'Date', 'charlostin' ) => 'date',
            __( 'Title', 'charlostin' ) => 'title',
            __( 'Random', 'charlostin') => 'rand',
         ),
         'description' => __( 'Select field do you want Order.', 'charlostin' )
      ),

    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."About Page_Restaurant", 'charlostin'),
   "base" => "about_page_restaurant",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'charlostin'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle 1", 'charlostin'),
      "param_name" => "subtitle1",
      "value" => "",
      "description" => __("Subtitle 1", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle 2", 'charlostin'),
      "param_name" => "subtitle2",
      "value" => "",
      "description" => __("Subtitle 2", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Description", 'charlostin'),
      "param_name" => "desc",
      "value" => "",
      "description" => __("Description", 'charlostin')
   ),
    
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Note 1", 'charlostin'),
      "param_name" => "note1",
      "value" => "",
      "description" => __("Note 1", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Note 2", 'charlostin'),
      "param_name" => "note2",
      "value" => "",
      "description" => __("Note 2", 'charlostin')
   ),
   array(
      'type' => 'attach_image',
      'heading' => __( 'Image 1', 'charlostin' ),
      'param_name' => 'image',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'charlostin' )
   ),
   array(
      'type' => 'attach_image',
      'heading' => __( 'Image 2', 'charlostin' ),
      'param_name' => 'image1',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'charlostin' )
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Special Dishes Restaurant", 'charlostin'),
   "base" => "special_dishes_restaurant",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'charlostin'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'charlostin')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'charlostin'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'charlostin')
   ),
   array(
      'type' => 'attach_image',
      'heading' => __( 'Image', 'charlostin' ),
      'param_name' => 'image',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'charlostin' )
   ), 
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Book A Table in Restaurant", 'charlostin'),
   "base" => "book_table_restaurant",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'charlostin' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'charlostin' )
      ),
    )));
}



if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Upcoming Events", 'charlostin'),
   "base" => "upcoming_events",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'charlostin'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'charlostin')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'charlostin'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Button", 'charlostin'),
      "param_name" => "text_btn",
      "value" => "",
      "description" => __("Text Button", 'charlostin')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number of Post You want show.", 'charlostin'),
         "param_name" => "number",
         "value" => "3",
         "description" => __("Number of Post You want show.", 'charlostin')
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Sort Order', 'charlostin' ),
         'param_name' => 'orderpost',
         'value' => array(
            __( 'DESC : highest to lowest', 'charlostin' ) => 'DESC',
            __( 'ASC : lowest to highest', 'charlostin' ) => 'ASC',
         ),
         'description' => __( 'Select field do you want Order.', 'charlostin' )
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Order by', 'charlostin' ),
         'param_name' => 'orderby',
         'value' => array(
            __( 'Date', 'charlostin' ) => 'date',
            __( 'Title', 'charlostin' ) => 'title',
            __( 'Random', 'charlostin') => 'rand',
         ),
         'description' => __( 'Select field do you want Order.', 'charlostin' )
      ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Page Activities", 'charlostin'),
   "base" => "page_activities",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'charlostin'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'charlostin')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'charlostin'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Button", 'charlostin'),
      "param_name" => "text_btn",
      "value" => "",
      "description" => __("Text Button", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'charlostin'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'charlostin')
   ),
   array(
      'type' => 'attach_image',
      'heading' => __( 'Image', 'charlostin' ),
      'param_name' => 'image',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'charlostin' )
   ),
   array(
      'type' => 'dropdown',
      'heading' => __( 'Active', 'charlostin' ),
      'param_name' => 'type',
      'value' => array(
         __( 'Left', 'charlostin' ) => '0',
         __( 'Right', 'charlostin' ) => '1',
      ),
      'description' => __( 'Select field do you want Order.', 'charlostin' )
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Get In Touch Page_Contact", 'charlostin'),
   "base" => "get_in_touch_page_contact",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'charlostin'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'charlostin')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Location", 'charlostin'),
      "param_name" => "location",
      "value" => "",
      "description" => __("Location", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Call Us", 'charlostin'),
      "param_name" => "call_us",
      "value" => "",
      "description" => __("Call Us", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Number", 'charlostin'),
      "param_name" => "number",
      "value" => "",
      "description" => __("Number", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Email", 'charlostin'),
      "param_name" => "email",
      "value" => "",
      "description" => __("Email", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Sub Email", 'charlostin'),
      "param_name" => "sub_email",
      "value" => "",
      "description" => __("Sub Email", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Check In", 'charlostin'),
      "param_name" => "check_in",
      "value" => "",
      "description" => __("Check In", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Sub Check In", 'charlostin'),
      "param_name" => "sub_check_in",
      "value" => "",
      "description" => __("Sub Check In", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Check Out", 'charlostin'),
      "param_name" => "check_out",
      "value" => "",
      "description" => __("Check Out", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Sub Check Out", 'charlostin'),
      "param_name" => "sub_check_out",
      "value" => "",
      "description" => __("Sub Check Out", 'charlostin')
   ),
    )));
}


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Map Page_Contact", 'charlostin'),
   "base" => "map_page_contact",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(    
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Map Iframe", 'charlostin'),
         "param_name" => "map_iframe",
         "value" => "",
         "description" => __("Map Iframe", 'charlostin')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Width", 'charlostin'),
         "param_name" => "width",
         "value" => "",
         "description" => __("Width", 'charlostin')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Height", 'charlostin'),
         "param_name" => "height",
         "value" => "",
         "description" => __("Height", 'charlostin')
      ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Menu Page Restaurant", 'charlostin'),
   "base" => "menu_page_restaurant",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'charlostin'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'charlostin')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text subtitle", 'charlostin'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Text subtitle", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Price", 'charlostin'),
      "param_name" => "price",
      "value" => "",
      "description" => __("Price", 'charlostin')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Page Room Grid", 'charlostin'),
   "base" => "page_room_grid",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'charlostin'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'charlostin')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'charlostin'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'charlostin')
   ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Unit", 'charlostin'),
      "param_name" => "unit",
      "value" => "",
      "description" => __("Unit", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Rental Period", 'charlostin'),
      "param_name" => "rental_period",
      "value" => "",
      "description" => __("Rental Period", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Btn", 'charlostin'),
      "param_name" => "text_btn",
      "value" => "",
      "description" => __("Text Btn", 'charlostin')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number of Post You want show.", 'charlostin'),
         "param_name" => "number",
         "value" => "3",
         "description" => __("Number of Post You want show.", 'charlostin')
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Sort Order', 'charlostin' ),
         'param_name' => 'orderpost',
         'value' => array(
            __( 'DESC : highest to lowest', 'charlostin' ) => 'DESC',
            __( 'ASC : lowest to highest', 'charlostin' ) => 'ASC',
         ),
         'description' => __( 'Select field do you want Order.', 'charlostin' )
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Order by', 'charlostin' ),
         'param_name' => 'orderby',
         'value' => array(
            __( 'Date', 'charlostin' ) => 'date',
            __( 'Title', 'charlostin' ) => 'title',
            __( 'Random', 'charlostin') => 'rand',
         ),
         'description' => __( 'Select field do you want Order.', 'charlostin' )
      ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Page Room List", 'charlostin'),
   "base" => "page_room_list",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'charlostin'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'charlostin')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'charlostin'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'charlostin')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Facility", 'charlostin'),
      "param_name" => "facility",
      "value" => "",
      "description" => __("Facility", 'charlostin')
   ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Unit", 'charlostin'),
      "param_name" => "unit",
      "value" => "",
      "description" => __("Unit", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Rental Period", 'charlostin'),
      "param_name" => "rental_period",
      "value" => "",
      "description" => __("Rental Period", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Btn", 'charlostin'),
      "param_name" => "text_btn",
      "value" => "",
      "description" => __("Text Btn", 'charlostin')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Number of Post You want show.", 'charlostin'),
      "param_name" => "number",
      "value" => "3",
      "description" => __("Number of Post You want show.", 'charlostin')
   ),
   array(
      'type' => 'dropdown',
      'heading' => __( 'Sort Order', 'charlostin' ),
      'param_name' => 'orderpost',
      'value' => array(
         __( 'DESC : highest to lowest', 'charlostin' ) => 'DESC',
         __( 'ASC : lowest to highest', 'charlostin' ) => 'ASC',
      ),
      'description' => __( 'Select field do you want Order.', 'charlostin' )
   ),
   array(
      'type' => 'dropdown',
      'heading' => __( 'Order by', 'charlostin' ),
      'param_name' => 'orderby',
      'value' => array(
         __( 'Date', 'charlostin' ) => 'date',
         __( 'Title', 'charlostin' ) => 'title',
         __( 'Random', 'charlostin') => 'rand',
      ),
      'description' => __( 'Select field do you want Order.', 'charlostin' )
   ),
    )));
}


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Page Header", 'charlostin'),
   "base" => "page_header",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'charlostin'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'charlostin')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text subtitle 1", 'charlostin'),
      "param_name" => "subtitle1",
      "value" => "",
      "description" => __("Text subtitle 1", 'charlostin')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text subtitle 2", 'charlostin'),
      "param_name" => "subtitle2",
      "value" => "",
      "description" => __("Text subtitle 2", 'charlostin')
   ),
   array(
      'type' => 'attach_image',
      'heading' => __( 'Image', 'charlostin' ),
      'param_name' => 'image',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'charlostin' )
   ),
    )));
}

