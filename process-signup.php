<?php
/** old code of signup page */
/**no use */
if (empty($_POST["firstname"])) {
    die("Firstname is required");
}

if (empty($_POST["lastname"])) {
    die("Lastname is required");
}

if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

if (strlen($_POST["password"]) < 8) {
    die("Password must be at least 8 characters");
}

if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
    die("Password must contain at least one letter");
}

if ( ! preg_match("/[0-9]/", $_POST["password"])) {
    die("Password must contain at least one number");
}

if ($_POST["password"] !== $_POST["password_confirmation"]) {
    die("Passwords must match");
}

if (empty($_POST["countryCode"])) {
    die("Selection is empty (code)");
}

if (empty($_POST["position"])) {
    die("Selection is empty (position)");
}


$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO user2 (firstname, middlename, lastname, email, password_hash, countryCode, phone, position)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("sssssiis",
                  $_POST["firstname"],
                  $_POST["middlename"],
                  $_POST["lastname"],
                  $_POST["email"],
                  $password_hash,
                  $_POST["countryCode"],
                  $_POST["phone"],
                  $_POST["position"]);
                  
if ($stmt->execute()) {

    header("Location: signup-success.html");
    exit;
    
} else {
    
    if ($mysqli->errno === 1062) {
        die("email already taken");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}
