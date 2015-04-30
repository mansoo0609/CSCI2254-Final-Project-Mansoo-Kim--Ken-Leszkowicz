<?php
include ('database/dbconn.php');
?>

<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Your Profile</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/index.js"></script>
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
			$subject = $row['subjects'];
			$avail = $row['availability'];
			$comments = $row['comments'];
		}
		
		echo "<h1>Student Profile: $name</h1> \n";
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
			
			echo"<form>\n
			  <input type='submit' name='edit' value='Edit Your Profile' />\n
			  </form>\n
			  <br>\n
			  <form action='logout.php'>\n
			  <input type='submit' name='logout' value='Sign Out' />\n
			  </form>\n
			  
			  </fieldset> <br><br>\n\n" ;
		
		mysqli_free_result($result);
		
		echo "<h2>Tutor List</h2> \n\n";
		
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
	<table>
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
						<input type = 'checkbox' name = 'checked' value = '$name'>
					</td>
				</tr>";
			}
			
			echo "</table>";
			
			disconnectFromDB($dbc, $resultT);
		}
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
				
			  echo" <form>\n
			  <input type='submit' name='edit' value='Edit Your Profile' />\n
			  </form>\n
			  <br>\n
			  <form action='logout.php'>\n
			  <input type='submit' name='logout' value='Sign Out' />\n
			  </form>\n
			  
			  </fieldset> <br><br>\n\n" ;
		  
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
	
	<table>
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
						<input type = 'checkbox' name = 'checked' value = '$name'>
					</td>
				</tr>";
			}
			
			echo "</table>";
			
			disconnectFromDB($dbc, $resultS);
	}
}

?>