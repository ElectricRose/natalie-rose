<?php /* Template Name: About */ ?>
<?php
/**
 * The template for displaying the about page.
 *
 *
 * @package Fluida
 */


 get_header(); ?>

 	<div id="container" class="<?php echo fluida_get_layout_class(); ?>">


 		<div class="about-content">

      <div class="about-me">
          <div id="about-img">
            <img src="../wp-content/uploads/2017/04/natalierose-sun1.png" alt="Photo of Natalie Rose">
          </div>
          <div id="about-text">
              <h6><span>I'm</span> a WordPress & front-end developer currently living on beautiful Vancouver Island, Canada.</h6>
                <p>Tired of having other people as my boss, I embarked on <span>a</span> mission to break <span>free</span> of the rat race <span>and</span> create my own path to success.<br>
                As a busy 30-something millennial, <span>creative soul</span>, and outdoor enthusiast, I fell in love with the laptop life and writing code and have never looked back<span>!</span><br>
                <span>I</span> continue to <span>learn</span> and evolve <span>and</span> hope to <span>challenge</span> myself with web and UX design in <span>the</span> near <span>future.</span></p>
                <p><span>I love</span> to create dynamic, easy to use, and fully responsive websites that stand out among the crowd<span>.</span> <span>I build</span> websites from scratch and have experience editing and updating existing websites and dynamic web applications<span>.</span><br>
                Whether in a team or independently, <span>I</span>'m always in <span>search</span> of new projects and executing them to perfection<span>.</span></p>
                <p><span>I</span>'m in <span>love</span> with <span>this</span> amazing planet and strive to spend as much time as possible exploring the <span>wild</span> nooks <span>and</span> spectacular vistas nature has to offer. If I'm not online you can find me <span>wandering</span> the forests, climbing mountains, swimming in the ocean, and tubing down rivers.</p>
                <p>I also run a <span>lifestyle</span> blog about my adventures, my love of the outdoors, DIY projects, and essential oil recipes<span>.</span></p>
          </div>
    </div>

 		</div>

 			<?php cryout_after_content_hook(); ?>
 		</main><!-- #main -->

 		<?php fluida_get_sidebar(); ?>

 	</div><!-- #container -->

 <?php get_footer();
