<?php


if(isset($_POST['nouveauPrenom']) AND !empty($_POST['nouveauPrenom']) AND $_POST['nouveauPrenom'] != $user['Prenom'])
{
    $nouveauPrenom = htmlspecialchars($_POST['nouveauPrenom']);
    $insertPrenom = $bdd->prepare("UPDATE membre SET Prenom = ? WHERE id = ?");
     $insertPrenom->execute(array($nouveauPrenom, $_SESSION['id']));
    header('Location : profilphp?id='.$_SESSION['id']);
    
}

if(isset($_POST['nouvelleadressemail']) AND !empty($_POST['nouvelleadressemail']) AND $_POST['nouvelleadressemail'] != $user['adressemail'])
{
    $nouvelleadressemail = htmlspecialchars($_POST['nouvelleadressemail']);
    $insertadressemail = $bdd->prepare("UPDATE membre SET adressemail = ? WHERE id = ?");
     $insertadressemail->execute(array($nouvelleadressemail, $_SESSION['id']));
    header('location : profilphp?id='.$_SESSION['id']);
    
}

if(isset($_POST['nouveauNom']) AND !empty($_POST['nouveauNom']) AND $_POST['nouveauNom'] != $user['Nom'])
{
 
    $nouveauNom = htmlspecialchars($_POST['nouveauNom']);
    $insertNom = $bdd->prepare("UPDATE membre SET Nom = ? WHERE id = ?");
     $insertNom->execute(array($nouveauNom, $_SESSION['id']));
    header('Location : profilphp?id='.$_SESSION['id']);
    
}

    if(isset($_POST['nouvellePromo']) AND !empty($_POST['nouvellePromo']) AND $_POST['nouvellePromo'] != $user['Promo'])
        
{
        
    $nouveauNom = htmlspecialchars($_POST['nouvellePromo']);
    $insertPromo = $bdd->prepare("UPDATE membre SET Promo = ? WHERE id = ?");
     $insertPromo->execute(array($nouvellePromo, $_SESSION['id']));
    header('Location : profilphp?id='.$_SESSION['id']);
        
    }
        
        if(isset($_POST['nouveauxCampus']) AND !empty($_POST['nouveauxCampus']) AND $_POST['nouveauxCampus'] != $user['Campus'])
            
{
    $nouveauxCampus = htmlspecialchars($_POST['nouveauxCampus']);
    $insertCampus = $bdd->prepare("UPDATE membre SET Campus = ? WHERE id = ?");
     $insertCampus->execute(array($nouveauxCampus, $_SESSION['id']));
    header('Location : profilphp?id='.$_SESSION['id']);
       
        }
    
if(isset($_POST['nouveauMDP']) AND !empty($_POST['nouveauMDP']) AND isset($_POST['nouveauMDP2']) AND !empty($_POST['nouveauMDP2']))
    
{
    $MDP = sha1($_POST['nouveauMDP']);
    $MDP2 = sha1($_POST['nouveauMDP2']);
    
    if ($MDP == $MDP2)
    {
        $insertMDP = $bdd->prepare("UPDATE membre SET MDP = ? WHERE id = ?");
          $insertMDP->execute(array($nouveauMDP, $_SESSION['id']));
         header('Location : profilphp?id='.$_SESSION['id']);
    }
    else
    {
        $msg = "Vos deux mot de passe ne correspondent pas "
    }
    
}

<?php if (isset($msg)) { echp $msg; } />
    
    
    
    
    if($_GET['id'] == '') 
{
        if(isset($_SESSION['membre_id'])) $id = $_SESSION['membre_id'];
        else $id = -1;
}

            else $id = $_GET['id'];

$profil = sqlquery("SELECT * FROM membres
LEFT JOIN connectes
ON connectes_id = membre_id
WHERE membre_id=".intval($id), 1);
if($profil['membre_id'] == '' || $id == -1)
{
        $informations = Array(
                true,
                'Page membre inconnue',
                'Ce membre n\'existe pas.',
                '',
                '../index.php',
                3
                );
        require_once('../information.php');
        exit();
}

?>

<?php


$titre = 'Membre : '.htmlspecialchars($profil['membre_Prenom'], ENT_QUOTES).'';

include('../includes/.php'); 







