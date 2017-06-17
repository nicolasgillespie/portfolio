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

 $instructions = get_post_meta($id, 'instructions', true);
 $github = get_post_meta($id, 'github', true);
 $github_txt = get_post_meta($id, 'github_txt', true);
 $demo = get_field('demo');

 $website_language = ICL_LANGUAGE_CODE;

 if($website_language == 'fr') {
   $demo_title = 'Exemple';
 } else if($website_language == 'en') {
   $demo_title = 'Example';
 }

 if($demo != '') {
?>
<article id="demo-<?php the_ID(); ?>" <?php post_class('half'); ?>>
 <?php
   // Post thumbnail.
   NG_NicolasGillespie_post_thumbnail();
 ?>
 <header class="entry-header">
   <h3 class="entry-title"><?php echo $demo_title; ?></h3>
 </header>
 <div class="entry-content">
   <a href="<?php echo $demo; ?>" target="_blank" alt=""><?php echo $demo; ?></a>
 </div>
</article>
<?php
 }

 if($github != '') {
?>
<article id="github-<?php the_ID(); ?>" <?php post_class('half'); ?>>
 <?php
   // Post thumbnail.
   NG_NicolasGillespie_post_thumbnail();
 ?>
 <header class="entry-header">
   <h3 class="entry-title">GitHub</h3>
 </header>
 <div class="entry-content">
   <a href="<?php echo $github; ?>" target="_blank" alt=""><?php echo $github; ?></a>
 </div>
</article>
<?php
 }

 if($instructions != '') {
?>
<div class="clearBoth spacingBottom2x"></div>
<article id="instructions-<?php the_ID(); ?>" <?php post_class(); ?>>
 <?php
	 // Post thumbnail.
	 NG_NicolasGillespie_post_thumbnail();
?>
 	<header class="entry-header">
	 	<h3 class="entry-title">Instructions</h3>
 	</header>
 	<div class="entry-content">
    <pre><?php
    $instructions = str_replace('<', '&lt;', $instructions);
    $instructions = str_replace('>', '&gt;', $instructions);

    echo $instructions; ?></pre>
 	</div>
</article>
<?php
 	}
?>
