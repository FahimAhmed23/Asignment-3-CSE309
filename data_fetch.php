<?php // php code for fetching data from the database //
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cse309";

$conn = new mysqli($servername, $username, $password, $dbname); //connection to database

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to fetch data from the table
$sql = "SELECT * FROM contactus_list";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["mobileNumber"] . "</td>";
        echo "<td>" . $row["subject"] . "</td>";
        echo "<td>" . $row["message"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5'>No records found</td></tr>";
}

// Close the connection
$conn->close();
?>
