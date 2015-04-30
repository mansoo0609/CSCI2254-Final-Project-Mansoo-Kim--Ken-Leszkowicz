function validatestudentsignup() {
	var namevalid = validatename();
	var gendervalid = validategender();
	var emailvalid = validateemail();
	var passwordvalid = validatepassword();
	var phonevalid = validatephone();
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
	var phonevalid = validatephone();
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
	var gender = document.infoform.gender;
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

function validatephone() {
	var phone = document.getElementById("enteredphone").value;
	var tomatch = /^\d{3}-\d{3}-\d{4}$/;
	if  ( !tomatch.test(phone) ){
		document.getElementById("phoneerror").innerHTML  = "<font color='red'>Please input a phone number as xxx-xxx-xxxx.</font>";
		return false;
	}
	document.getElementById("phoneerror").innerHTML  = '';
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
	var passwordvalid = validatepassword2();
	
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

function validatepassword2() {
	var password = document.getElementById("enteredpassword").value;
	if  ( password.trim() == "" ){
		document.getElementById("passworderror").innerHTML  = "<font color='red'>Please enter your password.</font>";
		return false;
	}
	document.getElementById("passworderror").innerHTML  = '';
	return true;
}
                  