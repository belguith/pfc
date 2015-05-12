<HTML>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/view_style.css">
	</head>
<?php 

include_once('../data_base_connexion.php');  
if (isset($_GET['id_chambre']) ) { 
$id_chambre = (int) $_GET['id_chambre']; 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "UPDATE `chambres` SET  `id_chambre` =  '{$_POST['id_chambre']}' ,  `nom_chambre` =  '{$_POST['nom_chambre']}' ,  `type_chambre` =  '{$_POST['type_chambre']}' ,  `image1_chambre` =  '{$_POST['image1_chambre']}' ,  `image2_chambre` =  '{$_POST['image2_chambre']}' ,  `image3_chambre` =  '{$_POST['image3_chambre']}'   WHERE `id_chambre` = '$id_chambre' "; 
mysql_query($sql) or die(mysql_error()); 
echo (mysql_affected_rows()) ? "Edited row.<br />" : "Nothing changed. <br />"; 
echo "<a href='list.php' class='popup-button'>Back To Listing</a>"; 
} 
$row = mysql_fetch_array ( mysql_query("SELECT * FROM `chambres` WHERE `id_chambre` = '$id_chambre' ")); 
?>

<form action='' method='POST'> 
<p><b>Id Chambre:</b><br /><input type='text' name='id_chambre' value='<?= stripslashes($row['id_chambre']) ?>' /> 
<p><b>Nom Chambre:</b><br /><input type='text' name='nom_chambre' value='<?= stripslashes($row['nom_chambre']) ?>' /> 
<p><b>Type Chambre:</b><br /><input type='text' name='type_chambre' value='<?= stripslashes($row['type_chambre']) ?>' /> 
<p><b>Image1 Chambre:</b><br /><input type='text' name='image1_chambre' value='<?= stripslashes($row['image1_chambre']) ?>' /> 
<p><b>Image2 Chambre:</b><br /><input type='text' name='image2_chambre' value='<?= stripslashes($row['image2_chambre']) ?>' /> 
<p><b>Image3 Chambre:</b><br /><input type='text' name='image3_chambre' value='<?= stripslashes($row['image3_chambre']) ?>' /> 
<p><input type='submit' class='popup-button' value='Edit Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
<?php } ?> 