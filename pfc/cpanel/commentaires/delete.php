<HTML>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/view_style.css">
	</head>
<?php 

include_once('../data_base_connexion.php');  
$id_commentaire = (int) $_GET['id_commentaire']; 
mysql_query("DELETE FROM `commentaire` WHERE `id_commentaire` = '$id_commentaire' ") ; 
echo (mysql_affected_rows()) ? "Row deleted.<br /> " : "Nothing deleted.<br /> "; 
?> 

<a href='list.php' class='popup-button'>Back To Listing</a>