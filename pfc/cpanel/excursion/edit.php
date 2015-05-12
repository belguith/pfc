<HTML>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/view_style.css">
	</head>
<?php 

include_once('../data_base_connexion.php');

if (isset($_GET['id_excursion']) ) { 
$id_excursion = (int) $_GET['id_excursion']; 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "UPDATE `excursion` SET  `destination_excursion` =  '{$_POST['destination_excursion']}' ,  `lilbelle_excursion` =  '{$_POST['lilbelle_excursion']}' ,  `date_debut` =  '{$_POST['date_debut']}' ,  `date_fin` =  '{$_POST['date_fin']}' ,  `imge_excursion` =  '{$_POST['imge_excursion']}'   WHERE `id_excursion` = '$id_excursion' "; 
mysql_query($sql) or die(mysql_error()); 
echo (mysql_affected_rows()) ? "Edited row.<br />" : "Nothing changed. <br />"; 
echo "<a href='list.php' class='popup-button'>Back To Listing</a>"; 
} 
$row = mysql_fetch_array ( mysql_query("SELECT * FROM `excursion` WHERE `id_excursion` = '$id_excursion' ")); 
?>

<form action='' method='POST'> 
<p><b>Destination Excursion:</b><br /><input type='text' name='destination_excursion' value='<?= stripslashes($row['destination_excursion']) ?>' /> 
<p><b>Lilbelle Excursion:</b><br /><input type='text' name='lilbelle_excursion' value='<?= stripslashes($row['lilbelle_excursion']) ?>' /> 
<p><b>Date Debut:</b><br /><input type='text' name='date_debut' value='<?= stripslashes($row['date_debut']) ?>' /> 
<p><b>Date Fin:</b><br /><input type='text' name='date_fin' value='<?= stripslashes($row['date_fin']) ?>' /> 
<p><b>Imge Excursion:</b><br /><input type='text' name='imge_excursion' value='<?= stripslashes($row['imge_excursion']) ?>' /> 
<p><input type='submit' class='popup-button' value='Edit Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
<?php } ?> 
