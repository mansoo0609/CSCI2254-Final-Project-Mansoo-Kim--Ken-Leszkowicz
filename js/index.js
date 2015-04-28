function validatetype() {
	var type = document.selecttype.accounttype;
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

                  