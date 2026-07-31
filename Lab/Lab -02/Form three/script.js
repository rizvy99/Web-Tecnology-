const form = document.querySelector("form");
form.addEventListener("submit",function(e){
    e.preventDefault();

    const name = document.getElementById("fname").value.trim();
    const age = document.getElementById("age").value;
    const DOB = document.getElementById("date").value;
    const email = document.getElementById("mail").value.trim();
    const password = document.getElementById("pass").value;
    const contact = document.querySelector("input[name='contact']:checked");

    if(name === ""){
        alert("Please enter your full name.");
        return;
    }
    if(age===""){
        alert("Please enter your age.");
        return;
    }
    if(DOB===""){
        alert("Please enter your date of birth.");
        return ;
    }
    const E_pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if(!E_pattern.test(email)){
        alert("Invalid email address.");
        return;
    }
    if(password.length<8){
        alert("Must contain at least 8 characters,");
        return;
    }
    if(!contact){
        alert("Please select your preffered contact method.");
        return;
    }
    alert("Submitted successfully!");
    form.reset();
});