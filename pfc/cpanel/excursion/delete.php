<HTML>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/view_style.css">
	</head>
<?php 

include_once('../data_base_connexion.php');
 
$id_excursion = (int) $_GET['id_excursion']; 
mysql_query("DELETE FROM `excursion` WHERE `id_excursion` = '$id_excursion' ") ; 
echo (mysql_affected_rows()) ? "Row deleted.<br /> " : "Nothing deleted.<br /> "; 
?> 

<a href='list.php' class='popup-button'>Back To Listing</a>