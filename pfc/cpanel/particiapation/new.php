<HTML>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/view_style.css">
	</head>
<?php 

include_once('../data_base_connexion.php'); 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "INSERT INTO `participation` (`id_client`,  `id_atelier` ,  `date_participation`  ) 
				VALUES( '{$_POST['id_client']}', '{$_POST['id_atelier']}' ,  '{$_POST['date_participation']}'  ) "; 
mysql_query($sql) or die(mysql_error()); 
echo "Added row.<br />"; 
echo "<a href='list.php' class='popup-button'>Back To Listing</a>"; 
} 
?>

<form action='' method='POST'> 
<p><b>Id Client:</b><br /><input type='text' name='id_client'/>
<p><b>Id Atelier:</b><br /><input type='text' name='id_atelier'/> 
<p><b>Date Participation:</b><br /><input type='text' name='date_participation'/> 
<p><input type='submit' class='popup-button' value='Add Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
