<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage NG_NicolasGillespie
 * @since NG Nicolas Gillespie 1.0
 */
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php

			if ( has_nav_menu( 'footer' ) ) : ?>
				<nav id="menu-footer-links" class="menu footer-menu" role="navigation">
					<?php
						// Social links navigation menu.
						wp_nav_menu( array(
							'container'=> false,
							'theme_location' => 'footer',
							'depth'          => 1,
							// 'link_before'    => '<span class="screen-reader-text">',
							// 'link_after'     => '</span>',
						) );
					?>
				</nav>
			<?php endif; ?>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
