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
	welcomepage();
?>

</body>

</html>

<?php
	function welcomepage() {
?>
		<h1> Welcome to BC's Tutoring Service! </h1>
<?php
	}
	
	function loginpage() {
		<fieldset> 
?>	
			<h3>Are You a Student or a Tutor?</h3>
	
			I am a... <br>
	
			<input type = "submit" name = "student" value = "Student">
			<input type = "submit" name = "tutor" value = "Tutor">
	
		</fieldset>
<?php
	}

?>