
<?php session_start(); ?>

<form action="verification_captcha.php" method="post">
	<p>
			
			<label for="captcha">Recopiez le mot : </br><img src="captcha.php" alt="Captcha" /></label> </br>
			<input type="text" name="captcha" id="captcha" /><br />
		
		<button  name="capt"> Valider </button>
	</p>
</form>