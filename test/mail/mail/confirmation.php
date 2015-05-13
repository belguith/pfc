<?php

// Connect to server and select databse.
include 'connexion.php';

$email=($_GET['email']);



//Retrieve data from table register to know if he is activated before
$sql11="SELECT * FROM `utilisateur` WHERE mail ='$email'";
$result11=mysqli_query($idcon,$sql11);



///STEP 1////

// If successfully queried 
if($result11){
$count1=mysqli_num_rows($result11);
// if found this email in our database, retrieve data from table "registered_members"
if($count1==1){
echo "Your account is already active !";}

}


///STEP 2////

// If successfully queried 
// Retrieve data from table where row that match this passkey 
$sql1="SELECT * FROM `utilisateurtemp` WHERE mail='$email'";
$result1=mysqli_query($idcon,$sql1);

if($result1){

// Count how many row has this passkey
$count=mysqli_num_rows($result1);

// if found this passkey in our database, retrieve data from table "temp_members_db"
if($count==1){

$rows=mysqli_fetch_assoc($result1);
$cin=$rows['cin'];
$nom=$rows['nom'];
$prenom=$rows['prenom'];
$mail=$rows['mail'];
$password=$rows['password']; 
$adresse=$rows['adresse'];
$date_nais=$rows['date_nais'];
$sexe=$rows['sexe'];
$email=$rows['mail'];
$telephone=$rows['tel'];
$login=$rows['username'];
$password=$rows['password'];
$categorie=$rows['categorie'];
?>
<br>
<?php
$sql2="INSERT INTO `utilisateur` VALUES 
('$cin','$adresse','$nom','$prenom','$date_nais','$sexe','$mail','$telephone','$login','$password','$categorie')";
$result2=mysqli_query($idcon,$sql2);

// if successfully moved data from table"temp_members_db" to table "registered_members" displays message "Your account has been activated" and don't forget to delete confirmation code from table "temp_members_db"
if($result2){

echo "Your account has been activated";

// Delete information of this user from table "temp_members_db" 
$sql3="DELETE FROM utilisateurtemp WHERE mail = '$mail'";
$result3=mysqli_query($idcon,$sql3);
header("Refresh: 2; url=index.php");
}
}

else 
{
echo "Wrong Confirmation code";
 header("Refresh: 2; url=index.php");
}
}
?>
