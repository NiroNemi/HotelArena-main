<?php
/*
 * Template Name: Blog Without Sidebar
 * Description: A Page Template with a Page Builder design.
 */
 $charlostin_redux_demo = get_option('redux_demo');
get_header(); ?>


<?php if(isset($charlostin_redux_demo['blog_image']['url']) && $charlostin_redux_demo['blog_image']['url'] != ''){?>
<section class="breadcrumb_area" style="    background: url(<?php echo esc_url($charlostin_redux_demo['blog_image']['url']);?>) no-repeat scroll center;
    background-size: cover;
    padding: 75px 0px;">
<?php }else{?>
<section class="breadcrumb_area">
<?php } ?>
    <div class="container">
        <div class="breadcrumb_text">
            <h2><?php if(isset($charlostin_redux_demo['blog_title']) && $charlostin_redux_demo['blog_title'] != ''){?>
            <?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['blog_title']));?>
            <?php }else{?>
            <?php echo esc_html__( 'Blog', 'charlostin' );
            }
            ?></h2>
            <div class="link">
                <a class="active" href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__( 'Home', 'charlostin' )?></a>
                <a href="#"><?php if(isset($charlostin_redux_demo['blog_title']) && $charlostin_redux_demo['blog_title'] != ''){?>
            <?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['blog_title']));?>
            <?php }else{?>
            <?php echo esc_html__( 'Blog', 'charlostin' );
            }
            ?></a>
            </div>
        </div>
    </div>
</section>
            <!-- End Intro Section -->
            <!-- Blog Post Section -->
<section class="blog_without_sidebar_area p_100">
            <div class="container">
                <div class="row blog_without_inner">
                    <?php $args = array(    
                                    'paged' => $paged,
                                    'post_type' => 'post',
                                    );
                                $wp_query = new WP_Query($args);
                                while (have_posts()): the_post();
                        ?>
                    <div class="col-lg-6">
                        <div class="blog_item_two">
                            <div class="blog_img">
                                <img class="img-fluid" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>"  >
                            </div>
                            <div class="blog_text">
                                <div class="date">
                                    <a><?php the_time(get_option( 'date_format' ));?></a>
                                </div>
                                <a href="<?php the_permalink();?>"><h4><?php the_title();?></h4></a>
                                <p><?php if(isset($charlostin_redux_demo['blog_excerpt'])){?>
                                    <?php echo esc_attr(charlostin_excerpt($charlostin_redux_demo['blog_excerpt'])); ?>
                                    <?php }else{?>
                                    <?php echo esc_attr(charlostin_excerpt(50)); 
                                    }
                                    ?></p>
                                <a class="main_btn" href="<?php the_permalink();?>"><?php if(isset($charlostin_redux_demo['read_more'])){?>
                                        <?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['read_more']));?>
                                        <?php }else{?>
                                        <?php echo esc_html__( 'READ MORE', 'charlostin' );
                                        }
                                        ?></a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
                <nav aria-label="Page navigation example" class="page_navigation">
                    <?php charlostin_pagination();?>
                </nav>
            </div>
        </section>
<?php
get_footer();
?>