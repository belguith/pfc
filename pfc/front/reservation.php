




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
				<a href="">Connexion</a>
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
            
			<div id="container">
			 
                
	<div class="information_reservation">
		<div class="article_resa">
			<p class="condition"><strong>Tarif de la maison</strong></p>
			À partir de 80€ la chambre de 2 personnes, petit-déjeuner compris.Tarif modulable en fonction de la durée du séjour et du nombre de personnes, selon les périodes
			</div>
			<div class="article_resa">
			<p class="condition"><strong>Conditions de réservation</strong></p>
			Toute réservation ne pourrait être confirmée qu’après le versement obligatoire d’un acompte de 50 % à verser au compte Dar-Tak
			
			</div>
	
			</div>
	
	     <div class="formulaire_reservation">
		 <div class="reservat">
		<form method="post" action="reserver.php">
			<table> 
			<tr>
			<td><p class="formulaire1">Date arrivée</p></td>
			</br>
			<td><input type="Date" name="DateA" placeholder="Date arrivée" class="formulaire"></td>
			</tr>
			<tr>
			<td><p class="formulaire1">Date Départ </p></td>
			<td><input type="Date" name="DateD" placeholder="Date départ" class="formulaire"></td>
			</tr>
			 <tr>
		  <td><p class="formulaire1">Chambre </p></td>
	
		  <td width=50px height=50px>
		  <?php
		  error_reporting (E_ALL ^ E_DEPRECATED);
          $host="localhost";
          $user_name="root";
          $pwd="";
          $conn=mysql_connect($host,$user_name,$pwd) or die ("Can not Connect");
          mysql_select_db("dar_tak_bd");

		  
		  echo "<select>";
		  $res = mysql_query("SELECT id_chambre,nom_chambre,type_chambre FROM chambres") or die("no");
		
								while($row = mysql_fetch_assoc($res)){
									echo "<option value='".$row["id_chambre"]. " name='chambre'>".$row["nom_chambre"]."</option>";
								}

		  echo "</select>";
		  ?>
		  <tr>
		  <td><p  class="formulaire1">Atelier culinaire</p></td>
		  <td>
		  <select>
	<option> couscous </option> 
	<option> lablabi </option>
	<option> mloukia </option>
	      </select>
           </td>
		  </tr>
		   <tr>
		  <td><p  class="formulaire1">Atelier artisanal</p></td>
		  <td>
		  <select>
	<option> poterie </option> 
	<option> tissage </option>
	<option> vannerie </option>
	      </select>
           </td>
		  </tr>
		   <tr>
		  <td><p  class="formulaire1">Excursion</p></td>
		  <td>
		  <select>
	<option> Haouaria </option> 
	<option> korbous </option>
	<option> Kelibia </option>
	      </select>
           </td>
		  </tr>
		  
		  
			</table>
			<input type="submit" name="recherche" value="reserver" class="popup-button"> 
			</form>
			</div>
		 
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
							<p class="newsletter"> Entrer votre adresse e-mail pour vous inscrire et recevoir les notifications des nouveaux articles par courriel </p>
						     <input type="text" name="mail" placeholder="newsletter"> 
							  <input type="submit" name="submit" value="valider" class="popup-button"> 
                            </form>
                    </dl>
               
			
			   </div>
			   
			   <div id="footer_centre"> 
				
                    <dl class="plan_site">
					     <dd class="titre_footer"> Nos partenaires</dd>
						 <dd><img src="img/travel.png" class="partenaire"/></dd>
						 <dd><img src="img/tunisair.png" class="partenaire"/></dd>
						 <dd><img src="img/syphax.png" class="syphax"/></dd>
                         

                        
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