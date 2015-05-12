<HTML>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/view_style.css">
	</head>
<?php 

include_once('../data_base_connexion.php'); 
if (isset($_GET['id_client']) && isset($_GET['id_atelier']) && isset($_GET['date_participation'])) { 

$id_client = (int) $_GET['id_client'];
$id_atelier= (int) $_GET['id_atelier'];
$date_participation= $_GET['date_participation']; 

if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 

$sql = "UPDATE `participation` 
		SET  `id_client` =  '{$_POST['id_client']}' , `id_atelier` =  '{$_POST['id_atelier']}' ,  `date_participation` =  '{$_POST['date_participation']}'   
		WHERE `id_client`='$id_client' 
		AND `id_atelier`='$id_atelier' 
		AND `date_participation`='$date_participation'";

mysql_query($sql) or die(mysql_error());

echo (mysql_affected_rows()) ? "Edited row.<br />" : "Nothing changed. <br />"; 
echo "<a href='list.php'>Back To Listing</a>"; 
} 
$row = mysql_fetch_array ( mysql_query("SELECT * FROM `participation` WHERE `id_client` = '$id_client' AND `id_atelier` = '$id_atelier' AND `date_participation` = '$date_participation' ")); 
?>

<form action='' method='POST'>
<p><b>Id Client:</b><br /><input type='text' name='id_client' value='<?= stripslashes($row['id_client']) ?>' /> 
<p><b>Id Atelier:</b><br /><input type='text' name='id_atelier' value='<?= stripslashes($row['id_atelier']) ?>' /> 
<p><b>Date Participation:</b><br /><input type='text' name='date_participation' value='<?= stripslashes($row['date_participation']) ?>' /> 
<p><input type='submit' value='Edit Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
<?php } ?> 
