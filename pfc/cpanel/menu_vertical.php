



<div id="side_bar_menu">
<h2> Dar-Tak </h2>

<ul name="list_tables" id="list_tables">

<?php

error_reporting (E_ALL ^ E_DEPRECATED);
include_once('data_base_connexion.php');


$qry_table_name="SELECT * FROM `site_map`";
$result = mysql_query($qry_table_name) or die("Pb avec la requete: $qry_table_name");
echo "";


while ($row=mysql_fetch_array($result))
{
	echo "<li> <a href='javascript:;' title=".$row{'page_link'}." id=".$row{'table_name'}." '>".$row{'table_name'}." </a></li> ";

	

	
}

?>	

</ul>	


</div>

