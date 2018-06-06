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

<div id="about-page" class="home-page hero-content">
  <h2>Accelerate is a strategy and marketing agency<br> located in the heart of NYC. Our goal is to build<br>
    businesses by making our clients visible and <br>
    making their customers smile.</h2>
</div>

<div class="main-content" role="main">
    <h4>our services</h4>
    <p> We take pride in our clients and the content we create for them. <br>
     Here is a brief overview of our offered services.</p>
</div>

<div class="acf">
  <?php query_posts('post_type=about'); ?>
  <?php while ( have_posts() ) : the_post();
    $size = "medium";
    $title = get_field('title');
    $image = get_field ('image');?>

    <article class="about">
    <aside class="about-sidebar">
           <h2><?php the_title(); ?></h2>
           <?php the_content(); ?>


</aside>
</article>

  <?php if(image_1){
     echo wp_get_attachment_image($image, $size);}?>

  <?php endwhile; ?>
</div>
<div class="interested">
<h3> Interested in working with us?</h3>
<a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>


</div>
<?php get_footer(); ?>
