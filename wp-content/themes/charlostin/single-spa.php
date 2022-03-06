<?php
/**
 * The Template for displaying all spa post-types
 */
 $charlostin_redux_demo = get_option('redux_demo');
get_header(); ?>

<?php 
    while (have_posts()): the_post();
?>

<?php if(isset($charlostin_redux_demo['blog_image']['url']) && $charlostin_redux_demo['blog_image']['url'] != ''){?>
<section class="breadcrumb_area" style="    background: url(<?php echo esc_url($charlostin_redux_demo['blog_image']['url']);?>) no-repeat scroll center;
    background-size: cover;
    padding: 75px 0px;">
<?php }else{?>
<section class="breadcrumb_area">
<?php } ?>
    <div class="container">
        <div class="breadcrumb_text">
            <h2><?php if(isset($charlostin_redux_demo['spa_title']) && $charlostin_redux_demo['spa_title'] != ''){?>
            <?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['spa_title']));?>
            <?php }else{?>
            <?php echo esc_html__( 'Spa & Relaxation', 'charlostin' );
            }
            ?></h2>
            <div class="link">
                <a class="active" href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__( 'Home', 'charlostin' )?></a>
                <a href="#"><?php if(isset($charlostin_redux_demo['spa_subtitle']) && $charlostin_redux_demo['spa_subtitle'] != ''){?>
            <?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['spa_subtitle']));?>
            <?php }else{?>
            <?php echo esc_html__( 'Spa & Relaxation', 'charlostin' );
            }
            ?></a>
            </div>
        </div>
    </div>
</section>

        <?php the_content(); ?>
        <?php wp_link_pages(); ?>
<section class="room_area feature_room p_100">
    <div class="container">
        <div class="main_title">
            <h2><?php if(isset($charlostin_redux_demo['packages_title']) && $charlostin_redux_demo['packages_title'] != ''){?>
                    <?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['packages_title']));?>
                    <?php }else{?>
                    <?php echo esc_html__( 'Our Featured Packages', 'charlostin' );
                    }
                    ?></h2>
            <p><?php if(isset($charlostin_redux_demo['packages_subtitle']) && $charlostin_redux_demo['packages_subtitle'] != ''){?>
                    <?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['packages_subtitle']));?>
                    <?php }else{?>
                    <?php echo esc_html__( 'Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line', 'charlostin' );
                    }
                    ?></p>
        </div>

<?php endwhile; ?>
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
                    <a href="<?php the_permalink();?>"><div class="room_img">
                        <img class="img-fluid" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>"  >
                    </div></a>
                    <?php } ?>
                    <div class="room_text">
                        <a href="<?php the_permalink();?>"><h4><?php the_title(); ?></h4></a>
                        <p><?php echo wp_specialchars_decode(esc_attr($spa_excerpt));?></p>
                        <div class="room_bottom justify-content-between d-flex align-items-center">
                            <div class="left_text">
                                <h6><?php echo wp_specialchars_decode(esc_attr($spa_price));?> <span><?php if(isset($charlostin_redux_demo['packages_setting']) && $charlostin_redux_demo['packages_setting'] != ''){?>
                    <?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['packages_setting']));?>
                    <?php }else{?>
                    <?php echo esc_html__( '/ setting', 'charlostin' );
                    }
                    ?></span></h6>
                            </div>
                            <div class="left_text">
                                <a class="main_btn" href="<?php the_permalink();?>"><?php if(isset($charlostin_redux_demo['spa_button']) && $charlostin_redux_demo['spa_button'] != ''){?>
                    <?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['spa_button']));?>
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
        <!--================End Room Area =================-->
        
        <!--================Spa Bg Area =================-->
<?php if(isset($charlostin_redux_demo['spa_image']['url']) && $charlostin_redux_demo['spa_image']['url'] != ''){?>
<section class="spa_bg_area" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.8) 100%), url(<?php echo esc_url($charlostin_redux_demo['spa_image']['url']);?>);
background-attachment: fixed;
background-position: center center;
background-size: cover;
padding: 150px 0px;">
<?php }else{ ?>
<section class="spa_bg_area">
<?php } ?>
            <div class="container">
                <div class="row spa_inner">
                    <div class="col-lg-8">
                        <h4><?php if(isset($charlostin_redux_demo['spa_desc']) && $charlostin_redux_demo['spa_desc'] != ''){?>
                    <?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['spa_desc']));?>
                    <?php }else{?>
                    <?php echo esc_html__( 'Get full relax and spa trement in our resort with best hands ...', 'charlostin' );
                    }
                    ?></h4>
                    </div>
                </div>
            </div>
        </section>

<?php
get_footer();
?>