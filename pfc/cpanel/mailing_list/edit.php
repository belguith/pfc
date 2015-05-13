<HTML>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/view_style.css">
		
	</head>

<?php
include_once('../data_base_connexion.php'); 
if (isset($_GET['email']) ) { 
$email = (int) $_GET['email']; 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "UPDATE `mailing_list` SET   WHERE `email` = '".$email."' "; 
mysql_query($sql) or die(mysql_error()); 
echo (mysql_affected_rows()) ? "Edited row.<br />" : "Nothing changed. <br />"; 
echo "<a href='list.php'>Back To Listing</a>"; 
} 
$row = mysql_fetch_array ( mysql_query("SELECT * FROM `mailing_list` WHERE `email` = '$email' ")); 
?>

<form action='' method='POST'> 
<p><b>E-mail:</b><br /><input type='text' name='email' value='<?= stripslashes($row['email']) ?>' />
<p><input type='submit' value='Edit Row' /><input type='hidden' value='1' name='submitted' /> 
</form>
<?php } ?> 
