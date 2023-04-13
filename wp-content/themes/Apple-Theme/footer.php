<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
</main><!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->

<?php get_template_part('template-parts/footer/footer-widgets'); ?>





<footer class="site-footer" >

<div>

				

<?php if( function_exists('slbd_display_widgets') ) { echo slbd_display_widgets(); } ?>
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>