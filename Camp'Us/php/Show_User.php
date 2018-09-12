<?php
	session_start();
	require("Verif-connexion.php");
	require ("Connexion.php");
	require ("Check_Session.php");
	

?>

<!DOCTYPE html>

	<head>
    	<meta charset="utf-8"/>
	</head>


<?php
	$req = $bdd->prepare('SELECT * FROM User WHERE id_user = ?');
	$req->execute(array($_SESSION['id_user']));

  	$donnees = $req->fetch();
  	var_dump($donnees);
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

