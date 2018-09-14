


<?php
session_start();
require("../Check_Session.php");
require("../Connexion.php");
?>




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
    <link rel="apple-touch-icon" sizes="57x57" href="../../img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../../img/favicons/apple-touch-icon-60x60.png">
    <link rel="icon" type="image/png" href="../../img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="../../img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="../../img/favicons/manifest.json">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="shortcut icon" href="../../img/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#00a8ff">
    <meta name="msapplication-config" content="../../img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Normalize -->
    <link rel="stylesheet" type="text/css" href="../../css/normalize.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
    <!-- Owl -->
    <link rel="stylesheet" type="text/css" href="../../css/owl.css">
    <!-- Animate.css -->
    <link rel="stylesheet" type="text/css" href="../../css/animate.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="../../fonts/font-awesome-4.1.0/css/font-awesome.min.css">
    <!-- Elegant Icons -->
    <link rel="stylesheet" type="text/css" href="../../fonts/eleganticons/et-icons.css">
    <!-- Main style -->
    <link rel="stylesheet" type="text/css" href="../../css/cardio.css">
</head>


<?php

	$ntm = $_SESSION['prenom'];

	$req = $bdd->prepare('SELECT nom, prenom, promo, email, infos FROM User WHERE prenom = ?');
	$req->execute(array($ntm));
	$donnees = $req->fetch();
 ?>

<body>
<div class="preloader">
    <img src="../../img/loader.gif" alt="Preloader image">
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
            <a class="navbar-brand" href="../../index.php"><img src="../../img/logoTest.png" data-active-url="../../img/logoTest-Active.png"
                                                  alt="" style="width: 180px; height: 60px;"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-nav user">
                <li><a href="#" data-toggle="modal" data-target="#modal2">
                    <i class="far fa-user"><h5 class="white" style="float:left;"><?php echo $_SESSION['prenom'] ?></h5></i>
                </a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>


    <div class="banniere">
        <div class="col-md-12 text-center ouioui">
            <h1 class="white light typed ouiouioui">Il est temps de se culturer un peu !</h1>
            <span class="typed-cursor">|</span>
        </div>
    </div>


	<section id="services" class="section section-padded">
		<div class="container">
			<div class="row text-center title">
				<h2>Rejoins les :</h2>
                <img src="../../img/ornement.png" style="padding-bottom: 20px;">
			</div>
            <div class="triCateg">

              <?php
              $req = $bdd->query("SELECT titre, id_event FROM Event WHERE categorie = 'culture' ");
              while ($contenu= $req->fetch()) {
                  ?>


          <div class="hexagon degrade admission">
                  <div class="triangle-top">
          </div>
          <div class="post">


              <div class="scrib">
              <img src="../../img/fleche1.png">
                  <p>
                      <strong> <a href="../Show_Event.php?id=<?php echo $contenu['id_event'];?>"><?php echo htmlspecialchars($contenu['titre']);?></strong></a><br>
                  </p>
              <img src="../../img/fleche2.png">
              </div>
              </div>
              <div class="triangle-bottom">
          </div>
          </div>
                  <?php
              }
              ?>




            </div>

        </div>
    </section>


<!--POPUP CONNEXION  -->

<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-popup">
            <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
            <h3 class="white">Connexion</h3>
            <form action="../Connexion_User.php" method='POST' class="popup-form">
                <input type="text" class="form-control form-white" name='email' placeholder="Adresse E-mail">
                <input type="text" class="form-control form-white" name='mdp' placeholder="Mot de passe">
                <div class="inscription-line">
                    <label for="squaredOne"><span>Toujours pas de compte ? <strong> <a href="../Add_User.php"><font color="#FDCE37">S'inscrire</font></a></strong></span></label>
                </div>
                <button type="submit" class="btn btn-submit">Se connecter</button>
            </form>
        </div>
    </div>
</div>

<!--POPUP PROFIL    -->

<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-popup">
            <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
            <div class="user2">
                <i class="far fa-user"><h5 class="white" style="float:left;"></h5></i>
                <h4 class="white"><?php echo $_SESSION['prenom'] ?> <?php echo $donnees['nom']; ?></h4>
            </div>
            <h5 class="white">
                Promo:
                <?php echo $donnees['promo']; ?> <br>
            </h5>
            <h5 class="white">
                Email:
                <?php echo $donnees['email']; ?> <br>
            </h5>
            <h5 class="white">
                A propos:
                <?php echo $donnees['infos']; ?> <br>
            </h5>

            <a href="#" data-toggle="modal" data-target="#modal4"><div class="user4">
                <i class="fas fa-pencil-alt"></i>
                <h5 class="white light">Modifier</h5>
            </div></a>

            <a href="../Session_Destroy.php"><div class="user3">
                <i class="fas fa-sign-out-alt"></i>
                <h5 class="white light">déconnexion</h5>
            </div></a>
        </div>
    </div>
</div>

<!--POPUP MODIF PROFIL    -->

<div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-popup">
            <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
            <div class="user2">
                <i class="far fa-user"><h5 class="white" style="float:left;"></h5></i>
            </div>

            <div class="formEvent">
            <form action="php/Data_Change.php" method="POST">

                <h5 class="white">
                Nom :
                    <input type="text" name="prenom" value="<?php echo $donnees['prenom']; ?>" required> <br>
                </h5>
                <h5 class="white">
                Prénom:
                    <input type="text" name="nom" value="<?php echo $donnees['nom']; ?>" required> <br>
                </h5>
                <h5 class="white">
                Promo :
                    <input type="text" name="promo" value="<?php echo $donnees['promo']; ?>" required> <br>
                </h5>
                <h5 class="white">
                A propos:
                    <input type="text" name="infos" value="<?php echo $donnees['infos']; ?>" required> <br>
                </h5>
                <h5 class="white">
                Contact :
                    <input type="text" name="email" value="<?php echo $donnees['email']; ?>" required> <br>
                </h5>
                <h5 class="white">
                    <input type="submit" value="Valider">
                </h5>
                </form>
            </div>


        </div>
    </div>
</div>


<!--POPUP EVENEMENT-->


 <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-popup" style="background:url(../../img/popupBlanc.png); padding: 70px 0px; ">
            <a href="#" class="close-link"><i class="blue icon_close_alt2"></i></a>
            <h2 class="blue">Ajouter un évenement</h2>
            <img src="../../img/ornement.png" style="padding-bottom: 20px;">


            <div class="formEvent">
            <form method='POST' action='../Add_Event_POST.php'>

            <label for="titre"> Titre </label><input type="text" name="titre" id="titre" placeholder="inscrivez-ici le titre de votre annonce"> <br>

            <label for="categorie"> Catégorie </label>
                    <select name="categorie" id="categorie">
                        <option value="voyager">Voyager</option>
                        <option value="loger">Loger</option>
                        <option value="restauration">Restauration</option>
                        <option value="sortir">Sortir</option>
                        <option value="culture">Culture</option>
                        <option value="sport">Sport</option>
                        <option value="bonsplans">Bons plans</option>
                    </select> <br>

            <label for="datev"> Date de l'évènement </label><input type="text" name="datev" id="datev" placeholder="jj/mm/aaaa"> <br>
            <label for="heure"> Heure </label><input type="text" name="heure" id="heure"> <br>
            <label for="lieu"> Lieu </label><input type="text" name="lieu" id="lieu"> <br>
            <label for="description"> Description </label><input type="text" name="description" id="description" placeholder="Parlez un peu de ce que vous comptez faire..."> <br>
            <input type="submit" value="GO !" class="bold goBouton">
        </form>
            </div>
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
<script src="../../js/jquery-1.11.1.min.js"></script>
<script src="../../js/owl.carousel.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/wow.min.js"></script>
<script src="../../js/typewriter.js"></script>
<script src="../../js/jquery.onepagenav.js"></script>
<script src="../../js/main.js"></script>
</body>

</html>
