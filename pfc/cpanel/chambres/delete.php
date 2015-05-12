<HTML>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/view_style.css">
	</head>
<?php 

include_once('../data_base_connexion.php');  
$id_chambre = (int) $_GET['id_chambre']; 
mysql_query("DELETE FROM `chambres` WHERE `id_chambre` = '$id_chambre' ") ; 
echo (mysql_affected_rows()) ? "Row deleted.<br /> " : "Nothing deleted.<br /> "; 
?> 

<a href='list.php' class='popup-button'>Back To Listing</a>