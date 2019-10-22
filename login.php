<?php 
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../assignment/assets/css/main.css">
    <link rel="stylesheet" href="../assignment/assets/css/main.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../assignment/assets/css/main.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/materializecss.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script src="./assets/js/materialize-css.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log.in</title>
    <link rel="stylesheet" href="./Assets/css/style2.css">
    <link rel="stylesheet" href="./assets/css/materializecss-icons.css">
    <script src="./Assets/js/script.js"></script>
    <style>
    #s1{
        color: red;
    }
    </style>
</head>
<body>

    <ul id="e2">
        <li><a href="index.php"><i class="material-icons">home</i></a></li>
       
        <li class="dropdown" style="float:right;">
            <a  class="active"  href="login.PHP" class="dropbtn"> | Login |</a>
                <div class="dropdown-content">
            <a href="#">Sign In</a>
            <a href="#">Sign Out</a>
                </div>
        </li>
            
        </li>
    </ul><br>
   
                        
<center><br><br><br>

<h1>LOGIN</h1>
<form action="" method="post">
<table style="width:30%;" class="centered">
    <thead>
        <tr>
            <th><h5>USER</h5></th>
        </tr>
    </thead>
<tbody>
        <tr>
            <td>
            <input  type="text" id="passwd" name="uname" class="q1" placeholder="USERNAME">
            </td>
        </tr>
        <tr>
            <td>
            <input  type="password" id="passwd" name="pwd" class="q1" placeholder="PASSWORD">
            </td>
        </tr>
</tbody>
</table>
                            
                            
        <p>
            <button type="submit" name="login" class="waves-effect waves-light btn"> Log In</button>
        </p>

        </form>
                <?php
                    if(isset($_POST['login'])){
                    $sname = $_POST['uname'];
                    $passwd = $_POST['pwd'];
                    $query = mysqli_query($conn,"SELECT user, passwd FROM tbl_login WHERE user ='$sname' AND passwd = '$passwd'");
                                
                    if ($query->num_rows>0) {
                    // echo "<div id='p2'> Welcome, ".$uname."!</div>";
                    session_start();
                    $_SESSION['uname']=$sname;
                    $_SESSION['login']=true;
                    header("location: user.php");
                    }else {                
                    // echo "<script> M.toast({html: 'I am a toast!'}) </script>";
                    echo "<h5 id='s1'>Invalid pasword/user</h5>";
                    }
                    //     if ($query->num_rows>0) {
                                        
                                    
                    //     // echo "<div id='p2'> Welcome, ".$uname."!</div>";
                    //     session_start();
                    //     $_SESSION['uname']=$sname;
                    //     $_SESSION['login']=true;
                    //     header("location: welcome.php");
                    // }else {
                    //     // echo "<script> M.toast({html: 'I am a toast!'}) </script>";
                    //     echo "<h5 id='s1'>Invalid pasword/user</h5>";
                     //     // echo "<script>Alert('Not registerd'); return false;</script>";
                    //     // echo "<script>M.toast({html: 'I am a toast!'})</script>";
                    //     // echo "<a onclick='M.toast({html: 'I am a toast!'})' class='btn'>Toast!</a>";
                                    
                    // }
                    }
                ?>  
</center>
 
        
            <?php
            if ($conn->connect_error) {
            die("failed to connect to ".$conn->connect_error);
            }else {
            echo "<p style=color:black;> connected to database</p>";
            }
                ?>
</body>
</html>