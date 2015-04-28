<?php
	
	function loginpage() {
?>	
		<fieldset> 
		<form method = "post">
			<h3>Are You a Student or a Tutor?</h3>
			Student <input type = "radio" name = "type" value = "student">
			Tutor <input type = "radio" name = "type" value = "tutor"> <br>

			Enter your username and password <br>
			<input type = "text" name = "user" value = ""> <br>
			<input type = "password" name = "pass" value = ""> <br>
		</form>
		</fieldset>
<?php
	}
	
?>