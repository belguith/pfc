<?php
error_reporting(E_ALL ^ E_DEPRECATED);

include_once ('../cpanel/record_stat.php'); 
include_once('data_base_connexion.php');
session_start();

$stat=0;

if(isset($_SESSION['login'])){
  $stat=1;
}




				
if(isset($_POST['login']))
{
 $login=$_POST['login'];
$password=$_POST['password'];
$request = "SELECT * FROM client WHERE (login ='".$login."' AND motdepasse = '".$password."' )";
               $result = mysql_query($request) or die("Pb avec la requete: $request");
                

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

      $stat=1;
	   
	//HEADER('location:acceuil.php');
    }	
	else {
			$stat=-1;
			echo "erreur";
		}
  }
  
  	
 
  
}

  }

?>

<html>
    <head>
        		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <link rel="stylesheet" href="css/global.css" />
        <title>Respirez vous êtes à Dar-Tak</title>
		<link rel="stylesheet" href="css/popup_inscription.css" />
		 
		
		<link rel="shortcut icon" href="../favicon.ico">
		<!--JS Slider Entete -->
		<script src="js/modernizr.custom.js"></script>
		<script src="js/jquery-1.11.1.min.js"></script>
		<link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400|Titillium+Web:400' rel='stylesheet' type='text/css'>
		<link type='text/css' rel='Stylesheet' href='css/imageslidermaker.css' />
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic|Montserrat:400,700' rel='stylesheet' type='text/css'>
		<script src='js/jquery.min.js'></script>
		<script src='js/imageslidermaker.js'></script>
	
<script type="text/javascript">
    window.onload = function() {
    var stat=<?php echo $stat ;?>;
    if(stat==1){
    var x=document.getElementById("connexion_li").style.display="none";
    var y=document.getElementById("deconnexion_li").style.display="block";
    }
    else if(stat==0){
      var x=document.getElementById("connexion_li").style.display="block";
      var y=document.getElementById("deconnexion_li").style.display="none";
    }
    else{
      var x=document.getElementById("connexion_li").style.display="block";
      var y=document.getElementById("deconnexion_li").style.display="none";
      alert('Identifiant ou mot de passe incorrecte !');
    }
    }
    </script>		
			
 </head>
    <body>
	
        <div id="bloc_page">
		
		  
			
		 <header>
			<!-- Begin POPUP -->

		<div class="modal blur-effect" id="popup">
			<div class="popup-content">
				<h3>Inscription</h3>
				<div>
					<p class="para">Veuillez remplir le formulaire suivant:</p>
					
					<form name="inscription_formulaire" method="POST" action="user_subscribe.php">
					<input type="text" placeholder="Nom" name="nom" required maxlength="20"/>
					<input type="text" placeholder="Prénom" name="prenom" required maxlength="20"  />
				    <input type="text" placeholder="CIN" name="cin" required pattern="[0-9]{8}" maxlength="8"/>
				    <input type="email" placeholder="E-mail" name="email" required/>
				    <input type="tel" placeholder="Numèro de téléphone" name="num_tel" required pattern=".{8,}" maxlength="15"/>
					<input type="text" placeholder="Pseudo" name="pseudo" required pattern=".{6,}" />
					<input type="password" placeholder="Mot de passe" name="motdepasse" equired pattern=".{6,}"/>
					<div id="captcha_bloc">
						<form action="verification_captcha.php" method="post">
							
							<label for="captcha">Recopiez le mot : </br><img src="captcha.php" alt="Captcha" /></label> 
							<input type="text" name="captcha" id="captcha" />
							<button  name="captcha_btn" class="popup-button">Valider</button>
							
						</form>

					 </div>

					<input name="submit" type="submit"  class="sub" value="" />

					
					<?php
					if(isset($_POST['captcha_btn']))
					{
						if(isset($_POST['submit']))
						{

						echo "<p> Your Acount Have been made </p>";
					
						}
					}
					
					?>
					
					</form>
					
					<div class="close"></div>
				</div>
			</div>
		</div>
												
		
		<!-- End POPUP  -->
               
				
			<img src="img/logo_aboutus.png" alt="Logo Dar-Tak" id="logo_s" />
                
                <nav>
				
                    <ul>
                        <li><a href="index.php">Accueil</a> </li>
						<li> | </li>
						<li><a href="activites.php">Activitées</a></li>
						<li> | </li>
                        <li><a href="ateliers_principal.php">Ateliers</a></li>
						<li> | </li>
						<li><a href="reservation.php">Tarifs & Réservation</a></li>
						<li> | </li>
						<li><a href="galerie.php">Gallerie</a></li>
						<li> | </li>
                        <li><a href="contact.php">Contact</a></li>
						
						
						

                    </ul>
                </nav>
				
				<div id="login_form">
				<ul>
				<li id="connexion_li">

				<a href="" class="connexion_lien">Connexion</a>
				<!-- Begin show form on hover  -->
				<ul>
					<form name="Connexion" method="POST" action="" >
						<li> <input type="text" placeholder="Login" name="login"></li>
						<li><input type="password" placeholder="Password" name="password"></li>
						<li><input type="submit"  name="connexion_btn" value="connexion" class="popup-button"></li>
						

					</form>
						
				<button class="popup-button" data-modal="popup">Inscription</button> 		
				</ul>
				<!-- end show form on hover  -->
				
				</li>

				<li id="deconnexion_li">
					<a href="" class="connexion_lien"> Deconnexion </a>
				<ul>
					<form name="deconnexion" method="POST" action="user_disconnect.php" >
						<li> <?php echo $_SESSION['login'];  ?></li>
						<li><input type="submit"  name="deconnexion_btn" value="Deconnexion" class="popup-button"></li>
						 
					</form>
				 		
				</ul>
				<!-- end show form on hover  -->

				</li>
				
				</ul>
				
            
        
				
				
				</div>
				
            </header>
            
			<div id="container">
			
			   <div class="container_contact">
			     <p class="titre_contact">Plan d'accès</p>
			     <p class="ligne"></p>
				 <div class="googleMaps">
				  <script type="text/javascript" src="http://www.supportduweb.com/google_map_gen.js?lati=36.649921&long=10.599861&zoom=10&width=1120&height=340&mapType=normal&map_btn_normal=yes&map_btn_satelite=yes&map_btn_mixte=yes&map_btn_relief=yes&map_search=yes&map_small=yes&marqueur=yes&info_bulle=DarTak"></script><br /><a href="http://www.supportduweb.com/generateur-cartes-google-maps-mettre-cartes-google-map-sur-son-site-gratuitement-gadget-widget.html"></a>
				 
				 </div>
				 
				 <p class="titre_contact">Adresse</p>
				 <p class="ligne"></p>
				 
				 <ul class="adresse_label">
				 <?php
			 $req="SELECT * from info_dartak";
			 $exc=mysql_query($req);
			 $row=mysql_fetch_array($exc);
			 
			 echo"<li>" .$row['adresse1']. "</li>";
			 
			 
			
			 echo"<li>".$row['adresse2']."</li>";
			 
			 
			 
			 echo"<li>".$row['adresse3']."</li>";
			 ?>
			 
			    </ul>
			
			  <p class="titre_contact">Renseignements</p>
				<p class="ligne"></p>
				 <ul>
			<table>
			<tr>
			 <td>
			 
			<li class='adresse_label'>Téléphone renseignement:</li>
			 </td>
			 <td>
			<?php
			 echo"<p class='adress_data'>".$row['tel_rensaignement']."</p>";
			 ?>
			 </td>
			 </tr>
			 <tr>
			 <td>
			 <li class="adresse_label">Téléphone restauration midi: </li>
			 </td>
			 <td>
			 <?php
			echo"<p class='adress_data'>".$row['tel_jour']."</p>";
			?>
			 </td>
			 </tr>
			 <tr>
			 <td>
			 <li class="adresse_label">Téléphone restauration soir: </li>
			 </td>
			 <td>
			 <?php
			 echo"<p class='adress_data'>".$row['tel_soir']."</p>";
			  ?>
			 </td>
			 </tr>
			 <tr>
			 <td>
			 <li class="adresse_label">Téléphone Hébergement: </li>
			 </td>
			 <td>
			 <?php
			 echo"<p class='adress_data'>".$row['tel_hebergement']."</p>";
			 ?>
			 </td>
			 </tr>
			 <tr>
			 <td>
			 <li class="adresse_label">Adresse Email:</li>
			 </td>
			 <td>
			 <?php
			 echo"<p class='adress_data'>".$row['email']."</p>";
			 ?>
			 </td>
			 </tr>
			 </table>
			</ul>
				 
			<p class="titre_contact">Contact</p>
				 <p class="ligne"></p>

                <form name="form_contact" method="POST" action="insert_contact.php">
			<table>
			<tr>
			<td><p class="formulaire1">Nom</p></td>
			<td><input type="text" name="nom" placeholder="Nom" class="formulaire" required maxlength="20"></td>
			</tr>
			<tr>
			<td><p class="formulaire1">Prénom</p></td>
			<td><input type="text" name="prenom" placeholder="Prenom" class="formulaire" required maxlength="20"></td>
			</tr>
			<tr>
			<td><p class="formulaire1">Email</p></td>
			<td><input type="email" name="email" placeholder="E-mail" class="formulaire" required></td>
			</tr>
			<tr>
			<td><p class="formulaire1">Numéro de téléphone</p></td>
			<td><input type="text" name="Num_tel" placeholder="Num tel" class="formulaire" required pattern=".{8,}" maxlength="15"></td>
			</tr>
			<tr>
			<td><p class="formulaire1">Message</p></td>
			<td><textarea name="message" cols="26" rows="3" class="message" placeholder="Message specifique" required ></textarea>
			</tr>
			
		</table>
		<input type="submit" name="envoyer" value="Envoyer"class="popup-button">
			</form>				 
			   </div>
			    
			</div>
          
           		
           
			
			<div class="footer">
              <div id="footer_gauche"> 
			
                    <dl class="plan_site">
					     <dd class="titre_footer">Contact </dd>
						 <p class="contact">Adresse:Béni Khalled-Nabeul </p>
					
						 <p class="contact">Numéro de téléphone:72585969</p>
						  <p class="contact">  E-mail:maisondartak@gmail.com</p>
                    </dl>
               
			</div>
			
			 <div id="footer_droite"> 
				
                    <dl class="plan_site">
					     <dd class="titre_footer"> Suivez-Nous </dd>
						  <img src="img/gplus.png" class="gplus"/>
						  <img src="img/tweeter.png" class="tw"/>
						    <img src="img/facebook.png" class="fb"/>
							<img src="img/instagram.png" class="insta"/>
							</br>
							<form name="newsletter" method="post">
							<p class="newsletter">recevoir les notifications des nouveaux articles par courriel </p>
						     <input type="text" name="mail" placeholder="newsletter" class="newletter_input"> 
							  <input type="submit" name="submit" value="valider" class="popup-button" > 
                            </form>
                    </dl>
               
			
			   </div>
			   
			   <div id="footer_centre"> 
				
                    <dl class="plan_site">
					     <dd class="titre_footer"> Nos partenaires</dd>
						 <dd><img src="img/travel.png" class="partenaire"/></dd>
						 <dd><img src="img/tunisair.png" class="partenaire"/></dd>
						 <dd><img src="img/syphax.png" class="partenaire"/></dd>
                         

                        
                    </dl>
               
			
			   </div>
			   
			  
			    
			   
			   
            </div>
            
			
			
        </div>
		<script src="js/popup.js"></script>
				<script>
			// this is important for IEs
			var polyfilter_scriptpath = '/js/';
		</script>
<script src="js/cssParser.js"></script>

		<script src="js/css-filters-polyfill.js"></script>
		
    </body>
</html>