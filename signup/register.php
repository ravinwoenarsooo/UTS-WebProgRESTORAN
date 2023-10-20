<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input from the form
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $gender = $_POST["gender"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // You should perform validation and sanitation of user input here

    // For simplicity, we'll just display the user's information
    echo "Registration Successful!<br>";
    echo "First Name: " . $first_name . "<br>";
    echo "Last Name: " . $last_name . "<br>";
    echo "Gender: " . $gender . "<br>";
    echo "Username: " . $username . "<br>";
    echo "Email: " . $email . "<br>";
    // In a real application, you'd store this data in a database.
}
?>
