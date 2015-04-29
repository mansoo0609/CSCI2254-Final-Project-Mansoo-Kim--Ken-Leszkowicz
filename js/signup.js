function validatestudentsignup() {
	var namevalid = validatename();
	var gendervalid = validategender();
	var emailvalid = validateemail();
	var passwordvalid = validatepassword();
	//var phonevalid = validatephone();
	var addressvalid = validateaddress();
	var majorvalid = validatemajor();
	var schoolvalid = validateschool();
	var subjectsvalid = validatesubjects();
	var availibilityvalid = validateavailability();
	var commentvalid = validatecomment();
	if ( namevalid && gendervalid && emailvalid && passwordvalid && addressvalid && majorvalid && schoolvalid && subjectsvalid && availibilityvalid && commentvalid ) {
		return true;
	}
	return false;
}

function validatetutorsignup() {
	var namevalid = validatename();
	var gendervalid = validategender();
	var emailvalid = validateemail();
	var passwordvalid = validatepassword();
	var addressvalid = validateaddress();
	var majorvalid = validatemajor();
	var gradevalid = validategrade();
	var schoolvalid = validateschool();
	var subjectsvalid = validatesubjects();
	var availibilityvalid = validateavailability();
	var commentvalid = validatecomment();
	if ( namevalid && gendervalid && emailvalid && passwordvalid && addressvalid && majorvalid && gradevalid && schoolvalid && subjectsvalid && availibilityvalid && commentvalid ) {
		return true;
	}
	return false;
}

function validatename() {
	
	var thename = document.getElementById("enteredname").value;
	var tomatch = /^\w{2,}\ \w{2,}$/;   // accepts the form: "Firstname Lastname" with minimum 2 letters each
	
	if ( !tomatch.test(thename) ) {
		var errorrpt = document.getElementById("nameerror");
		errorrpt.style.color = "red";
		errorrpt.innerHTML = "Please enter your name as \"Firstname Lastname\", 2 letters minimum.";
		return false;
	}
	var errorrpt = document.getElementById("nameerror");
	errorrpt.innerHTML = "";
	return true;
}

 
function validategender() {
	var gender = document.studentsignup.gender;
	for (var i=0; i<gender.length; i++) {
		if (gender[i].checked) {
			document.getElementById("gendererror").innerHTML  = "";
			return true;
		}
	}	
	if (i==gender.length) {
		document.getElementById("gendererror").innerHTML  = "<font color='red'>Please select a gender.</font>";
		return false;
	}
}

function validateemail() {
	
	var theemail = document.getElementById("enteredemail").value;
	var tomatch = /^(\w|\.){1,}\@\w{1,}\.(com|net|org|edu)$/;   // accepts the form: "email@bc.site" where "site" can be com, net, org, or edu
	
	if ( !tomatch.test(theemail) ) {
		var errorrpt = document.getElementById("emailerror");
		errorrpt.style.color = "red";
		errorrpt.innerHTML = "Please enter an email in the form \"email@host.domain\".";
		return false;
	}
	
	var errorrpt=document.getElementById("emailerror");
	errorrpt.innerHTML = "";
	return true;
}

function validatepassword() {
	
	var password1 = document.getElementById("password1").value;
	var password2 = document.getElementById("password2").value;
	var tomatch = /^\w{5,}$/;   // accepts passwords that are minimum 5 characters long
	
	if ( !tomatch.test(password1) ) {
		var errorrpt = document.getElementById("password1error");
		errorrpt.style.color = "red";
		errorrpt.innerHTML = "Please enter a password with at least 5 characters.";
		return false;
	} else if ( password2 != password1 ) {
		var errorrpt = document.getElementById("password1error");
		errorrpt.innerHTML = "";
		var errorrpt = document.getElementById("password2error");
		errorrpt.style.color = "red";
		errorrpt.innerHTML = "Please doublecheck your passwords - they do not match.";
		return false;
	}
	var errorrpt = document.getElementById("password1error");
	errorrpt.innerHTML = "";
	var errorrpt = document.getElementById("password2error");
	errorrpt.innerHTML = "";
	return true;
}

function validateaddress() {
	var address = document.getElementById("enteredaddress").value;
	if  ( address.trim() == "" ){
		document.getElementById("addresserror").innerHTML  = "<font color='red'>Please enter your address.</font>";
		return false;
	}
	document.getElementById("addresserror").innerHTML  = '';
	return true;
}

function validatemajor() {
	var major = document.getElementById("enteredmajor").value;
	if  ( major.trim() == "" ){
		document.getElementById("majorerror").innerHTML  = "<font color='red'>Please enter your major.</font>";
		return false;
	}
	document.getElementById("majorerror").innerHTML  = '';
	return true;
}

function validateschool() {
	var school = document.getElementById("enteredschool").selectedIndex;
	if  ( school == "0"  ){
		document.getElementById("schoolerror").innerHTML  = "<font color='red'>Please select your school.</font>";
		return false;
	}
	document.getElementById("schoolerror").innerHTML  = '';
	return true;
}

function validategrade() {
	var grade = document.getElementById("enteredgrade").selectedIndex;
	if  ( grade == "0"  ){
		document.getElementById("gradeerror").innerHTML  = "<font color='red'>Please select your grade.</font>";
		return false;
	}
	document.getElementById("gradeerror").innerHTML  = '';
	return true;
}

function validatesubjects() {
	var subjects = document.getElementById("enteredsubjects").value;
	if  ( subjects.trim() == "" ){
		document.getElementById("subjectserror").innerHTML  = "<font color='red'>Please enter some subjects.</font>";
		return false;
	}
	document.getElementById("subjectserror").innerHTML  = '';
	return true;
}

function validateavailability() {
	var availability = document.getElementById("enteredavail").value;
	if  ( availability.trim() == "" ){
		document.getElementById("availerror").innerHTML  = "<font color='red'>Please enter your usual availability times.</font>";
		return false;
	}
	document.getElementById("availerror").innerHTML  = '';
	return true;
}

function validatecomment() {
	var comment = document.getElementById("enteredcomment").value;
	if  ( comment.trim() == "" ){
		document.getElementById("commenterror").innerHTML  = "<font color='red'>Please leave any relevant comments about yourself.</font>";
		return false;
	}
	document.getElementById("commenterror").innerHTML  = '';
	return true;
}