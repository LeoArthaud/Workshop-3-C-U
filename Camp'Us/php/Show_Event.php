<?php
session_start();
require("Check_Session.php");
require("Connexion.php");
?>

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
        /*$req = $bdd->prepare('SELECT titre, datev, heure, description FROM Event WHERE event='.$_POST['event']);
        $req->execute(array($_GET['event']));*/
        $idevent=$_GET['id'];
        $req = $bdd->prepare("SELECT * FROM Event WHERE id_event = '$idevent' ");
        $req->execute(array($idevent));
        $contenu=$req->fetch();
        ?>

    <h2><?php echo $contenu['titre'] ?></h2>

    Rdv le :
    <?php echo htmlspecialchars($contenu['datev']); ?><br>
    à :
    <?php echo htmlspecialchars($contenu['heure']); ?> <br>
    Pour :
    <?php echo htmlspecialchars($contenu['description']); ?><br>

    <!-- On récupère les infos du mec qui lance l'event-->
    <?php
    $req = $bdd->query("SELECT nom, prenom FROM User WHERE id_user='$idevent' ");
    while($auteur = $req->fetch()){
    ?>

    Proposé par : <br>
    <?php echo htmlspecialchars($auteur['prenom']); ?>
    <?php echo htmlspecialchars($auteur['nom']); }?> <br>
    </p>
</div>

<div>
    <p>
        <strong>Commentaires</strong><br>

        <!-- On récupère les commentaires de l'event-->
        <?php
        //SELECT nom, prenom FROM User WHERE Comment'.'id_commenter = User'.'id_user

      //  $req = $bdd->prepare("SELECT content FROM Comment WHERE id_event='$idevent'");
      //  $req->execute(array($idevent));
      //  $commenter = $req->fetch();
        $req->closeCursor();
        $req = $bdd->prepare("SELECT * FROM Comment WHERE id_event='$idevent' ");
        $req->execute(array($idevent));
        //while($auteur = $req->fetch()){
        //$req = $bdd->prepare("SELECT nom, prenom FROM User,Comment WHERE id_user = id_launcher");
        //$req->execute(array($_GET['CommentEvent']));
        while($commentaires =$req->fetch()){
        ?>
        <strong>
            <?php
            $idcommentaires=$commentaires['id_commenter'];
            $req = $bdd->prepare("SELECT nom, prenom FROM User WHERE id_user='$idcommentaires' ");
            $req->execute(array($idcommentaires));
            $commenter=$req->fetch();
            echo htmlspecialchars($commenter['nom'].' ');
            echo htmlspecialchars($commenter['prenom']);
            ?>
        </strong>
        à écrit : <br>

        <?php echo htmlspecialchars($commentaires['content']); }?>

    </p>
</div>

</body>
</html>
