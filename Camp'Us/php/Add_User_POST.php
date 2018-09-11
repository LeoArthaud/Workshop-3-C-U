<?php
if(isset($_POST['nom']) AND !empty($_POST['nom']) AND
isset($_POST['prenom']) AND !empty($_POST['prenom']) AND
isset($_POST['email']) AND !empty($_POST['email']) AND
isset($_POST['mdp']) AND !empty($_POST['mdp']) AND
isset($_POST['promo']) AND !empty($_POST['promo']) AND
isset($_POST['infos']) AND !empty($_POST['infos'])
/*($_POST['Mdp']==$_POST['Mdp2']);*/
){

    // Connexion à la base de données
    //mot de passe proteger par un hashedPass
    include('Connexion.php');
    //https://secure.php.net/manual/en/function.password-hash.php
    $salt = "W0rksh0pe-3_M@achA/NiCoLAs\l'e-au/Y@aZiD'";
    $unHahedPass = $_POST['mdp'];
    $unHahedPassPlusSalt = $salt . $unHahedPass;
    //$hashedPass = hash('sha512', $unHahedPassPlusSalt);

    /*$options = [
        'cost' => 10,
    ];
    $hashedPass = password_hash( $unHahedPassPlusSalt, PASSWORD_BCRYPT, $options);*/
    $hashedPass = hash('sha512', $unHahedPassPlusSalt);

    $req = $bdd->prepare("INSERT INTO User (email, nom, prenom, mdp, promo, infos) VALUES(?, ?, ?, ?, ?, ?)");
    $req->execute(array(
    $_POST['email'], $hashedPass,
    $_POST['nom'],$_POST['prenom'],
    $_POST['promo'], $_POST['infos']));

        header('Location: ../index.php');
}
else{
    // Redirection du visiteur vers la page
        header('Location: ../index.html');
}
?>