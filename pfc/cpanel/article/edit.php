<HTML>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/view_style.css">
	</head>
<?php 
include_once('../data_base_connexion.php');  
if (isset($_GET['id_article']) ) { 
$id_article = (int) $_GET['id_article']; 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "UPDATE `article` SET  `lilbelle_article` =  '{$_POST['lilbelle_article']}' ,  `description_article` =  '{$_POST['description_article']}' ,  `image_article` =  '{$_POST['image_article']}' ,  `date_article` =  '{$_POST['date_article']}'   WHERE `id_article` = '$id_article' "; 
mysql_query($sql) or die(mysql_error()); 
echo (mysql_affected_rows()) ? "Edited row.<br />" : "Nothing changed. <br />"; 
echo "<a href='list.php' class='popup-button' >Back To Listing</a>"; 
} 
$row = mysql_fetch_array ( mysql_query("SELECT * FROM `article` WHERE `id_article` = '$id_article' ")); 
?>

<form action='' method='POST'> 
<p><b>Lilbelle Article:</b><br /><input type='text' name='lilbelle_article' required placeholder="Libelle article" maxlength="400" value='<?= stripslashes($row['lilbelle_article']) ?>' /> 
<p><b>Description Article:</b><br /><textarea name='description_article' required placeholder="Description de l'article" maxlength="400"><?= stripslashes($row['description_article']) ?></textarea> 
<p><b>Image Article:</b><br /><input type='text' name='image_article' required placeholder="URL de l'image"   maxlength="1000" value='<?= stripslashes($row['image_article']) ?>' /> 
<p><b>Date Article:</b><br /><input type='date' name='date_article' value='<?= stripslashes($row['date_article']) ?>' /> 
<p><input type='submit' class="popup-button" value='Edit Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
<?php } 
?> 
