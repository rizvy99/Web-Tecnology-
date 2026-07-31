const form = document.querySelector("form");
form.addEventListener("submit", function (e) {
    e.preventDefault();

    const name = document.getElementById("fname").value.trim();
    const postal = document.getElementById("code").value;
    const dob = document.getElementById("date").value;
    const email = document.getElementById("mail").value.trim();
    const password = document.getElementById("pass").value;
    const country = document.getElementById("country").value;

    if (name === "") {
        alert("Please enter your full name.");
        return;
    }
    if (postal === "") {
        alert("Please select a postal code.");
        return;
    }
    if (dob === "") {
        alert("Please select your date of birth.");
        return;
    }
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address.");
        return;
    }
    if (password.length < 8) {
        alert("Password must be at least 8 characters long.");
        return;
    }
    if (country === "") {
        alert("Please select your country.");
        return;
    }
    alert("Registration Successful!");

    form.reset();

});