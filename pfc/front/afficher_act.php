<script type="text/javascript">
function compte_a_rebours(i,date)
{
	var compte_a_rebours = document.getElementsByClassName("countdown-amount");
 
var date_actuelle = new Date();
	var date_evenement = new Date(date);
	var total_secondes = (date_evenement - date_actuelle) / 1000;

	var prefixe = "Compte à rebours terminé dans ";
	
	if (total_secondes > 0)
	{
		var jours = Math.floor(total_secondes / (60 * 60 * 24));
		var heures = Math.floor((total_secondes - (jours * 60 * 60 * 24)) / (60 * 60));
		minutes = Math.floor((total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60))) / 60);
		secondes = Math.floor(total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60 + minutes * 60)));

		
		if (jours == 0)
		{
			jours = 0;
			
		}
		

		if (heures == 0)
		{
			heures = 0;
			
		}
	
		if (minutes == 0)
		{
			minutes = '';
			
		}
		
		if (secondes == 0)
		{
			secondes = 0;
			
			
		}
		
		

		
	    compte_a_rebours[i].innerHTML = jours ;
		compte_a_rebours[i+1].innerHTML =heures;
		compte_a_rebours[i+2].innerHTML = minutes;
		compte_a_rebours[i+3].innerHTML = secondes;
	
	
	
	
	}
	
	if (total_secondes < 0)
	{  compte_a_rebours[i].innerHTML = 0;
		compte_a_rebours[i+1].innerHTML =0;
		compte_a_rebours[i+2].innerHTML = 0;
		compte_a_rebours[i+3].innerHTML = 0;
		
	}

	
}

</script>

<?php
// on se connecte à notre base
error_reporting(E_ALL ^ E_DEPRECATED);
$base=mysql_connect('localhost','root','') or die ("probléme connexion");
mysql_select_db('dar_tak_bd',$base) or die ("probléme selection !");


	// on prepare la requête 
	 $req = "select * from atelier where( week(date_atelier)=week(now())) order by date_atelier";;

	 // on insère le tuple (mysql_query) et au cas où, on écrira un petit message d'erreur si la requête ne se passe pas bien (or die)

			 $exc=mysql_query($req);
			 $nbr = mysql_num_rows($exc);
			 $j=0;
			 while($row=mysql_fetch_array($exc))
			 {
	 			 
	echo'<div class="box"> ';
			echo "<img src= '".$row['image_atelier']."' />" ;
			
				
			echo'<div class="event-meta">';
$lesMois = array(" ","janvier","février","mars","avril","mai","juin","juillet","août",
"septembre","octobre","novembre","décembre");

            $mois=date_format(date_create($row['date_atelier']), 'n');
			$jour=date_format(date_create($row['date_atelier']), 'd');
			$annee=date_format(date_create($row['date_atelier']), 'Y');
			$heure=date_format(date_create($row['date_atelier']), 'H:i');
			
              echo '<span class="month">  '.$lesMois[$mois].' </span>';
               echo '<span class="day"> '.$jour.'</span>';
               echo'<span class="year">'.$annee.'</span>';
            echo'</div>';
             echo '<div class="box_desc">';
			
			   echo '<h3>'  .$row['nom_atelier']. '</h3>';
			echo'<p>' .$row['description_atelier'].'</p>';
			echo '<p> Heure :  '.$heure.' </p> ';


			 echo'</div>	'; 
			 echo'<span class="countdown-row countdown-show4">';

        echo  '<span class="countdown-section" >';
         echo '<span class="countdown-amount"> 22 </span>';
         echo '<span class="countdown-period"> Days </span>';
        echo  '</span>';
        echo  '<span class="countdown-section" >';
         echo '<span class="countdown-amount"> 22 </span>';
         echo '<span class="countdown-period"> Hours </span>';
        echo  '</span>';
		echo  '<span class="countdown-section" >';
         echo '<span class="countdown-amount">  </span>';
         echo '<span class="countdown-period"> Minutes </span>';
        echo  '</span>';
		echo  '<span class="countdown-section" >';
         echo '<span class="countdown-amount">  </span>';
         echo '<span class="countdown-period"> Seconds </span>';
        echo  '</span>';
	
       
        

echo'</span>';
		
 
			
			 echo '</div>'; 


$date = date_format(date_create($row['date_atelier']), 'Y/m/d H:i:s');
echo '<script type="text/javascript">


setInterval(function(){compte_a_rebours('.$j.',"'.$date.'");}, 1000);

</script>'	;	$j=$j+4;		 } 
// on prepare la requête 
	 $req1 = "select * from excursion where( week(date_debut)=week(now())) order by date_debut";;

	 // on insère le tuple (mysql_query) et au cas où, on écrira un petit message d'erreur si la requête ne se passe pas bien (or die)

			 $exc1=mysql_query($req1);
			 $nbr1 = mysql_num_rows($exc1);
			 $j1=0;
			 while($row1=mysql_fetch_array($exc1))
			 {
	 			 
	echo'<div class="box"> ';
			echo "<img src= '".$row1['imge_excursion']."' />" ;
			
				
			echo'<div class="event-meta">';


            $mois1=date_format(date_create($row1['date_debut']), 'n');
			$jour1=date_format(date_create($row1['date_debut']), 'd');
			$annee1=date_format(date_create($row1['date_debut']), 'Y');
			$heure1=date_format(date_create($row1['date_debut']), 'H:i');
			
              echo '<span class="month">  '.$lesMois[$mois1].' </span>';
               echo '<span class="day"> '.$jour1.'</span>';
               echo'<span class="year">'.$annee1.'</span>';
            echo'</div>';
             echo '<div class="box_desc">';
			
			   echo '<h3>'  .$row1['destination_excursion']. '</h3>';
			echo'<p>' .$row1['lilbelle_excursion'].'</p>';
			echo '<p> Heure :  '.$heure.' </p> ';


			 echo'</div>	'; 
			 echo'<span class="countdown-row countdown-show4">';

        echo  '<span class="countdown-section" >';
         echo '<span class="countdown-amount"> 22 </span>';
         echo '<span class="countdown-period"> Days </span>';
        echo  '</span>';
        echo  '<span class="countdown-section" >';
         echo '<span class="countdown-amount"> 22 </span>';
         echo '<span class="countdown-period"> Hours </span>';
        echo  '</span>';
		echo  '<span class="countdown-section" >';
         echo '<span class="countdown-amount">  </span>';
         echo '<span class="countdown-period"> Minutes </span>';
        echo  '</span>';
		echo  '<span class="countdown-section" >';
         echo '<span class="countdown-amount">  </span>';
         echo '<span class="countdown-period"> Seconds </span>';
        echo  '</span>';
	
       
        

echo'</span>';
		
 
			
			 echo '</div>'; 


$date = date_format(date_create($row1['date_debut']), 'Y/m/d H:i:s');
echo '<script type="text/javascript">


setInterval(function(){compte_a_rebours('.$j.',"'.$date.'");}, 1000);

</script>'	;	$j1=$j1+4;		 } 


	 ?>
			            
    		
	