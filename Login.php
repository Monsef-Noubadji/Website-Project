<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign Up form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="/styles/login.css">
    <script src="main.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="/images/logo.png" type="image/x-icon">
</head>

<body>
    <div class="container">
        <h3><strong>| Login to your Account</strong></h3>
        <p class="login-elm"> Enter your credentials Down below </p>
        <form method="GET" action="success.html" autocomplete="off" aria-autocomplete="none"> 
          <div class="login-box">
            <div class="email">
                <input type="email" id="three" placeholder="E-mail" required>
              </div>
              <div class="password">
                <input type="password" id="four" placeholder="Password" required>
              </div>
              <div class="submit">
                <input type="submit" value="Login">
              </div>
              <div class="links">
              <p class="link1"> Forgot Password? <a href="503 page.html" id="link1" ><strong> Click here</strong></a></p>
              <p class="link2"> Don't Have an account? <a href="Sign-up.php"  id="link1"><strong> Sign Up</strong></a></p>
            </div>
            </div>
        </div>
          
          </div>
        </div>
        </form>
      </div>
      <?php
      include("footer.html");
      ?>
</body>
</html>
