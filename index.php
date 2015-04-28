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
		include "login.php";
		include "signup.php";
		
		if ( isset($_GET['login']) ) {
			loginpage();
		} else if ( isset($_GET['signup']) ) {
			signuppage();
		} else {
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
		
		<input type = "submit" name = "login" value = "Login with your ID" > <br>
		<input type = "submit" name = "signup" value = "Make a New Account" >
	</form> 
	
<?php
	}
?>