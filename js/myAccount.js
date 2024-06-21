function checkPassword(){
	
	var password1 = document.getElementById("npwd").value;
	var password2 = document.getElementById("cfpwd").value;
	
	if(password1 === password2){
		alert("Success!");
		return true; // Allow form submission
	} else {
		// Passwords don't match, display an error message
		alert("Password Mismatch!");
		return false; // Not allow form submission
	}
}
