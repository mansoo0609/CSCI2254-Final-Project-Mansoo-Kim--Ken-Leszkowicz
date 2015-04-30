<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>User Home Page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

<?php

	include ('database/dbconn.php');
	
	$type = $_POST['type'];
	
	if ( $type == 'student' ) {
		$list = 'studentlist';
	} else {
		$list = 'tutorlist';
	}
	
	$newemail = $_POST['email'];
	$password = $_POST['password'];
	//checkemail( $list, $newemail );
	checkpassword ( $list, $password, $newemail );
	
?>

</body>

</html>

<?php

	function checkemail( $list, $newemail ) {
		
		$dbc = connectToDB( 'kimbxn' ) ; 
		 
		$query = "Select * from $list where email = '$newemail' ";
		$result = performQuery($dbc, $query); 
		
		if ( mysqli_num_rows($result) == 0 ) {
			disconnectFromDB($dbc, $result);
			return false;
		} else {
			disconnectFromDB($dbc, $result);
			return true;
		}
	}
	
	function checkpassword ( $list, $newpassword, $newemail ) {
		$dbc = connectToDB( 'kimbxn' ) ;
		
		$newpassword = sha1($newpassword);
		
		$query = "Select email, password from $list where password = '$newpassword' ";
		$result = performQuery($dbc, $query);
		while (@extract(mysqli_fetch_array($result, MYSQLI_ASSOC)) ) {
			if ( $email == $newemail && $password == $newpassword ) {
				echo "good";
			}
		}
		disconnectFromDB($dbc, $result);
		echo "bad";
		
	}
?>
