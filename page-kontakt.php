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
            <h5>
              Wie auch immer Ihre Ideen oder Ziele sind schreiben Sie mir eine Nachricht
              und wir finden heraus ob wir Ihnen helfen können die Idee voran zu bringen.
              Wenn Sie die Idee besprechen wollen, schreiben Sie uns per E-Mail, Twitter oder
              nutzen Sie das Kontaktformular.
            </h5>
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
