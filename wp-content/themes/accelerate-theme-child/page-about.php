<?php
/**
 * The template for displaying the About Page
 *
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
  <p> Accelerate is a strategy and marketing agency located in the heart of NYC.<br>
    Our goal is to build businesses by making our clients visible and making their clients smile.</p>
</div>
<div class="main-content" role="main">
  <h3>Our Services</h3>
  <p> We take pride in our clients and the content we create for them.<br>
    Here's a brief overview of our offered services </p>

    <?php query_posts('posts_per_page=4&post_type=service'); ?>
    <?php while ( have_posts() ) : the_post();
			 $image_1 = get_field("image_1");
	     $size = "medium";
       $service = get_field('service');?>

       <article class="our-services">
       <aside class="our-services-sidebar">
              <h4><?php echo $service; ?></h4>

              <?php the_excerpt(); ?>
              <div class="our-service-images">
                <a href="<?php the_permalink(); ?>">
              <?php if(image_1){
                 echo wp_get_attachment_image($image_1, $size);}?>

             </a>
            </div>
          </article>

    <?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
