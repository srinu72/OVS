<?php      
    $servername='localhost';
    $username='root';
    $password='##########';
    $dbname = "register";
    $con=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$con){
          die('Could not Connect MySql Server:');
        }  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from  users  where name = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        if($count == 1){  
           echo " <script>
             alert('Login Sucessfully');
             window.open('/Clg_Project/admin.html') ;
              </script> ";
            
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
        
?>  
