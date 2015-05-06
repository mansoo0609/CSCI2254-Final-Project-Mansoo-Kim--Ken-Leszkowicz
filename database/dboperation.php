<?php

	include ('dbconn.php');
	
	$type = $_COOKIE['type'];
	$oldemail = $_COOKIE['email'];
	
	updateprofile($type, $oldemail);
	
	function updateprofile($type,$oldemail) {
		
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
		
		if ( $type == 'tutor' ) {
			$grade = $_POST['grade'];
			$updatequery = "update tutorlist set name='$name', gender='$gender', email='$email',
							password='$password', phonenumber='$phone', localaddress='$address', major='$major', 
							grade='$grade', school='$school', subjects='$subjects', availability='$availability',
							comments='$comment' where email='$oldemail'";
		} else {
			$list = 'studentlist';
			$updatequery = "update studentlist set name='$name', gender='$gender', email='$email',
							password='$password', phonenumber='$phone', localaddress='$address', major='$major', 
							school='$school', subjects='$subjects', availability='$availability',
							comments='$comment' where email='$oldemail'";
		}
		
		$result = performQuery($dbc, $updatequery);
		mysqli_close($dbc);
 
		
	}
	
	header ( 'Location: ../profile.php' );

?>