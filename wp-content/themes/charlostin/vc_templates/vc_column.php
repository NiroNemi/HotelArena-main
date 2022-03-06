<?php
$output = $el_class = $width = '';
extract(shortcode_atts(array(
    'el_class' => '',
    'width' => '1/1',
    'wap_class' => '',
	'column_id' => '',
	'title' =>'',
	'title2' =>'',
	'subtitle' =>'',
	'type' => '',
    'image' => '',
    'text_btn' => '',
), $atts));

if($type == 'column'){
$images = wp_get_attachment_image_src($image,'');
$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);

$el_class .= '';

$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".'<div class="'.$css_class.'  '.$wap_class.'" >';

$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'</div> '.$this->endBlockComment($el_class) . "\n";



}elseif($type == 'check_home_2'){
$images = wp_get_attachment_image_src($image,'');
$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);

$el_class .= '';

$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".'<div class="col-lg-4">';
$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".' </div>'.$this->endBlockComment($el_class) . "\n";



}elseif($type == 'slider_home_2'){
$images = wp_get_attachment_image_src($image,'');
$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);

$el_class .= '';

$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".'<div class="col-lg-8">';
$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".' </div>'.$this->endBlockComment($el_class) . "\n";




}elseif($type == 'direction_home_5'){
$images = wp_get_attachment_image_src($image,'');
$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);

$el_class .= '';

$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".'<div class="col-lg-7">
						<div class="mission_left">
							<div class="main_title">
								<h2>'.htmlspecialchars_decode(esc_attr($title)).'</h2>
							</div>
							<div class="accordion mission_collaps" id="accordionExample">';
$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".' </div></div></div>'.$this->endBlockComment($el_class) . "\n";





}elseif($type == 'drop_a_message'){

$images = wp_get_attachment_image_src($image,'');
$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);

$el_class .= '';

$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".'<div class="col-lg-5">
						<div class="drop_message">
							<div class="main_title">
								<h2>'.htmlspecialchars_decode(esc_attr($title)).'</h2>
							</div>';
$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".' </div></div>'.$this->endBlockComment($el_class) . "\n";




}elseif($type == 'get_in_touch'){
$images = wp_get_attachment_image_src($image,'');
$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);
$el_class .= '';
$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".'<div class="col-lg-7">
        				<div class="touch_text">
        					<div class="main_title">
        						<h2>'.htmlspecialchars_decode(esc_attr($title)).'</h2>
        					</div>
        					<div class="media">
        						<div class="d-flex">
        							<img src="'.esc_url($images[0]).'" alt="">
        						</div>
        						<div class="media-body">';
$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".' </div>
        					</div>
        				</div>
        			</div>'.$this->endBlockComment($el_class) . "\n";



}elseif($type == 'book_a_table_restaurant'){
$images = wp_get_attachment_image_src($image,'');
$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);
$el_class .= '';
$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".'<div class="left_side">
                <div class="bk_table_form">
                    <div class="main_title">
                        <h2>'.htmlspecialchars_decode(esc_attr($title)).'</h2>
                    </div>';
$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'</div>
            </div>'.$this->endBlockComment($el_class) . "\n";


 }elseif($type == 'message_page_contact'){
$images = wp_get_attachment_image_src($image,'');
$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);
$el_class .= '';
$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".'<div class="col-lg-7">';
$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'</div>'.$this->endBlockComment($el_class) . "\n";




 }elseif($type == 'menu_page_restaurant_col_1'){
$images = wp_get_attachment_image_src($image,'');
$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);
$el_class .= '';
$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".'<div class="tab-pane fade in show active" id="home" role="tabpanel" aria-labelledby="home-tab">
							<div class="menu_item">
								<img class="img-fluid" src="'.esc_url($images[0]).'" alt="">
								<h6>'.htmlspecialchars_decode(esc_attr($title)).'</h6>
							</div>';
$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'</div>'.$this->endBlockComment($el_class) . "\n";


 }elseif($type == 'menu_page_restaurant_col_2'){
$images = wp_get_attachment_image_src($image,'');
$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);
$el_class .= '';
$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".'<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
							<div class="menu_item">
								<img class="img-fluid" src="'.esc_url($images[0]).'" alt="">
								<h6>'.htmlspecialchars_decode(esc_attr($title)).'</h6>
							</div>';
$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'</div>'.$this->endBlockComment($el_class) . "\n";


 }elseif($type == 'menu_page_restaurant_col_3'){
$images = wp_get_attachment_image_src($image,'');
$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);
$el_class .= '';
$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".'<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
							<div class="menu_item">
								<img class="img-fluid" src="'.esc_url($images[0]).'" alt="">
								<h6>'.htmlspecialchars_decode(esc_attr($title)).'</h6>
							</div>';
$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'</div>'.$this->endBlockComment($el_class) . "\n";




}else{
	$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);


$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);

}
echo $output;