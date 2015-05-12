<HTML>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/view_style.css">
	</head>
<?php 

include_once('../data_base_connexion.php');  

echo "<table border=1 >"; 
echo "<tr>"; 
echo "<td><b>Id Chambre</b></td>"; 
echo "<td><b>Nom Chambre</b></td>"; 
echo "<td><b>Type Chambre</b></td>"; 
echo "<td><b>Image1 Chambre</b></td>"; 
echo "<td><b>Image2 Chambre</b></td>"; 
echo "<td><b>Image3 Chambre</b></td>"; 
echo "</tr>"; 
$result = mysql_query("SELECT * FROM `chambres`") or trigger_error(mysql_error()); 
while($row = mysql_fetch_array($result)){ 
foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 
echo "<tr>";  
echo "<td valign='top'>" . nl2br( $row['id_chambre']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['nom_chambre']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['type_chambre']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['image1_chambre']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['image2_chambre']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['image3_chambre']) . "</td>";  
echo "<td valign='top'><a href=edit.php?id_chambre={$row['id_chambre']} class='popup-button'>Edit</a></td><td><a href=delete.php?id_chambre={$row['id_chambre']} class='popup-button'>Delete</a></td> "; 
echo "</tr>"; 
} 
echo "</table>"; 
echo "<a href=new.php class='popup-button'>New Row</a>";  
?>