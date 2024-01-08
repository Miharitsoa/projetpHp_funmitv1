<?php
try{
	$bdd=new PDO('mysql:host=localhost;dbname=phpProject','phpmyadmin','12345678');
}
catch(Exception $e){
	die('Erreur'. $e->getMessage());
}
$req=$bdd->prepare('INSERT INTO info_inscription_funzone(nom,prenom,email,login,password,password1) VALUES(?,?,?,?,?,?)');
$req->execute(array($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['login'],$_POST['password'],$_POST['password1']));
if($_POST['password']==$_POST['password1']){
	
	header('Location: success.php');
}
else{
	header('Location: fail.php');		
}


?>