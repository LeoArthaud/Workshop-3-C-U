
<?php

session_start();


/*$req = $bdd->prepare('SELECT nom, prenom FROM User WHERE prenom = ? ');
$req->execute(array($_POST['nom']), ($_POST['prenom']));
$donnees = $req->fetch();*/
?>


<!-- Mise en forme type rectangle toussa i dunno.-->
<?php
	echo $_SESSION['prenom'].' '.$_SESSION['nom'];
?>

 <form action="Add_Comment_Post.php" method="POST">

<input type="textarea" name="content" id="content" placeholder="Laissez un commentaire..."> <br>
<input type="submit" value="commentaire">

</form>
