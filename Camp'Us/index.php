
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Camp'Us</title>
    <meta name="description"
          content="Cardio is a free one page template made exclusively for Codrops by Luka Cvetinovic"/>
    <meta name="keywords" content="html template, css, free, one page, gym, fitness, web design"/>
    <meta name="author" content="Luka Cvetinovic for Codrops"/>
    <!-- Favicons (created with http://realfavicongenerator.net/)-->
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
    <link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="img/favicons/manifest.json">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
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
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="img/logoTest.png" data-active-url="img/logoTest-Active.png"
                                                  alt="" style="width: 180px; height: 60px;"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-nav user">
                <li><a href="">
                    <i class="far fa-user"><h5 class="white" style="float:left;">Nicolas Asri</h5></i>
                </a></li>
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
                        <h3 class="light white"><?php echo $_SESSION ?></h3>
                    </div>
                </div>
                <div class="choix">
                    <div class="col-md-12 text-center">
                        <div class="bouton1">
                            <a href="#" data-toggle="modal" data-target="#modal1" class="btn2 btn-blue">Proposer une activité !</a>
                        </div>
                        <h3 class="light white"> - ou - </h3>
                        <div class="bouton1">
                            <a href="#services" class="btn2 btn-blue">Rejoindre quelqu'un !</a>
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
                    <ul class="categ" id="choixCateg">
                        <li><a href="">
                            <i class="fas fa-luggage-cart" href=""><h4 class="muted">Voyage</h4></i>
                        </a></li>
                        <li><a href="">
                            <i class="far fa-building"><h4 class="muted">Hebergement</h4></i>
                        </a></li>
                        <li><a href="">
                            <i class="fas fa-beer"><h4 class="muted">Sortie</h4></i>
                        </a></li>
                        <li><a href="">
                            <i class="fas fa-cookie-bite"><h4 class="muted">Restauration</h4></i>
                        </a></li>
                        <li><a href="">
                            <i class="fas fa-book"><h4 class="muted">Culture</h4></i>
                        </a></li>
                    <li><a href="">
                            <i class="fas fa-bicycle"><h4 class="muted">Sport</h4></i>
                        </a></li>
                    <li><a href="">
                            <i class="fas fa-tag"><h4 class="muted">Bons plans</h4></i>
                        </a></li>
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
            <form action="php/Connexion_User.php" method='POST' class="popup-form">
                <input type="text" class="form-control form-white" name='email' placeholder="Adresse E-mail">
                <input type="text" class="form-control form-white" name='mdp' placeholder="Mot de passe">
                <div class="inscription-line">
                    <label for="squaredOne"><span>Toujours pas de compte ? <strong> <a href="php/Add_User.php"> S'inscrire </a></strong></span></label>
                </div>
                <button type="submit" class="btn btn-submit">Se connecter</button>
            </form>
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <div class="row">
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
