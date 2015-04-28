<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Boston College Tutoring Service</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--<script type="text/javascript" src="js/index.js"></script>-->
</head>

<body>

<?php

	if (isset($_GET['getstarted'])) {
		loginpage(); 
	}
	else {
		welcomepage();
	}

?>

</body>

</html>

<?php
	function welcomepage() {
?>
	<form method = "get">
		<h1> Welcome to BC's Tutoring Service! </h1>
		
		<h2> We proudly announce the launch of a new website where BC tutors could meet BC students easily and efficiently! </h2>
		
		<input type = "submit" name = "getstarted" value = "Login with your ID">
	</form> 
	
<?php
	}
	
	function loginpage() {
?>	
		<form method = "post">
		<fieldset> 
			<h3>Are You a Student or a Tutor?</h3>
	
			I am a... <br>
	
			<input type = "submit" name = "student" value = "Student">
			<input type = "submit" name = "tutor" value = "Tutor">
	
		</fieldset>
		</form> 