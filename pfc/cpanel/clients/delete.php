<HTML>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/view_style.css">
	</head>
<?php 

include_once('../data_base_connexion.php');  
$id_client = (int) $_GET['id_client']; 
mysql_query("DELETE FROM `client` WHERE `id_client` = '$id_client' ") ; 
echo (mysql_affected_rows()) ? "Row deleted.<br /> " : "Nothing deleted.<br /> "; 
?> 

<a href='list.php' class='popup-button'>Back To Listing</a>