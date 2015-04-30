function validatetype() {
	var type = document.form.accounttype;
	for (var i=0; i<type.length; i++) {
		if (type[i].checked) {
			document.getElementById("accounttypeerror").innerHTML  = "";
			return true;
		}
	}	
	if (i==type.length) {
		document.getElementById("accounttypeerror").innerHTML  = "<font color='red'>Please select an account type.</font>";
		return false;
	}
}

function validatelogin() {
	var typevalid = validatetype();
	var emailvalid = validateemail();
	var passwordvalid = validatepassword();
	
	if ( emailvalid && passwordvalid && typevalid ) {
		return true;
	}
	return false;
}


function validateemail() {
	var email = document.getElementById("enteredemail").value;
	if  ( email.trim() == "" ){
		document.getElementById("emailerror").innerHTML  = "<font color='red'>Please enter your email.</font>";
		return false;
	}
	document.getElementById("emailerror").innerHTML  = '';
	return true;
}

function validatepassword() {
	var password = document.getElementById("enteredpassword").value;
	if  ( password.trim() == "" ){
		document.getElementById("passworderror").innerHTML  = "<font color='red'>Please enter your password.</font>";
		return false;
	}
	document.getElementById("passworderror").innerHTML  = '';
	return true;
}
                  