<?php
/*
Template Name: pip-template
*/
 get_header(); ?>

<section class="pip">

  <div class="pip__main-wrapper content">
    <h3 class="pip__title"> Pre i posle </h3>
    <div class="pip__wrapper">


      <?php if( have_rows('pre_i_posle') ): ?>

          <?php while ( have_rows('pre_i_posle') ) : the_row(); ?>
      <div class="pip__wrap-section">

        <div class="pip__img-wrapper">

          <div class="pip__pre pip__image-div js-background-imgtobg">
            <img src="<?php the_sub_field('slika_pre'); ?>" alt="" class="js-image-imgtobg">
          </div>
          <div class="pip__posle pip__image-div js-background-imgtobg ">
            <img src="<?php the_sub_field('slika_posle'); ?>" alt="" class="js-image-imgtobg">
          </div>
        </div>

      </div>


      <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>

</section>


<?php get_footer(); ?>
