<?php
include_once('../data_base_connexion.php'); 
echo "<table border=1 >"; 
echo "<tr>"; 
echo "<td><b>Id Article</b></td>"; 
echo "<td><b>Lilbelle Article</b></td>"; 
echo "<td><b>Description Article</b></td>"; 
echo "<td><b>Image Article</b></td>"; 
echo "<td><b>Date Article</b></td>"; 
echo "</tr>"; 
$result = mysql_query("SELECT * FROM `article`") or trigger_error(mysql_error()); 
while($row = mysql_fetch_array($result)){ 
foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 
echo "<tr>";  
echo "<td valign='top'>" . nl2br( $row['id_article']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['lilbelle_article']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['description_article']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['image_article']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['date_article']) . "</td>";  
echo "<td valign='top'><a href=edit.php?id_article={$row['id_article']}>Edit</a></td><td><a href=delete.php?id_article={$row['id_article']}>Delete</a></td> "; 
echo "</tr>"; 
} 
echo "</table>"; 
echo "<a href=new.php>New Row</a>"; 
?>