<HTML>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/view_style.css">
	</head>
<?php 

include_once('../data_base_connexion.php'); 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "INSERT INTO `atelier` ( `nom_atelier` ,  `prix_atelier` ,  `nbr_max` ,  `nbr_inscrit` ,  `date_atelier` ,  `description_atelier` ,  `note_atelier` ,  `image_atelier` ,  `type_atelier`  ) VALUES(  '{$_POST['nom_atelier']}' ,  '{$_POST['prix_atelier']}' ,  '{$_POST['nbr_max']}' ,  '{$_POST['nbr_inscrit']}' ,  '{$_POST['date_atelier']}' ,  '{$_POST['description_atelier']}' ,  '{$_POST['note_atelier']}' ,  '{$_POST['image_atelier']}' ,  '{$_POST['type_atelier']}'  ) "; 
mysql_query($sql) or die(mysql_error()); 
echo "Added row.<br />"; 
echo "<a href='list.php' class='popup-button' >Back To Listing</a>"; 
} 
?>

<form action='' method='POST'> 
<p><b>Nom Atelier:</b><br /><input type='text' name='nom_atelier'/> 
<p><b>Prix Atelier:</b><br /><input type='text' name='prix_atelier'/> 
<p><b>Nbr Max:</b><br /><input type='text' name='nbr_max'/> 
<p><b>Nbr Inscrit:</b><br /><input type='text' name='nbr_inscrit'/> 
<p><b>Date Atelier:</b><br /><input type='text' name='date_atelier'/> 
<p><b>Description Atelier:</b><br /><textarea name='description_atelier'></textarea> 
<p><b>Note Atelier:</b><br /><input type='text' name='note_atelier'/> 
<p><b>Image Atelier:</b><br /><input type='text' name='image_atelier'/> 
<p><b>Type Atelier:</b><br /><input type='text' name='type_atelier'/> 
<p><input type='submit' value='Add Row' class='popup-button'/><input type='hidden' value='1' name='submitted' /> 
</form> 
