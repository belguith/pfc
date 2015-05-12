<HTML>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/view_style.css">
	</head>
<?php 

include_once('../data_base_connexion.php');   
$id_client = (int) $_GET['id_client'];
$id_chambre = (int) $_GET['id_chambre'];
$date_reservation = $_GET['date_reservation'];

mysql_query("DELETE FROM `reservation` WHERE `id_client` = $id_client 
									   AND `id_chambre` = $id_chambre 
									   AND 'date_reservation'='$date_reservation' ") ;

echo (mysql_affected_rows()) ? "Row deleted.<br /> " : "Nothing deleted.<br /> "; 
?> 

<a href='list.php'>Back To Listing</a>