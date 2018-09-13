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
<h1>Voici la liste des évènements dans la catégorie <strong>Sport</strong></h1>
</p>

<?php
$req = $bdd->query("SELECT titre, id_event FROM Event WHERE categorie = 'sport' ");


while ($contenu= $req->fetch()) {
    ?>
    <p>
        <strong> <a href="../Show_Event.php?id=<?php echo ($contenu['id_event'] .'"">'. htmlspecialchars($contenu['titre']));?></strong></a><br>
    </p>

    <?php
}
?>

</body>
</html>
