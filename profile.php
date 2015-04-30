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
		$query = "SELECT * FROM studentlist WHERE email = '$_POST[user]'";
		
		$result = performQuery($dbc, $query);
		
?>
	<table>
		<tr>
			<th>Name and Contact info</th>
			<th>School, Major, Subjects </th>
			<th>Availability and Additional Comments</th>
		</tr>


<?php		
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
			  Contact info: email: <ul><li>email: $email</li>
			  <li>phone: $phone</li>
			  <li>address: $address</li>
			  </ul>
			  </fieldset> <br><br>\n\n" ;
		
		mysqli_free_result($result);
		
		echo "Tutor List <br><br> \n\n";
		
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
						<h2><b>$name</b></h2>
						Gender: $gender <br>
						email: $email <br>
						Phone Number: $phone <br>
						Local Address: $address <br>
					</td>
					<td>
						<h3>$school</h3>
						Major: $major <br>
						Subjects to teach: $subject <br>
					</td>
					<td>
						Availability: <br>
						$avail <br>
						Additional Comments: <br>
						$comments
					</td>
				</tr>";
			}
			
			echo "</table>";
			
			mysqli_free_result($resultT);
		}
	}
			  
