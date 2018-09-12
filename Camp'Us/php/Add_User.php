<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Camp'Us</title>
    <meta name="description"
          content="Cardio is a free one page template made exclusively for Codrops by Luka Cvetinovic"/>
    <meta name="keywords" content="html template, css, free, one page, gym, fitness, web design"/>
    <meta name="author" content="Luka Cvetinovic for Codrops"/>
    <!-- Favicons (created with http://realfavicongenerator.net/)-->
    <link rel="apple-touch-icon" sizes="57x57" href="../img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../img/favicons/apple-touch-icon-60x60.png">
    <link rel="icon" type="image/png" href="../img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="../img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="..img/favicons/manifest.json">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="shortcut icon" href="../img/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#00a8ff">
    <meta name="msapplication-config" content="../img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Normalize -->
    <link rel="stylesheet" type="text/css" href="../css/normalize.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <!-- Owl -->
    <link rel="stylesheet" type="text/css" href="../css/owl.css">
    <!-- Animate.css -->
    <link rel="stylesheet" type="text/css" href="../css/animate.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.1.0/css/font-awesome.min.css">
    <!-- Elegant Icons -->
    <link rel="stylesheet" type="text/css" href="../fonts/eleganticons/et-icons.css">
    <!-- Main style -->
    <link rel="stylesheet" type="text/css" href="../css/cardio.css">
</head>
    
<body>
    
<div class="preloader">
    <img src="../img/loader.gif" alt="Preloader image">
</div>

    <div class="navInscription">
         <img src="../img/logoTest.png" alt="Preloader image" style="width: 175px; height: 75px;">
    </div>

    <header id="intro" style="background:url(../img/backBlanc.png); background-size: cover;">
    <div class="container">
        <div class="table">
            <div class="header-text">
                <div class="choix">
                    <div class="col-md-12 text-center">
                        
                        <h3 class="blue">INSCRIPTION</h3>
                        
                        <img src="../img/ornement.png">
                        
                        <div class="formInscription">
                        <form action="Add_User_POST.php" method="POST">
                            <p>
                                <label for="nom"> Nom <font color="#FDCE37">*</font> </label> <input type="text" name="nom" id="nom"> <br>
                                <label for="prenom"> Prénom <font color="#FDCE37">*</font> </label> <input type="text" name="prenom" id="prenom"> <br>
                                <label for="email"> Adresse e-mail <font color="#FDCE37">*</font> </label> <input type="text" name="email" id="email"> <br>
                                <label for="mdp"> Mot de passe <font color="#FDCE37">*</font> </label> <input type="password" name="mdp"> <br>
                                <label for="promo"> Promo <font color="#FDCE37">*</font> </label>
                                <select name="promo" id="promo">
                                    <option value="B1">B1</option>
                                    <option value="B2">B2</option>
                                    <option value="B3">B3</option>
                                    <option value="I4">I4</option>
                                    <option value="I5">I5</option>
                                </select> <br>
                                <label for="infos"> Présentez-vous </label><input type="text" name="infos" id="infos"
                                                             placeholder="centres d'intérêts, hobbies, etc... "> <br>
                            <input type="submit" class="btn btn-blue submit" value="C'EST PARTI !" style="margin-top: 30px;">
                            </p>
                        </form>
                        </div>
                        
                        
                    </div>
				</div>
			</div>
		</div>
        </div>
	</header>
      
    
<!-- Scripts -->
<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/wow.min.js"></script>
<script src="../js/typewriter.js"></script>
<script src="../js/jquery.onepagenav.js"></script>
<script src="../js/main.js"></script>    
    
</body>
</html>
