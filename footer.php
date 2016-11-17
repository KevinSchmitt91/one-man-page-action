<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package KS_landing_page
 */

?>

	</div><!-- #content -->

	<!-- FOOTER -->
	<footer>
		<div class="container">
				<div class="col-sm-4">
					<div class="social-links">
						<a href="http://facebook.com/kevin.schmitt.16" target="_blank"><i class="fa fa-facebook"></i></a>
						<a href="http://twitter.com/kevinschmitt91" target="_blank"><i class="fa fa-twitter"></i></a>
						<a href="https://beam.pro/SgtAdrael" target="_blank"><i class="fa fa-twitch"></i></a>
						<a href="https://www.youtube.com/channel/UCwuOyj8iCjsnrg6bxDpxifQ" target="_blank"><i class="fa fa-youtube"></i></a>
					</div><!-- social-links -->
				</div>
				<div class="col-sm-4">
					<div class="important-links">
						<a href="/kevinschmitt/impressum">Impressum</a>
						<a href="/kevinschmitt/datenschutz">Datenschutz</a>
						<a href="/kevinschmitt/kontakt">Kontakt</a>
					</div><!-- important-links -->
				</div>
				<div class="col-sm-4">
					<p><i class="fa fa-copyright"></i> 2016 by Kevin Schmitt</p>
				</div>
		</div><!-- container -->
	</footer><!-- footer -->

	<a class="back-to-top page-scroll" href="#page-header"><i class="fa fa-chevron-up"></i></a>

	<!-- BOOTSTRAP CORE JAVASCRIPT -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory')?>/assets/js/jquery-2.1.4.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory')?>/assets/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory')?>/assets/js/jquery.easing.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory')?>/assets/js/main.js"></script>

<?php wp_footer(); ?>

</body>
</html>
