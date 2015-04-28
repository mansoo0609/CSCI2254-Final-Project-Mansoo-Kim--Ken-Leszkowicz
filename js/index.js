function validedatetype() {
	var type = '';
	var len = document.frmOne.accounttype.length;
	for (i = 0; i < len; i++) {
		if ( document.frmOne.payment[i].checked ) {
			type = document.frmOne.payment[i].value;
			break;
		}
	}
	
	if ( type == '' ) {
		document.getElementById("accounttypeerror").innerHTML  = "<font color='red'Please select an account type.</font>";
	} else {
		document.getElementById("accounttypeerror").innerHTML  = "";
	}
}