<?php
include ('database/dbconn.php');
?>

<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Your Profile</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/javascript.js"></script>
</head>

<body>

<?php
	$type = $_COOKIE['type'];
	if( $type == 'student') { 
		studentprofile();
	}
	else {
		tutorprofile();
	}
?>

</body>



<?php
	function studentprofile(){
		$dbc = connectToDB('kimbxn') ; 
		$query = "SELECT * FROM studentlist WHERE email = '$_COOKIE[email]'";
		
		$result = performQuery($dbc, $query);
		
		while ($row = mysqli_fetch_assoc($result)) {
			$name = $row['name'];
			$gender = $row['gender'];
			$email = $row['email'];
			$phone = $row['phonenumber'];
			$address = $row['localaddress'];
			$major = $row['major'];
			$school = $row['school'];
			$school = htmlentities($school);
			$subject = $row['subjects'];
			$avail = $row['availability'];
			$comments = $row['comments'];
		}
			  
		echo "<fieldset class = 'floatprofile'><h1>Student Profile: $name</h1> \n";
?>
		
			<table>
		<tr>
			<th>Basic Info</th>
			<th>School, Major, Subjects </th>
			<th>Availability and Additional Comments</th>
		</tr>
		
<?php
		
			echo"  
				<tr class= 'color3'>
					<td>
						Gender: $gender <br>
						email: $email <br>
						Phone Number: $phone <br>
						Local Address: $address <br>
					</td>
					<td>
						$school <br>
						Major: $major <br>
						Subjects: $subject <br>
					</td>
					<td>
						<br>Availability: <br>
						$avail <br><br>\n\n
						Additional Comments: <br>
						$comments
					</td>
				</tr></table>";
			
			echo"<form action='editprofile.php'>\n
			  <input type='submit' name='edit' value='Edit Your Profile' />\n
			  </form>\n
			  <br>\n
			  <form action='logout.php'>\n
			  <input type='submit' name='logout' value='Sign Out' />\n
			  </form>\n";
?>
</fieldset>

<fieldset class = "floatchat">
Enter Chat and press enter
<div><input id=input placeholder=you-chat-here /></div>

Chat Output
<div id=box></div>

<script src=http://cdn.pubnub.com/pubnub.min.js></script>
<script>(function(){
var box = PUBNUB.$('box'), input = PUBNUB.$('input'), channel = 'chat';
PUBNUB.subscribe({
    channel  : channel,
    callback : function(text) { box.innerHTML = (''+text).replace( /[<>]/g, '' ) + '<br>' + box.innerHTML }
});
PUBNUB.bind( 'keyup', input, function(e) {
    (e.keyCode || e.charCode) === 13 && PUBNUB.publish({
        channel : channel, message : input.value, x : (input.value='')
    })
} )
})()</script>

</fieldset> <br><br><br><br>

<?php		
		mysqli_free_result($result);
		
		echo "<br><br><br><br><br><br><br>\n\n
			  <br><br><br><br><br><br><h2>Tutor List</h2> \n\n";
		
?>

<form method = "post">
	<input type = "text" name = 'searchbox' value = "">
	<input type = "submit" name = "searchsubmit" value = "Search Students">
	Search By:<select name ="selecttype">
		<option value = "all"> All </option>
		<option value = "name"> Name</option>
		<option value = "gender">Gender</option>
		<option value = "localaddress">Local Address</option>
		<option value = "school">School</option>
		<option value = "major">Major</option>
		<option value = "subjects">Subjects</option>
		<option value = "availability">Availability</option>
	</select>
</form>	

<form method = "post" action = "email.php" onsubmit='return validatesend();'>
	<br><br>
	<table class = "floattable">
		<tr>
			<th>Name and Contact info</th>
			<th>School, Major, Subjects </th>
			<th>Availability and Additional Comments</th>
			<th>Select Tutor </th>
		</tr>

<?php		

		$search = isset($_POST['searchbox']) ? $_POST['searchbox'] : "";
		
		if(!isset($_POST['selecttype'])) {
			$queryt="SELECT * FROM tutorlist";
		}
		else{
			if($_POST['selecttype']=='all'){
				$searchTopic = "concat(name,' ',gender,' ',email,' ',phonenumber,' ',localaddress,' ',major,' ',school,' ',subjects,' ',availability,' ', comments)";
			}
			else{
				$searchTopic = $_POST['selecttype'];
			}
		
			if ($search ==""){
			$queryt= "SELECT * FROM tutorlist";
			}
			else{
				$queryt = "SELECT * FROM tutorlist WHERE $searchTopic LIKE '%$search%'";
			}
		}
		
		$resultT = performQuery($dbc, $queryt);
		
		$i=0;
		
		if($resultT) {
			while ($row = mysqli_fetch_assoc($resultT)) {
				
			$i=$i+1;
			
			if($i%2==0){
				$color = "color1";
			}
			else{
				$color= "color2";
			}
			
			$name = $row['name'];
			$gender = $row['gender'];
			$email = $row['email'];
			$phone = $row['phonenumber'];
			$address = $row['localaddress'];
			$grade = $row['grade'];
			$major = $row['major'];
			$school = $row['school'];
			$school = htmlentities($school);
			$subject = $row['subjects'];
			$avail = $row['availability'];
			$comments = $row['comments'];
			echo "
				<tr class= '$color'>
					<td>
						<b>$name</b> <br><br>
						Gender: $gender <br>
						email: $email <br>
						Phone Number: $phone <br>
						Local Address: $address <br>
					</td>
					<td>
						$school <br>
						Grade: $grade <br>
						Major: $major <br>
						Subjects: $subject <br>
					</td>
					<td>
						<br>Availability: <br>
						$avail <br><br>\n\n
						Additional Comments: <br>
						$comments
					</td>
					<td>
						<input type = 'checkbox' name = 'Tchecked[]' value = '$email'>
					</td>
				</tr>";
			}
			
			echo "</table>";
			
			disconnectFromDB($dbc, $resultT);
		}
?>
	<fieldset class = "floatemail">
	Write Emails to the Selected Tutors
	<br><br>
	<label class = "floatleft"> Subject: </label> 
		<input type ="text" name = "subj" value ="" id="enteredsubject"><br>
		<label class="floatright2" id="subjecterror"></label> <br>
	<label class="floatleft">Body:</label><br>
		<textarea name="body" id="enteredbody" style="width : 270px; height : 120px"></textarea><br>
		<label class="floatright2" id="bodyerror"></label> <br>
	<br>
	<input type = "submit" name = "email" value = "Send Emails to Selected Tutors">
	</fieldset>
	
	</form>
<?php
}
	
function tutorprofile(){
	$dbc = connectToDB('kimbxn'); 
	$query = "SELECT * FROM tutorlist WHERE email = '$_COOKIE[email]'";
	
	$result = performQuery($dbc, $query); 
	
	while ($row= mysqli_fetch_assoc($result)) {
			$name = $row['name'];
			$gender = $row['gender'];
			$email = $row['email'];
			$phone = $row['phonenumber'];
			$address = $row['localaddress'];
			$major = $row['major'];
			$grade = $row['grade'];
			$school = $row['school'];
			$subject = $row['subjects'];
			$avail = $row['availability'];
			$comments = $row['comments'];
		}

	echo "<h1>Tutor Profile: $name </h1>\n";
?>

			<table>
		<tr>
			<th>Basic Info</th>
			<th>School, Major, Subjects </th>
			<th>Availability and Additional Comments</th>
		</tr>
		
<?php

			echo"  
				<tr class= 'color3'>
					<td>
						Gender: $gender <br>
						email: $email <br>
						Phone Number: $phone <br>
						Local Address: $address <br>
					</td>
					<td>
						$school <br>
						Grade: $grade<br>
						Major: $major <br>
						Subjects: $subject <br>
					</td>
					<td>
						<br>Availability: <br>
						$avail <br><br>\n\n
						Additional Comments: <br>
						$comments
					</td>
				</tr></table>";
				
			  echo" <form action='editprofile.php'>\n
			  <input type='submit' name='edit' value='Edit Your Profile' />\n
			  </form>\n
			  <br>\n
			  <form action='logout.php'>\n
			  <input type='submit' name='logout' value='Sign Out' />\n
			  </form>\n
			  
			  <br><br>\n\n" ;
		  
	mysqli_free_result($result);
	
	echo "<h2>Student List</h2> \n\n";
?>

<form method = "post">
	<input type = "text" name = 'searchbox' value = "">
	<input type = "submit" name = "searchsubmit" value = "Search Students">
	Search By:<select name ="selecttype">
		<option value = "all"> All </option>
		<option value = "name"> Name</option>
		<option value = "gender">Gender</option>
		<option value = "localaddress">Local Address</option>
		<option value = "school">School</option>
		<option value = "major">Major</option>
		<option value = "subjects">Subjects</option>
		<option value = "availability">Availability</option>
	</select>
</form>
	
	<br><br>

<form method = "post" action = "email.php" onsubmit='return validatesend();'>
	<table class = "floattable">
		<tr>
			<th> Name and Contact info</th>
			<th> School, Major, Subjects </th>
			<th> Availability and Additional Comments</th>
			<th>Select Student</th>
		</tr>
		
<?php
	
	$search = isset($_POST['searchbox']) ?$_POST['searchbox'] : "";
	
	if(!isset($_POST['selecttype'])) {
			$querys="SELECT * FROM studentlist";
		}
	else{
		if($_POST['selecttype']=='all'){
			$searchTopic = "concat(name,' ',gender,' ',email,' ',phonenumber,' ',localaddress,' ',major,' ',school,' ',subjects,' ',availability,' ', comments)";
		}
		else{
			$searchTopic = $_POST['selecttype'];
		}
	
		if ($search ==""){
			$querys= "SELECT * FROM studentlist";
		}
		else{
			$querys = "SELECT * FROM studentlist WHERE $searchTopic LIKE '%$search%'";
		}
	}
	
	$resultS = performQuery ($dbc, $querys);
	
	$j=0;
	
	if($resultS) {
		while ($row=mysqli_fetch_assoc($resultS)) {
			
			$j=$j+1;
			
			if($j%2==0){
				$color = "color1";
			}
			else{
				$color= "color2";
			}
			
			$name = $row['name'];
			$gender = $row['gender'];
			$email = $row['email'];
			$phone = $row['phonenumber'];
			$address = $row['localaddress'];
			$major = $row['major'];
			$school = $row['school'];
			$school = htmlentities($school);
			$subject = $row['subjects'];
			$avail = $row['availability'];
			$comments = $row['comments'];
			echo "
				<tr class = '$color'>
					<td>
						<b>$name</b> <br><br>
						Gender: $gender <br>
						email: $email <br>
						Phone Number: $phone <br>
						Local Address: $address <br>
					</td>
					<td>
						$school <br>
						Major: $major <br>
						Subjects: $subject <br>
					</td>
					<td>
						<br>Availability: <br>
						$avail <br><br>\n\n
						Additional Comments: <br>
						$comments
					</td>
					<td>
						<input type = 'checkbox' name = 'Schecked[]' value = '$email'>
					</td>
				</tr>";
			}
			
			echo "</table>";
			
			disconnectFromDB($dbc, $resultS);
	}
?>
	<fieldset class = "floatemail">
	Write Emails to the Selected Students
	<br><br>
	<label class = "floatleft"> Subject: </label> 
		<input type ="text" name = "subj" value ="" id="enteredsubject"><br>
		<label class="floatright2" id="subjecterror"></label> <br>
	<label class="floatleft">Body:</label><br>
		<textarea name="body" id="enteredbody" style="width : 270px; height : 120px"></textarea><br>
		<label class="floatright2" id="bodyerror"></label> <br>
	<br>
	<input type = "submit" name = "email" value = "Send Emails to Selected Students">
	</fieldset>
	
	</form>
<?php
}

?>