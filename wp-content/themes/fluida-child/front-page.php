<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays the home page by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 *
 * @package Fluida
 */
if ( is_page_template() ) {
	load_template( get_page_template() );
	return true;
}

get_header();

function fluida_lp_layoutclass () {
	$lp = cryout_get_option ('fluida_landingpage');
	if ( $lp ) {
		echo 'fluida-landing-page one-column';
	} else {
		echo fluida_get_layout_class();
	}
} // fluida_lp_layoutclass()
?>

<div id="container" class=" <?php fluida_lp_layoutclass() ?>">
	<main id="main" role="main" class="main">
	<?php
	cryout_before_content_hook();

	$fluida_landingpage = cryout_get_option ('fluida_landingpage');

	if ( $fluida_landingpage ) {
		fluida_lpslider();
		fluida_lpblocks();
		fluida_lptext('one');
		fluida_lpboxes(1);
		fluida_lptext('two');
		fluida_lpboxes(2);
		fluida_lptext('three');
		fluida_lpindex();
		fluida_lptext('four');
	} else {
		fluida_lpindex();
	}

    cryout_after_content_hook();
	?>

  <div class="front-work">
      <h3>Welcome! My name is Natalie Rose.</h3>
      <p>I'm a freelance front-end developer based on beautiful Vancouver Island, Canada.<br>
      I enjoy building websites for blogs and small businesses.<br>
      I am experienced in responsive design and specialize in developing custom WordPress themes.<br>

      <p>Websites are essential for small businesses these days, especially mobile responsive sites.<br>
      If you are an individual with ideas and inspiration to share, there is no better way to reach people around the world than with your own website or blog.<br>
      You want a website that is unique to you or your business, so you stand out from the crowd. You want a website that is user-friendly and easily conveys the information you need to share. But if you don’t know where to start, and you don’t want to go at it alone, I'm here to help!</p>
        <div id="work-more">
          <p>Hire Me</p>
        </div>
  </div>

  <div class="front-about">
    <div id="front-about-img">
      <img src="wp-content/uploads/2017/04/natalierose-about-img2.png" alt="Photo of Natalie Rose">
    </div>
      <div id="front-about-text">
        <h3>About Me</h3>
          <p>I'm a WordPress & front-end developer currently living on beautiful Vancouver Island, Canada. Tired of having other people as my boss, I embarked on a mission to break free of the rat race and create my own path to success. As a busy 30-something millennial, creative soul, and outdoor enthusiast, I fell in love with writing code and the laptop life and have never looked back! I continue to learn and hope to challenge web and UX design in the near future. I love to create dynamic, easy to use, and fully responsive websites that stand out among the crowd. I build websites from scratch and have experience editing and updating existing websites and dynamic web applications. Whether in a team or independently, I'm always in search of new projects and executing them to perfection.
          <div id="about-more">
            <p>read more > </p>
          </div>
          </div>
  </div>


	</main><!-- #main -->
	<?php if ( ! $fluida_landingpage ) { fluida_get_sidebar(); } ?>
</div><!-- #container -->

<?php get_footer();
