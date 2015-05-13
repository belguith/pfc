<? 
include('data_base_connexion.php'); 
$id_message = (int) $_GET['id_message']; 
mysql_query("DELETE FROM `mesage_client` WHERE `id_message` = '$id_message' ") ; 
echo (mysql_affected_rows()) ? "Row deleted.<br /> " : "Nothing deleted.<br /> "; 
?> 

<a href='list.php'>Back To Listing</a>