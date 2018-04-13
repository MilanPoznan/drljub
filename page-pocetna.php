<?php
get_header();
?>
<section class="hero-mob mob">
<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/crop-hero.png" alt=""> -->
</section>
<section class="hero-des des">
<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/crop-hero.png" alt=""> -->
</section>
<section class="intro-section">
    <!-- <img class="bg-img" src="<?php echo get_template_directory_uri(); ?>/img/bg-intro.png" alt=""> -->
    <div class="intro-section__img">
        <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/intro-image.jpg" alt="Intro Image"> -->

    </div>
    <div class="intro-section__info">
        <h2 class="intro-section__title">Aesthetic Concept</h2>
        <div class="intro-section__description">
Aesthetic Concept  podrazumeva  personalizovan i sveobuhvatan pristup u nezi kože lica i tela. Eksluzivnost i efekat postižemo sinergijom tretmana medicinske kozmetike, aparaturnih metoda i estetskih procedura .
 Želimo da Vaš izgled bude negovan i da ističe prirodnu lepotu.


        </div>
    </div>
</section>
<section class="gallery">

    <?php

    // check if the repeater field has rows of data
    if( have_rows('gallery_repeater') ):

     	// loop through the rows of data
        while ( have_rows('gallery_repeater') ) : the_row();

            // display a sub field value
            ?>
            <div class="gallery__image-wrapper js-image-hover">
              <div class="gallery__image" style="background-image: url(<?php the_sub_field('gallery_image'); ?>)">

              </div>
              <div class="gallery__text">
                <?php echo the_sub_field('image_title') ?>
              </div>

            </div>

            <?php

        endwhile;

    else :

        // no rows found

    endif;

    ?>

</section>

<section class="concept">

    <div class="concept__image">
        <div class="concept__desc-wrapper">
            <h2>Analiza Kože Lica </h2>
            <div class="concept__desc">
                Analizu kože i izbor tretmana radi lekar. Pri analizi koristi se nemački aparat za merenje dubinske hidratacije kože  i uveličavajuća  kamera za detekciju promena i stanja kože kao sto su hipergmentacije, lučenje sebuma, mikrocirkulacija i bore u nastajanju.
            </div>
        </div>
        <div class="image-border-wrapper">
            <div class="concept__image">
                <div class="concept__img ">
                    <img src="<?php the_field('concept_img_1'); ?>" alt="">
                    <div class="purple-border-left">

                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="concept__image concept__image--second">
        <div class="concept__desc concept__desc--2">
            Posle tridesete, dobra nega znači isto koliko i lepota, jer jedna bez
            druge ne mogu.
            <br><div class="concept__extra-margin">

            </div>

            <p style="font-style: italic">Danijela Pantić</p>
            novinar
        </div>
        <div class="image-border-wrapper">
            <div class="concept__image">
                <div class="concept__img">
                    <img src="<?php the_field('concept_img_2'); ?>" alt="">
                    <div class="purple-border-right">

                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
<?php
include get_template_directory() . '/templates/map.php';

get_footer();
?>
