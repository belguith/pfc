<?php
session_start();

if(!empty($_POST['captcha']) )
{
	if($_POST['captcha'] == $_SESSION['captcha'])
		echo 'Inscription avec succes ';
	else
		echo 'Le code entre n\'est pas bon.';
}
else
	echo 'Il faut remplir tous les champs.';
?>