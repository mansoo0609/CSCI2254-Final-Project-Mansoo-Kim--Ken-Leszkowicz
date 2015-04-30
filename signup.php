<?php
include ('database/dbconn.php');

	function signuppagestudent() {
		if(isset($_POST['submitformS'])){
			addStudent(); 
		}
		else{
?>
		<fieldset>
			<legend>Student Account Creation</legend>
			<form method = "post" onsubmit="return validatestudentsignup();" name="infoform">
				
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
					
				<label class="floatleft">Subjects:</label>
					<input type="text" name="subjects" id="enteredsubjects" />
					<label class="floatright" id="subjectserror"></label> <br>
					
				<label class="floatleft">Availability:</label>
					<input type="text" name="availability" id="enteredavail" />
					<label class="floatright" id="availerror"></label> <br>
				
				<label class="floatleft">Comment:</label><br>
					<textarea name="comment" id="enteredcomment" style="width : 270px; height : 120px"></textarea>
					<label class="floatright" id="commenterror"></label> <br> <br>
				
				<input type='submit' name='submitformS' value='Create your Student Account' />
					
			</form>
		</fieldset>	
<?php
		}
	}
	
	function signuppagetutor() {
		if(isset($_POST['submitformT'])){
			 addtutor(); 
		}
		else{
?>
		<fieldset>
			<legend>Tutor Account Creation</legend>
			<form method = "post" onsubmit="return validatetutorsignup();" name='infoform'>
				
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
				
				<label class="floatleft">Grade:</label>
					<select name="grade" id="enteredgrade">
					<option value="none" selected="selected">Select One</option>
					<option value="Freshmen">Freshmen</option>
					<option value="Sophomore">Sophomore</option>
					<option value="Junior">Junior</option>
					<option value="Senior">Senior</option>
					<option value="Grad">Grad</option>					
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
				
				<input type='submit' name='submitformT' value='Create your Tutor Account' />
					
			</form>
		</fieldset>	
<?php
	}
	}
	
function addStudent() {
	
	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = sha1($_POST['password1']);
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$major = $_POST['major'];
	$school = $_POST['school'];
	$subjects= $_POST['subjects'];
	$availability = $_POST['availability'];
	$comment = $_POST['comment'];
	
	$dbc = connectToDB( 'kimbxn' ) ; 
	
	$newemail = $_POST['email'] ; 
	$query = "Select * from studentlist where email = '$newemail' ";
	$result = performQuery ($dbc, $query); 
	
	while (@extract(mysqli_fetch_array($result, MYSQLI_ASSOC)) ) {
		if ($email == $newemail) {
			die ("This email is already associated with a different student account. Please try again! <br><br> \n
				  <a href = 'index.php?accounttype=student&#38;typeselected=Make+an+Account'> Resubmit </a> \n
				  </body> \n
				  </html>"); 
		}
	}
	
	$sql = "INSERT INTO studentlist
	(name, gender, email, password, 
	phonenumber, registrationdate, localaddress,
	major, school, subjects, 
	availability, comments)
	VALUES ('$name', '$gender', '$email', '$password', 
	        '$phone', now(), '$address', 
			'$major', '$school', '$subjects', 
			'$availability', '$comment')" ;
	
	$result2 = performQuery($dbc, $sql);
	disconnectFromDB($dbc, $result);
	
	echo "Your student account was created! <br> \n
		  <a href = 'index.php?login=Login+with+your+ID'> Go to the log in page! </a> \n";
}

function addTutor() {
	
	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = sha1($_POST['password1']);
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$major = $_POST['major'];
	$grade = $_POST['grade'];
	$school = $_POST['school'];
	$subjects= $_POST['subjects'];
	$availability = $_POST['availability'];
	$comment = $_POST['comment'];
	
	
	$dbc = connectToDB( 'kimbxn' ) ; 
	
	$newemail = $_POST['email'] ; 
	$query = "Select * from tutorlist where email = '$newemail' ";
	$result = performQuery ($dbc, $query); 
	
	while (@extract(mysqli_fetch_array($result, MYSQLI_ASSOC)) ) {
		if ($email == $newemail) {
			die ("This email is already associated with a different tutor account. Please try again! <br><br> \n
				  <a href = 'index.php?accounttype=tutor&#38;typeselected=Make+an+Account'> Resubmit </a>\n
				  </body> \n
				  </html>"); 
		}
	}
	
	$sql = "INSERT INTO tutorlist 
	(name, gender, email, password, 
	phonenumber, registrationdate, localaddress,
	major, grade, school, subjects, 
	availability, comments)
	VALUES ('$name', '$gender', '$email', '$password', 
	        '$phone', now(), '$address', 
			'$major', '$grade', '$school', '$subjects', 
			'$availability', '$comment')" ;
	
	$result2 = performQuery($dbc, $sql);
	disconnectFromDB($dbc, $result);
	
	echo "Your tutor account was created! <br><br> \n
		  <a href = 'index.php?login=Login+with+your+ID'> Go to the log in page! </a> \n";
}
?>