<? 
include('data_base_connexion.php'); 
if (isset($_GET['id_message']) ) { 
$id_message = (int) $_GET['id_message']; 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "UPDATE `mesage_client` SET  `nom` =  '{$_POST['nom']}' ,  `prenom` =  '{$_POST['prenom']}' ,  `email` =  '{$_POST['email']}' ,  `num_tel` =  '{$_POST['num_tel']}' ,  `contenu` =  '{$_POST['contenu']}'   WHERE `id_message` = '$id_message' "; 
mysql_query($sql) or die(mysql_error()); 
echo (mysql_affected_rows()) ? "Edited row.<br />" : "Nothing changed. <br />"; 
echo "<a href='list.php'>Back To Listing</a>"; 
} 
$row = mysql_fetch_array ( mysql_query("SELECT * FROM `mesage_client` WHERE `id_message` = '$id_message' ")); 
?>

<form action='' method='POST'> 
<p><b>Nom:</b><br /><input type='text' name='nom' value='<?= stripslashes($row['nom']) ?>' /> 
<p><b>Prenom:</b><br /><input type='text' name='prenom' value='<?= stripslashes($row['prenom']) ?>' /> 
<p><b>Email:</b><br /><input type='text' name='email' value='<?= stripslashes($row['email']) ?>' /> 
<p><b>Num Tel:</b><br /><input type='text' name='num_tel' value='<?= stripslashes($row['num_tel']) ?>' /> 
<p><b>Contenu:</b><br /><textarea name='contenu'><?= stripslashes($row['contenu']) ?></textarea> 
<p><input type='submit' value='Edit Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
<? } ?> 
