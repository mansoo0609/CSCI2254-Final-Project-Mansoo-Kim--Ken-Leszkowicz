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
		
		echo "<h1> $name </h1> <br> \n
			  <fieldset class='profile'>
			  Your contact info:  <ul><li>email: $email</li>
			  <li>phone: $phone</li>
			  <li>address: $address</li>
			  </ul>
			  </fieldset> <br><br>\n\n" ;
		
		mysqli_free_result($result);
		
<<<<<<< HEAD
		echo "<h2>Tutor List</h2> \n\n";
=======
		echo "Tutor List<br> \n\n";
>>>>>>> origin/master
		
?>

<form method = "post">
	<input type = "text" name = 'searchbox' value = "">
	<input type = "submit" name = "searchsubmit" value = "Search Students">
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

		if ($search ==""){
			$queryt= "SELECT * FROM tutorlist";
		}
		else{
			$queryt = "SELECT * FROM tutorlist WHERE name LIKE '%$search%'";
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
			$major = $row['major'];
			$school = $row['school'];
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
	echo "<h1> $name </h1> <br> \n
		  <fieldset class = 'profile'>
		  Your contact info: <ul><li>email: $email</li>
		  <li>phone: $phone</li>
		  <li>address: $address</li>
		  </ul>
		  </fieldset><br><br>\n\n" ;
		  
	mysqli_free_result($result);
	
<<<<<<< HEAD
	echo "<h2>Student List</h2> \n\n";
=======
	echo "Student List <br>\n\n"
>>>>>>> origin/master
?>

<form method = "post">
	<input type = "text" name = 'searchbox' value = "">
	<input type = "submit" name = "searchsubmit" value = "Search Students">
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
	
	if ($search ==""){
		$querys= "SELECT * FROM studentlist";
	}
	else{
		$querys = "SELECT * FROM studentlist WHERE name LIKE '%$search%'";
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