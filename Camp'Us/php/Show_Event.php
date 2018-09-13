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
        $_SESSION['idevent']=$_GET['id'];
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
        $req = $bdd->query("SELECT * FROM Comment WHERE id_event='$idevent' ");
        //$commentaires=$req->fetch();
        //var_dump($commentaires);
        //while($auteur = $req->fetch()){
        //$req = $bdd->prepare("SELECT nom, prenom FROM User,Comment WHERE id_user = id_launcher");
        //$req->execute(array($_GET['CommentEvent']));
        while($commentaires=$req->fetch()){
        ?>
        <strong>
            <?php
            $idcommentaires=$commentaires['id_commenter'];
            $req2 = $bdd->query("SELECT nom, prenom FROM User WHERE id_user='$idcommentaires' ");
            while ($commenter=$req2->fetch()) {

            echo htmlspecialchars($commenter['nom'].' ');
            echo htmlspecialchars($commenter['prenom']);
            ?>
        </strong>
        à écrit : <?php echo htmlspecialchars($commentaires['content']);
      } ?>
      <br>
      <?php } ?>

    </p>
    <?php
    	echo $_SESSION['prenom'].' '.$_SESSION['nom'];
    ?>

     <form action="Add_Comment_Post.php" method="POST">

    <input type="textarea" name="content" id="content" placeholder="Laissez un commentaire..."> <br>
    <input type="submit" value="commentaire">

    </form>
</div>

</body>
</html>
