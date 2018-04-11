<?php

?>

<section class="hero-component">

    <div class="hero-component__wrapper-image js-background-imgtobg">
      <img src="<?php the_field('hero_service'); ?>" alt="" class="js-image-imgtobg">
      <div class="hero-component__content">
        <h1><?php echo the_title(); ?></h1>
        <div class="hero-component__next-title">
          <?php next_post_link('%link', '%title'); ?>
        </div>
        <div class="hero-component__cta">
          <?php next_post_link('%link', 'Pogledaj vise'); ?>
        </div>
      </div>

    </div>

    <div class="hero-component__overlay overlay"></div>

</section>
