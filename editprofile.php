<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Edit Your Profile</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/signup.js"></script>
</head>

<body>

<?php
	$type = $_COOKIE['type'];
	if ( $type == 'tutor' ) {
		$type2 = 'Tutor';
	} else {
		$type = 'student';
		$type2 = 'Student';
	}
?>
	<fieldset>
		<legend>Edit Your <?php echo $type2 ?> Profile</legend>
		<form method = "post" onsubmit="return validate<?php echo $type ?>signup();" action='dboperation.php' name='infoform'>
			
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
				<input type="text" name="major" id="enteredmajor" />
				<label class="floatright" id="majorerror"></label> <br>
				
			<label class="floatleft">School:</label>
				<select name="school" id="enteredschool">
				<option value="none" selected="selected">Select One</option>
				<option value="CSOM">CSOM</option>
				<option value="A&#38;S">A&#38;S</option>
				<option value="Lynch">Lynch</option>
				<option value="CSON">CSON</option>
				</select>
				<label class="floatright" id="schoolerror"></label><br>
				
			<?php
				if ( $type = 'tutor' ) {
					echo "
					<label class='floatleft'>Grade:</label>
						<select name='grade' id='enteredgrade'>
						<option value='none' selected='selected'>Select One</option>
						<option value='Freshmen'>Freshmen</option>
						<option value='Sophomore'>Sophomore</option>
						<option value='Junior'>Junior</option>
						<option value='Senior'>Senior</option>
						<option value='Grad'>Grad</option>					
						</select>
						<label class='floatright' id='gradeerror'></label><br>";
				}
			?>
				
			<label class="floatleft">Subjects:</label>
				<input type="text" name="subjects" id="enteredsubjects" />
				<label class="floatright" id="subjectserror"></label> <br>
				
			<label class="floatleft">Availability:</label>
				<input type="text" name="availability" id="enteredavail" />
				<label class="floatright" id="availerror"></label> <br>
			
			<label class="floatleft">Comment:</label><br>
				<textarea name="comment" id="enteredcomment" style="width : 270px; height : 120px"></textarea>
				<label class="floatright" id="commenterror"></label> <br> <br>
			
			<input type='submit' name='submitformS' value='Submit Edits' />
				
		</form>
	</fieldset>	


</body>

</html>