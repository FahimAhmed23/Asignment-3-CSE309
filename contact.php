<?php // php code for inserting data into the database //
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cse309";

$conn = new mysqli($servername, $username, $password, $dbname); //connection to database

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); // if connection does not build then show this message
}

$name = $_POST['name'];             //
$mobile = $_POST['mobile'];         // storing values from index.html to these variables 
$subject = $_POST['subject'];       //
$message = $_POST['message'];       //

$sql = "INSERT INTO contactus_list (name, mobileNumber, subject, message) VALUES ('$name', '$mobile', '$subject', '$message')";     // sql querry to insert above variable values into the table

if ($conn->query($sql) === TRUE) {
    return true;      // if message stored successfully then show this
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();     // closing hte database connection
