<?php
    $servername='localhost';
    $username='root';
    $password='sri@123###12';
    $dbname = "register";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:');
        }
?>