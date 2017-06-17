<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage NG_NicolasGillespie
 * @since NG Nicolas Gillespie 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

		$banner = get_field('banner_site');
		$banner_padding = get_field('banner_padding');

		if($banner != null && $banner_padding != null) {
		?>
			<main id="main" class="site-main" role="main" style="padding-top:<?php echo $banner_padding; ?>px;position:relative;">
				<img src="<?php echo $banner["url"]; ?>" alt="" class="bg" />
		<?php
		} else if($banner != null && $banner_padding == null) {
		?>
			<main id="main" class="site-main" role="main" style="position:relative;">
				<img src="<?php echo $banner["url"]; ?>" alt="" class="bg" />
		<?php
		} else {
		?>
			<main id="main" class="site-main" role="main">
		<?php
		}


			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */

			 get_template_part( 'content', get_post_format() );

			 if($post->post_type == 'projets' || $post->post_type == 'tool') {
				 get_template_part( 'content-bottom-' . $post->post_type, get_post_format() );
			 }

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Suivant', 'NG_NicolasGillespie' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Next post:', 'NG_NicolasGillespie' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Précédent', 'NG_NicolasGillespie' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous post:', 'NG_NicolasGillespie' ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );

			?>

		</main><!-- .site-main -->
<?php
		// End the loop.
		endwhile;
		?>

	</div><!-- .content-area -->

<?php get_footer(); ?>
