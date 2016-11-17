<?php
/*
	Template Name: Home Page
*/

// Custom Fields
$number_einsatz			= get_post_meta(11, 'number_einsatz', true);
$number_kraefte	= get_post_meta(11, 'number_kraefte', true);
$number_mitglieder		= get_post_meta(11, 'number_mitglieder', true);

get_header(); ?>
<!-- HERO -->
<section id="hero">
	<div class="hero-wrapper">
		<div class="hero-content">
			<h1>Planen. Entwerfen. Entwickeln.</h1>
			<h2>Arbeiten Sie mit mir.</h2>
			<div class="bounce">
				<a href="#page-intro" class="hero-chevron page-scroll"><i class="fa fa-chevron-down"></i></a>
			</div> <!-- bounce -->
		</div> <!-- hero-content -->
	</div> <!-- hero-wrapper -->
</section><!-- Hero -->

<!-- Page-Intro -->
<section id="page-intro">
	<div class="container">
		<div class="content-wrapper">
					<div class="content col-xs-12 col-sm-4" style="float: none">
						<div class="divider-primary"></div>
						<h3>Gemeinsam können wir
einzigartige, digitale
Projekte erschaffen</h3>
						<div class="divider-primary"></div>
					</div>
					<div class="col-xs-12 content col-sm-8" style="float: none">
							<p>
								Durch ein innovatives , sechsstufigen Prozess , werden wir Ihr Produkt so gut stellen Sie sicher, wie es geht.
Das Design und Build-Prozess wird uns Forschung helfen , zu erforschen und fein Ihr Produkt herstellt ,
angefangen von User Experience bis zur endgültigen visuellen Design und Branding , einschließlich aller
Vermögenswerte , Interaktionen und Bewegungen. <a href="#" class="link">Lesen Sie mehr über den Prozess hier.</a>
							</p>
					</div>
		</div><!-- content-wrapper -->
	</div><!-- container -->
</section><!-- page-intro -->

<!-- Service -->
<section id="service">
	<div class="container">
		<div class="content-wrapper">
			<div class="content">
				<div class="service-images">
					<div class="col-sm-3">
						<div class="service-card">
							<div class="service-card-content">
								<i class="fa fa-twitch"></i>
								<h4>Webseiten</h4>
							</div><!--service-card-content --->
						</div><!-- col-sm-3 -->
					</div><!-- service-card -->
					<div class="col-sm-3">
						<div class="service-card">
							<div class="service-card-content">
								<i class="fa fa-twitch"></i>
								<h4>Webseiten</h4>
							</div><!--service-card-content --->
						</div><!-- col-sm-3 -->
					</div><!-- service-card -->
					<div class="col-sm-3">
						<div class="service-card">
							<div class="service-card-content">
								<i class="fa fa-twitch"></i>
								<h4>Webseiten</h4>
							</div><!--service-card-content --->
						</div><!-- col-sm-3 -->
					</div><!-- service-card -->
					<div class="col-sm-3">
						<div class="service-card">
							<div class="service-card-content">
								<i class="fa fa-twitch"></i>
								<h4>Webseiten</h4>
							</div><!--service-card-content --->
						</div><!-- col-sm-3 -->
					</div><!-- service-card -->
				</div><!-- service-images -->
				<div class="divider-white"></div>
					<div class="single-service center-block">
						<p><i class="fa fa-youtube"></i></p>
						<h4 style="margin-left: 15px; margin-right: 15px;">Overlays</h4>
						<p><i class="fa fa-twitch"> </i></p>
					</div><!-- service-card -->
					<h5>und vieles mehr ...</h5>
			</div><!-- content -->
		</div><!-- content-wrapper -->
	</div><!-- container -->
</section><!-- service -->

<!-- page-info -->
<section id="page-info">
	<div class="container">
		<div class="content-wrapper">
			<div class="content">
				<p>
					In jedem Projekt , bemühe ich mich, einzigartig,
gezielte Wert für das Produkt hinzuzufügen.
Ich genieße gründlich die Arbeit, die ich tun und diese
Leidenschaft zeigt mit den Kunden in der Arbeit durch .
				</p>
			</div><!-- content -->
		</div><!-- content-wrapper -->
	</div><!-- container -->
</section><!-- page-info -->

<!-- Numbers -->
<section id="numbers">
	<div class="container">
		<div class="content-wrapper">
			<div class="content">
				<div class="col-sm-4">
					<h1>Zahlen</h1>
				</div>
				<div class="col-sm-4">
					<div class="number-card">
						<div class="number-card-content">
							<i class="fa fa-group"></i>
							<h3>Kunden</h3>
							<h2>4</h2>
						</div><!-- number-card-content -->
					</div><!-- number-card -->
				</div>
				<div class="col-sm-4">
					<div class="number-card">
						<div class="number-card-content">
							<i class="fa fa-gears"></i>
							<h3>Projekte</h3>
							<h2>10</h2>
						</div><!-- number-card-content -->
					</div><!-- number-card -->
				</div>
			</div><!-- content -->
		</div><!-- content-wrapper -->
	</div>
</section><!-- Numbers -->

<!-- IDEA -->
<section id="idea">
	<div class="container">
		<div class="content-wrapper">
			<div class="content">
				<i class="fa fa-lightbulb-o"></i>
				<h2>Eine Idee für einen Auftrag ?</h2>
				<div class="divider-primary"></div>
				<p>
					Wenn Sie eine Idee für ein Projekt haben , möchte ich alles über sie zu hören.
hestitate nicht in Kontakt zu treten .
Schießen Sie mir eine E-Mail oder füllen Sie das Formular auf
der Kontaktseite und lassen Sie uns diese Partei erhalten begonnen .
				</p>
				<a class="btn btn-primary" href="kevinschmitt/kontakt/">kontaktieren <i class="fa fa-send"></i></a>
			</div><!-- content -->
		</div><!-- content-wrapper -->
	</div><!-- container -->
</section><!-- idea -->

<?php get_footer();?>
