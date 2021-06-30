<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign Up </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="/styles/Sign-up.css">
    <script src="main.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">
<!-- <link rel="stylesheet" media="only screen and (min-width:1068px)" href="Media-tablet.css"> -->
<link rel="shortcut icon" href="/images/logo.png" type="image/x-icon">
</head>

<body>
    <div class="container">
        <h3><strong>Create  an account <div class="heart"></div></strong></h3>
        <p class="login-elm"> Already Have an account? <a href="Login.php" ><strong>Login</strong></a></p>
        <form method="GET" action="success.html" autocomplete="off" aria-autocomplete="none"> 
          <div class="login-box">
            <input type="text" id ="one" placeholder="First name" required>
            <input type="text" id ="two" placeholder="Last name" required>
            <div class="email">
                <input type="email" id="three" placeholder="E-mail" required>
              </div>
              <div class="password">
                <input type="password" id="four" placeholder="Create a password" required>
              </div>
              <div class="submit">
                <input type="submit" value="Sign up">
              </div>
                <label class="container1">
                    <input type="checkbox" id="checkbox" required>
                    <span class="checkmark"></span>
                    <p id="p">I have read and agree to the <a href="503 page.html" id="terms">Terms of services</a></p>
                </label>
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
