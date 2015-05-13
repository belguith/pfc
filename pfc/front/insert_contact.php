<?php
include_once('data_base_connexion.php');
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$Num_tel=$_POST['Num_tel'];
$message=$_POST['message'];




$request="INSERT INTO mesage_client(nom,prenom,email,num_tel,contenu) values('".$nom."' ,'".$prenom."','".$email."','".$Num_tel."','".$message."')";
			
			$result = mysql_query($request) or die("Pb avec la requete: $request");
			
			



















?>