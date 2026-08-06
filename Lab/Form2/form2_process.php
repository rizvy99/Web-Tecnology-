<?php
// --- declarations ---
$nameErr = $postalErr = $dobErr = $emailErr = $passwordErr = $countryErr = "";
$name = $postal = $dob = $email = $country = "";

$isValid=false;

$countries = ["United States", "United Kingdom", "Canada", "Australia", "Bangladesh"];
function cleanInput($data) {
 return htmlspecialchars(stripslashes(trim($data)));
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {

 // Name
 if (empty($_POST["name"])) {
 $nameErr = "Enter your full name";
 } else {
 $name = cleanInput($_POST["name"]);
 if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
 $nameErr = "Only letters and white space allowed";
 }else if(strlen($name) < 3){
    $nameErr = "Name must be at least 3 characters long";
 }
 }

 //postal
 if (empty($_POST["postal"])) {
    $postalErr = "Postal Code is required";
} else {
    $postal = cleanInput($_POST["postal"]);

    if (!preg_match("/^[0-9]{4,10}$/", $postal)) {
        $postalErr = "Postal Code must be between 4 and 10 digits";
    }
}

 //DOB
 if (empty($_POST["dob"])) {
        $dobErr = "Enter your date of birth";
} else {
    $dob   = cleanInput($_POST["dob"]);
    $today = new DateTime();
    $birth = DateTime::createFromFormat("Y-m-d", $dob);

    if (!$birth || $birth->format("Y-m-d") !== $dob) {
        $dobErr = "Enter a valid date in YYYY-MM-DD format";
    } elseif ($birth > $today) {
        $dobErr = "Date of birth cannot be in the future";
    } elseif ($birth->diff($today)->y < 18) {
        $dobErr = "You must be at least 18 years old to register";
    }
}

 // Email
 if (empty($_POST["email"])) {
 $emailErr = "Email is required";
 } else {
 $email = cleanInput($_POST["email"]);
 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 $emailErr = "Invalid email format";
 }
 }

 //password
 //Not cleaned and never sent back to the browser.
 if(empty($_POST["password"])) {
    $passwordErr = "Enter your Password";
 }else{
    $password = $_POST["password"];
    if(strlen($password) < 8){
        $passwordErr = "Password must be at least 8 characters long";
    }else if(!preg_match("/[A-Za-z]/", $password) || !preg_match("/[0-9]/", $password)){
        $passwordErr = "Password must contain at least one uppercase letter and one number";
    }
}


 //Counrtry
 if (empty($_POST["country"])) {
    $countryErr = "Select a Country";
} else {
    $country = cleanInput($_POST["country"]);

    if (!preg_match("/^[a-zA-Z-' ]*$/", $country)) {
        $countryErr = "Select a country from the list";
    }
}
$isValid = !$nameErr && !$postalErr && !$dobErr && !$emailErr && !$passwordErr && !$countryErr;


}
?>