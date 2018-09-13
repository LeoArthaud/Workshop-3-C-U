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

	$req = $bdd->prepare('SELECT * FROM User WHERE prenom = ?');
	$req->execute(array($_SESSION['prenom']));
  	$donnees = $req->fetch();

 ?>

	<body>

<p>
	<form action="Data_Change.php" method="POST">
	
	Nom :
		<input type="text" name="prenom" value="<?php echo $donnees['prenom']; ?>" required> <br>

	Prénom:
		<input type="text" name="nom" value="<?php echo $donnees['nom']; ?>" required> <br> 

	Promo :
		<input type="text" name="promo" value="<?php echo $donnees['promo']; ?>" required> <br>

	A propos: 
		<input type="text" name="infos" value="<?php echo $donnees['infos']; ?>" required> <br>

	Contact :  
		<input type="text" name="email" value="<?php echo $donnees['email']; ?>" required> <br>
		
		<input type="submit" value="Valider">

	</form>	

</p>
	</body>
</html>

--