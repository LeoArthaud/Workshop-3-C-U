<?php
if(isset($_POST['Sujet']) AND !empty($_POST['Sujet']) AND
isset($_POST['Contenu']) AND !empty($_POST['Contenu'])
){
    // Connexion à la base de données
    include('connexion.php');
    //TODO Check for duplicate codes
    //Il me faut le nom des tables de la BD pour pouvoir adapter la requete
    $req = $bdd->prepare("INSERT INTO Event (Sujet, Categorie, Contenu, Id_User_Workshop2_Utilisateur ) VALUES (?, ?, ?,?)");
    $req->execute(array(
        $_POST['Sujet'],
        $_POST['CategoriePage'],
        $_POST['Contenu'],
        $_POST['IdUserCurrent']));
}
//echo ( $_POST['Sujet']. " ".         $_POST['CategoriePage']. " ".        $_POST['Contenu']. " ".        $_POST['IdUserCurrent']);
header('Location: '.$_SERVER['HTTP_REFERER']);

?>
