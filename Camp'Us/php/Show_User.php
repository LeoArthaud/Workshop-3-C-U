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
	$req = $bdd->prepare('SELECT * FROM User WHERE prenom = ?');
	$req->execute(array($_SESSION['prenom']));

  	$donnees = $req->fetch();
 ?>

	<body>

		<p>
		Nom
		<?php echo $donnees['nom']; ?> <br>
		Prénom: 
		<?php echo $donnees['prenom']; ?> <br>
		Promo:
		<?php echo $donnees['promo']; ?> <br>
		Email:
		<?php echo $donnees['email']; ?> <br>
		A propos:
		<?php echo $donnees['infos']; ?> <br>
		</p>

	</body>
</html>

