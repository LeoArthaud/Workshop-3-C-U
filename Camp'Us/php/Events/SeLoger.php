<?php
session_start();
require("../Check_Session.php");
require("../Connexion.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
</head>
	<body>

		<p>
			<h1>Voici la liste des évènements dans la catégorie <strong>Sortie</strong></h1>
		</p>

    <?php

    $req = $bdd->query("SELECT titre FROM Event WHERE categorie = 'loger' ");


    while ($contenu= $req->fetch()) {
        ?>
        <p>
            <strong> <a href="../Show_Event.php"><?php echo htmlspecialchars($contenu['titre']); ?></strong></a><br>
        </p

        <?php
    }
    ?>

	</body>
</html>
