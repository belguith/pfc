<HTML>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/view_style.css">
		
	</head>

<?php
include_once('../data_base_connexion.php');  
 
echo "<table border=1 >"; 
echo "<tr>"; 
echo "<td><b>Email</b></td>"; 
echo "</tr>"; 
$result = mysql_query("SELECT * FROM `mailing_list`") or trigger_error(mysql_error()); 
while($row = mysql_fetch_array($result)){ 
foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 
echo "<tr>";  
echo "<td valign='top'>" . nl2br( $row['email']) . "</td>";  
echo "<td valign='top'><a href=edit.php?email='{$row['email']}'>Edit</a></td><td><a href=delete.php?email='{$row['email']}'>Delete</a></td> "; 
echo "</tr>"; 
} 
echo "</table>"; 
echo "<a href=new.php>New Row</a>"; 
?>