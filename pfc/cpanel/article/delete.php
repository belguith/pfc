<HTML>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/view_style.css">
	</head>
<?php 
include_once('../data_base_connexion.php'); 
$id_article = (int) $_GET['id_article']; 
mysql_query("DELETE FROM article WHERE id_article = '$id_article' ") ; 
echo (mysql_affected_rows()) ? "Row deleted.<br /> " : "Nothing deleted.<br /> "; 
?> 

<a href='list.php' class='popup-button' >Back To Listing</a>