<HTML>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/view_style.css">
	</head>
<?php 
include_once('../data_base_connexion.php'); 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "INSERT INTO `article` ( `lilbelle_article` ,  `description_article` ,  `image_article` ,  `date_article`  ) VALUES(  '{$_POST['lilbelle_article']}' ,  '{$_POST['description_article']}' ,  '{$_POST['image_article']}' ,  '{$_POST['date_article']}'  ) "; 
mysql_query($sql) or die(mysql_error()); 
echo "Added row.<br />"; 
echo "<a href='list.php' class='popup-button' >Back To Listing</a>"; 
} 
?>

<form action='' method='POST'> 
<p><b>Lilbelle Article:</b><br /><input type='text' name='lilbelle_article' required placeholder="Libelle article" maxlength="400" /> 
<p><b>Description Article:</b><br /><textarea name='description_article' required placeholder="Description de l'article" maxlength="400"></textarea> 
<p><b>Image Article:</b><br /><input type='text' name='image_article'required placeholder="URL de l'image" maxlength="400"/> 
<p><b>Date Article:</b><br /><input type='date' name='date_article'/> 
<p><input type='submit' class="popup-button" value='Add Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
