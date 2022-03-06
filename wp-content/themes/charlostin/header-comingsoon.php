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