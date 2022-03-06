<?php
/**
 * The Template for displaying all single posts
 */
 $charlostin_redux_demo = get_option('redux_demo');
get_header(); ?>

<?php 
    while (have_posts()): the_post();
    $events_time = get_post_meta(get_the_ID(),'_cmb_events_time', true);
    $events_subtime = get_post_meta(get_the_ID(),'_cmb_events_subtime', true);
    $events_location = get_post_meta(get_the_ID(),'_cmb_events_location', true);
    $events_sublocation = get_post_meta(get_the_ID(),'_cmb_events_sublocation', true);
    $events_schedule = get_post_meta(get_the_ID(),'_cmb_events_schedule', true);
    $events_subschedule = get_post_meta(get_the_ID(),'_cmb_events_subschedule', true);
    $events_image = get_post_meta(get_the_ID(),'_cmb_events_image', true);
?>


<?php if(isset($charlostin_redux_demo['events_image']['url']) && $charlostin_redux_demo['events_image']['url'] != ''){?>
<section class="breadcrumb_area" style="    background: url(<?php echo esc_url($charlostin_redux_demo['events_image']['url']);?>) no-repeat scroll center;
    background-size: cover;
    padding: 75px 0px;">
<?php }else{?>
<section class="breadcrumb_area">
<?php } ?>
            <div class="container">
                <div class="breadcrumb_text">
                    <h2><?php if(isset($charlostin_redux_demo['events_title']) && $charlostin_redux_demo['events_title'] != ''){?>
                    <?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['events_title']));?>
                    <?php }else{?>
                    <?php echo esc_html__( ' Events Details', 'charlostin' );
                    }
                    ?></h2>
                    <div class="link">
                        <a class="active" href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__( 'Home', 'charlostin' )?></a>
                        <a href="#"><?php if(isset($charlostin_redux_demo['events_title']) && $charlostin_redux_demo['events_title'] != ''){?>
                    <?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['events_title']));?>
                    <?php }else{?>
                    <?php echo esc_html__( ' Events Details', 'charlostin' );
                    }
                    ?></a>
                    </div>
                </div>
            </div>
        </section>
<section class="event_details_area p_100">
            <div class="container">
                <div class="row event_details_inner">
                    <div class="col-lg-9">
                        <div class="event_details_inner_text">
                            <img class="img-fluid" src="<?php echo wp_specialchars_decode(esc_attr($events_image));?>"  >
                            <div class="event_text">
                                <a href="<?php the_permalink();?>"><h3><?php the_title();?></h3></a>
                            <?php the_content(); ?>
                            <?php wp_link_pages(); ?>
                            </div>
                            <div class="s_comment_list">
                                <?php comments_template();?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="event_date_inner">
                            <div class="media">
                                <div class="d-flex">
                                    <i class="<?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['events_icon1']));?>"></i>
                                </div>
                                <div class="media-body">
                                    <h5><?php echo wp_specialchars_decode(esc_attr($events_time));?></h5>
                                    <p><?php echo wp_specialchars_decode(esc_attr($events_subtime));?></p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="d-flex">
                                    <i class="<?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['events_icon2']));?>"></i>
                                </div>
                                <div class="media-body">
                                    <h5><?php echo wp_specialchars_decode(esc_attr($events_location));?></h5>
                                    <p><?php echo wp_specialchars_decode(esc_attr($events_sublocation));?></p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="d-flex">
                                    <i class="<?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['events_icon3']));?>"></i>
                                </div>
                                <div class="media-body">
                                    <h5><?php echo wp_specialchars_decode(esc_attr($events_schedule));?></h5>
                                    <ul class="list">
                                        <?php echo wp_specialchars_decode(esc_attr($events_subschedule));?>
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php endwhile; ?>

<?php
get_footer();
?>
    