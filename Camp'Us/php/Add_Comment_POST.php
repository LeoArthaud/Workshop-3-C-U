<?php

session_start();
require("Connexion.php");
require("Check_Session.php");

$commenter = $_SESSION['id_user'];
$event = $_SESSION['idevent'];
$contenu = $_POST['content'];

$req = $bdd->prepare("INSERT INTO Comment(content,id_commenter,id_event) VALUES('$contenu', '$commenter','$event')");
$req->execute(array($contenu, $commenter, $event));

header("Location: Show_Event.php"."?id=".$event);
?>
