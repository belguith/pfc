<HTML>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/view_style.css">
	</head>
<?php 

include_once('../data_base_connexion.php');  
if (isset($_GET['id_atelier']) ) { 
$id_atelier = (int) $_GET['id_atelier']; 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "UPDATE `atelier` SET  `nom_atelier` =  '{$_POST['nom_atelier']}' ,  `prix_atelier` =  '{$_POST['prix_atelier']}' ,  `nbr_max` =  '{$_POST['nbr_max']}' ,  `nbr_inscrit` =  '{$_POST['nbr_inscrit']}' ,  `date_atelier` =  '{$_POST['date_atelier']}' ,  `description_atelier` =  '{$_POST['description_atelier']}' ,  `note_atelier` =  '{$_POST['note_atelier']}' ,  `image_atelier` =  '{$_POST['image_atelier']}' ,  `type_atelier` =  '{$_POST['type_atelier']}'   WHERE `id_atelier` = '$id_atelier' "; 
mysql_query($sql) or die(mysql_error()); 
echo (mysql_affected_rows()) ? "Edited row.<br />" : "Nothing changed. <br />"; 
echo "<a href='list.php' class='popup-button' >Back To Listing</a>"; 
} 
$row = mysql_fetch_array ( mysql_query("SELECT * FROM `atelier` WHERE `id_atelier` = '$id_atelier' ")); 
?>

<form action='' method='POST'> 
<p><b>Nom Atelier:</b><br /><input type='text' name='nom_atelier' value='<?= stripslashes($row['nom_atelier']) ?>' /> 
<p><b>Prix Atelier:</b><br /><input type='text' name='prix_atelier' value='<?= stripslashes($row['prix_atelier']) ?>' /> 
<p><b>Nbr Max:</b><br /><input type='text' name='nbr_max' value='<?= stripslashes($row['nbr_max']) ?>' /> 
<p><b>Nbr Inscrit:</b><br /><input type='text' name='nbr_inscrit' value='<?= stripslashes($row['nbr_inscrit']) ?>' /> 
<p><b>Date Atelier:</b><br /><input type='text' name='date_atelier' value='<?= stripslashes($row['date_atelier']) ?>' /> 
<p><b>Description Atelier:</b><br /><textarea name='description_atelier'><?= stripslashes($row['description_atelier']) ?></textarea> 
<p><b>Note Atelier:</b><br /><input type='text' name='note_atelier' value='<?= stripslashes($row['note_atelier']) ?>' /> 
<p><b>Image Atelier:</b><br /><input type='text' name='image_atelier' value='<?= stripslashes($row['image_atelier']) ?>' /> 
<p><b>Type Atelier:</b><br /><input type='text' name='type_atelier' value='<?= stripslashes($row['type_atelier']) ?>' /> 
<p><input type='submit' value='Edit Row' class='popup-button' /><input type='hidden' value='1' name='submitted' /> 
</form> 
<?php } ?> 
