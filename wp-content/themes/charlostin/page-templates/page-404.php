<?php
/*
 * Template Name: Page 404
 * Description: A Page Template with a Page Builder design.
 */
 $charlostin_redux_demo = get_option('redux_demo');
get_header('comingsoon'); ?> 

    <section class="error_area align-items-center d-flex">
      <div class="container">
        <div class="error_text">
          <h3><?php echo esc_html__( '404', 'charlostin' );?></h3>
          <h4><?php if(isset($charlostin_redux_demo['404_subtitle']) && $charlostin_redux_demo['404_subtitle'] != ''){?>
                <?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['404_subtitle']));?>
                <?php }else{?>
                <?php echo esc_html__( 'Oops! That page can’t be found', 'charlostin' );
                }?></h4>
          <p><?php if(isset($charlostin_redux_demo['404_desc']) && $charlostin_redux_demo['404_desc'] != ''){?>
                <?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['404_desc']));?>
                <?php }else{?>
                <?php echo esc_html__( 'Sorry, but the page you are looking for does not existing', 'charlostin' );
                }
                ?></p>
          <a class="main_btn" href="<?php echo esc_url(home_url('/')); ?>"><?php if(isset($charlostin_redux_demo['404_text']) && $charlostin_redux_demo['404_text'] != ''){?>
                <?php echo wp_specialchars_decode(esc_attr($charlostin_redux_demo['404_text']));?>
                <?php }else{?>
                <?php echo esc_html__( 'Go to Home Page', 'charlostin' );
                }?></a>
        </div>
      </div>
    </section>
  <?php get_footer(); ?>
