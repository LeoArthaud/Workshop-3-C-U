<!DOCTYPE>
<html>
<head>
<title>Texte du titre</title>
</head>
<body>

<form action="select.htm">
<p>
    <form method='POST' action='fenetre.php'>
Merci de cocher une activite :<br>
<input type="checkbox" name="activite[]" value="Voyager"> Voyager<br>
<input type="checkbox" name="activite[]" value="Se loger"> Se loger<br>
<input type="checkbox" name="activite[]" value="Se restaurer"> Se restaurer<br>
<input type="checkbox" name="activite[]" value="Sortir"> Sortir<br>
<input type="checkbox" name="activite[]" value="Se cultiver"> Se cultiver<br>
<input type="checkbox" name="activite[]" value="Faire du sport"> Faire du sport<br>
 <input type="checkbox" name="activite[]" value="Profiter de bon plans "> Profiter de bon plans r<br>
<input type="submit" name="activiter" value="Résultats">
</form>
   
'version simplifier':
    
    <?
$activite = array(Voyager, Se loger,Se restaurer,Sortir, Se cultiver,Faire du sport, Profiter de bon plans);
for($i=0;$i<sizeof($activite);$i++){

echo"<input type='checkbox' name='activite[]' value='".$activite[$i]."'>".$activite[$i]."<br>";
}
?>
    
    //limiter à 1 choix
    
    <?
$ctrl=sizeof($activite);
if($ctrl!=1 ){
echo"Attention vous n'avez pas cochez le bon nombre de cases !!";
exit;
}

else{
echo"Vous avez choisi comme activite:<br>";
foreach ($activite as $valeur){
echo"le ". $valeur.".<br>";
}
}
?>
    
    //connexion BDD
    
    <?php

$activite = $_POST['activite']; 

$checkbox = isset($_POST['checkbox'])? 1: 0;

try

{

$bdd =workshop('mysql:host=localhost;name=placede;charset=utf8', 'root', '');

}

catch(Exception $e)

{

        die('Erreur : '.$e->getMessage());

}

$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$req = $bdd->prepare('INSERT INTO coupon(activite, checkbox) VALUES(:activite,:checkbox)');

$req->execute(array(

'activite' => $activite,

'checkbox' => $checkbox,

));

?>
