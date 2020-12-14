
var signupLoginButton = document.getElementById("signup/login");
var signupSection = document.getElementById("s");
var login = document.getElementById("l");
var formContainer = document.getElementById("f");
var greeting = document.getElementById("greeting");
var welcome= document.getElementById("welcome");
var loginPopupDiv=document.getElementById("loginPopupdiv");
var loginPopup=document.getElementById("loginPopupbutton");

function signinUpToggler() {
    var buttonText = signupLoginButton.textContent;
    var list = formContainer.classList;
    if (buttonText == "signup") {
        
    
        signupLoginButton.textContent = "login";
        login.style.display = "none";
        signupSection.style.display = "block";
        greeting.textContent="Hawdy Wanderer";
        welcome.textContent="Welcome to";

    }
    else if(buttonText == "login"){
            signupLoginButton.textContent = "signup";
            signupSection.style.display = "none";
            login.style.display = "block";
            greeting.textContent="Hello Friend";
        welcome.textContent="Welcome  Back To";

        }

}
function closeLogin(){
    loginPopupDiv.style.display="none";
    
}
function displayLogin(){
    loginPopupDiv.style.display="grid";
    
}