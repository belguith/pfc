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
<p><b>Nom Atelier:</b><br /><input type='text' name='nom_atelier'required placeholder="Nom atelier"   maxlength="100"/> 
<p><b>Prix Atelier:</b><br /><input type='text' name='prix_atelier' required placeholder="Prix atelier" pattern="[0-9]{2}" maxlength="8"/> 
<p><b>Nbr Max:</b><br /><input type='text' name='nbr_max'  required placeholder="Nombre max"  pattern="[0-9]{2}" maxlength="8"/> 
<p><b>Nbr Inscrit:</b><br /><input type='text' name='nbr_inscrit' required placeholder="Nombre inscrit"  pattern="[0-9]{2}" maxlength="2"/> 
<p><b>Date Atelier:</b><br /><input type='date' name='date_atelier'/> 
<p><b>Description Atelier:</b><br /><textarea name='description_atelier' required placeholder="Description Atelier"   maxlength="1000"></textarea> 
<p><b>Note Atelier:</b><br /><input type='text' name='note_atelier' required placeholder="Note atelier" pattern="[0-9]{2}" maxlength="2"/> 
<p><b>Image Atelier:</b><br /><input type='text' name='image_atelier' required placeholder="URL de l'image"   maxlength="1000"/> 
<p><b>Type Atelier:</b><br /><input type='text' name='type_atelier' required placeholder="Type atelier"   maxlength="500"/> 
<p><input type='submit' value='Add Row' class='popup-button'/><input type='hidden' value='1' name='submitted' /> 
</form> 
