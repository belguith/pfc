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
<p><b>Nom Client:</b><br /><input type='text' name='nom_client' required placeholder="Nom  client"   maxlength="100"/> 
<p><b>Prenom Client:</b><br /><input type='text' name='prenom_client' required placeholder=" Prenom client"   maxlength="100"/> 
<p><b>Mail Client:</b><br /><input type=email name='mail_client' required/> 
<p><b>Tel Client:</b><br /><input type=tel name='tel_client' required/> 
<p><b>Cin Client:</b><br /><input type='text' name='cin_client' required placeholder="CIN"  pattern="[0-9]{8}" maxlength="8"/> 
<p><b>Image Client:</b><br /><textarea name='image_client'  required placeholder="URL de l'image"   maxlength="1000"></textarea> 
<p><b>Login:</b><br /><input type='text' name='login'  required placeholder="Login"   maxlength="50"/> 
<p><b>Motdepasse:</b><br /><input type='text' name='motdepasse'  required placeholder="mot de passe"   maxlength="1000"/> 
<p><b>Role:</b><br /><input type='text' name='role' name='role'  required placeholder="role"  pattern="[0-9]{1}" maxlength="1"  /> 
<p><b>Code:</b><br /><input type='text' name='code' required placeholder=" code"   maxlength="10"/> 
<p><b>Active:</b><br /><input type='text' name='active' required/> 
<p><input type='submit' class='popup-button' value='Add Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
