<?php
include 'config.php';
session_start();
if (!isset($_SESSION['login'])) {
    header("location:login.php");
}


?>
<!DOCTYPE html>
<head>
    <title>Index</title>
    <link rel="stylesheet" href="./Assets/css/style2.css">
   <link rel="stylesheet" href="./assets/css/style.css">
   <link rel="stylesheet" href="./assets/css/materializecss.min.css">
<body background="./Assets/img/l.jpg">
<ul 
            <li class="dropdown" style="float:right;">
                <a  class="active"  href="logout.PHP" class="dropbtn"> | Logout |</a>
                    <div class="dropdown-content">
                        <a href="#">Sign In</a>
                        <a href="#">Sign Out</a>
                    </div>
            </li>
            
        </li>
    </ul>
    <center><h1 class="q1">Welcome <?php echo $_SESSION['uname']; ?></h1>
<br><br><br><br><br><br><br>
        
<a class="waves-effect waves-light btn" href="register.php">Register</a>  <a href="login.php" class="waves-effect waves-light btn">user's</a>  
    </center>
    <br><br><br>
    <br><br><br><br>
    <br>
    <br>
 
 
    
</body>
</html>