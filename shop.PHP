<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SHOP</title>
    <link rel="stylesheet" href="./Assets/css/style2.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/materializecss.min.css">
    <link rel="stylesheet" href="./assets/css/materializecss-icons.css">
    <script src="assets\js\script.js"></script>
</head>
<body>
<nav>
      <div class="nav-wrapper black">
          <a href="login.php" class="brand-logo right">Login</a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="left hide-on-med-and-down">
                    <li><a href="index.php"><i class="material-icons">home</i></a></li>
                    <li><a href="about.php"><i class="material-icons">info_outline</i></a></li>
                    <li><a href="blog.php"><i class="material-icons">account_circle</i></a></li>
                    <li><a href="shop.php"><i class="material-icons">shopping_cart</i></a></li>
            </ul>
        </div>
</nav>

  


        <h4 id="e1"> Ed's Shop</h4>

       <!-- <pre>
<h3>
       <img src="./Assets/img/b1.jpg" width="300" height="300">        <img src="./Assets/img/b2.jpg" width="300" height="300">     <img src="./Assets/img/b3.jpg" width="300" height="300">
            Price:P20,000.00                          Price:P30,000.00                              Price:P20,000.00
            Name: Pink Shoulder Bag                   Name: Pink BackPack Bag                       Name: Beautiful
</h3>  
                    <button type="button">BUY!</button>                                          <button type="button">BUY!</button>                                                  <button type="button">BUY!</button> 

   -->

   
   
  <div class="container">
  <?php echo "<table>"; 
    require('./config.php');
    $sql = mysqli_query($conn,"SELECT * FROM tbl_shop");

      if ($sql->num_rows>0){
      // output data of each row
      while($row = $sql->fetch_assoc()) {
      echo  "<tr><td>" . $row["product_name"] . "</td><td>". $row["product_price"]. "</td>". "</td><td><img src=". $row["bckground_img"]. " width='300' height='300'></td>";
      
      
      // echo "<td>
      //     <a class='btn' href='user.php?edit=$row[ID]'>EDIT</a>
      //     <a class='btn' href='user.php?del=$row[ID]'>DELETE</a>
      //   </td>";
}
  echo "</table>";
  
} else { echo "0 results"; }
$conn->close();
?>


</table>
                    </div>

                    </div>          
    <footer class="page-footer black">
            <div class="footer-copyright">
                <div class="container">
                <center>All Rights Reserved 2019 ECV © WS101</center>
            </div>
        </footer>
    <!-- Offline -->
    <script src="./assets/js/materialize-css.min.js"></script>
    <script>
    M.AutoInit();
    </script>

</body>
</html>