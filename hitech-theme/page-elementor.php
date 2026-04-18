<?php
/**
 * Full-width page template for Elementor.
 * Header/footer can be overridden by Elementor Pro theme builder,
 * or fall back to the theme header/footer.
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
// If Elementor Pro header location is registered, use it; otherwise fall back to theme header
if ( class_exists( '\ElementorPro\Plugin' ) ) {
    do_action( 'elementor/theme/print_location', 'header' );
} else {
    get_header();
}
?>

<main id="main" class="elementor-full-width">
    <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
</main>

<?php
if ( class_exists( '\ElementorPro\Plugin' ) ) {
    do_action( 'elementor/theme/print_location', 'footer' );
} else {
    get_footer();
}
?>

<?php wp_footer(); ?>
</body>
</html>
