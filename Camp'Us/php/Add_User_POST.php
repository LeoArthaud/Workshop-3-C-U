<?php
if(isset($_POST['Mail']) AND !empty($_POST['Mail']) AND
isset($_POST['Mdp']) AND !empty($_POST['Mdp']) AND
isset($_POST['Nom']) AND !empty($_POST['Nom']) AND
isset($_POST['Prenom']) AND !empty($_POST['Prenom']) AND
isset($_POST['Telephone']) AND !empty($_POST['Telephone']) AND
isset($_POST['Campus']) AND !empty($_POST['Campus']) AND
isset($_POST['Annee']) AND !empty($_POST['Annee']) AND
($_POST['Mdp']==$_POST['Mdp2'])
){

    // Connexion à la base de données
    //mot de passe proteger par un hashedPass
    include('../connexion.php');
    //https://secure.php.net/manual/en/function.password-hash.php
    $salt = "W0rksh0pe-3_M@achA/NiCoLAs\l'e-au/Y@aZiD'";
    $unHahedPass = $_POST['Mdp'];
    $unHahedPassPlusSalt = $salt . $unHahedPass;
    //$hashedPass = hash('sha512', $unHahedPassPlusSalt);


    /*$options = [
        'cost' => 10,
    ];
    $hashedPass = password_hash( $unHahedPassPlusSalt, PASSWORD_BCRYPT, $options);*/
    $hashedPass = hash('sha512', $unHahedPassPlusSalt);

    $req = $bdd->prepare("INSERT INTO Workshop2_Utilisateur (Mail, Mdp, Nom, Prenom, Telephone, Campus, Annee) VALUES(?, ?, ?, ?, ?, ?, ?)");
    $req->execute(array(
    $_POST['Mail'], $hashedPass,
    $_POST['Nom'],$_POST['Prenom'],
    $_POST['Telephone'], $_POST['Campus'],
    $_POST['Annee']));



        header('Location: ../index.php');
}
else{
    // Redirection du visiteur vers la page
        header('Location: ../index.php');


}
?>
