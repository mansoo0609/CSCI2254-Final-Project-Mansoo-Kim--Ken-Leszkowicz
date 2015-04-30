<?php

	include ('database/dbconn.php');
	
	$type = $_POST['accounttype'];
	
	if ( $type == 'student' ) {
		$list = 'studentlist';
	} else {
		$list = 'tutorlist';
	}
	
	$newemail = $_POST['email'];
	$password = $_POST['password'];
	if ( !checkemail( $list, $newemail ) ) {
		echo "
		<!DOCTYPE html>\n
		<html lang='en'>\n
		<head>\n
			<meta charset='utf-8' />\n
			<title>Incorrect Email</title>\n
			<link rel='stylesheet' type='text/css' href='css/style.css'>\n
		</head>\n
		<body>\n
		The email $newemail was not found in the $type database.<br>\n
		<a href = 'index.php?login=Login+with+your+ID'> Try Again! </a> \n
		</body>\n
		</html>\n
		";
	} else if ( !checkpassword ( $list, $password, $newemail ) ) {
		echo "
		<!DOCTYPE html>\n
		<html lang='en'>\n
		<head>\n
			<meta charset='utf-8' />\n
			<title>Incorrect Password</title>\n
			<link rel='stylesheet' type='text/css' href='css/style.css'>\n
		</head>\n
		<body>\n
		Your password was incorrect.<br>\n
		<a href = 'index.php?login=Login+with+your+ID'> Try Again! </a> \n
		</body>\n
		</html>\n
		";
	} else {
		setcookie('email', $newemail);
		setcookie('type', $type );
		header ( 'Location: profile.php' );
	}

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
				disconnectFromDB($dbc, $result);
				return true;
			}
		}
		disconnectFromDB($dbc, $result);
		echo false;
		
	}
?>
