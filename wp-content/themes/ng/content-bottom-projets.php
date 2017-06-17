<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage NG_NicolasGillespie
 * @since NG Nicolas Gillespie 1.0
 */

?>
<?php
	$link = get_post_meta($id, 'website', true);
	$wp_plugins = get_field('wp_plugins');
	$tache = get_field('tache');
	$logiciel = get_field('logiciel');
	$lang = get_field('language');
	$github = get_field('github');
	$github_link = get_field('github_link');

	$website_language = ICL_LANGUAGE_CODE;

	$website_title;
	$task_title;
	$lang_title;
	$software_title;
	$wp_title;
	$github_title;

	if($website_language == 'fr') {
		$website_title = 'Site web';
		$task_title = 'Tâches';
		$lang_title = 'Languages';
		$software_title = 'Logiciels';
		$wp_title = 'Plugin Wordpress';
		$github_title = 'Projets GitHub';
	} else if($website_language == 'en') {
		$website_title = 'Website';
		$task_title = 'Task';
		$lang_title = 'Languages';
		$software_title = 'Softwares';
		$wp_title = 'Wordpress plugins';
		$github_title = 'GitHub projects';
	}

	if($link != '') {
		$title = get_post_meta($id, 'website_title', true);
?>
<article id="link-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		// Post thumbnail.
		NG_NicolasGillespie_post_thumbnail();
	?>
	<header class="entry-header">
		<h3 class="entry-title"><?php echo $website_title; ?></h3>
	</header>
	<div class="entry-content">
		<?php icl_register_string('projets', 'website', 'Site web :'); ?> <a href="<?php echo $link?>" target="_blank" alt="<?php echo $title; ?>"><?php echo $title; ?></a>
	</div>
</article>
<?php
}


if($tache != '') {
?>
<article id="tache-<?php the_ID(); ?>" <?php post_class('half'); ?>>
	<?php
		// Post thumbnail.
		NG_NicolasGillespie_post_thumbnail();
	?>
	<header class="entry-header">
		<h3 class="entry-title"><?php echo $task_title; ?></h3>
	</header>
	<div class="entry-content">
		<?php
		echo $tache;
		?>
	</div>
</article>
<?php
}


if($logiciel != '') {
?>
<article id="logiciel-<?php the_ID(); ?>" <?php post_class('half'); ?>>
	<?php
		// Post thumbnail.
		NG_NicolasGillespie_post_thumbnail();
	?>
	<header class="entry-header">
		<h3 class="entry-title"><?php echo $software_title; ?></h3>
	</header>
	<div class="entry-content">
		<?php echo $logiciel; ?>
	</div>
</article>
<?php
}

if($lang != '') {

	if($wp_plugins != '') {
?>
	<article id="languages-<?php the_ID(); ?>" <?php post_class('half'); ?>>
<?php } else { ?>
		<div class="clearBoth spacingBottom2x"></div>
		<article id="languages-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php
	}

	NG_NicolasGillespie_post_thumbnail();
?>
	<header class="entry-header">
		<h3 class="entry-title"><?php echo $lang_title; ?></h3>
	</header>

	<div class="entry-content">
		<?php
			echo $lang;
		?>
	</div>
</article>

<?php
}


if($wp_plugins != '') {
?>

<article id="wp_plugins-<?php the_ID(); ?>" <?php post_class('half'); ?>>
	<?php
		// Post thumbnail.
		NG_NicolasGillespie_post_thumbnail();
	?>
	<header class="entry-header">
		<h3 class="entry-title"><?php echo $wp_title; ?></h3>
	</header>
	<div class="entry-content">
		<?php
			echo $wp_plugins;
		?>
	</div>
</article>

<?php
}

if($github_link != '') {
?>

<div class="clearBoth spacingBottom2x"></div>
<article id="languages-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		// Post thumbnail.
		NG_NicolasGillespie_post_thumbnail();
	?>
	<header class="entry-header">
		<h3 class="entry-title"><?php echo $github_title; ?></h3>
	</header>
	<div class="entry-content">
		<?php
			echo '<a href="' . $github_link . '" target="_blank">' . $github . '</a>';
		?>
	</div>
</article>

<?php
}
?>
<div class="clearBoth spacingBottom2x"></div>
