<?php
$servername = "localhost";
$username = "root";
$password = "#########";
$dbname = "register";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$party = $_POST['party'];
$aadhar = $_POST['aadhar'];
$gender = $_POST['gender'];
$address = $_POST['address'];


$sql = "INSERT INTO voter_registrations (name, party, aadhar, gender, address) VALUES ('$name', '$party', '$aadhar', '$gender', '$address')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
