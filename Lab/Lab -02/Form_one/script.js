const form = document.querySelector("form");

form.addEventListener("submit", function(e){

    e.preventDefault();

    const name = document.getElementById("fname").value.trim();
    const phone = document.getElementById("nmbr").value;
    const dob = document.getElementById("date").value;
    const email = document.getElementById("mail").value.trim();
    const password = document.getElementById("pass").value;
    const agree = document.querySelector('input[name="PP"]').checked;

    if(name===""){
        alert("Please enter your full name.");
        return;
    }

    if(phone===""){
        alert("Please select your phone number.");
        return;
    }

    if(dob===""){
        alert("Please select your date of birth.");
        return;
    }

    const emailPattern=/^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if(!emailPattern.test(email)){
        alert("Invalid email address.");
        return;
    }

    if(password.length<8){
        alert("Password must contain at least 8 characters.");
        return;
    }

    if(!agree){
        alert("Please agree to the Terms & Privacy Policy.");
        return;
    }

    alert("Workspace created successfully!");

    form.reset();

});