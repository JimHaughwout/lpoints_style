<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

        </div><!-- #main -->

        <footer id="colophon" class="site-footer" role="contentinfo">

            <?php get_sidebar( 'footer' ); ?>

            <div class="site-info">
                <?php do_action( 'twentyfourteen_credits' ); ?>
                <a href="<?php echo esc_url( __( 'http://www.lagrangianpoints.com/', 'twentyfourteen' ) ); ?>"><?php printf( __( 'Copyright © 2008-2014. Lagrangiang Points Blog. All rights reserved.', 'twentyfourteen' ), 'WordPress' ); ?></a>

            </div><!-- .site-info  JPH inserted copyright-->
        </footer><!-- #colophon -->
    </div><!-- #page -->

    <?php wp_footer(); ?>
</body>
</html>