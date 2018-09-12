<?php

require('Connexion.php');
$email = $_POST['email'];

//verification des champs, si ils sont pas vide et valide
if (isset($_POST['mdp']) AND !empty($_POST['mdp']) AND
    isset($_POST['email']) AND !empty($_POST['email'])) {

//  Récupération de l'utilisateur et de son mdp hashé
    $req = $bdd->prepare('SELECT prenom, email, mdp FROM User WHERE email = ? ');
    $req->execute(array($email));
    $resultat = $req->fetch();

//recuperation du mdp utilisateur et hachage encore
    $salt = "W0rksh0pe-3_M@achA/NiCoLAs\l'e-au/Y@aZiD'";
    $unHahedPass = $_POST['mdp'];
    $unHahedPassPlusSalt = $salt . $unHahedPass;
    $hashedPass = hash('sha512', $unHahedPassPlusSalt);

    //var_dump($hashedPass);
    //var_dump($_POST['mdp']);
    //var_dump($resultat);
    //var_dump($resultat['mdp']);

// Comparaison du pass envoyé via le formulaire avec la base
    if ($hashedPass == $resultat['mdp']) {
        $isPasswordCorrect = 1;
    } else {
        $isPasswordCorrect = 0;
    }
    //var_dump($isPasswordCorrect);

    if (!$resultat) {
        echo 'Mauvais identifiant ou mot de passe !';
        //var_dump($isPasswordCorrect);

    } else {

        if ($isPasswordCorrect) {
            session_start();
            $_SESSION['prenom'] = $resultat['prenom'];
            $_SESSION['email'] = $email;
            header('Location: ../index.php');
        } else {
            '<body onLoad="alert(\'JE NE TE CONNAIS PAS !!\')">';
        }
    }
} else {
    echo '<body onLoad="alert(\'Membre non reconnu...\')">';
}

?>