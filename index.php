<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package KS_landing_page
 */

get_header(); ?>

<!-- Process Intro -->
<section id="process-intro">
	<div class="container">
		<div class="content-wrapper">
			<div class="content">
					<div class="col-sm-3">
						<h2>Meine Projekte</h2>
						<div class="divider-primary"></div>
						<h5>Hier sind einige meiner Arbeiten.
Machen Sie sich ein Bild davon.</h5>
					</div><!-- col -->
					<div class="col-sm-6 col-sm-offset-3">
						<p>
							Here’s a small sample of the things I’ve worked on so far.
Think your idea would fit this line-up? Don’t hestitate to get in touch.
We can work together to explore your possibilities and craft an outstanding digital product.
						</p>
					</div><!-- col -->
			</div><!-- content -->
		</div><!-- content-wrapper -->
	</div><!-- container -->
</section><!-- process-intro -->

<!-- AKTUELLES CONTENT -->
<div class="blog-content">
	<div class="container">
			<div class="row" id="primary">

			<main id="content" class="col-sm-12" role="main">

			<?php
			if ( have_posts() ) :

				if ( is_home() && ! is_front_page() ) : ?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>

				<?php
				endif;

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );

				endwhile;

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

			</main><!-- content --->

		</div><!-- primary -->
	</div><!-- container -->
</div><!-- blog-content -->

<?php
get_footer();
