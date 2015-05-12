<HTML>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/view_style.css">
	</head>
<?php 

include_once('../data_base_connexion.php');  
echo "<table border=0 class='view' >"; 
echo "<tr>"; 
echo "<td><b>Id Atelier</b></td>"; 
echo "<td><b>Nom Atelier</b></td>"; 
echo "<td><b>Prix Atelier</b></td>"; 
echo "<td><b>Nbr Max</b></td>"; 
echo "<td><b>Nbr Inscrit</b></td>"; 
echo "<td><b>Date Atelier</b></td>"; 
echo "<td><b>Description Atelier</b></td>"; 
echo "<td><b>Note Atelier</b></td>"; 
echo "<td><b>Image Atelier</b></td>"; 
echo "<td><b>Type Atelier</b></td>"; 
echo "</tr>"; 
$result = mysql_query("SELECT * FROM `atelier`") or trigger_error(mysql_error()); 
while($row = mysql_fetch_array($result)){ 
foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 
echo "<tr>";  
echo "<td valign='top'>" . nl2br( $row['id_atelier']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['nom_atelier']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['prix_atelier']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['nbr_max']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['nbr_inscrit']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['date_atelier']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['description_atelier']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['note_atelier']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['image_atelier']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['type_atelier']) . "</td>";  
echo "<td valign='top'><a href=edit.php?id_atelier={$row['id_atelier']} class='popup-button'>Edit</a></td><td><a href=delete.php?id_atelier={$row['id_atelier']} class='popup-button'>Delete</a></td> "; 
echo "</tr>"; 
} 
echo "</table>"; 
echo "<a href=new.php class='popup-button'>New Row</a>"; 
?>