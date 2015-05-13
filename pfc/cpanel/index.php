<HTML>
<HEAD>
<TITLE>A simple frameset document</TITLE>
<link rel="stylesheet" type="text/css" href="css/cpannel_style.css">
    

<script type="text/javascript">
window.onload = function() {
	
	$('#list_tables a').click(function () {
		var lien = $(this).attr('title');
        $("#loader").attr("src", lien);
    });
}

</script>

  
</HEAD> 


<body>
	<?php 
include_once 'menu_vertical.php';
?>

<div id="content">
	
	

<h2> Administration Dar-Tak</h2>

<iframe width="100%"  src="" id="loader">

</iframe>


</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    
    
</body> 
</HTML>