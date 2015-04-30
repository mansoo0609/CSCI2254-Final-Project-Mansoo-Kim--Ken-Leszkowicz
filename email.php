<?php
include ('database/dbconn.php');
?>

<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Send Emails</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/index.js"></script>
</head>

<body>
<?php
	$self = $_COOKIE['email'];
	if(isset($_POST['Tchecked'])){
		sendmail($_POST['Tchecked'], $self);
	}
	else{
		sendmail($_POST['Schecked'], $self);
	}
?>
	<br><br>
	<a href = 'profile.php'> Go Back to your Profile </a>

<?php	
function sendmail($emails, $self){
	
	$email = implode(", ", $emails);
	
	echo "Mail was sent to $email";
	
	foreach($emails as $check) {
		$to = "$check";
		$subject = $_POST['subj'];
		$body = $_POST['body'];
		$headers = "From: $self";
		
		mail($to,$subject,$body,$headers);
	}
	
}
?>

</body>
</html>