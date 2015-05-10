<HTML>
<HEAD>
<TITLE>A simple frameset document</TITLE>
<link rel="stylesheet" type="text/css" href="css/cpannel_style.css">


<script type="text/javascript">
function load(){

alert('works');
$("#content").load("/article/list.php");
	/*if(window.XMLHttpRequest ){
		xmlhttp= new XMLHttpRequest();
	}else
	{
		xmlhttp= new ActiveXObject('Microsoft.XMLHTTP');

	}
	xmlhttp.onreadystatechange= function() {
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById('content').innerHTML= xmlhttp.responseText;

		}
	}
	xmlhttp.open('GET','article/list.php',true);
	xmlhttp.send();*/

}




</script>
  
</HEAD> 

<body>


<div id="side_bar_menu" >
	<?php 
include_once 'menu_vertical.php';
?>


</div>


<div id="content">
	

<h2> salutation</h2> 




</div>

</body> 
</HTML>