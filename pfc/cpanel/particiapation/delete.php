<HTML>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/view_style.css">
	</head>
<?php 

include_once('../data_base_connexion.php'); 
$id_client = (int) $_GET['id_client'];
$id_atelier= (int) $_GET['id_atelier'];
$date_participation= $_GET['date_participation']; 
mysql_query("DELETE FROM `participation` WHERE `id_client`=$id_client AND `id_atelier`=$id_atelier AND `date_participation`='$date_participation'") ; 
echo (mysql_affected_rows()) ? "Row deleted.<br /> " : "Nothing deleted.<br /> "; 
?> 

<a href='list.php'>Back To Listing</a>