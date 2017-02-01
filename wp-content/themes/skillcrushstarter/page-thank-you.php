<?php
/**
 * The template for displaying thank you page
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */

get_header(); ?>

<section class="thank-page">
	<div class="thank-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<article class="post-entry">
				<?php the_content(); ?>
			</article>
		<?php endwhile; ?>
	</div>
</section>
