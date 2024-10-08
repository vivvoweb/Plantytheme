<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "wrapper" div and all content after.
 *
 * @package Neve
 * @since   1.0.0
 */

/**
 * Executes actions before main tag is closed.
 *
 * @since 1.0.4
 */
do_action( 'neve_before_primary_end' ); ?>

</main><!--/.neve-main-->

<?php

/**
 * Executes actions after main tag is closed.
 *
 * @since 1.0.4
 */
do_action( 'neve_after_primary' );

/**
 * Filters the content parts.
 *
 * @since 1.0.9
 *
 * @param bool   $status Whether the component should be displayed or not.
 * @param string $context The context name.
 */
if ( apply_filters( 'neve_filter_toggle_content_parts', false, 'footer' ) === true ) {

    /**
     * Executes actions before the footer was rendered.
     *
     * @since 1.0.0
     */
    do_action( 'neve_before_footer_hook' );

    

    /**
     * Executes actions after the footer was rendered.
     *
     * @since 1.0.0
     */
    do_action( 'neve_after_footer_hook' );
}
?>

</div><!--/.wrapper-->
<?php
if (has_nav_menu('footer-menu')) {
    wp_nav_menu(array(
        'theme_location' => 'footer-menu',
        'container' => 'div',
        'container_class' => 'footer-menu-container',
        'menu_class' => 'footer-menu',
    ));
}
?>

<?php
wp_footer();

/**
 * Executes actions before the body tag is closed.
 *
 * @since 2.11
 */
do_action( 'neve_body_end_before' );

?>
</body>

</html>
