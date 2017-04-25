<?php /* Template Name: About */ ?>
<?php
/**
 * The template for displaying the about page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Fluida
 */


 get_header(); ?>

 	<div id="container" class="<?php echo fluida_get_layout_class(); ?>">

 		<main id="main" role="main" class="main">
 			<?php cryout_before_content_hook(); ?>

 		<div class="all-content">

 		</div>

 			<?php cryout_after_content_hook(); ?>
 		</main><!-- #main -->

 		<?php fluida_get_sidebar(); ?>

 	</div><!-- #container -->

 <?php get_footer();
