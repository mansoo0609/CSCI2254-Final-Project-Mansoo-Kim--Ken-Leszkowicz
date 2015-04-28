<?php
function connectToDB($dbname){
	$dbc= @mysqli_connect("localhost", "kimbxn", "4F5zJzzf", $dbname) or
					die("Connect failed: ". mysqli_connect_error());
	return $dbc;
}
function disconnectFromDB($dbc, $result){
	mysqli_free_result($result);
	mysqli_close($dbc);
}

function performQuery($dbc, $query){
	//echo "the query is ($query) <br>";
	$result = mysqli_query($dbc, $query) or die("bad query".mysqli_error($dbc));
	return $result;
}
?>