<HTML>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/view_style.css">
	</head>
<?php 

include_once('../data_base_connexion.php');  

  
echo "<table border=0 >"; 
echo "<tr>"; 
echo "<td><b>Id Client</b></td>"; 
echo "<td><b>Nom Client</b></td>"; 
echo "<td><b>Prenom Client</b></td>"; 
echo "<td><b>Mail Client</b></td>"; 
echo "<td><b>Tel Client</b></td>"; 
echo "<td><b>Cin Client</b></td>"; 
echo "<td><b>Image Client</b></td>"; 
echo "<td><b>Login</b></td>"; 
echo "<td><b>Motdepasse</b></td>"; 
echo "<td><b>Role</b></td>"; 
echo "<td><b>Code</b></td>"; 
echo "<td><b>Active</b></td>"; 
echo "</tr>"; 
$result = mysql_query("SELECT * FROM `client`") or trigger_error(mysql_error()); 
while($row = mysql_fetch_array($result)){ 
foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 
echo "<tr>";  
echo "<td valign='top'>" . nl2br( $row['id_client']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['nom_client']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['prenom_client']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['mail_client']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['tel_client']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['cin_client']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['image_client']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['login']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['motdepasse']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['role']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['code']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['active']) . "</td>";  
echo "<td valign='top'><a href=edit.php?id_client={$row['id_client']} class='popup-button'>Edit</a></td><td><a href=delete.php?id_client={$row['id_client']} class='popup-button'>Delete</a></td> "; 
echo "</tr>"; 
} 
echo "</table>"; 
echo "<a href=new.php class='popup-button'>New Row</a>"; 
?>