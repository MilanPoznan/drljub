<?php get_header(); ?>

<section class="contact js-background-imgtobg">
<div class="contact__bg-image js-background-imgtobg">
  <img src="<?php the_field('background_image'); ?>" alt="" class="js-image-imgtobg">
</div>
  <div class="contact__wrapper">
    <div class="contact__left content">
      <?php the_field('left_content') ?>
    </div>
    <div class="contact__right content">
      <?php the_field('right_content') ?>

    </div>
  </div>
</section>

<?php
include get_template_directory() . '/templates/map.php';
get_footer(); ?>
