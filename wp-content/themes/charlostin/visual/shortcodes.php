<?php 
$textdoimain = 'charlostin';
$charlostin_redux_demo = get_option('redux_demo');
global $pre_text;

$pre_text = 'VG ';
//add

//Sention Hero


add_shortcode('slider_area', 'slider_area_func');
function slider_area_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'text_btn' => '',
        'id' => '',
        'link' => '',
        'data_width' => '',
        'image' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?>
        <li data-index="<?php echo htmlspecialchars_decode(esc_attr($id));?>" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="<?php echo esc_url($images[0]);?>"  data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="<?php echo esc_url($images[0]);?>"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>

                        <!-- LAYER NR. 1 -->
                        <div class="slider_text_box">
                            <div class="tp-caption tp-resizeme first_text" 
                            data-x="['left','left','left','15','15']" data-hoffset="['0','0','0','0']" 
                            data-y="['top','top','top','top']" data-voffset="['220','220','180','160','110']" 
                            data-fontsize="['55','55','55','40','25']"
                            data-lineheight="['65','65','65','50','35']"
                            data-width="[<?php echo htmlspecialchars_decode(esc_attr($data_width));?>]"
                            data-height="none"
                            data-whitespace="normal"
                            data-type="text" 
                            data-responsive_offset="on" 
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['left','left','left','left']"><?php echo htmlspecialchars_decode(esc_attr($title));?></div>
                            
                            <div class="tp-caption tp-resizeme secand_text" 
                                data-x="['left','left','left','15','15']" data-hoffset="['0','0','0','0']" 
                                data-y="['top','top','top','top']" data-voffset="['370','370','335','285','200']"  
                                data-fontsize="['16','16','16','16','16']"
                                data-lineheight="['26','26','26','26']"
                                data-width="['550','550','550','550','350']"
                                data-height="none"
                                data-whitespace="normal"
                                data-type="text" 
                                data-responsive_offset="on"
                                data-transform_idle="o:1;"
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?>
                            </div>
                            
                            <div class="tp-caption tp-resizeme slider_button" 
                                data-x="['left','left','left','15','15']" data-hoffset="['0','0','0','0']" 
                                data-y="['top','top','top','top']" data-voffset="['460','460','420','370','315']" 
                                data-fontsize="['14','14','14','14']"
                                data-lineheight="['46','46','46','46']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="text" 
                                data-responsive_offset="on" 
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">
                                <a class="main_btn" href="<?php echo esc_url($link); ?>"><?php echo htmlspecialchars_decode(esc_attr($text_btn));?></a>
                            </div>
                        </div>
                    </li>
<?php  return ob_get_clean();
}  

add_shortcode('book_table_home_1', 'book_table_home_1_func');
function book_table_home_1_func($atts, $content = null){
    extract(shortcode_atts(array( 

    ), $atts));
    ob_start(); 
    ?> 
    <?php echo do_shortcode("[hotel_booking]"); ?>
<?php  return ob_get_clean();
}

add_shortcode('produce_home_1', 'produce_home_1_func');
function produce_home_1_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle1' => '',
        'subtitle2' => '',
        'link' => '',
        'text_btn' => '',
        'image' => '',
        'image1' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    $images1 = wp_get_attachment_image_src($image1,'');
    ?> 
    <section class="welcome_area p_100">
            <div class="container">
                <div class="row welcome_inner align-items-center d-flex">
                    <div class="col-lg-6">
                        <div class="welcome_img">
                            <img class="img-fluid" src="<?php echo esc_url($images[0]);?>" alt="">
                            <img class="img-fluid" src="<?php echo esc_url($images1[0]);?>" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="welcome_text">
                            <h4><?php echo htmlspecialchars_decode(esc_attr($title));?></h4>
                            <h5><?php echo htmlspecialchars_decode(esc_attr($subtitle1));?></h5>
                            <p><?php echo htmlspecialchars_decode(esc_attr($subtitle2));?></p>
                            <a class="blue_btn" href="<?php echo esc_url($link); ?>"><?php echo htmlspecialchars_decode(esc_attr($text_btn));?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php  return ob_get_clean();
}

add_shortcode('room_home_1', 'room_home_1_func');
function room_home_1_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'unit' => '',
        'rental_period' => '',
        'text_btn' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?>
    <section class="room_area p_100">
            <div class="container">
                <div class="left_title">
                    <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>
                    <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
                </div>
                <div class="room_slider owl-carousel">
                    <?php 
                        $args = array(   
                            'post_type' => 'hb_room',   
                            'paged' => $paged,
                            'posts_per_page' => $number,
                            'order' => $orderpost,
                            'orderby' => $orderby, 
                        );  
                        $wp_query = new WP_Query($args);
                        $i = 0;
                        while ($wp_query -> have_posts()) : $wp_query -> the_post();
                        $room_excerpt = get_post_meta(get_the_ID(),'_cmb_room_excerpt', true);      
                    ?>
                    <div class="item">
                        <div class="room_item">
                            <?php if ( has_post_thumbnail() ) { ?>
                            <a href="<?php the_permalink();?>"><div class="room_img">
                                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="">
                            </div></a>
                            <?php } ?>
                            <div class="room_text">
                                <a href="<?php the_permalink();?>"><h4><?php the_title(); ?></h4></a>
                                <p><?php echo htmlspecialchars_decode(esc_attr($room_excerpt));?></p>
                                <div class="room_bottom justify-content-between d-flex">
                                    <div class="left_text">
                                        <h5><span><?php echo htmlspecialchars_decode(esc_attr($unit));?></span><?php 
                                        $prices        = hb_room_get_selected_plan( get_the_ID() );
                                        $prices        = isset( $prices->prices ) ? $prices->prices : array();

                                        echo htmlspecialchars_decode(esc_attr($prices['1']));?></h5>
                                        <p><?php echo htmlspecialchars_decode(esc_attr($rental_period));?></p>
                                    </div>
                                    <div class="left_text">
                                        <a class="main_btn" href="<?php the_permalink();?>"><?php echo htmlspecialchars_decode(esc_attr($text_btn));?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                </div>
            </div>
        </section>
    
<?php  return ob_get_clean();
}


add_shortcode('service_home_1', 'service_home_1_func');
function service_home_1_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'icon' => '',
        'link' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
        <div class="col-lg-4">
            <div class="feature_item">
                <i class="<?php echo esc_attr($icon); ?>"></i>
                <a href="<?php echo esc_url($link); ?>"><h4><?php echo htmlspecialchars_decode(esc_attr($title));?></h4></a>
                <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
            </div>
        </div>
<?php  return ob_get_clean();
}  

add_shortcode('our_hotel_home_1', 'our_hotel_home_1_func');
function our_hotel_home_1_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title1' => '',
        'title2' => '',
        'year' => '',
        'subtitle' => '',
        'link' => '',
        'image' => '',
        'image1' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    $images1 = wp_get_attachment_image_src($image1,'');
    ?> 
    <section class="our_hotel_area">
        <div class="container">
            <div class="our_hotel_inner p_100">
                <div class="row align-items-center d-flex">
                    <div class="col-lg-5">
                        <div class="our_htl_text">
                            <h5><?php echo htmlspecialchars_decode(esc_attr($title1));?> <a href="<?php echo esc_url($link); ?>"> <?php echo htmlspecialchars_decode(esc_attr($year));?></a><?php echo htmlspecialchars_decode(esc_attr($title2));?></h5>
                            <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="row our_hotel_img">
                            <img class="img-fluid" src="<?php echo esc_url($images[0]);?>" alt="">
                            <img class="img-fluid" src="<?php echo esc_url($images1[0]);?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php  return ob_get_clean();
}  

add_shortcode('counter_home_1', 'counter_home_1_func');
function counter_home_1_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'number' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
        <div class="col-lg-3 col-sm-6">
            <div class="counter_item">
                <div class="media">
                    <div class="d-flex">
                        <h4 class="counter"><?php echo htmlspecialchars_decode(esc_attr($number));?></h4>
                    </div>
                    <div class="media-body">
                        <p><?php echo htmlspecialchars_decode(esc_attr($title));?></p>
                    </div>
                </div>
            </div>
        </div>
<?php  return ob_get_clean();
}

add_shortcode('testimonial_home_1', 'testimonial_home_1_func');
function testimonial_home_1_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'client' => '',
        'position' => '',
        'subtitle' => '',
        'stars_select' => '',
        'image' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?>  
            <div class="item">
                <div class="testi_item">
                    <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
                    <div class="media">
                        <div class="d-flex"><img src="<?php echo esc_url($images[0]);?>" alt=""></div>
                        <div class="media-body">
                            <h4><?php echo htmlspecialchars_decode(esc_attr($clients));?> <span><?php echo htmlspecialchars_decode(esc_attr($position));?></span></h4>
                            <span class="list">
                                <?php if($stars_select=='1') { ?>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                          <?php } elseif($stars_select=='2') { ?>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                          <?php } elseif($stars_select=='3') { ?>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                          <?php } elseif($stars_select=='4') { ?>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                          <?php } else{ ?>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            <?php } ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
<?php  return ob_get_clean();
} 

add_shortcode('video_home_1', 'video_home_1_func');
function video_home_1_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'text_btn' => '',
        'icon' => '',
        'link1' => '',
        'link2' => '',
        'image' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <section class="video_area p_100" style="    background: url(<?php echo esc_url($images[0]);?>) no-repeat fixed center center;
    background-size: cover;
    position: relative;">
        <div class="container">
            <div class="row video_inner align-items-center d-flex">
                <div class="col-lg-7">
                    <div class="video_left_text">
                        <h3><?php echo htmlspecialchars_decode(esc_attr($title));?></h3>
                        <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
                        <a class="main_btn" href="<?php echo esc_url($link1); ?>"><?php echo htmlspecialchars_decode(esc_attr($text_btn));?></a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="video_icon">
                        <a class="popup-youtube" href="<?php echo esc_url($link2); ?>"><i class="<?php echo esc_attr($icon); ?>"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php  return ob_get_clean();
}

add_shortcode('offer_home_1', 'offer_home_1_func');
function offer_home_1_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'sale' => '',
        'text_btn' => '',
        'link' => '',
        'image' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?>
    <div class="col-lg-6">
        <div class="offer_item">
            <div class="offer_img">
                <img class="img-fluid" src="<?php echo esc_url($images[0]);?>" alt="">
                <h4><?php echo htmlspecialchars_decode(esc_attr($title));?></h4>
            </div>
            <div class="offer_text justify-content-between d-flex align-items-center">
                <div class="offer_left">
                    <h5><span><?php echo htmlspecialchars_decode(esc_attr($sale));?></span><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></h5>
                </div>
                <div class="offer_right">
                    <a href="<?php echo esc_url($link); ?>"><?php echo htmlspecialchars_decode(esc_attr($text_btn));?></a>
                </div>
            </div>
        </div>
    </div>
<?php  return ob_get_clean(); 
}


add_shortcode('blog_home_1', 'blog_home_1_func');
function blog_home_1_func($atts, $content = null){
    extract(shortcode_atts(array(      
        'title' => '',
        'subtitle' => '',
        'number' => '3',
        'orderpost' => '',
        'orderby' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?>
        <section class="home_blog_area p_100">
            <div class="container">
                <div class="main_title">
                    <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>
                    <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
                </div>
                <div class="row home_blog_inner">

                <?php 
                        $args = array(    
                            'paged' => $paged,
                            'posts_per_page' => $number,
                            'order' => $orderpost,
                            'orderby' => $orderby, 
                            'post_type' => 'post',
                            );
                        $wp_query = new WP_Query($args);
                        $i=0;
                        while ($wp_query -> have_posts()): $wp_query -> the_post();
                        $i++;
                        $single_image = get_post_meta(get_the_ID(),'_cmb_single_image', true);
                    ?>
                    <?php if($i == '1'){ ?>
                    <div class="col-lg-4">
                        <div class="h_blog_one">
                            <a href="<?php the_permalink();?>"><img class="img-fluid" src="<?php echo esc_url($single_image);?>" alt=""></a>
                            <div class="blog_text">
                                <a class="date" href="#"><?php the_time(get_option( 'date_format' ));?></a>
                                <a href="<?php the_permalink();?>"><h4><?php the_title();?></h4></a>
                            </div>
                        </div>
                    </div>
                    <?php }else{ ?>
                    <div class="col-lg-4">
                        <div class="h_blog_item">
                            <a href="<?php the_permalink();?>"><div class="h_blog_img">
                               <img class="img-fluid" src="<?php echo esc_url($single_image);?>" alt="">
                            </div></a>
                            <a class="date" href="#"><?php the_time(get_option( 'date_format' ));?></a>
                            <a href="<?php the_permalink();?>"><h4><?php the_title();?></h4></a>
                            <p><?php if(isset($charlostin_redux_demo['blog_excerpt']) && $charlostin_redux_demo['blog_excerpt'] != ''){?>
                                <?php echo esc_attr(charlostin_excerpt($charlostin_redux_demo['blog_excerpt'])); ?>
                                <?php }else{?>
                                <?php echo esc_attr(charlostin_excerpt(20)); 
                                }
                                ?></p>
                        </div>
                    </div>
                    <?php } ?>
                <?php endwhile; ?> 
            </div>
        </div>
    </section>
<?php  return ob_get_clean();
}

add_shortcode('gallery_home_1', 'gallery_home_1_func');
function gallery_home_1_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'icon' => '',
        'number' => '',
        'order' => '',
        'orderby' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
<section class="gallery_area gallery_bg pad_btm">
        <div class="container">
            <div class="center_title">
                <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>
            </div>
            <div class="row gallery_inner sc-gallery">
                <?php 
                $args = array(   
                            'post_type' => 'Gallery',   
                            'paged' => $paged,
                            'posts_per_page' => $number,
                            'order' => $orderpost,
                            'orderby' => $orderby, 
                        );  
                        $wp_query = new WP_Query($args);
                        $i = 0;
                        while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
                        $i++;
                        $title1= get_the_title();
                ?>
                <div class="gallery_item">
                    <div class="gallery_img gallery">
                        <a class="btn-gallery" href="#gallery-<?php echo $i;?>"><img class="img-fluid" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt=""><i class="<?php echo esc_attr($icon); ?>"></i></a>
                        <div id="gallery-<?php echo $i;?>" class="d-none">
                        <?php
                        $gallery_number = get_post_meta(get_the_ID(),'_cmb_gallery_number', true);
                        $gallery = get_post_gallery( get_the_ID(), false );
                        $gallery_ids = $gallery['ids'];
                        $img_ids = explode(",",$gallery_ids);
                            $j=0;
                           foreach( $img_ids AS $img_id ){
                            $j++;
                            $image_src = wp_get_attachment_image_src($img_id,''); 
                            if($j==1){
                            echo '<a href="'.$image_src[0].'"><img src="'.$image_src[0].'" alt=""></a>';
                            }else{
                             echo '<a href="'.$image_src[0].'"><img src="'.$image_src[0].'" alt=""></a>';   
                            }
                           } ?>
                        </div>
                    </div>
                    <div class="gallery_text">
                        <a href="#"><h4><?php echo $title1; ?></h4></a>
                        <p><?php echo htmlspecialchars_decode(esc_attr($gallery_number));?></p>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php  return ob_get_clean();
}

add_shortcode('book_table_home_2', 'book_table_home_2_func');
function book_table_home_2_func($atts, $content = null){
    extract(shortcode_atts(array( 

    ), $atts));
    ob_start(); 
    ?> 
    <?php echo do_shortcode("[hotel_booking2]"); ?>
<?php  return ob_get_clean();
}


add_shortcode('slider_home_2', 'slider_home_2_func');
function slider_home_2_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'link' => '',
        'text_btn' => '',
    ), $atts));
    ob_start();
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
                    
                        <div class="home_two_text">
                            <h3><?php echo htmlspecialchars_decode(esc_attr($title));?></h3>
                            <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
                            <a class="main_btn" href="<?php echo esc_url($link); ?>"><?php echo htmlspecialchars_decode(esc_attr($text_btn));?></a>
                        </div>
                    
<?php  return ob_get_clean();
}


add_shortcode('produce_home_2', 'produce_home_2_func');
function produce_home_2_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'link' => '',
        'image' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?>  
   <div class="col-lg-4">
        <div class="cs_offer_item">
            <img class="img-fluid" src="<?php echo esc_url($images[0]);?>" alt="">
            <a href="<?php echo esc_url($link); ?>"><h4><?php echo htmlspecialchars_decode(esc_attr($title));?></h4></a>
        </div>
    </div>
<?php  return ob_get_clean();
}

add_shortcode('facilities_home_2', 'facilities_home_2_func');
function facilities_home_2_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'icon' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
        <div class="col-lg-4 col-md-6">
            <div class="facilities_item">
                <div class="media">
                    <div class="d-flex">
                        <i class="<?php echo esc_attr($icon); ?>"></i>
                    </div>
                    <div class="media-body">
                        <h4><?php echo htmlspecialchars_decode(esc_attr($title));?></h4>
                        <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
                    </div>
                </div>
            </div>
        </div>
<?php  return ob_get_clean();
} 

add_shortcode('slider_home_3', 'slider_home_3_func');
function slider_home_3_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title1' => '',
        'title2' => '',
        'subtitle' => '',
        'link' => '',
        'text_btn' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
        <section class="home_three_banner">
            <div class="container">
                <div class="row home_three_inner">
                    <div class="col-lg-6"></div>
                    <div class="col-lg-6">
                        <div class="home_three_text">
                            <h3><?php echo htmlspecialchars_decode(esc_attr($title1));?><a href="<?php echo esc_url($link); ?>"><?php echo htmlspecialchars_decode(esc_attr($title2));?></a></h3>
                            <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
                            <a class="main_btn" href="<?php echo esc_url($link); ?>"><?php echo htmlspecialchars_decode(esc_attr($text_btn));?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php  return ob_get_clean();
}  

add_shortcode('facilities_home_3', 'facilities_home_3_func');
function facilities_home_3_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'icon' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
        <div class="col-lg-6">
            <div class="facilities_item">
                <div class="media">
                    <div class="d-flex">
                        <i class="<?php echo esc_attr($icon); ?>"></i>
                    </div>
                    <div class="media-body">
                        <h4><?php echo htmlspecialchars_decode(esc_attr($title));?></h4>
                        <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
                    </div>
                </div>
            </div>
        </div>
<?php  return ob_get_clean();
}

add_shortcode('portfolio_home_3', 'portfolio_home_3_func');
function portfolio_home_3_func($atts, $content = null){
    extract(shortcode_atts(array(
        'icon' => '',
        'number' => '',
        'orderpost' => '',
        'orderby' => '',
    ), $atts));
    ob_start(); 
    global $redux_demo;
    ?> 
    <section class="gallery_one_area black_gallery p_100">
            <div class="container">
                <div class="g_fillter">
                    <ul class="list">
                        <li class="active" data-filter="*"><a href="#"><?php echo esc_html__( 'All', 'charlostin' ); ?></a></li>
                        <?php 
                                    $categories = get_terms('type');   
                                     foreach( (array)$categories as $categorie){
                                        $cat_name = $categorie->name;
                                        $cat_slug = $categorie->slug;
                                ?>
                        <li data-filter=".<?php echo esc_attr($cat_slug);?>"><a href="#"><?php echo esc_attr($cat_name);?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="row m0 g_one_inner g_two_inner imageGallery1">
                            <?php 
                            $args = array(   
                                        'post_type' => 'Portfolio',   
                                        'paged' => $paged,
                                        'posts_per_page' => $number,
                                        'order' => $orderpost,
                                        'orderby' => $orderby, 
                                    );  
                                    $wp_query = new WP_Query($args);
                                    $i = 1;
                                    while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
                                    $cates = get_the_terms(get_the_ID(),'type');
                                    $cate_name ='';
                                    $cate_slug ='';
                                          foreach((array)$cates as $cate){
                                    if(count($cates)>0){
                                        $cate_name .= $cate->name.' ';
                                        $cate_slug .= $cate->slug.' ';     
                                        } 
                                        } 
                            ?>
                        <div class="g_two_item <?php echo esc_attr($cate_slug);?>">
                            <?php if ( has_post_thumbnail() ) { ?>
                            <div class="gallery_one_item">
                                    <a class="light" href="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>">
                                    <img class="img-fluid" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="">
                                    <?php } ?>
                                    <i class="<?php echo esc_attr($icon); ?>"></i>
                                    <h4><?php the_title(); ?></h4>
                                </a>
                            </div>
                        </div>
            <?php endwhile; ?>
    </div>
</section>
<?php  return ob_get_clean();
}

add_shortcode('testimonial_home_3', 'testimonial_home_3_func');
function testimonial_home_3_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'client' => '',
        'position' => '',
        'subtitle' => '',
        'stars_select' => '',
        'image' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <div class="item">
        <div class="testi_item">
            <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
            <div class="media">
                <div class="d-flex"><img src="<?php echo esc_url($images[0]);?>" alt=""></div>
                <div class="media-body">
                    <h4><?php echo htmlspecialchars_decode(esc_attr($client));?> <span><?php echo htmlspecialchars_decode(esc_attr($position));?></span></h4>
                    <ul class="list">
                        <?php if($stars_select=='1') { ?>
                                <i class="fa fa-star" aria-hidden="true"></i>
                          <?php } elseif($stars_select=='2') { ?>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                          <?php } elseif($stars_select=='3') { ?>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                          <?php } elseif($stars_select=='4') { ?>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                          <?php } else{ ?>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php  return ob_get_clean();
}

add_shortcode('feature_home_4', 'feature_home_4_func');
function feature_home_4_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'number' => '',
        'orderpost' => '',
        'orderby' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
        <section class="room_area feature_room bg_color p_100">
            <div class="container">
                <div class="main_title white_title">
                    <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>
                    <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
                </div>
                <div class="row room_inner">
                    <?php 
                    $args = array(   
                                'post_type' => 'Spa',   
                                'paged' => $paged,
                                'posts_per_page' => $number,
                                'order' => $orderpost,
                                'orderby' => $orderby, 
                            );  
                            $wp_query = new WP_Query($args);
                            $i = 0;
                            while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
                            $spa_price = get_post_meta(get_the_ID(),'_cmb_spa_price', true);
                            $spa_excerpt = get_post_meta(get_the_ID(),'_cmb_spa_excerpt', true);
                    ?>
                    <div class="col-lg-4">
                <div class="room_item">
                    <?php if ( has_post_thumbnail() ) { ?>
                    <div class="room_img">
                        <img class="img-fluid" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="">
                    </div>
                    <?php } ?>
                    <div class="room_text">
                        <a href="<?php the_permalink();?>"><h4><?php the_title(); ?></h4></a>
                        <p><?php echo htmlspecialchars_decode(esc_attr($spa_excerpt));?></p>
                        <div class="room_bottom justify-content-between d-flex align-items-center">
                            <div class="left_text">
                                <h6><?php echo htmlspecialchars_decode(esc_attr($spa_price));?> <span><?php if(isset($charlostin_redux_demo['packages_setting']) && $charlostin_redux_demo['packages_setting'] != ''){?>
                    <?php echo htmlspecialchars_decode(esc_attr($charlostin_redux_demo['packages_setting']));?>
                    <?php }else{?>
                    <?php echo esc_html__( '/ setting', 'charlostin' );
                    }
                    ?></span></h6>
                            </div>
                            <div class="left_text">
                                <a class="main_btn" href="<?php the_permalink();?>"><?php if(isset($charlostin_redux_demo['spa_button']) && $charlostin_redux_demo['spa_button'] != ''){?>
                    <?php echo htmlspecialchars_decode(esc_attr($charlostin_redux_demo['spa_button']));?>
                    <?php }else{?>
                    <?php echo esc_html__( 'View Details', 'charlostin' );
                    }
                    ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
                </div>
            </div>
        </section>
<?php  return ob_get_clean();
}


add_shortcode('about_home_5', 'about_home_5_func');
function about_home_5_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle1' => '',
        'subtitle2' => '',
        'image' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?>
        <section class="about_hotel_area p_100">
            <div class="container">
                <div class="row about_hotel_inner align-items-center d-flex">
                    <div class="col-lg-8">
                        <div class="ab_hotel_text">
                            <div class="main_title">
                                <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>
                            </div>
                            <h5><?php echo htmlspecialchars_decode(esc_attr($subtitle1));?></h5>
                            <p><?php echo htmlspecialchars_decode(esc_attr($subtitle2));?></p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ab_hotel_img">
                            <img class="img-fluid" src="<?php echo esc_url($images[0]);?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php  return ob_get_clean(); 
}

add_shortcode('direction_home_5', 'direction_home_5_func');
function direction_home_5_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title1' => '',
        'title2' => '',
        'subtitle' => '',
        'text_btn1' => '',
        'text_btn2' => '',
        'link1' => '',
        'link2' => '',
        'icon' => '',
        'id1' => '',
        'id2' => '',
        'image' => '',
        'type' => '0',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <?php if($type=='0'){ ?> 
        <div class="card">
            <div class="card-header" id="<?php echo htmlspecialchars_decode(esc_attr($id2));?>">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#<?php echo htmlspecialchars_decode(esc_attr($id1));?>" aria-expanded="false" aria-controls="<?php echo htmlspecialchars_decode(esc_attr($id1));?>">
                <?php echo htmlspecialchars_decode(esc_attr($title1));?>
                <i>+</i>
                <i>-</i>
                </button>
            </div>
            <div id="<?php echo htmlspecialchars_decode(esc_attr($id1));?>" class="collapse" aria-labelledby="<?php echo htmlspecialchars_decode(esc_attr($id2));?>" data-parent="#accordionExample">
                <div class="card-body">
                    <div class="media">
                        <div class="d-flex">
                            <img src="<?php echo esc_url($images[0]);?>" alt="">
                        </div>
                        <div class="media-body">
                            <h4><?php echo htmlspecialchars_decode(esc_attr($title2));?></h4>
                            <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
                            <div class="link">
                                <a href="<?php echo esc_url($link1); ?>"><i class="<?php echo esc_attr($icon); ?>" aria-hidden="true"></i> <?php echo htmlspecialchars_decode(esc_attr($text_btn1));?> </a>
                                <a href="<?php echo esc_url($link2); ?>"><i class="<?php echo esc_attr($icon); ?>" aria-hidden="true"></i> <?php echo htmlspecialchars_decode(esc_attr($text_btn2));?> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }else{ ?>
        <div class="card">
            <div class="card-header" id="<?php echo htmlspecialchars_decode(esc_attr($id2));?>">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#<?php echo htmlspecialchars_decode(esc_attr($id1));?>" aria-expanded="true" aria-controls="<?php echo htmlspecialchars_decode(esc_attr($id1));?>">
                <?php echo htmlspecialchars_decode(esc_attr($title1));?>
                <i>+</i>
                <i>-</i>
                </button>
            </div>
            <div id="<?php echo htmlspecialchars_decode(esc_attr($id1));?>" class="collapse show" aria-labelledby="<?php echo htmlspecialchars_decode(esc_attr($id2));?>" data-parent="#accordionExample">

                <div class="card-body">
                    <div class="media">
                        <div class="d-flex">
                            <img src="<?php echo esc_url($images[0]);?>" alt="">
                        </div>
                        <div class="media-body">
                            <h4><?php echo htmlspecialchars_decode(esc_attr($title2));?></h4>
                            <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
                            <div class="link">
                                <a href="<?php echo esc_url($link1); ?>"><i class="<?php echo esc_attr($icon); ?>" aria-hidden="true"></i> <?php echo htmlspecialchars_decode(esc_attr($text_btn1));?> </a>
                                <a href="<?php echo esc_url($link2); ?>"><i class="<?php echo esc_attr($icon); ?>" aria-hidden="true"></i> <?php echo htmlspecialchars_decode(esc_attr($text_btn2));?> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
<?php  return ob_get_clean();
}  

add_shortcode('direction_2_home_5', 'direction_2_home_5_func');
function direction_2_home_5_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'distance1' => '',
        'distance2' => '',
        'from1' => '',
        'from2' => '',
        'link' => '',
        'text_btn' => '',
        'image' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?>
    <div class="col-lg-5">
        <div class="dirving_text">
            <div class="main_title">
                <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>
                <p><?php echo htmlspecialchars_decode(esc_attr($subtitle2));?></p>
            </div>
            <img class="img-fluid" src="<?php echo esc_url($images[0]);?>" alt="">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <div class="dir_text">
                        <h4><?php echo htmlspecialchars_decode(esc_attr($distance1));?></h4>distance
                        <p><?php echo htmlspecialchars_decode(esc_attr($from1));?></p>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6">
                    <div class="dir_text">
                        <h4><?php echo htmlspecialchars_decode(esc_attr($distance2));?></h4>
                        <p><?php echo htmlspecialchars_decode(esc_attr($from2));?></p>
                    </div>
                </div>
            </div>
            <a class="main_btn" href="<?php echo esc_url($link); ?>"><?php echo htmlspecialchars_decode(esc_attr($text_btn));?></a>
        </div>
    </div>
<?php  return ob_get_clean();
}

add_shortcode('gallery_home_5', 'gallery_home_5_func');
function gallery_home_5_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'id' => '',
        'icon' => '',
        'number' => '',
        'order' => '',
        'orderby' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
<section class="gallery_area dark_gallery p_100">
        <div class="container">
            <div class="center_title white">
                <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>
            </div>
            <div class="row gallery_inner sc-gallery">
                <?php 
                $args = array(   
                            'post_type' => 'Gallery',   
                            'paged' => $paged,
                            'posts_per_page' => $number,
                            'order' => $orderpost,
                            'orderby' => $orderby, 
                        );  
                        $wp_query = new WP_Query($args);
                        $i = 0;
                        while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
                        $i++;
                        $title1= get_the_title();
                ?>
                <div class="gallery_item">
                    <div class="gallery_img gallery">
                        <a class="btn-gallery" href="#gallery-<?php echo $i;?>"><img class="img-fluid" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt=""><i class="<?php echo esc_attr($icon); ?>"></i></a>
                        <div id="gallery-<?php echo $i;?>" class="d-none">
                        <?php
                        $gallery_number = get_post_meta(get_the_ID(),'_cmb_gallery_number', true);
                        $gallery = get_post_gallery( get_the_ID(), false );
                        $gallery_ids = $gallery['ids'];
                        $img_ids = explode(",",$gallery_ids);
                            $j=0;
                           foreach( $img_ids AS $img_id ){
                            $j++;
                            $image_src = wp_get_attachment_image_src($img_id,''); 
                            if($j==1){
                            echo '<a href="'.$image_src[0].'"><img src="'.$image_src[0].'" alt=""></a>';
                            }else{
                             echo '<a href="'.$image_src[0].'"><img src="'.$image_src[0].'" alt=""></a>';   
                            }
                           } ?>
                        </div>
                    </div>
                    <div class="gallery_text">
                        <a href="#"><h4><?php echo $title1; ?></h4></a>
                        <p><?php echo htmlspecialchars_decode(esc_attr($gallery_number));?></p>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php  return ob_get_clean();
}

add_shortcode('get_in_touch', 'get_in_touch_func');
function get_in_touch_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <div class="item">
        <h3><?php echo htmlspecialchars_decode(esc_attr($title));?></h3>
        <h6><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></h6>
    </div>
<?php  return ob_get_clean();
}

add_shortcode('offer_page_service', 'offer_page_service_func');
function offer_page_service_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'link' => '',
        'image' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <div class="col-lg-4">
        <div class="cs_offer_item">
            <img class="img-fluid" src="<?php echo esc_url($images[0]);?>" alt="">
            <a href="<?php echo esc_url($link); ?>"><h4><?php echo htmlspecialchars_decode(esc_attr($title));?></h4></a>
        </div>
    </div>
<?php  return ob_get_clean();
}


add_shortcode('page_testimonial', 'page_testimonial_func');
function page_testimonial_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'client' => '',
        'position' => '',
        'subtitle' => '',
        'stars_select' => '',
        'image' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
        <div class="col-lg-6">
            <div class="testi_item">
                <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
                <div class="media">
                    <div class="d-flex"><img src="<?php echo esc_url($images[0]);?>" alt=""></div>
                    <div class="media-body">
                        <h4><?php echo htmlspecialchars_decode(esc_attr($client));?> <span><?php echo htmlspecialchars_decode(esc_attr($position));?></span></h4>
                        <span class="list">
                            <?php if($stars_select=='1') { ?>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                              <?php } elseif($stars_select=='2') { ?>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                              <?php } elseif($stars_select=='3') { ?>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                              <?php } elseif($stars_select=='4') { ?>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                              <?php } else{ ?>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                            <?php } ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
<?php  return ob_get_clean();
}  

add_shortcode('page_gallery_1', 'page_gallery_1_func');
function page_gallery_1_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'icon' => '',
        'number' => '',
        'orderpost' => '',
        'orderby' => '',
    ), $atts));
    ob_start(); 
    ?> 
        <section class="gallery_one_area p_100">
            <div class="container">
                <div class="g_fillter">
                   <ul class="list">
                        <li class="active" data-filter="*"><a href="#"><?php echo esc_html__( 'All', 'charlostin' ); ?></a></li>
                        <?php 
                                    $categories = get_terms('type');   
                                     foreach( (array)$categories as $categorie){
                                        $cat_name = $categorie->name;
                                        $cat_slug = $categorie->slug;
                                ?>
                        <li data-filter=".<?php echo esc_attr($cat_slug);?>"><a href="#"><?php echo esc_attr($cat_name);?></a></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="g_one_inner row imageGallery1">
                    <?php 
                            $args = array(   
                                        'post_type' => 'Portfolio',   
                                        'paged' => $paged,
                                        'posts_per_page' => $number,
                                        'order' => $orderpost,
                                        'orderby' => $orderby, 
                                    );  
                                    $wp_query = new WP_Query($args);
                                    $i = 1;
                                    while ($wp_query -> have_posts()) : $wp_query -> the_post();
                                    $single_image = get_post_meta(get_the_ID(),'_cmb_single_image', true);
                                    $cates = get_the_terms(get_the_ID(),'type');
                                    $cate_name ='';
                                    $cate_slug ='';
                                          foreach((array)$cates as $cate){
                                    if(count($cates)>0){
                                        $cate_name .= $cate->name.' ';
                                        $cate_slug .= $cate->slug.' ';     
                                        } 
                                        } 
                            ?>
                    <div class="col-lg-4 col-6 <?php echo esc_attr($cate_slug);?>">
                        <div class="gallery_one_item">
                            <?php if ( has_post_thumbnail() ) { ?>
                            <a class="light" href="<?php echo esc_url($single_image);?>">
                                <img class="img-fluid" src="<?php echo esc_url($single_image);?>" alt="">
                                <?php } ?>
                                <i class="<?php echo esc_attr($icon); ?>"></i>
                                <h4><?php the_title(); ?></h4>
                            </a>
                        </div>
                    </div>
                <?php endwhile; ?>
                </div>
            </div>
        </section>
<?php  return ob_get_clean();
}

add_shortcode('page_gallery_2', 'page_gallery_2_func');
function page_gallery_2_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'icon' => '',
        'number' => '',
        'orderpost' => '',
        'orderby' => '',
    ), $atts));
    ob_start(); 
    ?> 
        <section class="gallery_one_area p_100">
            <div class="container">
                <div class="g_fillter">
                    <ul class="list">
                        <li class="active" data-filter="*"><a href="#"><?php echo esc_html__( 'All', 'charlostin' ); ?></a></li>
                        <?php 
                                    $categories = get_terms('type');   
                                     foreach( (array)$categories as $categorie){
                                        $cat_name = $categorie->name;
                                        $cat_slug = $categorie->slug;
                                ?>
                        <li data-filter=".<?php echo esc_attr($cat_slug);?>"><a href="#"><?php echo esc_attr($cat_name);?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="row m0 g_one_inner g_two_inner imageGallery1">
                            <?php 
                            $args = array(   
                                        'post_type' => 'Portfolio',   
                                        'paged' => $paged,
                                        'posts_per_page' => $number,
                                        'order' => $orderpost,
                                        'orderby' => $orderby, 
                                    );  
                                    $wp_query = new WP_Query($args);
                                    $i = 1;
                                    while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
                                    $cates = get_the_terms(get_the_ID(),'type');
                                    $cate_name ='';
                                    $cate_slug ='';
                                          foreach((array)$cates as $cate){
                                    if(count($cates)>0){
                                        $cate_name .= $cate->name.' ';
                                        $cate_slug .= $cate->slug.' ';     
                                        } 
                                        } 
                            ?>
                        <div class="g_two_item <?php echo esc_attr($cate_slug);?>">
                            <?php if ( has_post_thumbnail() ) { ?>
                            <div class="gallery_one_item">
                                    <a class="light" href="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>">
                                    <img class="img-fluid" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="">
                                    <?php } ?>
                                    <i class="<?php echo esc_attr($icon); ?>"></i>
                                    <h4><?php the_title(); ?></h4>
                                </a>
                            </div>
                        </div>
            <?php endwhile; ?>
    </div>
</section>
<?php  return ob_get_clean();
}

add_shortcode('about_page_restaurant', 'about_page_restaurant_func');
function about_page_restaurant_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle1' => '',
        'subtitle2' => '',
        'desc' => '',
        'note1' => '',
        'note2' => '',
        'image' => '',
        'image1' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    $images1 = wp_get_attachment_image_src($image1,''); 
    ?> 
    <section class="about_restuarant_area p_100">
            <div class="container">
                <div class="row ab_res_inner">
                    <div class="col-lg-8">
                        <div class="ab_left">
                            <img class="img-fluid" src="<?php echo esc_url($images[0]);?>" alt="">
                            <div class="main_title">
                                <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>
                                <h5><?php echo htmlspecialchars_decode(esc_attr($subtitle1));?></h5>
                                <p><?php echo htmlspecialchars_decode(esc_attr($desc));?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ab_right">
                            <img class="img-fluid" src="<?php echo esc_url($images1[0]);?>" alt="">
                            <h4><?php echo htmlspecialchars_decode(esc_attr($subtitle2));?></h4>
                            <h5><?php echo htmlspecialchars_decode(esc_attr($note1));?></h5>
                            <p><?php echo htmlspecialchars_decode(esc_attr($note2));?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php  return ob_get_clean();
}

add_shortcode('special_dishes_restaurant', 'special_dishes_restaurant_func');
function special_dishes_restaurant_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'image' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <div class="dishes_item">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <img class="img-fluid" src="<?php echo esc_url($images[0]);?>" alt="">
            </div>
            <div class="col-lg-8">
                <div class="dishes_text">
                    <h4><?php echo htmlspecialchars_decode(esc_attr($title));?></h4>
                    <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
                </div>
            </div>
        </div>
    </div>
<?php  return ob_get_clean();
}

add_shortcode('book_table_restaurant', 'book_table_restaurant_func');
function book_table_restaurant_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'image' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <div class="right_side">
        <img src="<?php echo esc_url($images[0]);?>" alt="">
    </div>
<?php  return ob_get_clean();
}

add_shortcode('upcoming_events', 'upcoming_events_func');
function upcoming_events_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'text_btn' => '',
        'number' => '3',
        'orderpost' => '',
        'orderby' => '',
    ), $atts));
    ob_start(); 
    ?> 
    
    <section class="events_area p_100">
        <div class="container">
            <div class="main_title">
                <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>
                <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
            </div>
            <div class="events_item_inner">
                <?php 
                $args = array(   
                            'post_type' => 'Events',
                            'paged' => $paged,
                            'posts_per_page' => $number,
                            'order' => $orderpost,
                            'orderby' => $orderby, 
                        );  
                        $wp_query = new WP_Query($args);
                        $i = 0;
                        while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
                        $i++;
                        $events_excerpt = get_post_meta(get_the_ID(),'_cmb_events_excerpt', true);
                        $events_intended1 = get_post_meta(get_the_ID(),'_cmb_events_intended1', true);
                        $events_intended2 = get_post_meta(get_the_ID(),'_cmb_events_intended2', true);
                ?>
                <div class="row m0 events_item align-items-center d-flex">
                    <div class="col-lg-5">
                        <div class="events_img">
                            <img class="img-fluid" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="events_text">
                            <a href="<?php the_permalink();?>"><h4><?php the_title(); ?></h4></a>
                            <p><?php echo htmlspecialchars_decode(esc_attr($events_excerpt));?></p>
                            <div class="date">
                                <a href="<?php the_permalink();?>"><?php echo htmlspecialchars_decode(esc_attr($events_intended1));?></a>
                                <a href="<?php the_permalink();?>"><?php echo htmlspecialchars_decode(esc_attr($events_intended2));?></a>
                            </div>
                            <a class="main_btn" href="<?php the_permalink();?>"><?php echo htmlspecialchars_decode(esc_attr($text_btn));?></a>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php  return ob_get_clean();
}

add_shortcode('page_activities', 'page_activities_func');
function page_activities_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'text_btn' => '',
        'link' => '',
        'image' => '',
        'type' => '0'
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <?php if($type=='0'){ ?> 
    <div class="row activities_item align-items-end">
        <div class="col-lg-5">
            <img class="img-fluid" src="<?php echo esc_url($images[0]);?>" alt="">
        </div>
        <div class="col-lg-7">
            <div class="activities_text">
                <a href="<?php echo esc_url($link); ?>"><h4><?php echo htmlspecialchars_decode(esc_attr($title));?></h4></a>
                <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
                <a class="main_btn" href="<?php echo esc_url($link); ?>"><?php echo htmlspecialchars_decode(esc_attr($text_btn));?></a>
            </div>
        </div>
    </div>
    <?php } else { ?> 
    <div class="row activities_item right align-items-end">
        <div class="col-lg-7">
            <div class="activities_text">
                <a href="<?php echo esc_url($link); ?>"><h4><?php echo htmlspecialchars_decode(esc_attr($title));?></h4></a>
                <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
                <a class="main_btn" href="<?php echo esc_url($link); ?>"><?php echo htmlspecialchars_decode(esc_attr($text_btn));?></a>
            </div>
        </div>
        <div class="col-lg-5">
            <img class="img-fluid" src="<?php echo esc_url($images[0]);?>" alt="">
        </div>
    </div>
    <?php } ?> 
<?php  return ob_get_clean();
}

add_shortcode('get_in_touch_page_contact', 'get_in_touch_page_contact_func');
function get_in_touch_page_contact_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'location' => '',
        'call_us' => '',
        'number' => '',
        'email' => '',
        'sub_email' => '',
        'check_in' => '',
        'sub_check_in' => '',
        'check_out' => '',
        'sub_check_out' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
        <div class="col-lg-4 offset-lg-1">
            <div class="contact_details">
                <div class="r_title">
                    <h3><?php echo htmlspecialchars_decode(esc_attr($title));?></h3>
                </div>
                <div class="contact_d_item">
                    <p><?php echo htmlspecialchars_decode(esc_attr($location));?></p>
                </div>
                <div class="contact_d_item">
                    <h5><?php echo htmlspecialchars_decode(esc_attr($call_us));?> <a><?php echo htmlspecialchars_decode(esc_attr($number));?></a></h5>
                    <h5><?php echo htmlspecialchars_decode(esc_attr($email));?> <a><?php echo htmlspecialchars_decode(esc_attr($sub_email));?></a></h5>
                </div>
                <div class="contact_d_item">
                    <h5><?php echo htmlspecialchars_decode(esc_attr($check_in));?> <span><?php echo htmlspecialchars_decode(esc_attr($sub_check_in));?></span></h5>
                    <h5><?php echo htmlspecialchars_decode(esc_attr($check_out));?> <span><?php echo htmlspecialchars_decode(esc_attr($sub_check_out));?></span></h5>
                </div>
            </div>
        </div>
<?php  return ob_get_clean();
}


add_shortcode('map_page_contact', 'map_page_contact_func');
function map_page_contact_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'map_iframe' => '',
        'width' => '',
        'height' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
        <section class="map_area">
            <iframe src="<?php echo htmlspecialchars_decode(esc_attr($map_iframe));?>" width="<?php echo htmlspecialchars_decode(esc_attr($width));?>" height="<?php echo htmlspecialchars_decode(esc_attr($height));?>" frameborder="0" style="border:0" allowfullscreen></iframe>
        </section>
<?php  return ob_get_clean();
}

add_shortcode('menu_page_restaurant', 'menu_page_restaurant_func');
function menu_page_restaurant_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'price' => '',
    ), $atts));
    ob_start(); 
    ?> 
        <div class="menu_item d-flex justify-content-between align-items-center">
            <div class="item_text">
                <h5><?php echo htmlspecialchars_decode(esc_attr($title));?></h5>
                <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
            </div>
            <div class="price_text">
                <h4><?php echo htmlspecialchars_decode(esc_attr($price));?></h4>
            </div>
        </div>
<?php  return ob_get_clean();
}

add_shortcode('page_room_grid', 'page_room_grid_func');
function page_room_grid_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'unit' => '',
        'rental_period' => '',
        'text_btn' => '',
        'number' => '',
        'orderpost' => '',
        'orderby' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <section class="room_area p_100">
            <div class="container">
                <div class="left_title">
                    <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>
                    <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
                </div>
                <div class="row room_inner">
                    <?php 
                        $args = array(   
                            'post_type' => 'hb_room',   
                            'paged' => $paged,
                            'posts_per_page' => $number,
                            'order' => $orderpost,
                            'orderby' => $orderby, 
                        );  
                        $wp_query = new WP_Query($args);
                        $i = 0;
                        while ($wp_query -> have_posts()) : $wp_query -> the_post();
                        $room_excerpt = get_post_meta(get_the_ID(),'_cmb_room_excerpt', true);      
                    ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="room_item">
                            <div class="room_img">
                                <img class="img-fluid" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="">
                            </div>
                            <div class="room_text">
                                <a href="<?php the_permalink();?>"><h4><?php the_title(); ?></h4></a>
                                <p><?php echo htmlspecialchars_decode(esc_attr($room_excerpt));?></p>
                                <div class="room_bottom justify-content-between d-flex">
                                    <div class="left_text">
                                        <h5><span><?php echo htmlspecialchars_decode(esc_attr($unit));?></span><?php 
                                        $prices        = hb_room_get_selected_plan( get_the_ID() );
                                        $prices        = isset( $prices->prices ) ? $prices->prices : array();

                                        echo htmlspecialchars_decode(esc_attr($prices['1']));?></h5>
                                        <p><?php echo htmlspecialchars_decode(esc_attr($rental_period));?></p>
                                    </div>
                                    <div class="left_text">
                                        <a class="main_btn" href="<?php the_permalink();?>"><?php echo htmlspecialchars_decode(esc_attr($text_btn));?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
<?php  return ob_get_clean();
}

add_shortcode('page_room_list', 'page_room_list_func');
function page_room_list_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'facility' => '',
        'unit' => '',
        'rental_period' => '',
        'text_btn' => '',
        'number' => '',
        'orderpost' => '',
        'orderby' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <section class="room_list_area p_100">
            <div class="container">
                <div class="left_title">
                    <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>
                    <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
                </div>
                <div class="room_list_inner">
                    <?php 
                        $args = array(   
                            'post_type' => 'hb_room',   
                            'paged' => $paged,
                            'posts_per_page' => $number,
                            'order' => $orderpost,
                            'orderby' => $orderby, 
                        );  
                        $wp_query = new WP_Query($args);
                        $i = 0;
                        while ($wp_query -> have_posts()) : $wp_query -> the_post();
                        $room_excerpt = get_post_meta(get_the_ID(),'_cmb_room_excerpt', true);   
                        $room_facility = get_post_meta(get_the_ID(),'_cmb_room_facility', true);   
                    ?>
                    <div class="row room_list_item">
                        <div class="col-lg-4">
                            <div class="room_img">
                                <a href="#"><img class="img-fluid" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="room_text">
                                <a href="<?php the_permalink();?>"><h4><?php the_title(); ?></h4></a>
                                <p><?php echo htmlspecialchars_decode(esc_attr($room_excerpt));?></p>
                                <h5><?php echo htmlspecialchars_decode(esc_attr($facility));?></h5>
                                <h6><?php echo htmlspecialchars_decode(esc_attr($room_facility));?></h6>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="room_price">
                                <h4><span><?php echo htmlspecialchars_decode(esc_attr($unit));?></span><?php 
                                $prices        = hb_room_get_selected_plan( get_the_ID() );
                                $prices        = isset( $prices->prices ) ? $prices->prices : array();

                                echo htmlspecialchars_decode(esc_attr($prices['1']));?></h4>
                                <p><?php echo htmlspecialchars_decode(esc_attr($rental_period));?></p>
                                <a class="main_btn" href="<?php the_permalink();?>"><?php echo htmlspecialchars_decode(esc_attr($text_btn));?></a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                </div>
            </div>
        </section>
<?php  return ob_get_clean();
}



add_shortcode('page_header', 'page_header_func');
function page_header_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle1' => '',
        'subtitle2' => '',
        'image' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <section class="breadcrumb_area" style="background: url(<?php echo esc_url($images[0]);?>) no-repeat scroll center;
    background-size: cover;
    padding: 75px 0px;">
        <div class="container">
            <div class="breadcrumb_text">
                <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>
                <div class="link">
                    <a class="active" href="<?php echo esc_url(home_url()); ?>"><?php echo htmlspecialchars_decode(esc_attr($subtitle1));?></a>
                    <a><?php echo htmlspecialchars_decode(esc_attr($subtitle2));?></a>
                </div>
            </div>
        </div>
    </section>
<?php  return ob_get_clean();
}

