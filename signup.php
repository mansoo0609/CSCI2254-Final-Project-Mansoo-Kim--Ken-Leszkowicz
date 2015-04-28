<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/signup.js"></script>
</head>

<body>

<?php

?>

</body>

</html>



<?php

	function signuppagestudent() {
?>
		<fieldset>
			<form method = "post" onsubmit="return false;" action="">
			
				<label class="floatleft">Select Account Type:</label>
					<input type="radio" name="accounttype" value="student" /> Student
					<input type="radio" name="accounttype" value="tutor" /> Tutor
					<label class="floatright" id="accounttypeerror"></label> <br>
				
				<label class="floatleft">Name:</label>
					<input type="text" name="name" id="enteredname" />
					<label class="floatright" id="nameerror"></label> <br>
				
				<label class="floatleft">Email:</label>
					<input type="text" name="email" id="enteredemail" />
					<label class="floatright" id="emailerror"></label> <br>
					
				<label class="floatleft">Password:</label>
					<input type="text" name="password" id="password1" />
					<label class="floatright" id="password1error"></label> <br>

				<label class="floatleft">Confirm Password:</label>
					<input type="text" name="email" id="password2" />
					<label class="floatright" id="password2error"></label> <br>

				<label class="floatleft">Local Address:</label>
					<input type="text" name="address" id="enteredaddress" />
					<label class="floatright" id="addresserror"></label> <br>
					
				<label class="floatleft">Major:</label>
					<input type="text" name="Major" id="enteredmajor" />
					<label class="floatright" id="majorerror"></label> <br>
			</form>
		</fieldset>	
<?php
	}
?>