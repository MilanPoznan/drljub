<?php
/*
Template Name: Simple Page template
*/
 get_header(); ?>

<section class="simple-page">

  <div class="simple-page__wrapper">

    <div class="simple-page__image-wapper js-background-imgtobg">
      <img src="<?php the_field('o_nama_image'); ?>" alt="" class="js-image-imgtobg">
    </div>

    <div class="simple-page__content">
      <?php the_field('o_nama'); ?>
    </div>
  </div>


</section>


<?php get_footer(); ?>
