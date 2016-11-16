<?php
/*
	Template Name: Kontakt
*/

get_header(); ?>

<!-- Process Intro -->
<section id="process-intro" class="full-height">
  <div class="container">
    <div class="content-wrapper">
      <div class="content">
          <div class="col-sm-4">
            <h2>Meine Projekte</h2>
            <div class="divider-primary"></div>
            <h5>Whatever your needs and goals may be,
do get in touch and we can find out if I
can help you take this forward. If you
would like to discuss your project or would j
ust like to say hello, don’t hestitate! Shoot me
a message on Twitter, send me an email
at info@paulvanoijen.com or drop your
thoughts in the contact form.</h5>
          </div><!-- col -->
          <div class="col-sm-6 col-sm-offset-2">
            <!-- KONTAKT -->
            <section id="contact" class="site-section">
              <div class="contact-form">
                <p class="contact-desc">Die mit * gekennzeichneten Felder müssen ausgefüllt sein!</p>
                <?php
      					if ( have_posts() ) {
      						while ( have_posts() ) {

      							the_post(); ?>

      							<?php the_content(); ?>

      						<?php }
      					}
      					?>
              </div><!-- contact-form -->
            </section><!-- contact -->
          </div><!-- col -->
      </div><!-- content -->
    </div><!-- content-wrapper -->
  </div><!-- container -->
</section><!-- process-intro -->

<?php get_footer();?>
