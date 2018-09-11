<?php
//fichier php pour centraliser la connection a la base de donner .
try
{
	$dsn = 'mysql:host=mysql-phpepsischoolmarieange.alwaysdata.net;
								 dbname=phpepsischoolmarieange_campus; charset-utf8';

	$bdd = new PDO($dsn, '147109', 'Fuckingpassword33');// permet de se connecter a la base de donner
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage()); //affiche l'erreure en cas de probleme de connection a la base de donnee
}