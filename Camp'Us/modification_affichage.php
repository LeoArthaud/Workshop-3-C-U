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
        
        
        if(isset($_POST['nouveauxCampus']) AND !empty($_POST['nouveauxCampus']) AND $_POST['nouveauxCampus'] != $user['Campus'])
{
    $nouveauxCampus = htmlspecialchars($_POST['nouveauxCampus']);
    $insertCampus = $bdd->prepare("UPDATE membre SET Campus = ? WHERE id = ?");
     $insertCampus->execute(array($nouveauxCampus, $_SESSION['id']));
    header('Location : profilphp?id='.$_SESSION['id']);
        
    
    
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

<?php if (isset($msg)) { echo $msg; } />
    
    
    <?php

if (empty($_GET['id']) or !is_numeric($_GET['id'])) {

	include CHEMIN_VUE.'erreur_profil.php';

} else {

	include CHEMIN_MODELE.'membres.php';
	
	$infos_utilisateur = lire_infos_utilisateur($_GET['id']);
	
	
	if (false !== $infos_utilisateur && $infos_utilisateur['hash_validation'] == '') {

		list($nom,$Prenom , $adresseemail, $Promo, $Campus ) = $infos_utilisateur;
		include CHEMIN_VUE.'profil_infos_utilisateur.php';

	} else {

		include CHEMIN_VUE.'erreur_profil_inexistant.php';
	}
}ou


<h2>Profil de <?php echo htmlspecialchars($Nom); ?></h2>

<p>
    <span class="label_profil">Nom</span> : <?php echo htmlspecialchars($Nom); ?><br />
    <span class="label_profil">Prenom</span> : <?php echo htmlspecialchars($Prenom); ?><br />
	<span class="label_profil">Adresseemail</span> : <?php echo htmlspecialchars($adresse_email); ?><br />
    <span class="label_profil">Promo</span> : <?php echo htmlspecialchars($Promo); ?><br />
    <span class="label_profil">Campus</span> : <?php echo htmlspecialchars($Campus); ?><br />
</p>

<h2>Erreur d'affichage du profil</h2>
<p>Cet utilisateur n'existe pas.</p>





