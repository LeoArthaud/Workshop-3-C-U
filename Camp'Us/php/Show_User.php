<?php
	session_start();
	require ("Connexion.php");
	require ("Check_Session.php");
?>

<!DOCTYPE html>

	<head>
    	<meta charset="utf-8"/>
	</head>


<?php

	$ntm = $_SESSION['prenom'];

	$req = $bdd->prepare('SELECT nom, prenom, promo, email, infos FROM User WHERE prenom = ?');
	$req->execute(array($ntm));
	$donnees = $req->fetch();
 ?>

	<body>

		<p>

		Nom:
		<?php echo $donnees['nom']; ?> <br>

		Prénom:
		<?php echo $donnees['prenom']; ?> <br>

		Promo:
		<?php echo $donnees['promo']; ?> <br>

		Email:
		<?php echo $donnees['email']; ?> <br>
		
		A propos:
		<?php echo $donnees['infos']; ?> <br>

		<a href="Modify_User.php">Modifier</a>

		</p>

	</body>
</html>

