<?php

session_start();
require("Connexion.php");
require("Check_Session.php");

$commenter = $_SESSION['id_user'];
$event = $_GET['id_event'];

$req = $bdd->prepare("INSERT INTO Comment(content,id_commenter) VALUES(?, '$commenter')");
$req->execute(array($_POST['content'], $commenter, $event));

header("Location: Show_Event.php");
?>
