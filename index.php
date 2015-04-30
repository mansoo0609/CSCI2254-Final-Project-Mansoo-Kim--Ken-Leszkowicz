<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Boston College Tutoring Service</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/index.js"></script>
</head>

<body>

<?php
		include "signup.php";
		
		if ( isset($_GET['login']) ) {
			loginpage();
		} else if ( isset($_GET['signup']) ) {
			selectaccounttype();
			if ( isset($_GET['accounttype']) ) {
				$accounttype = $_GET['accounttype'];
				if ( $accounttype == 'student' ) {
					signuppagestudent();
				} else {
					signuppagetutor();
				}
			}
		} else if ( isset($_GET['accounttype']) ) {
				$accounttype = $_GET['accounttype'];
				if ( $accounttype == 'student' ) {
					signuppagestudent();
				} else {
					signuppagetutor();
				}
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
		
		<input type = "submit" name = "login" value = "Login with your Email" > <br>
		<input type = "submit" name = "signup" value = "Make a New Account" >
	</form> 
	
<?php
	}
	
	function selectaccounttype() {
?>
		<fieldset>
			<form method='get' onsubmit='return validatetype();' name='form'>
				<label class="floatleft">Select Account Type:</label>
					<input type="radio" name="accounttype" value="student" /> Student
					<input type="radio" name="accounttype" value="tutor" /> Tutor
					<label class="floatright" id="accounttypeerror">  </label> <br>
				<input type='submit' name='typeselected' value='Make an Account' />
			</form>
		</fieldset>
<?php
	}
	
	function loginpage() {
?>	
		<fieldset> 
		<form method = "post" onsubmit='return validatelogin();' action ='login.php' name='form'>
			
			<label class="floatleft">Select Account Type:</label>
				<input type="radio" name="accounttype" value="student" /> Student
				<input type="radio" name="accounttype" value="tutor" /> Tutor
				<label class="floatright" id="accounttypeerror">  </label> <br>
			
			<label class='floatleft'>Email:</label>
				<input type = "text" name = "email" id='enteredemail'>
				<label class="floatright" id="emailerror"></label> <br>
			<label class='floatleft'>Password:</label>
				<input type = "password" name = "password" id='enteredpassword'>
				<label class ="floatright" id="passworderror"></label> <br>	
				
			<input type='submit' name='login' value='Sign In' />
		</form>
		</fieldset>
<?php
	}
?>
