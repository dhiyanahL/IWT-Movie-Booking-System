//- LIYAUDEEN D.H //
function passwordVisibility(){
	var p = document.getElementById("pw");
	
	// Check if the type attribute of the input field is "password"
	if (p.type === "password"){
		//If the type is "password", change it to "text" to make the password visible//
		p.type = "text";
	}
	else
	{
		// If the type is not "password" (i.e., it's "text" or something else),
        // change it back to "password" to hide the password.
		p.type = "password";
	}
}


	
