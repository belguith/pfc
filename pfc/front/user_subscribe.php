<?php
include_once('data_base_connexion.php');
//recuperation des valeur du formulaire //
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$num_tel=$_POST['num_tel'];
$cin=$_POST['cin'];
$pseudo=$_POST['pseudo'];
$motdepasse=$_POST['motdepasse'];
	


// creation de la requete pour inserer dans BDD //
	$request="INSERT INTO client(nom_client,prenom_client,mail_client,tel_client,cin_client,login,motdepasse,role,) 
			values('".$nom."' ,'".$prenom."','".$email."','".$num_tel."','".$cin."','".$pseudo."','".$motdepasse."' , '1' ) ";
			
	$result = mysql_query($request) or die("Pb avec la requete: $request");
	


?>