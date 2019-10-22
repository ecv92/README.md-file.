<?php 
session_start();
if (!isset($_SESSION['login'])) {
    header("location:login2.php");
}else {
    // echo "pls. login";
}
include 'config.php';
?>
<!DOCTYPE html>
<head>
    <title>Index</title>
    <link rel="stylesheet" href="./Assets/css/style2.css">
   
<body background="./Assets/img/l.jpg">

<script>
     document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems);
    });
    </script>

    <center>
        <h1>Register</h1>
        <br><br><br><br>
    <form action="" method="post">
                            <p>
                                <label>Username:</label>
                                <input  type="text" id="user" name="uname" class="q1">
                            </p>
                            <p>
                                <label>Password:</label>
                                <input  type="password" id="passwd" name="pwd" class="q1">
                            </p>
                            <p>
                            <form action="user.php">
                                <button type="submit" name="insert">Register</button>
                            </p>
                        </form>
                        <form action="login.php">
                        <button type="submit" name="insert">back</button>
                        </form>
                        <?php 
                        if (isset($_POST['insert'])) {
                            $uname = mysqli_real_escape_string($conn,$_POST['uname']);
                            $pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
                            $query = mysqli_query($conn,"INSERT INTO tbl_user (username,passwd) VALUE ('$uname','$pwd')");
                            if (!$query) {
                                echo "<p>FAILED!</p>";
                            }else {
                                // echo "<a onclick='M.toast({html:''I am a toast'}) class='btn'>Toast!</a>";
                                echo "<p>Successfully registerd</p>";
                            }
                        }
                        ?>
    </center>
             
    
</body>
</html>