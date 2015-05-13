<HTML>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/view_style.css">
	</head>
<?php 

include_once('../data_base_connexion.php'); 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "INSERT INTO `commentaire` ( `id_atelier` ,  `id_client` ,  `contenu` ,  `date_publication`  ) VALUES(  '{$_POST['id_atelier']}' ,  '{$_POST['id_client']}' ,  '{$_POST['contenu']}' ,  '{$_POST['date_publication']}'  ) "; 
mysql_query($sql) or die(mysql_error()); 
echo "Added row.<br />"; 
echo "<a href='list.php' class='popup-button'>Back To Listing</a>"; 
} 
?>

<form action='' method='POST'> 
<p><b>Id Atelier:</b><br /><input type='text' name='id_atelier'required placeholder="ID atelier"  pattern="[0-9]{8}" maxlength="8"/> 
<p><b>Id Client:</b><br /><input type='text' name='id_client' required placeholder="ID client"  pattern="[0-9]{8}" maxlength="8"/> 
<p><b>Contenu:</b><br /><input type='text' name='contenu' required placeholder="contenu"   maxlength="50"/> 
<p><b>Date Publication:</b><br /><input type='date' name='date_publication'/> 
<p><input type='submit' value='Add Row' class='popup-button' /><input type='hidden' value='1' name='submitted' /> 
</form> 
