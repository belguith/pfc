<?php
error_reporting (E_ALL ^ E_DEPRECATED);
$host="localhost";
$user_name="root";
$pwd="";


$conn=mysql_connect($host,$user_name,$pwd)
or die ("Can not Connect");


mysql_select_db("dartak_bd");



?>