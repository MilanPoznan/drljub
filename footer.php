<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Katarina
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
	<div class="footer">
		<div class="footer__menu-wrapper">

			<div class="footer__menu">
				<div class="footer__menu-title">
		            Meni
		        </div>
				<div class="footer__menu-items">
					<?php wp_nav_menu( array( 'theme_location' => 'footer_menu', 'container_class' => 'footer-menu'  ) ); ?>
				</div>
			</div>
			<div class="footer__kontakt">
				<div class="footer__menu-title">Kontakt</div>
		       <p> Mačvanska 14, Vračar</p>
		       <p> Mobilni: 065 444 33 54</p>
		       <p> Telefon: 011 308 52 96</p>
		        <p>Email: aesthetic@concept.rs</p>
				<div class="footer__socials">
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/img/instagram.svg" alt="">
					</a>
					<a href="https://www.facebook.com/drljubinkovic/?tsid=0.8322579001368962&source=result" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/img/face.svg" alt="">
					</a>
				</div>
		    </div>

		</div>


	    <div class="footer__contact">
			<h3 class="footer__novosti-tite">Novosti</h3>
	        <p>Budite obavesteni putem maila</p>
			<div class="footer_contact-form">
				<?php echo do_shortcode( '[contact-form-7 id="104" title="Newsletter"]' ); ?>

			</div>
	    </div>

	</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
