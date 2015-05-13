<? 
include('data_base_connexion.php'); 
echo "<table border=1 >"; 
echo "<tr>"; 
echo "<td><b>Id Message</b></td>"; 
echo "<td><b>Nom</b></td>"; 
echo "<td><b>Prenom</b></td>"; 
echo "<td><b>Email</b></td>"; 
echo "<td><b>Num Tel</b></td>"; 
echo "<td><b>Contenu</b></td>"; 
echo "</tr>"; 
$result = mysql_query("SELECT * FROM `mesage_client`") or trigger_error(mysql_error()); 
while($row = mysql_fetch_array($result)){ 
foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 
echo "<tr>";  
echo "<td valign='top'>" . nl2br( $row['id_message']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['nom']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['prenom']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['email']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['num_tel']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['contenu']) . "</td>";  
echo "<td valign='top'><a href=edit.php?id_message={$row['id_message']}>Edit</a></td><td><a href=delete.php?id_message={$row['id_message']}>Delete</a></td> "; 
echo "</tr>"; 
} 
echo "</table>"; 
echo "<a href=new.php>New Row</a>"; 
?>