<?php
/**
 * Displays footer site info
 *
 * @subpackage Business Consulting Lite
 * @since 1.0
 * @version 1.4
 */

?>

<div class="site-info py-4 text-center">
    <?php
        echo esc_html( get_theme_mod( 'business_consulting_lite_footer_text' ) );
        printf(
            /* translators: %s: Business Consulting WordPress Theme. */
            esc_html__( ' %s ', 'business-consulting-lite' ),
            '<a href="' . esc_attr__( 'https://www.ovationthemes.com/wordpress/free-consulting-wordpress-theme/', 'business-consulting-lite' ) . '"> Business Consulting WordPress Theme</a>'
        );
    ?>
</div>