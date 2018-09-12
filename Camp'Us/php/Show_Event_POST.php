<div>
	<p>

	<strong><?php echo htmlspecialchars($contenu['titre']);?></strong>
	<br>

	Proposé par 
		<?php echo htmlspecialchars($auteur['prenom']);?> 
		<?php echo htmlspecialchars($auteur['nom']);?> <br>

	Rdv le 
		<?php echo htmlspecialchars($contenu['datev']);?> 
	à
		<?php echo htmlspecialchars($contenu['heure']);?> <br>
	Pour 
		<?php echo htmlspecialchars($contenu['description']);?>

<!--
<strong>Commentaires</strong>

	//<?php
	//$req->closeCursor();

	//$red = $bdd->prepare("SELECT content FROM Comment WHERE ")

	?>

	</p> -->
</div>