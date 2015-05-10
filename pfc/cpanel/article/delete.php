<? 
include('config.php'); 
$id_article = (int) $_GET['id_article']; 
mysql_query("DELETE FROM `article` WHERE `id_article` = '$id_article' ") ; 
echo (mysql_affected_rows()) ? "Row deleted.<br /> " : "Nothing deleted.<br /> "; 
?> 

<a href='list.php'>Back To Listing</a>