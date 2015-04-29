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
		if(isset($POST_['submitform'])){
			addStudent(); 
		}
		else{
?>
		<fieldset>
			<legend>Student Account Creation</legend>
			<form method = "post" onsubmit="return validatestudentsignup();" name='studentsignup'>
				
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
					<input type="password" name="password1" id="password1" />
					<label class="floatright" id="password1error"></label> <br>

				<label class="floatleft">Confirm Password:</label>
					<input type="password" name="password2" id="password2" />
					<label class="floatright" id="password2error"></label> <br>

				<label class ="floatleft">Phone Number:</label> 
					<input type ="text" name = "phone" id="enteredphone"/>
					<label class = "floatright" id ="phoneerror"></label> <br>
					
				<label class="floatleft">Local Address:</label>
					<input type="text" name="address" id="enteredaddress" />
					<label class="floatright" id="addresserror"></label> <br>
					
				<label class="floatleft">Major:</label>
					<input type="text" name="Major" id="enteredmajor" />
					<label class="floatright" id="majorerror"></label> <br>
					
				<label class="floatleft">School:</label>
					<select name="school" id="enteredschool">
					<option value="none" selected="selected">Select One</option>
					<option value="CSOM">CSOM</option>
					<option value="A&S">A&S</option>
					<option value="Lynch">Lynch</option>
					<option value="CSON">CSON</option>
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
	}
	
	function signuppagetutor() {
?>
		<fieldset>
			<legend>Tutor Account Creation</legend>
			<form method = "post" onsubmit="return validatetutorsignup();" action="" name='studentsignup'>
				
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
					<input type="password" name="password1" id="password1" />
					<label class="floatright" id="password1error"></label> <br>

				<label class="floatleft">Confirm Password:</label>
					<input type="password" name="password2" id="password2" />
					<label class="floatright" id="password2error"></label> <br>
					
				<label class ="floatleft">Phone Number:</label> 
					<input type ="text" name = "phone" id="enteredphone"/>
					<label class = "floatright" id ="phoneerror"></label> <br>
					
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
				
				<label class="floatleft">Grade:</label>
					<select name="grade" id="enteredgrade">
					<option value="none" selected="selected">Select One</option>
					<option value="freshmen">Freshmen</option>
					<option value="sophomore">Sophomore</option>
					<option value="junior">Junior</option>
					<option value="senior">Senior</option>
					<option value="grad">Grad</option>					
					</select>
					<label class="floatright" id="gradeerror"></label><br>
					
				<label class="floatleft">Subjects:</label>
					<input type="text" name="subjects" id="enteredsubjects" />
					<label class="floatright" id="subjectserror"></label> <br>
					
				<label class="floatleft">Availability:</label>
					<input type="text" name="availability" id="enteredavail" />
					<label class="floatright" id="availerror"></label> <br>
				
				<label class="floatleft">Comment:</label><br>
					<textarea name="comment" id="enteredcomment" style="width : 270px; height : 120px"></textarea>
					<label class="floatright" id="commenterror"></label> <br> <br>
				
				<input type='submit' name='submitform' value='Create your Tutor Account' />
					
			</form>
		</fieldset>	
<?php
	}
	
function addStudent() {

	$dbc = connectToDB("kimbxn") ; 
	
	$newemail = $_POST['email'] ; 
	$query = "Select * from studentlist where email = '$newemail' ";
	
	$result = performQuery ($dbc, $query); 
	while (@extract(mysqli_fetch_array($result, MYSQLI_ASSOC)) ) {
		if ($email == $newemail) {
			die ("Email already Exists! <br><br> \n\n
				  <a href = 'signup.php'> Resubmit </a> <br><br>\n\n
				  </body></html>"); 
		}
	}
	
	$sql = "INSERT INTO studentlist 
	(name, gender, email, password, 
	phonenumber, registrationdate, localaddress,
	major, school, subjects, availability, comments)
	VALUES ('$_POST[name]', '$_POST[gender]', '$_POST[email]', sha1('$_POST[password1]'), 
	        '$_POST[phone]', now(), '$_POST[address]', 
			'$_POST[Major]', '$_POST[school]', '$_POST[subjects]', '$_POST[availability]', '$_POST[comment]')" ;
	
	$result2 = mysqli_query($dbc, $sql) ; 
	
	header("Location: index.php?status=acctAdded");
}
?>