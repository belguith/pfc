<HTML>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/view_style.css">
	</head>
<?php 

include_once('../data_base_connexion.php'); 
echo "<table border=1 >"; 
echo "<tr>"; 
echo "<td><b>Id Excursion</b></td>"; 
echo "<td><b>Destination Excursion</b></td>"; 
echo "<td><b>Lilbelle Excursion</b></td>"; 
echo "<td><b>Date Debut</b></td>"; 
echo "<td><b>Date Fin</b></td>"; 
echo "<td><b>Imge Excursion</b></td>"; 
echo "</tr>"; 
$result = mysql_query("SELECT * FROM `excursion`") or trigger_error(mysql_error()); 
while($row = mysql_fetch_array($result)){ 
foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 
echo "<tr>";  
echo "<td valign='top'>" . nl2br( $row['id_excursion']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['destination_excursion']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['lilbelle_excursion']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['date_debut']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['date_fin']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['imge_excursion']) . "</td>";  
echo "<td valign='top'><a href=edit.php?id_excursion={$row['id_excursion']} class='popup-button'>Edit</a></td><td><a href=delete.php?id_excursion={$row['id_excursion']} class='popup-button'>Delete</a></td> "; 
echo "</tr>"; 
} 
echo "</table>"; 
echo "<a href=new.php class='popup-button'>New Row</a>"; 
?>