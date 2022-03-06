<?php $charlostin_redux_demo = get_option('redux_demo');?> 
<footer class="footer_area">
    <div class="footer_widgets_area">
        <div class="container">
            <div class="row f_widget_inner">
                <div class="col-lg-3 col-sm-6">
                    <aside class="f_widgets about_widget">
                        <?php if ( is_active_sidebar( 'footer-area-1' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-area-1' ); ?>
                          <?php endif; ?>
                    </aside>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <aside class="f_widgets link_widget">
                        <?php if ( is_active_sidebar( 'footer-area-2' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-area-2' ); ?>
                          <?php endif; ?>
                    </aside>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <aside class="f_widgets contact_widget">
                        <?php if ( is_active_sidebar( 'footer-area-3' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-area-3' ); ?>
                          <?php endif; ?>
                    </aside>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <aside class="f_widgets news_widget">
                        <?php if ( is_active_sidebar( 'footer-area-4' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-area-4' ); ?>
                          <?php endif; ?>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_copyright">
        <div class="container">
            <div class="copyright_inner justify-content-between d-flex">
                <div class="left_side">
                    <p><?php if(isset($charlostin_redux_demo['footer_text']) && $charlostin_redux_demo['footer_text'] != ''){?>
                        <?php echo htmlspecialchars_decode(esc_attr($charlostin_redux_demo['footer_text'])); ?>
                        <?php }else{?>
                        <?php echo esc_html__( '© Copyright charlostin 2018. All right reserved.', 'charlostin' );
                        }
                        ?></p>
                </div>
                <div class="right_side ">
                    <a href="<?php echo htmlspecialchars_decode(esc_attr($charlostin_redux_demo['footer_link'])); ?> "><?php if(isset($charlostin_redux_demo['footer_button']) && $charlostin_redux_demo['footer_button'] != ''){?>
                        <?php echo htmlspecialchars_decode(esc_attr($charlostin_redux_demo['footer_button'])); ?>
                        <?php }else{?>
                        <?php echo esc_html__( 'Purchase Now', 'charlostin' );
                        }
                        ?></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="search_area zoom-anim-dialog mfp-hide" id="test-search">
    <div class="search_box_inner">
        <h3><?php echo esc_html__( 'Search', 'charlostin' );?></h3>
        <div class="input-group">
            <?php echo get_search_form(); ?>
            <span class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="icon icon-Search"></i></button>
            </span>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>