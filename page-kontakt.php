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
                <form role="form" class="clearfix">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label class="contact-header" for="contact-first-name">Ihr Vorname *</label>
                        <input type="text" class="form-control input-lg" id="contact-name" placeholder="Ihr Vorname?"></input>
                      </div><!-- form-group -->
                      <div class="form-group">
                        <label class="contact-header" for="contact-last-name">Ihr Nachname *</label>
                        <input type="text" class="form-control input-lg" id="contact-name" placeholder="Ihr Nachname?"></input>
                      </div><!-- form-group -->
                      <div class="form-group">
                        <label class="contact-header" for="contact-mail">Ihre Mailadresse *</label>
                        <input type="email" class="form-control input-lg" id="contact-email" placeholder="Ihre Mailadresse?"></input>
                      </div><!-- form-group -->
                    </div><!-- end col -->
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label class="contact-header" for="contact-msg">Ihre Nachricht</label>
                        <textarea class="form-control input-lg" id="contact-words" rows="5" placeholder="Schreiben Sie mir eine Nachricht!"></textarea>
                        <input type="submit" class="btn btn-contact" value="absenden" />
                      </div><!-- form-group -->
                    </div><!-- end col -->
                  </div><!-- row -->
                </form><!-- form -->
              </div><!-- contact-form -->
            </section><!-- contact -->
          </div><!-- col -->
      </div><!-- content -->
    </div><!-- content-wrapper -->
  </div><!-- container -->
</section><!-- process-intro -->

<?php get_footer();?>
