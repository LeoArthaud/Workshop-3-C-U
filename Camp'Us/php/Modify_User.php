<?php
	session_start();
	require ("Check_Session.php");
	require ("Connexion.php");
?>

<!DOCTYPE html>

	<head>
    	<meta charset="utf-8"/>
	</head>

<?php

	$req = $bdd->prepare('SELECT * FROM User WHERE id_user = ?');
	$req->execute(array($_SESSION['prenom']));

  	$donnees = $req->fetch();

 ?>

	<body>

	<form action="Data_Change.php">
	<p>
		<input type="text" name="prenom" class="form-control" value="<?php echo $donnees['prenom']; ?>" required> <br>
		<input type="text" name="nom" class="form-control" value="<?php echo $donnees['nom']; ?>" required> <br>
		<input type="text" name="promo" class="form-control" value="<?php echo $donnees['promo']; ?>" required> <br>
		<input type="text" name="infos" class="form-control" value="<?php echo $donnees['infos']; ?>" required> <br>

	Contact :  
		<input type="text" name="email" class="form-control" value="<?php echo $donnees['email']; ?>" required> <br>
		
		<button type="submit"> Valider</button>
	</p>
	</form>	

	</body>
</html>

