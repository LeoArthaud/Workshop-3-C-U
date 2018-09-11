<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Camp'Us</title>
	<meta name="description" content="Cardio is a free one page template made exclusively for Codrops by Luka Cvetinovic" />
	<meta name="keywords" content="html template, css, free, one page, gym, fitness, web design" />
	<meta name="author" content="Luka Cvetinovic for Codrops" />
	<!-- Favicons (created with http://realfavicongenerator.net/)-->
	<link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
	<link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="img/favicons/manifest.json">
	<link rel="shortcut icon" href="img/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#00a8ff">
	<meta name="msapplication-config" content="img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<!-- Normalize -->
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!-- Owl -->
	<link rel="stylesheet" type="text/css" href="css/owl.css">
	<!-- Animate.css -->
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.1.0/css/font-awesome.min.css">
	<!-- Elegant Icons -->
	<link rel="stylesheet" type="text/css" href="fonts/eleganticons/et-icons.css">
	<!-- Main style -->
	<link rel="stylesheet" type="text/css" href="css/cardio.css">
</head>

<body>
	<div class="preloader">
		<img src="img/loader.gif" alt="Preloader image">
	</div>
	<nav class="navbar">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><img src="img/logoTest.png" data-active-url="img/logoTest-Active.png" alt="" style="width: 210px; height: 56px;"></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right main-nav">
					<li><a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue">Se connecter</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	<header id="intro">
		<div class="container">
			<div class="table">
				<div class="header-text">
					<div class="row">
						<div class="col-md-12 text-center">
							<h1 class="white typed">Bienvenue sur Camp'Us Grenoble !</h1>
                            <span class="typed-cursor">|</span>
                            <h3 class="light white">Rencontre les gens de ton campus !</h3>
						</div>
					</div>
                    <div class="choix">
                        <div class="col-md-12 text-center">
                            <div class="bouton1">
					           <a href="#" data-toggle="modal" data-target="#modal1" class="btn2 btn-blue">Proposer une activité !</a>
                            </div>
                            <h4 class="light white"> - ou - </h4>
                            <div class="bouton1">
					           <a href="#" data-toggle="modal" data-target="#modal1" class="btn2 btn-blue">Rejoindre quelqu'un !</a>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</header>
	<section id="services" class="section section-padded">
		<div class="container">
			<div class="row text-center title">
				<h2>Rejoins des gens !</h2>
				<h4 class="light muted">Choisis l'activité de ton choix et découvre qui de ton campus veut faire de même !</h4>
			</div>
            <div class="categChoix">
                <div class="col-sm-12 text-center text-center-mobile">
                    <ul class="categ">
                        <div class="categBouton">
                            <li><i class="fas fa-football-ball"></i></li>
                        </div>
                        <div class="categBouton">
                            <li><i class="fas fa-football-ball"></i></li>
                        </div>
                        <div class="categBouton">
                            <li><i class="fas fa-football-ball"></i></li>
                        </div>
                        <div class="categBouton">
                            <li><i class="fas fa-football-ball"></i></li>
                        </div>
                        <div class="categBouton">
                            <li><i class="fas fa-football-ball"></i></li>
                        </div>
                        <div class="categBouton">
                            <li><i class="fas fa-football-ball"></i></li>
                        </div>
                        <div class="categBouton">
                            <li><i class="fas fa-football-ball"></i></li>
                        </div>
                        <div class="categBouton">
                            <li><i class="fas fa-football-ball"></i></li>
                        </div>
                        
                    </ul>
                </div>
            </div>    
		</div>
		<div class="cut"></div>
	</section>
	
	<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<h3 class="white">Connexion</h3>
				<form action="Connexion_User.php" class="popup-form">
					<input type="text" class="form-control form-white" placeholder="Adresse E-mail">
					<input type="text" class="form-control form-white" placeholder="Mot de passe">
                        <div class="inscription-line">
							<label for="squaredOne"><span>Toujours pas de compte ? <strong> <a href="Add_User.php"> S'inscrire </a></strong></span></label>
                        </div>
					<button type="submit" class="btn btn-submit">Se connecter</button>
				</form>
			</div>
		</div>
	</div>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-6 text-center-mobile">
					<h3 class="white">Reserve a Free Trial Class!</h3>
					<h5 class="light regular light-white">Shape your body and improve your health.</h5>
					<a href="#" class="btn btn-blue ripple trial-button">Start Free Trial</a>
				</div>
			</div>
			<div class="row bottom-footer text-center-mobile">
				<div class="col-sm-8">
					<p>&copy; 2018 All Rights Reserved. Powered by Team D-lice</p>
				</div>
				<div class="col-sm-4 text-right text-center-mobile">
					<ul class="social-footer">
						<li><i class="fa fa-facebook" style="font-size: 24px; color: #fff;"></i></li>
						<li><i class="fa fa-twitter" style="font-size: 24px; color: #fff;"></i></li>
						<li><i class="fa fa-google-plus" style="font-size: 24px; color: #fff;"></i></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- Holder for mobile navigation -->
	<div class="mobile-nav">
		<ul>
		</ul>
		<a href="#" class="close-link"><i class="arrow_up"></i></a>
	</div>
	<!-- Scripts -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/typewriter.js"></script>
	<script src="js/jquery.onepagenav.js"></script>
	<script src="js/main.js"></script>
</body>

</html>
