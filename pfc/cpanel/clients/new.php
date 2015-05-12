<HTML>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/view_style.css">
	</head>

<?php 
include_once('../data_base_connexion.php');  
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "INSERT INTO `client` ( `nom_client` ,  `prenom_client` ,  `mail_client` ,  `tel_client` ,  `cin_client` ,  `image_client` ,  `login` ,  `motdepasse` ,  `role` ,  `code` ,  `active`  ) VALUES(  '{$_POST['nom_client']}' ,  '{$_POST['prenom_client']}' ,  '{$_POST['mail_client']}' ,  '{$_POST['tel_client']}' ,  '{$_POST['cin_client']}' ,  '{$_POST['image_client']}' ,  '{$_POST['login']}' ,  '{$_POST['motdepasse']}' ,  '{$_POST['role']}' ,  '{$_POST['code']}' ,  '{$_POST['active']}'  ) "; 
mysql_query($sql) or die(mysql_error()); 
echo "Added row.<br />"; 
echo "<a href='list.php' class='popup-button'>Back To Listing</a>"; 
} 
?>

<form action='' method='POST'> 
<p><b>Nom Client:</b><br /><input type='text' name='nom_client'/> 
<p><b>Prenom Client:</b><br /><input type='text' name='prenom_client'/> 
<p><b>Mail Client:</b><br /><input type='text' name='mail_client'/> 
<p><b>Tel Client:</b><br /><input type='text' name='tel_client'/> 
<p><b>Cin Client:</b><br /><input type='text' name='cin_client'/> 
<p><b>Image Client:</b><br /><textarea name='image_client'></textarea> 
<p><b>Login:</b><br /><input type='text' name='login'/> 
<p><b>Motdepasse:</b><br /><input type='text' name='motdepasse'/> 
<p><b>Role:</b><br /><input type='text' name='role'/> 
<p><b>Code:</b><br /><input type='text' name='code'/> 
<p><b>Active:</b><br /><input type='text' name='active'/> 
<p><input type='submit' class='popup-button' value='Add Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
