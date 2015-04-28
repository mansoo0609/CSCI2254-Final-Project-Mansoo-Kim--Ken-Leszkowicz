function validatestudentsignup() {
	//var namevalid = validatename();
	var gendervalid = validategender();
	if ( gendervalid ) {
		return true;
	}
	return false;
}

function validatename() {
		var name = document.getElementById("enteredname").value;
		if  ( name.trim() == "" ){
			document.getElementById("nameerror").innerHTML  = "<font color='red'>Please input a name.</font>";
			return false;
		}
		document.getElementById("nameerror").innerHTML  = '';
		return true;
}

function validategender() {
/* 	var gender = document.studentsignup.gender;
	for (var i=0; i<gender.length; i++) {
		if (gender[i].checked) {
			document.getElementById("gendererror").innerHTML  = "";
			return true;
		}
	}	
	if (i==type.length) {
		document.getElementById("gendererror").innerHTML  = "<font color='red'>Please select a gender.</font>";
		return false;
	} */
	return true;
}