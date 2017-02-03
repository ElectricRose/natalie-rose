<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */

get_header(); ?>

<section class="home-page">
	<div class="front-content">
		<div class="content">
			<?php while ( have_posts() ): the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<div class="social-btns">
					<a href="https://twitter.com/ElectricRose4" class="soc-icon tw"></a>
					<a href="https://www.facebook.com/profile.php?id=100014850345193" class="soc-icon fb"></a>
					<a href="https://github.com/ElectricRose" class="soc-icon gt"></a>
					<a href="" class="soc-icon pn"></a>
					<a href="" class="soc-icon in"></a>
				</div>
				<a href="<?php echo site_url('/blog/'); ?>" class="btn">View My Blog</a>
			<?php endwhile; ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>
