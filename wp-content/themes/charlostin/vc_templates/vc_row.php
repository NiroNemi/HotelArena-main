<?php

$output = $el_class = $bg_image = $bg_color = $bg_image_repeat = $font_color = $padding = $margin_bottom = $css = '';

extract(shortcode_atts(array(

    'el_class'        => '',

    'bg_image'        => '',

    'bg_image_repeat' => '',

    'padding'         => '',

    'margin_bottom'   => '',

    'css' => '',

    'wrap_class'=>'',

    'ses_title'=>'',

    'ses_title2'=>'',

    'el_id'=>'',

    'type_row' => '',

    'ses_subtitle' => '',

    'ses_subtitle2' => '',

    'ses_desc' => '',

    'ses_image' => '',

    'ses_image1' => '',

    'ses_btn1' => '', 

    'ses_link1' => '', 

    'ses_btn2' => '', 

    'ses_link2' => '', 

), $atts));



wp_enqueue_script( 'wpb_composer_front_js' );



$el_class = $this->getExtraClass($el_class);

$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, ''. ( $this->settings('base')==='vc_row_inner' ? 'vc_inner ' : '' ) . $el_class . vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );

$style = $this->buildStyle($bg_image, $bg_color, $bg_image_repeat, $font_color, $padding, $margin_bottom);

$images = wp_get_attachment_image_src($ses_image,'');

if($type_row == 'type2'){

    $output .= wpb_js_remove_wpautop($content);

    $output .= $this->endBlockComment('row');



}elseif($type_row == 'slider_area'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="main_slider_area">

            <div id="main_slider" class="rev_slider" data-version="5.3.1.6">

                <h2 class="displaynone"> 1 </h2>
                
                <ul>';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</ul>

            </div>

        </section>';





}elseif($type_row == 'service_home_1'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="feature_area p_100">

            <div class="container">

                <div class="row feature_inner">

                    <div class="col-lg-9 offset-lg-3">

                        <div class="left_title2">

                            <h2>'.htmlspecialchars_decode(esc_attr($ses_title)).'</h2>

                            <p>'.htmlspecialchars_decode(esc_attr($ses_subtitle)).'</p>

                        </div>

                        <div class="row">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

                    </div>

                </div>

            </div>

        </section>';



}elseif($type_row == 'counter_home_1'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="counter_area p_100">

            <div class="container">

                <div class="row counter_inner">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

            </div>

        </section>';



}elseif($type_row == 'testimonial_home_1'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="testimonials_area p_100">

            <div class="container">

                <div class="single_title">

                    <h2>'.htmlspecialchars_decode(esc_attr($ses_title)).'</h2>

                </div>

                <div class="testi_slider owl-carousel">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

            </div>

        </section>';



}elseif($type_row == 'offer_home_1'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="offer_area p_100">

            <div class="container">

                <div class="main_title">

                    <h2>'.htmlspecialchars_decode(esc_attr($ses_title)).'</h2>

                    <p>'.htmlspecialchars_decode(esc_attr($ses_subtitle)).'</p>

                </div>

                <div class="row offer_inner">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

            </div>

        </section>';



}elseif($type_row == 'slider_home_2'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="home_banner_area">

            <div class="container">

                <div class="row home_two_text_inner align-items-center">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

            </div>

        </section>';



}elseif($type_row == 'produce_home_2'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="place_area p_100">

            <div class="container">

                <div class="row place_inner">

                    <div class="col-lg-6">

                        <div class="place_text">

                            <h6>'.htmlspecialchars_decode(esc_attr($ses_title)).'</h6>

                        </div>

                    </div>

                    <div class="col-lg-6">

                        <div class="place_text">

                            <p>'.htmlspecialchars_decode(esc_attr($ses_subtitle)).'</p>

                        </div>

                    </div>

                </div>

                <div class="row customer_offer_inner">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

            </div>

        </section>';



}elseif($type_row == 'facilities_home_2'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="facilities_area facilities_bg p_100">

            <div class="container">

                <div class="main_title2 white">

                    <h2>'.htmlspecialchars_decode(esc_attr($ses_title)).'</h2>

                    <p>'.htmlspecialchars_decode(esc_attr($ses_subtitle)).'</p>

                </div>

                <div class="row facilities_inner">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

            </div>

        </section>';



}elseif($type_row == 'facilities_home_3'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="facilities_area faci_blue pad_btm">

            <div class="container">

                <div class="row facilities_inner">

                    <div class="col-lg-4">

                        <div class="faci_title">

                            <h2>'.htmlspecialchars_decode(esc_attr($ses_title)).'</h2>

                            <p>'.htmlspecialchars_decode(esc_attr($ses_subtitle)).'</p>

                        </div>

                    </div>

                    <div class="col-lg-8">

                        <div class="row">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

                    </div>

                </div>

            </div>

        </section>';



}elseif($type_row == 'counter_home_3'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="counter_area counter_color p_100">

            <div class="container">

                <div class="row counter_inner">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

            </div>

        </section>';



}elseif($type_row == 'testimonial_home_3'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="testimonials_area testi_two p_100">

            <div class="container">

                <div class="single_title dark">

                    <h2>'.htmlspecialchars_decode(esc_attr($ses_title)).'</h2>

                </div>

                <div class="testi_slider owl-carousel">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

            </div>

        </section>';



}elseif($type_row == 'facilities_home_4'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="facilities_area p_100">

            <div class="container">

                <div class="main_title2">

                    <h2>'.htmlspecialchars_decode(esc_attr($ses_title)).'</h2>

                    <p>'.htmlspecialchars_decode(esc_attr($ses_subtitle)).'</p>

                </div>

                <div class="row facilities_inner">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

            </div>

        </section>';





}elseif($type_row == 'direction_home_5'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="direction_area p_100">

            <div class="container">

                <div class="row direction_inner">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

            </div>

        </section>';



}elseif($type_row == 'gallery_home_5'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="gallery_area dark_gallery p_100">

            <div class="container">

                <div class="center_title white">

                    <h2>'.htmlspecialchars_decode(esc_attr($ses_title)).'</h2>

                </div>

                <div class="row gallery_inner sc-gallery">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

            </div>

        </section>';



}elseif($type_row == 'contact_home_5'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="touch_area p_100">

            <div class="container">

                <div class="row touch_inner">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

            </div>

        </section>';



}elseif($type_row == 'offer_page_service'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="customer_offer_area p_100">

            <div class="container">

                <div class="main_title title_small">

                    <h2>'.htmlspecialchars_decode(esc_attr($ses_title)).'</h2>

                    <p>'.htmlspecialchars_decode(esc_attr($ses_subtitle)).'</p>

                </div>

                <div class="row customer_offer_inner">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

            </div>

        </section>';



}elseif($type_row == 'page_testimonials'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="testimonials_area testi_two p_100">

            <div class="container">

                <div class="main_title">

                    <h2>'.htmlspecialchars_decode(esc_attr($ses_title)).'</h2>

                </div>

                <div class="row testi_page_inner">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

            </div>

        </section>';



}elseif($type_row == 'special_dishes_restaurant'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="dishes_area p_100">

            <div class="container">

                <div class="main_title">

                    <h2>'.htmlspecialchars_decode(esc_attr($ses_title)).'</h2>

                    <p>'.htmlspecialchars_decode(esc_attr($ses_subtitle)).'</p>

                </div>

                <div class="dishes_item_inner">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

            </div>

        </section>';



}elseif($type_row == 'book_a_table_restaurant'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="bk_table_area d-flex align-items-center">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</section>';



}elseif($type_row == 'page_activities'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="activities_area p_100">

            <div class="container">

                <div class="main_title">

                    <h2>'.htmlspecialchars_decode(esc_attr($ses_title)).'</h2>

                    <h5>'.htmlspecialchars_decode(esc_attr($ses_subtitle)).'</h5>

                    <p>'.htmlspecialchars_decode(esc_attr($ses_subtitle2)).'</p>

                </div>

                <div class="activities_inner">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

            </div>

        </section>';



}elseif($type_row == 'page_contact'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="contact_form_area p_100">

            <div class="container">

                <div class="main_title">

                    <h2>'.htmlspecialchars_decode(esc_attr($ses_title)).'</h2>

                    <p>'.htmlspecialchars_decode(esc_attr($ses_subtitle)).'</p>

                </div>

                <div class="row">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

            </div>

         </section>';



}elseif($type_row == 'menu_page_restaurant'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $images1 = wp_get_attachment_image_src($ses_image1,'');

    $output .='<section class="our_menu_area p_100">

            <div class="container">

                <div class="menu_title">

                    <h2>'.htmlspecialchars_decode(esc_attr($ses_title)).'</h2>

                </div>

                <ul class="nav nav-tabs menu_tabs" id="myTab" role="tablist">

                    <li class="nav-item">

                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">'.htmlspecialchars_decode(esc_attr($ses_subtitle)).'</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">'.htmlspecialchars_decode(esc_attr($ses_subtitle2)).'</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">'.htmlspecialchars_decode(esc_attr($ses_desc)).'</a>

                    </li>

                </ul>

                <div class="our_menu_inner">

                    <div class="tab-content" id="myTabContent">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

                </div>

            </div>

        </section>';









}else{

    $output .= wpb_js_remove_wpautop($content);

    $output .= $this->endBlockComment('row');



}

echo $output; 