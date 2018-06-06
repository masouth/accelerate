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
    making their customers smile.</h2>
</div>

<div class="main-content" role="main">
    <h4>our services</h4>
    <p> We take pride in our clients and the content we create for them. <br>
     Here is a brief overview of our offered services.</p>

  <?php query_posts('post_type=about'); ?>
  <?php while ( have_posts() ) : the_post();
    $size = "full";
    $title = get_field('title');
    $image = get_field ('image');?>
  
  <div class="about-images">
  <?php if(image_1){
     echo wp_get_attachment_image($image, $size);}?>
   </div>
  <? php endwhile; ?>


		</div><!-- .main-content -->
	</div><!-- #primary -->

	<a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
<?php get_footer(); ?>
