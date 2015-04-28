
function validatetype(radio) {
    var count = -1;
    for (var i=radio.length-1; i > -1; i--) {
        if (radio[i].checked) {count = i; i = -1;}
    }
    if (count > -1) {
		document.getElementById("accounttypeerror").innerHTML  = "";
		return true;
	} else {
		document.getElementById("accounttypeerror").innerHTML  = "<font color='red'>Please select an account type.</font>";
		return false;
	}
}
                  

function validate() {
	return false;
}