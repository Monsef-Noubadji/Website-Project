<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/nav-style.css">
    <link rel="shortcut icon" href="/images/logo.png" type="image/x-icon">
    
    <title>Document</title>
</head>
<body>

<div class="navbar">
    
        <div class="site-logo">
        <img src="images/logo.png" alt="logo"> 
</div>
        <div class="links" id="links"> 
            <ul id="items">
                <li><a href="index.php">Home</a></li>
                <li><a href="About us.php">About us</a></li>
                <li><a href="#">Categories</a></li>
                <li><a href="Contact-us.php">Contact us</a></li>
            </ul>
        </div>


        <div class="sign-links" id="item">
            <ul>
                <li><a href="Login.php" id="one">Sign in</a></li>
                <li><a href="Sign-up.php" id="two">sign up</a></li>
            </ul>

        </div>

        <div class="navbar-links" >
            <div class="brs-icon" >
                <!-- <h3 id="btn" onclick="show()">menu</h3> -->
                <i class="fas fa-bars" id="btn" onclick="show()"></i>
            </div> 
        </div>
        <div class="hider" id="hider" onclick="hide()">
        
        </div>
</div>

<script type="text/javascript">
    var btn = document.getElementById("btn"),
    links = document.getElementById("links"),
    hider = document.getElementById("hider"),
    sign = document.getElementById("item");

    function hide(){
             links.style.display = "none";
             sign.style.display = "none";
             hider.style.display = "none";
    }
    function show(){
         if(links.style.display == "none")
         {
             links.style.display = "block";
             sign.style.display = "block";
             hider.style.display = "block";
         }
         else {
             links.style.display = "none";
             sign.style.display = "none";
             hider.style.display = "none";
         }
    }
</script>
<script src="https://kit.fontawesome.com/cd80b326fb.js" crossorigin="anonymous"></script>  
</body>
</html>