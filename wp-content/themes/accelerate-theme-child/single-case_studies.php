<?php
/**
 * The template for displaying a single case study - and a comment to trigger a commit
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

  <div id="primary" class="site-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();
        $size = "full";
        $services = get_field('services');
        $client  = get_field('client');
        $link = get_field('site_link');
        $image_1 = get_field ('image_1');
        $image_2 = get_field ('image_2');
        $image_3 = get_field ('image_3');?>

   <article class="case-study">
   <aside class="case-study-sidebar">
          <h2><?php the_title(); ?></h2>
          <h4><?php echo $services; ?></h4>
          <h6>Client: <?php echo $client; ?></h6>

          <?php the_content(); ?>
          <p><strong><a href="<?php echo $link; ?>">Visit Live Site ›</a></strong></p>

    </aside>
    </article>
    <div class="case-study-images">
      <?php if(image_1){
         echo wp_get_attachment_image($image_1, $size);}?>
    </div>


<?php endwhile; ?>
  </div>
</div>

<?php get_footer(); ?>
