
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BLOG</title>
    <link rel="stylesheet" href="./assets/css/style2.css">
   <link rel="stylesheet" href="./assets/css/style.css">
   <link rel="stylesheet" href="./assets/css/materializecss.min.css">
   <link rel="stylesheet" href="./assets/css/materializecss-icons.css">
   
</head>

<script>
        function commentSubmit(){
            if(form1.name.value == '' && form1.comments.value == ''){ //exit if one of the field is blank
                alert('Enter your message !');
            return;
            }
            var name = form1.name.value;
            var comments = form1.comments.value;
            var xmlhttp = new XMLHttpRequest(); //http request instance
    
            xmlhttp.onreadystatechange = function(){ //display the content of insert.php once successfully loaded
            if(xmlhttp.readyState==4&&xmlhttp.status==200){
                document.getElementById('comment_logs').innerHTML = xmlhttp.responseText; //the chatlogs from the db will be displayed inside the div section
            }
        }
        xmlhttp.open('GET', 'ins.php?name='+name+'&comments='+comments, true); //open and send http request
        xmlhttp.send();
    }

    $(document).ready(function(e) {
        $.ajaxSetup({cache:false});
        setInterval(function() {$('#comment_logs').load('logs.php');}, 2000);
    });
    
</script>
<body background="./Assets/img/l.jpg">
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

   </header>


<div class="container">
  
<h4 id="e10">Notes from the Road</h4>
        <h4 id="f1">School is Cool. . .</h4>
        <h2>June,2017<h2>

        
        <img src="./assets/img/s.jpg" width="300" height="300">
        <img src="./assets/img/ss.jpg" width="300" height="300">
        <img src="./assets/img/o.jpg" width="300" height="300">
        
        
        <p id="e10">College isn't so bad. Actually, it's pretty awesome.I honestly thought I would miss home like crazy and cry my eyes out every day. 
                But I don't. Guess I'm too busy having fun and experiencing new things.</p>
        
                
</div>

</main>
<div style="background-color:#FFF;width:50%;padding:10px;margin:20px;margin-left:auto;margin-right:auto;">
    <div class="page_content">
    	Comment Here....
</div>	
        <div id="comment_input">
            <form name="form1">
        	    <span style="color:black;"><input type="text" name="name" placeholder="Name..."/></span><br><br>
                <textarea name="comments"  style="color:black;" placeholder="Leave Comments Here..." style="width:610px; height:100px;"></textarea><br><br>
                <a href="#" onClick="commentSubmit()" class="button">Post</a><br>
            </form>
        </div>
        <div id="comment_logs">
    	    Loading comments...
        </div>
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
    <script src="./assets/js/materialize-css.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems);
    });
    </script>  

       
         
</div>
        

</body>
</html>