


<?php query_posts('post_type= our_services'); ?>
<?php while ( have_posts() ) : the_post();
  $image_1 = get_field("image_1");
 $size = "full";
 $our_services = get_field('our_services');?>

 <article class="service">
 <aside class="service-sidebar">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <h4><?php echo $our_services; ?></h4>

       <?php the_excerpt(); ?>
   </aside>

  <div class="service-images">
    <a href="<?php the_permalink(); ?>">
  <?php if(image_1){
     echo wp_get_attachment_image($image_1, $size);
   }?>
 </a>
