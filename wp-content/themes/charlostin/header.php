<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php $charlostin_redux_demo = get_option('redux_demo'); ?>
<head>
    <!-- Meta Tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {
        ?>
    <link rel="shortcut icon" href="<?php if(isset($charlostin_redux_demo['favicon']['url'])){?><?php echo esc_url($charlostin_redux_demo['favicon']['url']); ?><?php }?>">
    <?php }?>
    <?php wp_head(); ?> 

</head>

<body <?php body_class(); ?>>

    <!-- start page-wrapper -->
<?php if(isset($charlostin_redux_demo['header_select']) && $charlostin_redux_demo['header_select']== '2'){?>

<header class="header_area main_header2">
    <div class="top_menu">
        <div class="container">
            <div class="justify-content-between d-flex">
                <div class="left_side">
                    <p><i class="<?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['icon_call_us']));?>"></i><?php if(isset($charlostin_redux_demo['call_us'])&& $charlostin_redux_demo['call_us'] !== ''){?>
                                <?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['call_us']));?>
                                <?php }else{?>
                                <?php echo esc_html__( 'Need help? Call us now :', 'charlostin' );
                                }
                                ?>  <a href="tel:18004567890"><?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['telephone_number']));?></a></p>
                </div>
                <div class="right_side">
                    <ul class="list">
                        <li><a href="#"><?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['option_1']));?></a></li>
                        <li><a href="#"><?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['option_2']));?></a></li>
                        <li><a href="#"><?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['option_3']));?></a></li>
                        <li><a href="#"><?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['option_4']));?></a></li>
                    </ul>
                    <select>
                        <option value="1"><?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['language_1']));?></option>
                        <option value="2"><?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['language_2']));?></option>
                        <option value="3"><?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['language_3']));?></option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="main_menu">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($charlostin_redux_demo['header_image2']['url']);?>"  ></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span> 
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php 
                            wp_nav_menu( 
                            array( 
                                'theme_location' => 'primary',
                                'container' => '',
                                'menu_class' => '', 
                                'menu_id' => '',
                                'menu'            => '',
                                'container_class' => '',
                                'container_id'    => '',
                                'echo'            => true,
                                 'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                 'walker'            => new charlostin_wp_bootstrap_navwalker(),
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'items_wrap'      => '<ul  class="nav navbar-nav menu_nav ml-auto  %2$s">%3$s</ul>',
                                'depth'           => 0,        
                                )
                            ); ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="search_icon"><a class="popup-with-zoom-anim" href="#test-search"><i class="<?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['search_icon']));?>"></i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>

<?php }elseif(isset($charlostin_redux_demo['header_select']) && $charlostin_redux_demo['header_select']== '3'){?>

<header class="header_area main_header2">
    <div class="top_menu black_tp_menu">
        <div class="container">
            <div class="justify-content-between d-flex">
                <div class="left_side">
                    <p><i class="<?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['icon_call_us']));?>"></i><?php if(isset($charlostin_redux_demo['call_us'])){?>
                                <?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['call_us']));?>
                                <?php }else{?>
                                <?php echo esc_html__( 'Need help? Call us now :', 'charlostin' );
                                }
                                ?>  <a href="tel:18004567890"><?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['telephone_number']));?></a></p>
                </div>
                <div class="right_side">
                    <ul class="list">
                        <li><a href="#"><?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['option_1']));?></a></li>
                        <li><a href="#"><?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['option_2']));?></a></li>
                        <li><a href="#"><?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['option_3']));?></a></li>
                        <li><a href="#"><?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['option_4']));?></a></li>
                    </ul>
                    <select>
                        <option value="1"><?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['language_1']));?></option>
                        <option value="2"><?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['language_2']));?></option>
                        <option value="3"><?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['language_3']));?></option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="main_menu">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($charlostin_redux_demo['header_image2']['url']);?>"  ></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span> 
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php 
                            wp_nav_menu( 
                            array( 
                                'theme_location' => 'primary',
                                'container' => '',
                                'menu_class' => '', 
                                'menu_id' => '',
                                'menu'            => '',
                                'container_class' => '',
                                'container_id'    => '',
                                'echo'            => true,
                                 'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                 'walker'            => new charlostin_wp_bootstrap_navwalker(),
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'items_wrap'      => '<ul  class="nav navbar-nav menu_nav ml-auto  %2$s">%3$s</ul>',
                                'depth'           => 0,        
                                )
                            ); ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="search_icon"><a class="popup-with-zoom-anim" href="#test-search"><i class="<?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['search_icon']));?>"></i></a></li>
                        <li class="book_now"><a href="#"><?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['header_button']));?></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>

<?php }elseif(isset($charlostin_redux_demo['header_select']) && $charlostin_redux_demo['header_select']== '4'){?>

<header class="header_area main_header3">
    <div class="main_menu">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($charlostin_redux_demo['header_image2']['url']);?>"  ></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span> 
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php 
                            wp_nav_menu( 
                            array( 
                                'theme_location' => 'primary',
                                'container' => '',
                                'menu_class' => '', 
                                'menu_id' => '',
                                'menu'            => '',
                                'container_class' => '',
                                'container_id'    => '',
                                'echo'            => true,
                                 'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                 'walker'            => new charlostin_wp_bootstrap_navwalker(),
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'items_wrap'      => '<ul  class="nav navbar-nav menu_nav ml-auto  %2$s">%3$s</ul>',
                                'depth'           => 0,        
                                )
                            ); ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="search_icon"><a class="popup-with-zoom-anim" href="#test-search"><i class="<?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['search_icon']));?>"></i></a></li>
                        <li class="book_now"><a href="#"><?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['header_button']));?></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>


<?php }else{ ?>

<header class="header_area">
    <div class="top_menu">
        <div class="container">
            <div class="justify-content-between d-flex">
                <div class="left_side">
                    <p><i class="<?php echo htmlspecialchars_decode(esc_attr($charlostin_redux_demo['icon_call_us']));?>"></i><?php if(isset($charlostin_redux_demo['call_us'])){?>
                                <?php echo htmlspecialchars_decode(esc_attr($charlostin_redux_demo['call_us']));?>
                                <?php }else{?>
                                <?php echo esc_html__( 'Need help? Call us now :', 'charlostin' );
                                }
                                ?>  <a href="tel:18004567890"><?php echo htmlspecialchars_decode(esc_attr($charlostin_redux_demo['telephone_number']));?></a></p>
                </div>
                <div class="right_side">
                    <ul class="list">
                        <li><a href="#"><?php echo htmlspecialchars_decode(esc_attr($charlostin_redux_demo['option_1']));?></a></li>
                        <li><a href="#"><?php echo htmlspecialchars_decode(esc_attr($charlostin_redux_demo['option_2']));?></a></li>
                        <li><a href="#"><?php echo htmlspecialchars_decode(esc_attr($charlostin_redux_demo['option_3']));?></a></li>
                        <li><a href="#"><?php echo htmlspecialchars_decode(esc_attr($charlostin_redux_demo['option_4']));?></a></li>
                    </ul>
                    <select>
                        <option value="1"><?php echo htmlspecialchars_decode(esc_attr($charlostin_redux_demo['language_1']));?></option>
                        <option value="2"><?php echo htmlspecialchars_decode(esc_attr($charlostin_redux_demo['language_2']));?></option>
                        <option value="3"><?php echo htmlspecialchars_decode(esc_attr($charlostin_redux_demo['language_3']));?></option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="main_menu">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo (get_template_directory_uri().'/assets/img/logo.png');?>"  ></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span> 
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php 
                            wp_nav_menu( 
                            array( 
                                'theme_location' => 'primary',
                                'container' => '',
                                'menu_class' => '', 
                                'menu_id' => '',
                                'menu'            => '',
                                'container_class' => '',
                                'container_id'    => '',
                                'echo'            => true,
                                 'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                 'walker'            => new charlostin_wp_bootstrap_navwalker(),
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'items_wrap'      => '<ul  class="nav navbar-nav menu_nav ml-auto  %2$s">%3$s</ul>',
                                'depth'           => 0,        
                                )
                            ); ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="search_icon"><a class="popup-with-zoom-anim" href="#test-search"><i class="<?php echo htmlspecialchars_decode(esc_attr($charlostin_redux_demo['search_icon']));?>"></i></a></li>
                        <li class="book_now"><a href="<?php echo htmlspecialchars_decode(esc_attr($charlostin_redux_demo['link_header_button']));?>"><?php echo htmlspecialchars_decode(esc_attr($charlostin_redux_demo['header_button']));?></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>

<?php } ?>