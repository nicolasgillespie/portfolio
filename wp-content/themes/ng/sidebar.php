<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage NG_NicolasGillespie
 * @since NG Nicolas Gillespie 1.0
 */

if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) || is_active_sidebar( 'sidebar-1' )  ) : ?>
	<div id="secondary" class="secondary">

		<?php if ( has_nav_menu( 'primary' ) ) : ?>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php
					$lang = ICL_LANGUAGE_CODE;
					$wpmlLang = icl_get_languages();
					$menuLink = '';
					$menuLang = '';

					if ($lang == 'fr') {
						$menuLink = $wpmlLang['en']['url'];
						$menuLang = 'English';
					} else {
						$menuLink = $wpmlLang['fr']['url'];
						$menuLang = 'Français';
					}

					// Primary navigation menu.
					wp_nav_menu(array(
						'menu_class'     => 'nav-menu',
						'theme_location' => 'primary',
						'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s<li><a href="' . $menuLink . '">' .  $menuLang . '</a></li></ul>'
					));
				?>
			</nav>
		<?php endif; ?>

		<?php if ( has_nav_menu( 'social' ) ) : ?>
			<nav id="social-navigation" class="social-navigation" role="navigation">
				<?php
					// Social links navigation menu.
					wp_nav_menu( array(
						'theme_location' => 'social',
						'depth'          => 1,
						'link_before'    => '<span class="screen-reader-text">',
						'link_after'     => '</span>',
					) );
				?>
			</nav>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
			<div id="widget-area" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</div><!-- .widget-area -->
		<?php endif; ?>
	</div>
<?php endif; ?>
