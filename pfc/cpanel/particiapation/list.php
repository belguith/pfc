<HTML>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/view_style.css">
	</head>
<?php 

include_once('../data_base_connexion.php'); 
echo "<table border=1 >"; 
echo "<tr>"; 
echo "<td><b>Id Client</b></td>"; 
echo "<td><b>Id Atelier</b></td>"; 
echo "<td><b>Date Participation</b></td>"; 
echo "</tr>"; 
$result = mysql_query("SELECT * FROM `participation`") or trigger_error(mysql_error()); 
while($row = mysql_fetch_array($result)){ 
foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 
echo "<tr>";  
echo "<td valign='top'>" . nl2br( $row['id_client']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['id_atelier']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['date_participation']) . "</td>";  
echo "<td valign='top'>
		<a href=edit.php?id_client={$row['id_client']}&id_atelier={$row['id_atelier']}&date_participation={$row['date_participation']} class='popup-button'>Edit</a></td>
	<td><a href=delete.php?id_client={$row['id_client']}&id_atelier={$row['id_atelier']}&date_participation={$row['date_participation']} class='popup-button'>Delete</a></td> "; 
echo "</tr>"; 
} 
echo "</table>"; 
echo "<a href=new.php class='popup-button'>New Row</a>"; 
?>