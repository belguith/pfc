<HTML>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/view_style.css">
	</head>
<?php 

include_once('../data_base_connexion.php'); 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "INSERT INTO `chambres` ( `nom_chambre` ,  `type_chambre` ,  `image1_chambre` ,  `image2_chambre` ,  `image3_chambre`  ) VALUES(  '{$_POST['nom_chambre']}' ,  '{$_POST['type_chambre']}' ,  '{$_POST['image1_chambre']}' ,  '{$_POST['image2_chambre']}' ,  '{$_POST['image3_chambre']}'  ) "; 
mysql_query($sql) or die(mysql_error()); 
echo "Added row.<br />"; 
echo "<a href='list.php' class='popup-button'>Back To Listing</a>"; 
} 
?>

<form action='' method='POST'> 
 
<p><b>Nom Chambre:</b><br /><input type='text' name='nom_chambre'/> 
<p><b>Type Chambre:</b><br /><input type='text' name='type_chambre'/> 
<p><b>Image1 Chambre:</b><br /><input type='text' name='image1_chambre'/> 
<p><b>Image2 Chambre:</b><br /><input type='text' name='image2_chambre'/> 
<p><b>Image3 Chambre:</b><br /><input type='text' name='image3_chambre'/> 
<p><input type='submit' class='popup-button' value='Add Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 

