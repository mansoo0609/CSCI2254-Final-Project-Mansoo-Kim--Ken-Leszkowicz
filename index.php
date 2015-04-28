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

	if (isset( $_GET['login']) ) {
		loginpage(); 
	} else if ( isset($_GET['signup']) ) {
		signuppage();
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
		
		<input type = "submit" name = "login" value = "Login with your ID"> <br>
		<input type = "submit" name = "signup" value = "Make a New Account">
	</form> 
	
<?php
	}
	
	function loginpage() {
?>	
		<fieldset> 
		<form method = "post">
			<h3>Are You a Student or a Tutor?</h3>
			Student <input type = "radio" name = "type" value = "student">
			Tutor <input type = "radio" name = "type" value = "tutor"> <br>

			Enter your username and password <br>
			<input type = "text" name = "user" value = ""> <br>
			<input type = "password" name = "pass" value = ""> <br>
		</form>
		</fieldset>
<?php
	}
	
	function signuppage() {
?>
		<fieldset>
			<form method = "post" onsubmit="return false;" action="">
				Select Account Type: <input type='radio' name='accounttype' value='student' /> Student
									<input type='radio' name='accounttype' value='tutor' /> Tutor
									<div id="accounttypeerror"></div>
				Enter Your Name: <input type='text' name='name' id='enteredname' />
				<div id="nameerror"></div>
				Enter Your Email: <input type='text' name='email' id='enteredemail' />
				<div id="emailerror"></div>
				Choose your Password: <input type='password' name='password1' id='password1' /> <br>
				Confirm your Password: <input type='password' name='password2' id='password2' />
				<div id="passworderror"></div>
			</form>
		</fieldset>	
<?php
	}
?>