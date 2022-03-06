<?php
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
            <h2 class="title-center"><?php printf( esc_html__( 'Tag Archives: %s', 'charlostin' ), single_tag_title( '', false ) ); ?></h2>
        </div>
    </div>
</section>
            <!-- End Intro Section -->
            <!-- Blog Post Section -->
<section class="main_blog_area p_100">
    <div class="container">
        <div class="row main_blog_inner">
            <div class="col-lg-8">
                <div class="blog_item_inner">
                    <?php 
                        while (have_posts()): the_post();
                    ?>
                    <article class="main_blog_item">

                        <?php if ( has_post_thumbnail() ) { ?>
                        <div class="blog_img"><img class="img-fluid" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>"  ></div>
                        <?php } ?>

                        <div class="blog_text">
                           

                            <div class="blog_date justify-content-between d-flex">

                                <div class="date_text">

                                    <a><?php the_time(get_option( 'date_format' ));?></a>

                                </div>

                                <div class="cat_text">

                                    <ul class="list">

                                        <li><?php if(isset($charlostin_redux_demo['blog_by']) && $charlostin_redux_demo['blog_by'] != ''){?>

                                            <?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['blog_by']));?>

                                            <?php }else{?>

                                            <?php echo esc_html__( 'By : ', 'charlostin' );

                                            }

                                            ?> <?php the_author_posts_link(); ?></li>

                                        <?php if(get_the_tag_list( $before = '', $sep = ', ', $after = '', $id = 0 )!= ''){?>
                                        <li><?php echo get_the_tag_list( $before = '', $sep = ', ', $after = '', $id = 0 ); ?></li>
                                        <?php }?>

                                        <li><a href="#"><?php comments_number( esc_html__(' Comments: 0', 'charlostin'), 

                                      esc_html__(' Comment: 1', 'charlostin'), esc_html__(' Comments: %', 'charlostin') ); ?></a></li>

                                    </ul>

                                </div>

                            </div>

                            <a href="<?php the_permalink();?>"><h4><?php the_title();?>
                                <?php if ( is_sticky() )
                               echo '<span class="featured-post">' . esc_html__( 'Sticky', 'charlostin' ) . '</span>';
                               ?>
                            </h4></a>
                             

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

                    </article>
                    <?php endwhile; ?>
                </div>
                <nav aria-label="Page navigation example" class="page_navigation">
                    <?php charlostin_pagination();?>
                </nav>
            </div>
            <div class="col-lg-4">
                <div class="right_sidebar_area">
                    <?php get_sidebar();?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>