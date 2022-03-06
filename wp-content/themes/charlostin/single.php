<?php
/**
 * The Template for displaying all single posts
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
            <h2><?php the_title();?></h2>
        </div>
    </div>
</section>

<section class="main_blog_area p_100">
    <div class="container">
        <div class="row main_blog_inner">
            <div class="col-lg-8">
                <div class="single_blog_inner">
                    <div class="main_blog_item single_fixed">
                        <?php if ( has_post_thumbnail() ) { ?>
                        <div class="blog_img single_img"><img class="img-fluid" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>"  ></div>
                        <?php } ?>
                        <div class="blog_text">
                            <div class="blog_date justify-content-between d-flex">
                                <div class="cat_text">
                                    <ul class="list">
                                        <li><?php if(isset($charlostin_redux_demo['blog_by']) && $charlostin_redux_demo['blog_by'] != ''){?>
                                            <?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['blog_by']));?>
                                            <?php }else{?>
                                            <?php echo esc_html__( 'By : ', 'charlostin' );
                                            }
                                            ?> <?php the_author_posts_link(); ?></li>
                                        <li><a href="#"><?php comments_number( esc_html__('Comments: 0', 'charlostin'),
                                      esc_html__('Comment: 1', 'charlostin'), esc_html__('Comments: %', 'charlostin') ); ?></a></li>
                                      <li><a href=""><?php the_time(get_option( 'date_format' ));?></a></li>
                                    </ul>
                                </div>
                                <?php if ( is_sticky() )
                                               echo '<span class="featured-post">' . esc_html__( 'Sticky', 'charlostin' ) . '</span>';
                                               ?>
                            </div>

                            <?php the_content(); ?>
                            <?php wp_link_pages(); ?>
                            <div class="post-tag">
                            <?php echo get_the_tag_list( $before = '', $sep = '  ', $after = '', $id = 0 ); ?>
                            </div>
                            <div class="s_comment_list">
                                <?php comments_template();?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="right_sidebar_area">
                    <?php get_sidebar();?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endwhile; ?>

<?php
get_footer();
?>
    