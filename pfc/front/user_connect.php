<?php


include_once('data_base_connexion.php');

$login=$_POST['login'];
$password=$_POST['password'];


// Recuperation de tous les password present dans la BDD
               $request="SELECT * FROM client WHERE (login ='".$login."'  AND motdepasse = '".$password."' )"; 
               $result = mysql_query($request) or die("Pb avec la requete: $request");
                

				
if(isset($_POST))
{
 
while($row=mysql_fetch_array($result))
{
	
if ($row['login']==$login)
  {
	if ($row['motdepasse']==$password)
    {
      session_start();
      $_SESSION['login']=$login;
      //$_SESSION['password']=$password;

      $isSessionActive = (session_status() == PHP_SESSION_ACTIVE);

      print_r($_SESSION);
	   
	HEADER('location:acceuil.php');
    }	
	else {echo "erreur";}
  }
  
  	
 
  
}

  }
 
?>

