<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/global.css" />
        <title>Respirez vous êtes à Dar-Tak</title>
		<meta charset="UTF-8" />
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
		
		
		
		


		
<script>
   $(function() {


     $('#imageslider').bjqs({
       width: '100%',
       height: 650,
       animtype: 'fade',
       responsive: false,
       automatic: true,
       keyboardnav: false,
       markertype: '_',
       prevtext: '<',
       nexttext: '>'
     });
   });



</script>
 </head>
    <body>
	
        <div id="bloc_page">
		<!-- Begin Slider Principal  -->
		  <div>
                <div id='imageslider'>
  <ul class='bjqs'>
    <li class='slide-1'>
      <div class='caption'>Des chambres luxueuses</div>
    </li>
    <li class='slide-2'>
      <div class='caption'>Un espace convivial</div>
    </li>
    <li class='slide-3'>
      <div class='caption'>Une ambiance relaxante</div>
    </li>
    <li class='slide-4'>
      <div class='caption'>Un décor oriental</div>
    </li>
  </ul>
</div>

            </div>
			<!-- End Slider Principal  -->
			
		
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
					
					<input name="submit" type="submit" class="popup-button" value="je m'inscris" />
					<?php
					if(isset($_POST['submit']))
					{
						echo "<p> Your Acount Have been made </p>";
					
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
				<a href="" class="connexion_lien">Connexion</a>
				<!-- Begin show form on hover  -->
				<ul>
					<form name="Connexion" method="POST" action="user_connect.php" >
						<li> <input type="text" placeholder="Login" name="login"></li>
						<li><input type="password" placeholder="Password" name="password"></li>
						<li><input type="submit"  name="connexion_btn" value="connexion" class="popup-button"></li>
						

					</form>
						
				<button class="popup-button" data-modal="popup">Inscription</button> 		
				</ul>
				<!-- end show form on hover  -->
				
				</li>
				
				</ul>
				
            
        
				
				
				</div>
				
            </header>
            
			
			
			<div id="partie_haute">
			
			<div id="aboutus">
			
			<img src="img/logo_aboutus.png" class="logo_aboutus">
			<div class="description">
			<h2> Qui sommes nous ? </h2>
			<p> <b> Dar Tak vous permet mieux connaitre notre Tunisie grâce à la variété des ateliers que nous organisons tout au long du séjour , des excursions dans l'intérieur du pays et des défilés pour la découverte de notre art vestimentaire typique . Nos visiteurs sont les bienvenus dans un monde différent pour profiter d'une ambiance relaxante  au décor oriental et des soins naturels. </b> </p>
			
			</div>
			</div>
			
			<!-- Begin of flider testimonial  -->
			<div id="aboutus">
			<div id="premier_article">
			<img src="img/american-hachiko-agritourism-5.jpg" alt="image art">
			<div id="description_premier_aricle" >
			<h3> Article 1</h3>
			description premier article description premier article description premier article description premier article description premier article aaaaaaaaaaaaaaaaaaaa
			<a href="#" class="lien_article">voir plus</a>
			</div>
			</div>
			
			<div id="deuxiem_article">
			<img src="img/american-hachiko-agritourism-5.jpg" alt="img"></img>
			<div id="description_article_secondaire"> bonjour les zouzous
			<a href="#" class="lien_article">voir plus</a>
			</div>
			</div>
			
			<div id="deuxiem_article">
			<img src="img/american-hachiko-agritourism-5.jpg" alt="img"></img>
			<div id="description_article_secondaire"> bonjour les zouzous
			<a href="#" class="lien_article">voir plus</a>
			</div>
			
			</div>
			 
			 
			</div>
			
			</div>
			<div>
			
          
           		
           
			
			<div class="bloc_categories">
				
				<div class="bloc_rect">
				<img src="img/chambre_3D.jpg" alt="hammam">
				<div class="bloc_rect_description">Notre Maison<a href="#" class="lien_article" >Voir plus</a> </div>
				</div>
				
				<div class="bloc_rect">
				<img src="img/agri.jpg" alt="Atelier">
				<div class="bloc_rect_description">Nos Ateliers<a href="#" class="lien_article" >Voir plus</a></div>
				</div>
				<div class="bloc_rect">
				<img src="img/jam.jpg" alt="Evennement">
				<div class="bloc_rect_description">Nos Evennements<a href="#" class="lien_article" >Voir plus</a> </div>
				</div>
				<div class="bloc_rect">
				<img src="img/cous.jpg" alt="Cuisine">
				<div class="bloc_rect_description">Notre Cuisine<a href=#" class="lien_article" >Voir plus</a> </div>
				</div>
				
				</div>
			
			
		   
			
			
			<!-- Begin Slider Latest Post  -->
			
			
			
			<!-- End Slider Latest Post  -->

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