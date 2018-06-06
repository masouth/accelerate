<?php
/**
 * The template for displaying the about page
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<div id="primary" class="home-page hero-content">
  <h2>Accelerate is a strategy and ,arketing agency<br> located in the heart og NYC. Our goal is to build<br>
    businesses by making our clients visible and <br>
    making their customers smile.</p>
  </div>
		<div class="main-content" role="main">
<h4>our services</h4>
<p> We take pride in our clients and the content we create for them. <br>
  Here is a brief overview of our offered services.


			<?php while ( have_posts() ) : the_post(); ?>
        <?php query_posts('type=our_services'); ?>
        <?$image_1 = get_field("image_1");
        $size = "medium";
        $service = get_field('service');?>

				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->



	</div><!-- #primary -->
	<a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
<?php get_footer(); ?>
