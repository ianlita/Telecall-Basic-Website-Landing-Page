<?php
// Database connection details
$host = "localhost";
$username = "id21349781_ian";
$password = "Database-1";
$database = "id21349781_user";

// Connect to the database
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$sex = $_POST['sex'];
$email = $_POST['email'];
$age = $_POST['age'];
$birthday = $_POST['date'];
$address = $_POST['address'];
$course = $_POST['select1'];
$attainment = $_POST['attainment'];
$school = $_POST['schoolid'];
$bsrsemail = $_POST['bsrsemail'];
$bsrspass = $_POST['bsrspass'];

// Insert data into the database
$sql = "INSERT INTO registration (lastname, firstname, middlename, sex, email, age, birthday, address, course, attainment, school, bsrsemail, bsrspass)
        VALUES ('$lastname', '$firstname', '$middlename', '$sex', '$email', '$age', '$birthday', '$address', '$course', '$attainment', '$school', '$bsrsemail', '$bsrspass')";

if ($conn->query($sql) === TRUE) {
    echo 'Successfully registered';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
