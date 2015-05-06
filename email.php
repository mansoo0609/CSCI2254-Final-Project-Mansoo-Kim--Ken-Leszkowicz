<?php
include ('database/dbconn.php');
?>

<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Send Emails</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel='stylesheet' type ='text/css' href='css/bootstrap.css'>
	<link rel='stylesheet' type = 'text/css' href='css/bootsrap-theme.css'>
	<script type="text/javascript" src="js/index.js"></script>
</head>

<body>
<?php
	$self = $_COOKIE['email'];
	sendmail($_POST['checked'], $self);

?>
	<br><br>
	<a href = 'profile.php'> Go Back to your Profile </a>

<?php	
function sendmail($emails, $self){
	
	$email = implode(", ", $emails);
	
	echo "Email was sent to $email";
	
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