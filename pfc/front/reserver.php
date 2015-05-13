<?php 
error_reporting (E_ALL ^ E_DEPRECATED);
$host="localhost";
$user_name="root";
$pwd="";
$conn=mysql_connect($host,$user_name,$pwd)
or die ("Can not Connect");
mysql_select_db("dar_tak_bd");
$DateA=$_POST['DateA'];
$DateD=$_POST['DateD'];
$chambre=$_POST['chambre'];
$sql3=mysql_query("insert into reservation(Id_client,Nom,Description,Date,TypeSoiree,Nbre_place) values (null,'$nom','$description','$date','$type','$nbPlace')") or die (mysql_error()); 
?>