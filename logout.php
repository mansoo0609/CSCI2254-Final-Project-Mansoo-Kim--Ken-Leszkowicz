<?php

	setcookie('email', 0, time()-36000);
	setcookie('type', 0, time()-36000);
	header ( 'Location: index.php' );

?>