<HTML>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/view_style.css">
		
	</head>

<?php
include_once('../data_base_connexion.php');  
$email = (int) $_GET['email']; 
mysql_query("DELETE FROM `mailing_list` WHERE `email` = '$email' ") ; 
echo (mysql_affected_rows()) ? "Row deleted.<br /> " : "Nothing deleted.<br /> "; 
?> 

<a href='list.php'>Back To Listing</a>