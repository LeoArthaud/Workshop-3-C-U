<?php

session_start();

require("Connexion.php");

$req = $bdd->prepare('UPDATE User SET nom = ?, prenom = ?, email = ?, promo = ?, infos = ? WHERE prenom = ?');
$req->execute(array(
		$_POST['nom'],
		$_POST['prenom'],
        $_POST['email'],
        $_POST['promo'],
        $_POST['infos'],
        $_SESSION['prenom']));

header('Location: ../index.php');

?>
