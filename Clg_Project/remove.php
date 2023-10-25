<?php
$candidate_id = $_POST['candidate_id'];
    $hostname = "localhost";
    $username = "root";
    $password = "#########";
    $database = "register";

    $conn = new mysqli($hostname, $username, $password, $database);

   
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "DELETE FROM voter_registrations WHERE id = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
     
        $stmt->bind_param("i", $candidate_id);

        if ($stmt->execute()) {
            echo "Candidate with ID $candidate_id has been deleted successfully.";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();

?>
