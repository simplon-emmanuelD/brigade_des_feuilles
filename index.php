<?php
	if (file_exists('cont_visite.txt')) {// si le ficher existe
		$compteur_f = fopen('cont_visite.txt', 'r+');
		// on l'ouvre en lecture seule
		$compte = fgets($compteur_f);
		// on récupère le chiffre du ficher dans la variable compte
	} else {// s'il n'existe pas
		$compteur_f = fopen('cont_visite.txt', 'a+');
		// on le créer
		$compte = 0;
		// on créer la variable compte
	}
	$compte++;
	// on ajoute 1 à la variable compte
	fseek($compteur_f, 0);
	// on supprime le contenu du ficher
	fputs($compteur_f, $compte);
	//pour le remplacer par le contenu de la variable compte
	fclose($compteur_f);
	// on ferme le ficher
?>
<!DOCTYPE html>
<html class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>La Brigade des feuilles</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,300,700,600,500' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" href="css/slicknav.css">
		<link rel="stylesheet" href="css/owl.theme.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/owl.transitions.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/responsive.css">
		<script src="js/vendor/modernizr-2.6.2.min.js"></script>
		<style type="text/css">
			.act {
				background-color: #9DEABA;
			}
			#headtext {
				background-color:rgba(0,0,0,0.5);
				border: solid 1px; border-radius: 10px;
				padding-bottom: 10px;
			}
		</style>
	</head>
	<body>
		<!-- header debut -->
		<section id="header">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="block-left">
							<nav class="navbar navbar-default" role="navigation">
								<div class="container-fluid">
									<!--navbar  -->
									<div class="navbar-header">
										<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
											<span class="sr-only"> Navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
										<div class="nav-logo">
											<a href="#"><img src="img/logo.png" alt="logo"></a>
										</div>
									</div>

									<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
										<ul class="nav navbar-nav">
											<li id="accueil" class="active">
												<a href="#">Accueil <span class="sr-only">(current)</span></a>
											</li>
											<li id="project">
												<a href="#">Présentation du projet</a>
											</li>
											<li id="galerie">
												<a href="#">Statistiques</a>
											</li>
											<li id="evenement">
												<a href="#">Evênement</a>
											</li>
										</ul>
									</div><!-- /.navbar-collapse -->
								</div><!-- /.container-fluid -->
							</nav>
						</div>
					</div><!-- .col-md-6 -->
					<div class="col-md-6">
						<div class="block-right">
							<div class="contact-area">
								<ul>
									<li>
										<i class="fa fa-phone-square">04.68.44.34.22</i>
									</li>
									<li>
										<i class="fa fa-envelope-o">brigadedesfeuilles@gmail.com</i>
									</li>
								</ul>
							</div>
						</div>
					</div><!-- .col-md-6 fermeture -->
				</div><!-- .row fermeture -->
			</div><!-- .container fermeture -->
		</section><!-- #heder fermeture -->
		<!-- Slider début
		============================================================== -->
		<div id ="accueill" >
			<section id="slider">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="block">
								<div class="slider-text-area">
									<div class="slider-text">
										<div class="col-xs-12 ">
											<h2 style="text-align:center; margin-bottom:20px;">Le Tri sélectif est un geste d'avenir</h2>
										</div>
										<div id="headtext" class="col-md-6 col-xs-12">
											<p class="sub-slider-text">
												Pourquoi les résultats sont si mauvais ?
											</p>
											<p class="slider-p">
												Le manque d'informations et quelques fois d'intérêt, ajouté à de nombreuses contraintes techniques, participe grandement à ces mauvais résultats.
												<br>
												Conscient de ce problème et motivé par les enjeux, notre collectif "La Brigade des Feuilles" a mené une étude approfondie pour détecter les causes qui influent négativement sur la décision de trier ses déchets.
											</p>
										</div>
										<!-- div col cx 6 -->
										<div class="col-xs-6 hidden-xs">
											<iframe width="560" height="315" src="https://www.youtube.com/embed/tkT9L71jEBI" frameborder="0" allowfullscreen></iframe>
										</div><!-- div col cx 6 -->
									</div>
								</div>
							</div>
						</div><!-- .col-md-12 fermeture -->
					</div><!-- .row fermeture -->
				</div><!-- .container fermeture -->
			</section><!-- #slider fermeture -->
		</div>
		<!-- Div Jquery -->
		<!-- contant-1 début
		===================================================== -->
		<div id="evenementt">
			<section id="contant-1">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="block-left">
								<div class="contant-1-text-area">
									<div class="contant-1-head">
										<h1>Nos actions dans Narbonne </h1>
									</div>
									<div class="contant-1-text">
										<h2>Evênement sur le tri sélectif Concours désign.</h2>
										<p>
											Booster lien social et le porter vers de nouveaux sommets : Une après-midi concours en lien avec l'INESS dont l'objectif est de proposer de nouvelles surfaces pour exprimer leur Art. Des créatifs de toute la communautée d'agglo laisseront libre cours à leur imagination sur le thème de l'écologie. Classées en plusieurs catégories allant du StreetArt jusqu'au Classicisme  en passant par le Futurisme, les modèles sélectionnés à l'issue du concours pourront être choisis par les particuliers pour personnaliser leurs poubelles de tri sélectif.
										</p>
										<button type="button" class="btn btn-default edit-button-2">
											Inscription
										</button>
									</div>
								</div>
							</div>
						</div><!-- .col-md-6 fermeture -->
						<div class="col-md-6">
							<div class="block-right">
								<div class="block-right-img">
									<img src="img/echantillon.jpg" alt="échantillon des possible">
								</div>
							</div>
						</div><!-- .col-md-6 fermeture -->
					</div><!-- .row fermeture -->
				</div><!-- .container fermeture -->
			</section><!-- #contant-1 fermeture -->
		</div>
		<!-- div id pour jquery -->
		<!-- Gallery début
		============================================================= -->
		<div id="galler">
			<section id="gallery">
				<div class="container" style="background-color: #FFFFFF;">
					<div class="row">
						<div class="col-md-12">
							<div class="block-top">
								<div class="gallery-area">
									<h1>Gallerie photo du notre projet</h1>
									<p>
										Voici une gallerie photo de notre premier prototype réalisé en 3D avec un logiciel de montage vidéo
									</p>
								</div>
							</div>
						</div><!-- .col-md-12 fermeture-->
					</div><!-- .row fermeture -->
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-6"><img src="img/stats1.png" alt="img">
							</div>
							<div class="col-md-6"><img src="img/stats3.png" alt="img">
							</div>
						</div>
					</div><!-- .col-md-12 fermeture -->
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-6"><img src="img/stats2.png" alt="img">
							</div>
							<div class="col-md-6"><img src="img/stats5.png" alt="img">
							</div>
						</div>
					</div><!-- .col-md-12 fermeture -->
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-6"><img src="img/stats4.png" alt="img">
							</div>
							<div class="col-md-6"><img src="img/stats6.png" alt="img">
							</div>
						</div>
					</div><!-- .col-md-12 fermeture -->
				</div><!-- .row fermeture -->
		</section><!-- #gallery fermeture -->
		</div> <!-- div id pour jquery -->
		<!-- Contant-2 début
		=============================================================== -->
		<div id="afair">
			<section id="contant-2">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="block-left">
								<div class="contant-2-img">
									<img src="img/mobile-phon-3.png" alt="img">
								</div>
							</div>
						</div><!-- .col-md-6 fermeture -->
						<div class="col-md-6">
							<div class="block-right">
								<div class="contant-2-text-area">
									<div class="contant-2-header">
										<h1>Les résultats de notre sondage</h1>
									</div>
									<div class="contant-2-text">
										<h2>Illustration graphique des résultats</h2>
										<p>prez image 1</p>
										<img src="" alt=""/>
										<p>prez image 2</p>
										<img src="" alt=""/>
										<p>prez image 3</p>
										<img src="" alt=""/>
										<p>prez image 4</p>
										<img src="" alt=""/>
										<p>prez image 5</p>
										<img src="" alt=""/>
										<p>prez image 6</p>
										<img src="" alt=""/>
										<button type="button" class="btn btn-default edit-button-3">
											Plus d'info
										</button>
									</div>
								</div>
							</div>
						</div><!-- .col-md-6 fermeture -->
					</div><!-- .row fermeture -->
				</div><!-- .container fermeture -->
			</section><!-- #contant-2 fermeture -->
		</div>
		<!-- div id pour jquery -->
		<!-- footer Start
		====================================================================== -->
		<section id="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="block">
							<div class="footer-contant">
								<h3>Pour nous suivre sur les réseaux sociaux</h3>
								<div class="social-icon">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-tumblr"></i></a>
									<a href="#"><i class="fa fa-google"></i></a>
								</div>
							</div>
						</div>
					</div><!-- col-md-12 -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- #footer -->
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/main.js"></script>

   <!-- test du Jqury !-->
   		<script>
			$("#accueil").click(function() {
				$("#evenementt").hide();
				$("#galler").hide();
				$("#afair").hide();
				$("#accueill").show("fast");

				$("#accueil").addClass("act");
				$("#galerie").removeClass("act");
				$("#evenement").removeClass("act");
				$("#project").removeClass("act");
			});
			$("#evenement").click(function() {
				$("#accueill").hide();
				$("#galler").hide();
				$("#afair").hide();
				$("#evenementt").show("fast");

				$("#accueil").removeClass("act");
				$("#galerie").removeClass("act");
				$("#project").removeClass("act");
				$("#evenement").addClass("act");
			});

			$("#galerie").click(function() {
				$("#accueill").hide();
				$("#evenementt").hide();
				$("#afair").hide();
				$("#galler").show("fast");

				$("#accueil").removeClass("act");
				$("#galerie").addClass("act");
				$("#project").removeClass("act");
				$("#evenement").removeClass("act");
			});
			$("#project").click(function() {
				$("#accueill").hide();
				$("#galler").hide();
				$("#evenementt").hide();
				$("#afair").show("fast");

				$("#accueil").removeClass("act");
				$("#galerie").removeClass("act");
				$("#evenement").removeClass("act");
				$("#project").addClass("act");
			});
		</script>
    </body>
</html>
