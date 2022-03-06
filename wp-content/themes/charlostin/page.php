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
        <div class="row main_blog_inner" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="col-lg-8">
                <div class="single_blog_inner">
                    <div class="main_blog_item">
                        <?php if ( has_post_thumbnail() ) { ?>
                        <div class="blog_img"><img class="img-fluid" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>"  ></div>
                        <?php } ?>
                        <div class="blog_text page_top">
                            <?php the_content(); ?>
                            <?php wp_link_pages( array(
                                'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'charlostin' ),
                                'after'       => '</div>',
                                'link_before' => '<span class="page-number">',
                                'link_after'  => '</span>',
                            ) ); ?>
                            <div class="s_comment_list">
                                 <?php           
                                    if ( comments_open() || get_comments_number() ) {
                                      comments_template();
                                    }
                                    ?>
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
    