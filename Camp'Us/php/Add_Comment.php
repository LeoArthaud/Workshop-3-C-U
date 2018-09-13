
<?php

session_start();
require("Add_Comment_Post");

$req = $bdd->prepare('SELECT nom, prenom FROM User WHERE prenom = ? ');
$req->execute(array($_POST['nom']), ($_POST['prenom']));
$donnees = $req->fetch();
?>


<!-- Mise en forme type rectangle toussa i dunno.-->
<?php 
	echo $_POST['prenom']; 
	echo $_POST['nom'];	
?>

 <form action="Add_Comment_Post" method="POST">

<input type="textarea" name="content" id="content" placeholder="Laissez un commentaire..."> <br>
<input type="submit" value="commentaire">

</form>

