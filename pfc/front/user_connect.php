<?php


include_once('data_base_connexion.php');


$login=$_POST['login'];
$password=$_POST['password'];






// Recuperation de tous les password present dans la BDD
               $request="SELECT * FROM client WHERE (login ='".$login."'  AND motdepasse = '".$password."' )"; 
               $result = mysql_query($request) or die("Pb avec la requete: $request");
                
 
               //test de l'existance du login et password dans la BDD
               if (mysql_num_rows($result) == 1){
				$row=mysql_fetch_array($result);
				$nom=$row{'nom_client'};
				$role=$row{'role'};
				if($role==1)
				{
					header('Location: acceuil.html');
				}
				if($role==2)
				{
				header('Location: ../cpanel/index.php');	
				}
               
               }
               else{
               echo "votre login et/ou votre password est incorrect";
               }
               mysql_close(); 

?>

