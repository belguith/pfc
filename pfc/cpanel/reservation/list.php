<HTML>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/view_style.css">
	</head>
<?php 

include_once('../data_base_connexion.php');  
echo "<table border=1 >"; 
echo "<tr>"; 
echo "<td><b>Id Client</b></td>"; 
echo "<td><b>Id Chambre</b></td>"; 
echo "<td><b>Date Reservation</b></td>"; 
echo "<td><b>Date Arrive</b></td>"; 
echo "<td><b>Date Depart</b></td>"; 
echo "</tr>"; 
$result = mysql_query("SELECT * FROM `reservation`") or trigger_error(mysql_error()); 
while($row = mysql_fetch_array($result)){ 
foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 
echo "<tr>";  
echo "<td valign='top'>" . nl2br( $row['id_client']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['id_chambre']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['date_reservation']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['date_arrive']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['date_depart']) . "</td>";  
echo "<td valign='top'><a href=edit.php?id_client={$row['id_client']}&id_chambre={$row['id_chambre']}&date_reservation={$row['date_reservation']} >Edit</a></td>
<td><a href=delete.php?id_client={$row['id_client']}&id_chambre={$row['id_chambre']}&date_reservation='{$row['date_reservation']}'>Delete</a></td> "; 
echo "</tr>"; 
} 
echo "</table>"; 
echo "<a href=new.php>New Row</a>"; 
?>