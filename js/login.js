// function validateRegister() {  
// var firstName=document.registerForm.formFirstName.value;  
// var lastName=document.registerForm.formLastName.value;
// // var email=document.registerForm.formEmail.value;
// var password=document.registerForm.formPassword.value;


// var status=false;  

// if(firstName==null||firstName==""){  
// document.getElementById("namelocation").innerHTML=  
// "<img src='http://www.javatpoint.com/javascriptpages/images/unchecked.gif'/>Please enter your name";  
// status=false;
// }else{  
// document.getElementById("namelocation").innerHTML="<img src='http://www.javatpoint.com/javascriptpages/images/checked.gif'/>";  
// status=true;
// }  
  
// if(password.length<6){  
// document.getElementById("passwordlocation").innerHTML=  
// "<img src='http://www.javatpoint.com/javascriptpages/images/unchecked.gif'/> Password must be greater than 6";  
// status=false; 
// }else{  
// document.getElementById("passwordlocation").innerHTML="<img src='http://www.javatpoint.com/javascriptpages/images/checked.gif'/>";  
// status=true;
// }  
  
// return status;  
// }  



function signIn(){
     // var firstName=document.registerForm.formFirstName.value;  
     //        var lastName=document.registerForm.formLastName.value;
     //        var user=lastName + ", " + firstName;
     var logEmail = document.loginForm.formEmail.value;  
     var logPassword = document.loginForm.formPassword.value;  

     var regEmail = sessionStorage.getItem("stateEmail");
     var regPassword = sessionStorage.getItem("statePassword");
     var regfName = sessionStorage.getItem("stateFirst");
     var reglName = sessionStorage.getItem("stateLast");
     if ((logEmail == regEmail) & (logPassword == regPassword)) {
            setCookie("username", regfName , 30);
        } else {
        alert("Incorrect email or password!");
        }
}

function register() {
    
    var firstName=document.registerForm.formFirstName.value;  
    var lastName=document.registerForm.formLastName.value;
    var email = document.registerForm.formEmail.value;
    var password = document.registerForm.formPassword.value;

    sessionStorage.setItem("stateEmail", email);
    
    sessionStorage.setItem("stateFirst", firstName);
    sessionStorage.setItem("stateLast", lastName);
    
    sessionStorage.setItem("statePassword", password);
    
    alert("Successfully registered!");

}

//function logout() {
//var email = getCookie("username");
    //delCookie(email);
//
//}

function delCookie() {
    setCookie("username", "", -1);
}

function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname+"="+cvalue+"; "+expires;
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function checkCookie() {
    var user=getCookie("username");
    if (user != "") {
        document.getElementById("userPet").innerHTML = user;

    } 
}