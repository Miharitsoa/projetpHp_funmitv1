<?php
try{
	$bdd=new PDO('mysql:host=localhost;dbname=phpProject','phpmyadmin','12345678');
}
catch(Exception $e){
	die('Erreur'. $e->getMessage());
}
$req=$bdd->query('SELECT ID,nom,prenom,email,login FROM info_inscription_funzone');
if($donnees=$req->fetch()){
	echo "Utilisateur n<sup>o</sup>". $donnees['ID']."dénommé ". $donnees['nom'] . " avec prenom " . $donnees['prenom'] . " avec l'adresse email " . $donnees['email'] . " et ayant comme login: " . $donnees['login'];
}
$req->closeCursor();
?>