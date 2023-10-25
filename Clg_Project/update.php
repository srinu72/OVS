<?php
    $servername='localhost';
    $username='root';
    $password='sri@123###12';
    $dbname = "register";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:');
        }
        $candidate_id =$_POST['candidate_id'];
        $name = $_POST['name'];
        $party = $_POST['party'];
        $aadhar = $_POST['aadhar'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
    
      
        $sql = "UPDATE voter_registrations SET name=?, party=?, aadhar=?, gender=?, address=? WHERE id=?";
        $stmt = $conn->prepare($sql);
    
        if ($stmt) {
            
            $stmt->bind_param( $name, $party, $adhaar, $gender, $addres, $candidate_id);
    
           
            if ($stmt->execute()) {
                echo "Candidate with ID $candidate_id has been updated successfully.";
            } else {
                echo "Error: " . $stmt->error;
            }
    
          
            $stmt->close();
        } else {
            echo "Error: " . $conn->error;
        }
    
        $conn->close();      
?>