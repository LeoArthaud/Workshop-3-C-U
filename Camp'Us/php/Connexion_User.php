<?php /*
session_start();
include('Connexion.php');

// on teste si nos variables sont définies
if (isset($_POST['mdp']) AND !empty($_POST['mdp']) AND
    isset($_POST['email']) AND !empty($_POST['email'])) {
    $salt = "W0rksh0pe-3_M@achA/NiCoLAs\l'e-au/Y@aZiD";
    $unHahedPass = $_POST['mdp'];
    $unHahedPassPlusSalt = $salt . $unHahedPass;
    $hashedPass = hash('sha512', $unHahedPassPlusSalt);
    debug_to_console($_POST['email']);
    $reponse = $bdd->prepare("SELECT email, mdp, id_user FROM `User` WHERE email = (?) , mdp = (?)");
    $reponse->execute(array($_POST['email'] , $_POST['mdp'],/*$_POST['id_user']));*/

/*foreach ($response as $value){
    $mailUser = $value['email'];
    $mdpUser = $value['mdp'];
    $IdUserCurrent = $value['id_user'];
}*/
/*
while ($value = $reponse->fetch()) {
    $mailUser = $value['email'];
    $mdpUser = $value['mdp'];
    $IdUserCurrent = $value['id_user'];
}

$reponse->closeCursor();
// on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
if ($_POST['email'] == $mailUser AND $hashedPass == $mdpUser) {

    // demarrage session
    session_start();
    // on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['mdp'] = $_POST['mdp'];
    $_SESSION['IdUserCurrent'] = $IdUserCurrent;
    header('Location: ../index.php');
    //echo '<body onLoad="alert(\'maintennat conctervictoie\')">';
} else {
    // Le visiteur pas reconnue, petit js pour le dir
    debug_to_console($mailUser);
    echo '<body onLoad="alert(\'Membre non reconnu...\')">';
    // go page d'accueil
    //echo '<meta http-equiv="refresh">\ <!-- content="0;URL=index.htm">-->';
}
} else {
    echo 'Les variables du formulaire ne sont pas déclarées.';
}

function debug_to_console($data)
{
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}*/


include('Connexion.php');
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
    if($hashedPass == $resultat['mdp']){
        $isPasswordCorrect = 1;
    }
    else{
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