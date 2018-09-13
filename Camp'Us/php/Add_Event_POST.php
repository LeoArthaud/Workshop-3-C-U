<?php

session_start();
require("Check_Session.php");
// Connexion à la base de données
include 'Connexion.php';

if (isset($_POST['titre']) AND !empty($_POST['titre']) AND
    isset($_POST['description']) AND !empty($_POST['description']) AND
    isset($_POST['datev']) AND !empty($_POST['datev']) AND
    isset($_POST['categorie']) AND !empty($_POST['categorie']) AND
    isset($_POST['heure']) AND !empty($_POST['heure']) AND
    isset($_POST['lieu']) AND !empty($_POST['lieu']) AND
    isset($_POST['description']) AND !empty($_POST['description'])) {

    //c'est l'insertion de la catégorlie dou délice :oui:

    $req = $bdd->prepare("INSERT INTO Event (titre, datev, categorie, heure, lieu, description) VALUES (?, ?, ?, ?, ?, ?)");
    $req->execute(array(
        $_POST['titre'],
        $_POST['datev'],
        $_POST['categorie'],
        $_POST['heure'],
        $_POST['lieu'],
        $_POST['description']));

    header('Location: ../index.php');
} else {
    // Redirection du visiteur vers la page
    header('../index.php');
}

?>
