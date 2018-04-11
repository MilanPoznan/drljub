<section class="content-component content">
  <?php if( have_rows('service_content') ): ?>

  <div class="content-component__wrapper">

    <div class="content-component__section-wrapper">
      <?php while ( have_rows('service_content') ) : the_row(); ?>

  <div class="content-component__section">

    <div class="content-component__content-section content">
      <?php the_sub_field('content'); ?>
    </div>

  </div>
<?php endwhile; ?>
<?php endif; ?>
    </div>


    <div class="content-component__side-image">

      <div class="content-component__image js-background-imgtobg">

        <img src="<?php echo the_field('side_image'); ?>" alt="" class="js-image-imgtobg">

      </div>

      <div class="content-component__image-link">
        <a href="<?php the_field('image_link'); ?>"><?php the_field('image_text'); ?></a>
      </div>
      <div class="content-component__image-text">

      </div>
      <div class="content-component purple-border-right">
      </div>
    </div>

  </div>

</section>
