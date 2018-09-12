<?php
session_start();

require ("Connexion.php");

$salt = "W0rksh0pe-3_M@achA/NiCoLAs\l'e-au/Y@aZiD";
$unHahedPass = $_POST['mdp'];
$unHahedPassPlusSalt = $salt . $unHahedPass;
$hashedPass = hash('sha512', $unHahedPassPlusSalt);
$req = $bdd->prepare("SELECT * FROM `User` WHERE email = (?) AND mdp = (?)");
$req->execute(array($_POST['email'], $_POST['mdp']));
$donnees = $req->fetch();

if (empty($donnees)) {
    /*echo "<script type='text/javascript'>document.location.replace('Connexion_membres_errone.php');</script>";*/
} else {
    $req = $bdd->prepare('SELECT id_user FROM `User` WHERE email = ?');
    $req->execute(array($_POST['email']));

    $donnees = $req->fetch();

    $_SESSION['id_user'] = $donnees[0];

    echo "<script type='text/javascript'>document.location.replace('../index.php');</script>";
}
?>
