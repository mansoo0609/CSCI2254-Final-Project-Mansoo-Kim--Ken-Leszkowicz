<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Make an Account for BC Tutoring Service</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/signup.js"></script>
</head>

<body>

<?php
	if ( isset($_GET['accounttype']) )
		if ( $_GET['accounttype'] == 'student' ) {
			signuppagestudent();
		} else {
			signuppagetutor();
		}
?>

</body>

</html>

<?php

	function signuppagestudent() {
?>
		<fieldset>
			<legend>Student Sign-Up</legend>
			<form method = "post" onsubmit="return validatestudentsignup();" action="index.php" name='studentsignup'>
				
				<label class="floatleft">Name:</label>
					<input type="text" name="name" id="enteredname" />
					<label class="floatright" id="nameerror"></label> <br>
					
				<label class="floatleft">Gender:</label>
					<input type="radio" name="gender" value='male' />Male
					<input type="radio" name="gender" value='female' />Female
					<input type="radio" name="gender" value='other' />Other
					<label class="floatright" id="gendererror"></label> <br>
				
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
					
				<label class="floatleft">School:</label>
					<select name="school" id="enteredschool">
					<option value="none" selected="selected">Select One</option>
					<option value="*">CSOM</option>
					<option value="**">A&S</option>
					<option value="***">Lynch</option>
					<option value="****">CSON</option>
					</select>
					<label class="floatright" id="schoolerror"></label><br>
					
				<label class="floatleft">Subjects:</label>
					<input type="text" name="subjects" id="enteredsubjects" />
					<label class="floatright" id="subjectserror"></label> <br>
					
				<label class="floatleft">Availability:</label>
					<input type="text" name="availability" id="enteredavail" />
					<label class="floatright" id="availerror"></label> <br>
				
				<label class="floatleft">Comment:</label><br>
					<textarea name="comment" id="enteredcomment" style="width : 270px; height : 120px"></textarea>
					<label class="floatright" id="commenterror"></label> <br> <br>
				
				<input type='submit' name='submitform' value='Create your Student Account' />
					
			</form>
		</fieldset>	
<?php
	}
?>