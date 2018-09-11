<?php

    session_start();
// Connexion à la base de données
    include('Connexion.php');

if(isset($_POST['titre']) AND !empty($_POST['titre']) AND
isset($_POST['description']) AND !empty($_POST['description']) AND
isset($_POST['datev']) AND !empty($_POST['datev']) AND
isset($_POST['categorie']) AND !empty($_POST['categorie']) AND 
isset($_POST['heure']) AND !empty($_POST['heure']) AND
isset($_POST['lieu']) AND !empty($_POST['lieu']) AND
isset($_POST['description']) AND !empty($_POST['description']))
{

    //c'est l'insertion de la catégorlie dou délice :oui:

/*    $id = $req->fetch();

    $js = empty($_POST['voyage']) ? 0 : 1;
    $php = empty($_POST['loger']) ? 0 : 1;
    $c = empty($_POST['restauration']) ? 0 : 1;
    $cpp = empty($_POST['sortir']) ? 0 : 1;
    $cSharp = empty($_POST['culture']) ? 0 : 1;
    $html = empty($_POST['sport']) ? 0 : 1;
    $css = empty($_POST['bonsplans']) ? 0 : 1;

    $req = $bdd->prepare('INSERT INTO categorie (voyage, loger, restauration, sortir, culture, sport, bonsplans) VALUES (?, ?, ?, ?, ?, ?, ?)');
   
   $req->execute(array($id[0], $js, $php, $c, $cpp, $cSharp, $html, $css, $sql, $phyton, $java, $oracle, $ruby, $secu, $reseaux, $ipv, $envsys));*/

    $req = $bdd->prepare("INSERT INTO Event (titre, datev, categorie, heure, lieu, description) VALUES (?, ?, ?, ?, ?, ?)");
    $req->execute(array(
        $_POST['titre'],
        $_POST['datev'],
        $_POST['categorie'],
        $_POST['heure'],
        $_POST['lieu'],
        $_POST['description']));

    header('../index.php');
}
else{
    // Redirection du visiteur vers la page
    header('../index.php');
}
/*echo ( $_POST['Sujet']. " ". $_POST['CategoriePage']. " ". $_POST['Contenu']. " ". $_POST['IdUserCurrent']);
header('Location: '.$_SERVER['HTTP_REFERER']);*/

?>
