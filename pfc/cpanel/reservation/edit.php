<HTML>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/view_style.css">
	</head>
<?php
include_once('../data_base_connexion.php'); 
if (isset($_GET['id_client'])&&isset($_GET['id_client'])&&isset($_GET['date_reservation']) ) { 
$id_client = (int) $_GET['id_client'];
$id_chambre= (int) $_GET['id_chambre'];
$date_reservation = $_GET['date_reservation'];

if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "UPDATE `reservation` SET  `id_chambre` =  '{$_POST['id_chambre']}' ,  `date_reservation` =  '{$_POST['date_reservation']}' ,  `date_arrive` =  '{$_POST['date_arrive']}' ,  `date_depart` =  '{$_POST['date_depart']}'   WHERE `id_client` = '$id_client' "; 
mysql_query($sql) or die(mysql_error()); 
echo (mysql_affected_rows()) ? "Edited row.<br />" : "Nothing changed. <br />"; 
echo "<a href='list.php' class='popup-button'>Back To Listing</a>"; 
} 
$row = mysql_fetch_array ( mysql_query("SELECT * FROM `reservation` WHERE `id_client` = '$id_client' ")); 
?>

<form action='' method='POST'> 
<p><b>Id Chambre:</b><br /><input type='text' name='id_chambre' value='<?= stripslashes($row['id_chambre']) ?>' /> 
<p><b>Date Reservation:</b><br /><input type='text' name='date_reservation' value='<?= stripslashes($row['date_reservation']) ?>' /> 
<p><b>Date Arrive:</b><br /><input type='text' name='date_arrive' value='<?= stripslashes($row['date_arrive']) ?>' /> 
<p><b>Date Depart:</b><br /><input type='text' name='date_depart' value='<?= stripslashes($row['date_depart']) ?>' /> 
<p><input type='submit' class='popup-button' value='Edit Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
<?php } ?> 
