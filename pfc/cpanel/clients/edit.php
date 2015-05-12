<HTML>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/view_style.css">
	</head>
<?php 

include_once('../data_base_connexion.php');  
if (isset($_GET['id_client']) ) { 
$id_client = (int) $_GET['id_client']; 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "UPDATE `client` SET  `id_client` =  '{$_POST['id_client']}' ,  `nom_client` =  '{$_POST['nom_client']}' ,  `prenom_client` =  '{$_POST['prenom_client']}' ,  `mail_client` =  '{$_POST['mail_client']}' ,  `tel_client` =  '{$_POST['tel_client']}' ,  `cin_client` =  '{$_POST['cin_client']}' ,  `image_client` =  '{$_POST['image_client']}' ,  `login` =  '{$_POST['login']}' ,  `motdepasse` =  '{$_POST['motdepasse']}' ,  `role` =  '{$_POST['role']}' ,  `code` =  '{$_POST['code']}' ,  `active` =  '{$_POST['active']}'   WHERE `id_client` = '$id_client' "; 
mysql_query($sql) or die(mysql_error()); 
echo (mysql_affected_rows()) ? "Edited row.<br />" : "Nothing changed. <br />"; 
echo "<a href='list.php' class='popup-button'>Back To Listing</a>"; 
} 
$row = mysql_fetch_array ( mysql_query("SELECT * FROM `client` WHERE `id_client` = '$id_client' ")); 
?>

<form action='' method='POST'> 
<p><b>Id Client:</b><br /><input type='text' name='id_client' value='<?= stripslashes($row['id_client']) ?>' /> 
<p><b>Nom Client:</b><br /><input type='text' name='nom_client' value='<?= stripslashes($row['nom_client']) ?>' /> 
<p><b>Prenom Client:</b><br /><input type='text' name='prenom_client' value='<?= stripslashes($row['prenom_client']) ?>' /> 
<p><b>Mail Client:</b><br /><input type='text' name='mail_client' value='<?= stripslashes($row['mail_client']) ?>' /> 
<p><b>Tel Client:</b><br /><input type='text' name='tel_client' value='<?= stripslashes($row['tel_client']) ?>' /> 
<p><b>Cin Client:</b><br /><input type='text' name='cin_client' value='<?= stripslashes($row['cin_client']) ?>' /> 
<p><b>Image Client:</b><br /><textarea name='image_client'><?= stripslashes($row['image_client']) ?></textarea> 
<p><b>Login:</b><br /><input type='text' name='login' value='<?= stripslashes($row['login']) ?>' /> 
<p><b>Motdepasse:</b><br /><input type='text' name='motdepasse' value='<?= stripslashes($row['motdepasse']) ?>' /> 
<p><b>Role:</b><br /><input type='text' name='role' value='<?= stripslashes($row['role']) ?>' /> 
<p><b>Code:</b><br /><input type='text' name='code' value='<?= stripslashes($row['code']) ?>' /> 
<p><b>Active:</b><br /><input type='text' name='active' value='<?= stripslashes($row['active']) ?>' /> 
<p><input type='submit' class='popup-button' value='Edit Row' /><input type='hidden' value='1' name='submitted' /> 
</form>
<?php } ?> 
