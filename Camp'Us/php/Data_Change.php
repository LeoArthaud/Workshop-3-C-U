<?php

session_start();
require("Connexion.php");
require("Check_session.php");

$req = $bdd ("UPDATE User SET nom = ?, prenom = ?, email = ?, promo = ?, infos = ? WHERE id_user = ?");
    $req->execute(array(
        $_POST['nom'],
        $_POST['prenom'],
        $_POST['email'],
        $_POST['promo'],
        $_POST['infos']));

    header('Location: ../Show_User.php');

?>