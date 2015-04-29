<?php

function connectToDB($dbname){
	$dbc= @mysqli_connect("http://cscilab.bc.edu/phpmyadmin/index.php?token=f337f32ff0b16cadf24c8e403665cc2b&db=kimbxn", "kimbxn", "4F5zJzzf", $dbname) or
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