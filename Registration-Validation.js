//IT22055262 - LIYAUDEEN D.H //

function checkPassword(){
    var password = document.getElementById("pw").value;
    var confirmPasword = document.getElementById("confirm_pw").value;


    if (password !== confirmPasword){
        alert("Passwords do not match!");

        return false;
    }


    
}