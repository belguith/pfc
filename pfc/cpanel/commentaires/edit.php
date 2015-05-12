<HTML>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/view_style.css">
	</head>
<?php 

include_once('../data_base_connexion.php');  
if (isset($_GET['id_commentaire']) ) { 
$id_commentaire = (int) $_GET['id_commentaire']; 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "UPDATE `commentaire` SET  `id_atelier` =  '{$_POST['id_atelier']}' ,  `id_client` =  '{$_POST['id_client']}' ,  `contenu` =  '{$_POST['contenu']}' ,  `date_publication` =  '{$_POST['date_publication']}'   WHERE `id_commentaire` = '$id_commentaire' "; 
mysql_query($sql) or die(mysql_error()); 
echo (mysql_affected_rows()) ? "Edited row.<br />" : "Nothing changed. <br />"; 
echo "<a href='list.php' class='popup-button'>Back To Listing</a>"; 
} 
$row = mysql_fetch_array ( mysql_query("SELECT * FROM `commentaire` WHERE `id_commentaire` = '$id_commentaire' ")); 
?>

<form action='' method='POST'> 
<p><b>Id Atelier:</b><br /><input type='text' name='id_atelier' value='<?= stripslashes($row['id_atelier']) ?>' /> 
<p><b>Id Client:</b><br /><input type='text' name='id_client' value='<?= stripslashes($row['id_client']) ?>' /> 
<p><b>Contenu:</b><br /><input type='text' name='contenu' value='<?= stripslashes($row['contenu']) ?>' /> 
<p><b>Date Publication:</b><br /><input type='text' name='date_publication' value='<?= stripslashes($row['date_publication']) ?>' /> 
<p><input type='submit' class='popup-button' value='Edit Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
 
<?php } ?> 
