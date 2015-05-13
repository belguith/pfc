<HTML>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/view_style.css">
	</head>
<?php
include_once('../data_base_connexion.php'); 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "INSERT INTO `reservation` (`id_client`, `id_chambre` ,  `date_reservation` ,  `date_arrive` ,  `date_depart`  ) 
			   VALUES('{$_POST['id_client']}',  '{$_POST['id_chambre']}' ,  '{$_POST['date_reservation']}' ,  '{$_POST['date_arrive']}' ,  '{$_POST['date_depart']}'  ) "; 
mysql_query($sql) or die(mysql_error()); 
echo "Added row.<br />"; 
echo "<a href='list.php' class='popup-button'>Back To Listing</a>"; 
} 
?>

<form action='' method='POST'>
<p><b>Id Client:</b><br /><input type='text' name='id_client'/>  
<p><b>Id Chambre:</b><br /><input type='text' name='id_chambre'/> 
<p><b>Date Reservation:</b><br /><input type='text' name='date_reservation'/> 
<p><b>Date Arrive:</b><br /><input type='text' name='date_arrive'/> 
<p><b>Date Depart:</b><br /><input type='text' name='date_depart'/> 
<p><input type='submit' class='popup-button' value='Add Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
