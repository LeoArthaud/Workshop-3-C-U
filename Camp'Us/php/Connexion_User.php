<?php
session_start ();
include('../connexion.php');

// on teste si nos variables sont définies
if  (isset($_POST['Mdp']) AND !empty($_POST['Mdp']) AND
    isset($_POST['Mail']) AND !empty($_POST['Mail'])) {
    $salt = "W0rksh0pe-2_@dRi1/Nik0l@\Loup/LeHaut";
    $unHahedPass = $_POST['Mdp'];
    $unHahedPassPlusSalt = $salt . $unHahedPass;
    $hashedPass = hash('sha512', $unHahedPassPlusSalt);
    debug_to_console($_POST['Mail']);
    $reponse = $bdd -> prepare("SELECT * FROM `User` WHERE email = (?)");
    $reponse -> execute(array($_POST['email']));
    while ($value = $reponse->fetch())
    {
        $mailUser = $value["email"];
        $mdpUser = $value["mdp"];
        $IdUserCurrent = $value["Id_user"];
    }

    $reponse->closeCursor();
    // on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
    if ($_POST['email']== $mailUser AND $hashedPass == $mdpUser ) {

        // demarrage session
        session_start ();
        // on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
        $_SESSION['Mail'] = $_POST['Mail'];
        $_SESSION['Mdp'] = $_POST['Mdp'];
        $_SESSION['IdUserCurrent'] = $IdUserCurrent;
        header('Location: ../index.html');
        //echo '<body onLoad="alert(\'maintennat conctervictoie\')">';
    }
    else {
        // Le visiteur pas reconnue, petit js pour le dir
        debug_to_console($mailUser);
        echo '<body onLoad="alert(\'Membre non reconnu...\')">';
        // go page d'accueil
        //echo '<meta http-equiv="refresh">\ <!-- content="0;URL=index.htm">-->';
    }
}
else {
    echo 'Les variables du formulaire ne sont pas déclarées.';
}

function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}


/**
 * Created by PhpStorm.
 * User: leoar
 * Date: 11/09/2018
 * Time: 12:55
 */
?>