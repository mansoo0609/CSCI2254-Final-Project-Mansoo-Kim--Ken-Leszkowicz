function validatetype() {
/*  	var type = '';
 	var len = document.frmOne.accounttype.length;
	for (i = 0; i < len; i++) {
		if ( document.frmOne.accounttype[i].checked ) {
			type = document.frmOne.accounttype[i].value;
			break;
		}
	}
	
	if ( type == '' ) {
		document.getElementById("accounttypeerror").innerHTML  = "<font color='red'Please select an account type.</font>";
		return false;
	} */
	
	document.getElementById("accounttypeerror").innerHTML  = "";
	return false;
}

function validate() {
	return false;
}