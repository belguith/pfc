<? 
include('data_base_connexion.php'); 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "INSERT INTO `mesage_client` ( `nom` ,  `prenom` ,  `email` ,  `num_tel` ,  `contenu`  ) VALUES(  '{$_POST['nom']}' ,  '{$_POST['prenom']}' ,  '{$_POST['email']}' ,  '{$_POST['num_tel']}' ,  '{$_POST['contenu']}'  ) "; 
mysql_query($sql) or die(mysql_error()); 
echo "Added row.<br />"; 
echo "<a href='list.php'>Back To Listing</a>"; 
} 
?>

<form action='' method='POST'> 
<p><b>Nom:</b><br /><input type='text' name='nom'/> 
<p><b>Prenom:</b><br /><input type='text' name='prenom'/> 
<p><b>Email:</b><br /><input type='text' name='email'/> 
<p><b>Num Tel:</b><br /><input type='text' name='num_tel'/> 
<p><b>Contenu:</b><br /><textarea name='contenu'></textarea> 
<p><input type='submit' value='Add Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
