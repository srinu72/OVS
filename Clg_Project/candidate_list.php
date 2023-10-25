<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "########";
$dbname = "register";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve candidate list from the database
$sql = "SELECT * FROM voter_registrations";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Candidate List</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Name</th><th>Party</th><th>Adhaar</th> <th>Gender</th> <th>Address</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["party"] . "</td>";
        echo "<td>" . $row["aadhar"] . "</td>";
        echo "<td>" . $row["gender"] . "</td>";
        echo "<td>" . $row["address"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No candidates found.";
}

// Close the database connection
$conn->close();
?>
