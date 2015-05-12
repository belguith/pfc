<HTML>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/view_style.css">
	</head>
<?php 

include_once('../data_base_connexion.php');
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "INSERT INTO `excursion` ( `destination_excursion` ,  `lilbelle_excursion` ,  `date_debut` ,  `date_fin` ,  `imge_excursion`  ) VALUES(  '{$_POST['destination_excursion']}' ,  '{$_POST['lilbelle_excursion']}' ,  '{$_POST['date_debut']}' ,  '{$_POST['date_fin']}' ,  '{$_POST['imge_excursion']}'  ) "; 
mysql_query($sql) or die(mysql_error()); 
echo "Added row.<br />"; 
echo "<a href='list.php' class='popup-button'>Back To Listing</a>"; 
} 
?>

<form action='' method='POST'> 
<p><b>Destination Excursion:</b><br /><input type='text' name='destination_excursion'/> 
<p><b>Lilbelle Excursion:</b><br /><input type='text' name='lilbelle_excursion'/> 
<p><b>Date Debut:</b><br /><input type='text' name='date_debut'/> 
<p><b>Date Fin:</b><br /><input type='text' name='date_fin'/> 
<p><b>Imge Excursion:</b><br /><input type='text' name='imge_excursion'/> 
<p><input type='submit' class='popup-button' value='Add Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
