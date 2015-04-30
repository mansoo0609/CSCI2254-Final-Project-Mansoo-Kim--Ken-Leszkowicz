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
	if($_POST['type'] == 'student') { 
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
		$query = "SELECT * FROM studentlist WHERE email = '$_POST[email]'";
		
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
		
		echo "<h1> $name </h1> <br> \n
			  <fieldset class='profile'>
			  Your contact info:  <ul><li>email: $email</li>
			  <li>phone: $phone</li>
			  <li>address: $address</li>
			  </ul>
			  </fieldset> <br><br>\n\n" ;
		
		mysqli_free_result($result);
		
		echo "Tutor List <br><br> \n\n";
		
?>
	<table>
		<tr>
			<th>Name and Contact info</th>
			<th>School, Major, Subjects </th>
			<th>Availability and Additional Comments</th>
			<th>Select Tutor </th>
		</tr>


<?php		
		
		$queryt = "SELECT * FROM tutorlist";
		
		$resultT = performQuery($dbc, $queryt);
		
		if($resultT) {
			while ($row = mysqli_fetch_assoc($resultT)) {
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
			echo "
				<tr>
					<td>
						<b>$name</b> <br><br>
						Gender: $gender <br>
						email: $email <br>
						Phone Number: $phone <br>
						Local Address: $address <br>
					</td>
					<td>
						$school
						Major: $major <br>
						Subjects to teach: $subject <br>
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
			
			mysqli_free_result($resultT);
		}
	}
	
function tutorprofile(){
	$dbc = connectToDB('kimbxn'); 
	$query = "SELECT * FROM tutorlist WHERE email = '$_POST[email]'";
	
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
	echo "<h1> $name </h1> <br> \n
		  <fieldset class = 'profile'>
		  Your contact info: <ul><li>email: $email</li>
		  <li>phone: $phone</li>
		  <li>address: $address</li>
		  </ul>
		  </fieldset><br><br>\n\n" ;
		  
	mysqli_free_result($result);
	
	echo "Student List <br><br> \n\n"
?>

	<table>
		<tr>
			<th> Name and Contact info</th>
			<th> School, Major, Subjects </th>
			<th> Availability and Additional Comments</th>
			<th>Select Student</th>
		</tr>
		
<?php
	
	$querys= "SELECT * FROM studentlist";
	
	$resultS = performQuery ($dbc, $querys);
	
	if($resultS) {
		while ($row=mysqli_fetch_assoc($resultS)) {
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
			echo "
				<tr>
					<td>
						<b>$name</b> <br><br>
						Gender: $gender <br>
						email: $email <br>
						Phone Number: $phone <br>
						Local Address: $address <br>
					</td>
					<td>
						$school
						Major: $major <br>
						Subjects to teach: $subject <br>
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
			
			mysqli_free_result($resultS);
	}
}

?>