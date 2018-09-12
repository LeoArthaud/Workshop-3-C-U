<?php

session_start();
unset($_SESSION['id_user']);

?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="CSS/Style.css">
    <title></title>
  </head>

  <body>
    <form class="form-connexion" action="Verif-connexion.php" method="post">
      <div class="logo-epsi-connexion">
        <img src="Ressources/Libaax-Sans-Fond.PNG" alt="Logo epsi">
      </div>

      <h1 class="h1-titre-connexion">Connexion</h1>

      <div class="form-group">
        <label for="label-input-email">Email</label>
        <input type="email" name="email" class="form-control" placeholder="nom@exemple.com" required>
      </div>

      <div class="form-group input-password">
        <label for="label-input-password">Mot de passe</label>
        <input type="password" name="password" class="form-control" placeholder="**********" required>
      </div>

      <button type="submit" class="btn btn-primary btn-lg btn-block">Valider</button>

      <p class="connexion-refuse">Connexion refusé. Identifiant ou mot de passe incorrecte.</p>

      <p class="lien-inscrpition">
        <a href="Creation-compte.php">Pas encore inscrit ? C'est par ici !</a>
      </p>
    </form>
  </body>
</html>
