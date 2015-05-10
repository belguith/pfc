<? 
include('config.php'); 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "INSERT INTO `article` ( `lilbelle_article` ,  `description_article` ,  `image_article` ,  `date_article`  ) VALUES(  '{$_POST['lilbelle_article']}' ,  '{$_POST['description_article']}' ,  '{$_POST['image_article']}' ,  '{$_POST['date_article']}'  ) "; 
mysql_query($sql) or die(mysql_error()); 
echo "Added row.<br />"; 
echo "<a href='list.php'>Back To Listing</a>"; 
} 
?>

<form action='' method='POST'> 
<p><b>Lilbelle Article:</b><br /><input type='text' name='lilbelle_article'/> 
<p><b>Description Article:</b><br /><textarea name='description_article'></textarea> 
<p><b>Image Article:</b><br /><input type='text' name='image_article'/> 
<p><b>Date Article:</b><br /><input type='text' name='date_article'/> 
<p><input type='submit' value='Add Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
