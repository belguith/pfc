<?php
 include_once('data_base_connexion.php');
 ?>

<html>
    <head>
        <meta charset="utf-8" />
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
					
					<input type="submit" class="popup-button" value="je m'inscris" />
					</form>
					
					<div class="close"></div>
				</div>
			</div>
		</div>
		
		<!-- End POPUP  -->
               
				
			<img src="img/logo_aboutus.png" alt="Logo Dar-Tak" id="logo_s" />
                
                <nav>
				
                     <ul>
                        <li><a href="acceuil.html">Accueil</a> </li>
						<li> | </li>
						<li><a href="activites.html">Activitées</a></li>
						<li> | </li>
                        <li><a href="ateliers_principal.html">Ateliers</a></li>
						<li> | </li>
						<li><a href="reservation.html">Tarifs & Réservation</a></li>
						<li> | </li>
						<li><a href="#">Gallerie</a></li>
						<li> | </li>
                        <li><a href="contact.html">Contact</a></li>
						
						
						

                    </ul>
                </nav>
				
				<div id="login_form">
				<ul>
				<li>
				<a href="#" class="connexion_lien" >Connexion</a>
				<!-- Begin show form on hover  -->
				<ul>
					<form name="Connexion" action="">
						<li> <input type="text" placeholder="Login" name="login"></li>
						<li><input type="password" placeholder="Password" name="Password"></li>
						<li><input type="submit"  name="connect-btn" value="connexion" class="popup-button"></li>
						

					</form>
						
				<button class="popup-button" data-modal="popup">Inscription</button> 		
				</ul>
				<!-- end show form on hover  -->
				
				</li>
				
				</ul>
				
            
        
				
				
				</div>
            </header>
            
			<div id="container">
			<h2> L'Art culinaire </h2>
			
			 <div class="description_atelier"> 
			 <p class="desc_at">     Au coeur de DarTak, Nos chefs ont aménagé un espace convivial dédié à la gourmandise  pour vous faire découvrir les plats typiques tunisiens: bienvenue dans l’art culinaire et la gastronomie !

Des cours de cuisine pour satisfaire vos papilles avec de nombreuses et goûteuses saveurs, des animations culinaires pour des occasions exceptionnelles : partagez un moment unique sous le signe de la bonne humeur culinaire.

Consultez notre programme et contactez-nous.  </p>
			 </div>
			 
			 
			 
			 
			<div id="bloc_boxes">
			<?php
			$result= mysql_query("SELECT * FROM atelier WHERE type_atelier='culinaire' ");
			while ($row=mysql_fetch_array($result))
			{
				echo "<div class='box'>  <!-- CECI EST UN SEUL BOX  -->";
			
				echo "<img 
						   src=".$row['image_atelier']." 
						   alt='altimg'></img>";
			
				echo "<div class='box_desc'>";
				echo "<h3>".$row['nom_atelier']."</h3>";
				echo "<p>".$row['description_atelier']."</p>";
			?>
			
			
			<div class="commentaire_form">
				<ul>
				<li class="comment">
				<a href="">Commentaire</a>
				<ul>
					<li>
						<div id="fb-root"></div>
						<script>(function(d, s, id) {
  						var js, fjs = d.getElementsByTagName(s)[0];
  						if (d.getElementById(id)) return;
  						js = d.createElement(s); js.id = id;
  						js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.3&appId=385902561593029";
  						fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));</script>

						<div class="fb-comments" data-href="http://localhost/pfc/front/art_culinaire.php" data-width="500" data-numposts="5" data-colorscheme="dark"></div>
					</li>
				</ul>	
				 		
				
				<!-- end show form on hover  -->
				
				</li>
				<li class="like_btn"> 
						<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.3&appId=385902561593029";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-like" data-href="https://www.facebook.com/pages/Dartak/1632283203653744" data-width="150" data-layout="standard" data-action="like" data-show-faces="true" data-share="false"></div>


					</li>
				
				</ul>
				
            
        
				
				
				</div>
			
			
			
			
			<?php
				echo "</div>";
			
				echo "</div>";
			}
			
			
			
			?>
			</div>
			
			
			
			
			</div>
          
           		
           
			
			
            <div class="footer">
              <div id="footer_gauche"> 
			
                    <dl class="plan_site">
					     <dd class="titre_footer">Contact </dd>
						 <p class="contact">Adresse:Béni Khalled-Nabeul </p>
					
						 <p class="contact">Numéro de téléphone:72585969</p>
						  <p class="contact">  E-mail:DarTak@gmail.tn</p>
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