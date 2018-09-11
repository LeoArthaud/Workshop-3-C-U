<?php
if(isset($_POST['titre']) AND !empty($_POST['titre']) AND
isset($_POST['description']) AND !empty($_POST['description']) AND
isset($_POST['id_launcher']) AND !empty($_POST['id_launcher']) AND
isset($_POST['categorie']) AND !empty($_POST['categorie']) AND
isset($_POST['datev']) AND !empty($_POST['datev']) AND
isset($_POST['heure']) AND !empty($_POST['heure']) AND
isset($_POST['lieu']) AND !empty($_POST['lieu']) AND
isset($_POST['description']) AND !empty($_POST['description']))
{
    // Connexion à la base de données
    include('Connexion.php');
    //TODO Check for duplicate codes
    //Il me faut le nom des tables de la BD pour pouvoir adapter la requete
    $req = $bdd->prepare("INSERT INTO Event (titre, id_luncher, categorie, datev, heure, lieu, descritpion) VALUES (?, ?, ?, ?, ?, ?, ?,)");
    $req->execute(array(
        $_POST['titre'],
        $_POST['id_luncher'],
        $_POST['categorie'],
        $_POST['datev'],
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
