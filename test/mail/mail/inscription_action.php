<?php
include 'tets.php';
include 'connexion.php';
$nom=($_POST['nom']);
$prenom=($_POST['prenom']);
$cin=($_POST['cin']);
$sexe = ($_POST['gender']);
$date_nais=($_POST['date']);
$adresse=($_POST['adresse']);
$email=($_POST['email']);
$telephone=($_POST['tel']);
$login=$_POST['log'];
$password$_POST['mdp']);

$requette="SELECT * FROM `utilisateurtemp` WHERE `mail`='$email'";
$rep=mysqli_query($idcon,$requette);
$count=mysqli_num_rows($rep);
if($count==0)
{
$requet="INSERT INTO `utilisateurtemp` values
('$cin','$adresse','$nom','$prenom','$date_nais','$sexe','$email','$telephone','$login','$password','$categorie')";
mysqli_query($idcon,$requet);

$to=$email;
//$message="Your Comfirmation link \r\n";
//$message."Click on this link to activate your account \r\n";
$message="http://127.0.0.1/web/confirmation.php?email=$email";
// send email
mailing($to,$message);
header('location:index.php');
}
else
	header('location:index.php');

?>
