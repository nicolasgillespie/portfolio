<?php
	/**
	 * The template for displaying pages
	 *
	 * This is the template that displays all pages by default.
	 * Please note that this is the WordPress construct of pages and that
	 * other "pages" on your WordPress site will use a different template.
	 *
	 * @package WordPress
	 * @subpackage NG_NicolasGillespie
	 * @since NG Nicolas Gillespie 1.0
	 */

	get_header();?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
					<?php
						$type = 'tool';
						$args = array(
							'post_type' => $type,
							'post_status' => 'publish',
							'posts_per_page' => -1,
							'caller_get_posts'=> 1
						);

						$my_query = null;
						$my_query = new WP_Query($args);

						if( $my_query->have_posts() ) {
							while ($my_query->have_posts()) : $my_query->the_post();
								$excerpt = get_the_excerpt();
								$id = get_the_ID();
								$link = get_the_permalink();//get_post_meta($id, 'h1_link', true);
								$title = get_the_title();
					?>

					<article id="post-<?php echo $id; ?>" class="post-<?php echo $id; ?> page type-page status-publish hentry">
						<header class="entry-header">
							<h1 class="entry-title">
								<?php
									if($link == '') {
										echo $title;
									} else {
										echo '<a href="' . $link . '" title="' . $title . '">' . $title . '</a>';
									}
								?>
							</h1>
						</header>
						<div class="entry-content">
							<?php
								$logo = get_field('logo_site');

								if($logo != '') {
							?>
									<div class="logo_cat">
										<img src="<?php echo $logo['url']; ?>" style="max-height:120px;" alt="<?php echo $logo['alt']; ?>">
									</div>
							<?php
								}
							?>
							<p><?php echo $excerpt; ?></p>
						</div>
						<footer class="entry-footer">
							<?php
								$categories = get_the_category();
								$separator = ', ';
								$output = '<span class="cat-links">';

								if (!empty( $categories)) {
									foreach( $categories as $category ) {
										//$output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
										$output .= esc_html( $category->name ) . $separator;
									}
									echo trim( $output, $separator );
								}
								$output = '</span>';

							?>
						</footer>
						<!--p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"></a></p-->
					</article>
					<?php
							endwhile;
						}
						wp_reset_query();  // Restore global post data stomped by the_post().
					?>


		</main>
	</div>

<?php get_footer(); ?>
