

    function validateUserName() {
    const message=document.getElementById("userCheck");
    message.innerHTML="";
    var x = document.getElementById("username").value;
    try {
        if (x=="") throw "Username is required!";
        else message.innerHTML="";
    } catch(err) {
        message.innerHTML=err;
    }
 }

 function validateEmail(enteredEmail) {
     var mailformat = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/; 
    const message=document.getElementById("emailCheck");
    message.innerHTML="";
    var x = document.getElementById("email").value;
    try {
        if (!enteredEmail.value.match(mailformat)) throw "Not valid email format!";
        else message.innerHTML="";
    } catch(err) {
        message.innerHTML=err;
    }
 }


 var pass; 
 function validatePassword() {
    const message=document.getElementById("passCheck");
    message.innerHTML="";
    var x = document.getElementById("password").value;
    pass = x;
    try {
        if (x=="") throw "Password is required!";
        else message.innerHTML="";
    } catch(err) {
        message.innerHTML=err;
    }
 }
 
 function validatePassword2() {
    const message=document.getElementById("passCheck2");
    message.innerHTML="";
    var x = document.getElementById("password2").value;
    try {
        if (x!=pass) throw "You must repeat same password!";
        else message.innerHTML="";
    } catch(err) {
        message.innerHTML=err;
    }
 }