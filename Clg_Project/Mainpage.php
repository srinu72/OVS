<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./fun.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    body{
        background-image: url('/Clg_Project/pic/mp.webp');
        background-repeat: no-repeat;
        background-size: cover;
      }
      h4{
        color: whitesmoke;
        padding-left: 22%;
      }
      #con{
           
           padding-left: 30%;
           padding-top: 13%;
      }
      </style>
</head>
<body>
<div class="bold">
  <div class="color-overlay d-flex justify-content-center align-items-center">
<div class="pic"></div>
    <nav class="fixed-top navbar navbar-expand-sm nav-tabs navbar-light border-1">
        <div class="container">
            <a class=" navbar-brand text-uppercase">Online Voting System</a>
            <div class="div" id="nav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link rounded-3 text-dark" href="/Clg_Project/Mainpage.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/Clg_Project/admin_login.html">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="./reg.html">Candidate</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Connect Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/Clg_Project/logout.php"> LogOut</a>
                </li>
            </ul>
        </div>
        </div>
    </nav>
</div>
<div class="mt-5 pt-5 mx-5  ">
    <h4 >Happy to see You.....!</h4>
</div>

   <div  id="con" text-center>
            <h3> <h3>Welcome to Online Voting system 
         <br>Saving time for your valid vote..</h3>
</div>
</div>
</div>
<script>  
          function login(){
            window.open('/Clg_Project/index.html');
          } 
    function validation()  
    {  
        var id=document.f1.user.value;  
        var ps=document.f1.pass.value;  
        if(id.length=="" && ps.length=="") {  
            alert("User Name and Password fields are empty");  
            return false;  
        }  
        else  
        {  
            if(id.length=="") {  
                alert("User Name is empty");  
                return false;  
            }   
            if (ps.length=="") {  
            alert("Password field is empty");  
            return false;  
            }  
        }                             
    }  
</script>  
<script src="./js/bootstrap.min.js"></script>
<script src="./js/jquery.min.js"></script>
    
</body>
</html>