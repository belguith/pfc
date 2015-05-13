<HTML>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/view_style.css">
		
	</head>

<?php
include_once('../data_base_connexion.php');  
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "INSERT INTO `mailing_list` ( email) VALUES( '{$_POST['email']}' ) "; 
mysql_query($sql) or die(mysql_error()); 
echo "Added row.<br />"; 
echo "<a href='list.php'>Back To Listing</a>"; 
} 
?>

<form action='' method='POST'>
<p><b>Email:</b><br /><input type='text' name='email'/>  
<p><input type='submit' value='Add Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
