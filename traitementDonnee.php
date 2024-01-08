<?php
try{
	$bdd=new PDO('mysql:host=localhost;dbname=phpProject','phpmyadmin','12345678');
}
catch(Exception $e){
	die('Erreur'. $e->getMessage());
}
$req=$bdd->prepare('INSERT INTO user_infos(login,password) VALUES(?,?)');
$req->execute(array($_POST['login'],$_POST['password']));
header('Location: membres.php');

?>