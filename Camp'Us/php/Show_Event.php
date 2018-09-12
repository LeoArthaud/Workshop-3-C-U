<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
</head>
	<body>

<div>
	<p>

<!-- On récupère les infos de l'event-->
<?php
$req = $bdd->prepare('SELECT titre, datev, heure, description FROM Event WHERE categorie = "Sport" '); 
$req->execute(array($_GET['Event']));
$contenu = $req->fetch();
?>
		
	<h2><?php echo $contenu['titre']?></h2>

		Rdv le 
				<?php echo htmlspecialchars($contenu['datev']);?> 
		à
				<?php echo htmlspecialchars($contenu['heure']);?> <br>
		Pour 
				<?php echo htmlspecialchars($contenu['description']);?>

		
<!-- On récupère les infos du mec qui lance l'event-->
<?php 
$req = $bdd->prepare("SELECT nom, prenom FROM User WHERE User'.'id_user = Event'.'id_launcher");
$req->execute(array($_GET['AuteurEvent']));
$auteur = $req->fetch();
?>

		Proposé par 
				<?php echo htmlspecialchars($auteur['prenom']);?> 
				<?php echo htmlspecialchars($auteur['nom']);?> <br>

	</p>
</div>

<div>
	<p>
	<strong>Commentaires</strong>

<!-- On récupère les commentaires de l'event-->
<?php
$req->closeCursor();

$req = $bdd->prepare("SELECT nom, prenom FROM User WHERE Comment'.'id_commenter = User'.'id_user' ");
$req->execute(array($GET['Commenter']));
$commenter = $req->fetch();


$req = $bdd->prepare("SELECT content FROM Comment WHERE Comment'.'id_event = Event.'id_event");
$req->execute(array($_GET['CommentEvent']));


while($commentaires = $req->fetch()) 
	{ 
?>

	<strong>
		<?php 
		echo htmlspecialchars($commenter['prenom']); 
		echo htmlspecialchars($commenter['prenom']); 
		?> 
	</strong> 
		à écrit
		
		<?php echo htmlspecialchars($commentaires['content']); ?>

</p>
	</div>

	</body>
</html>