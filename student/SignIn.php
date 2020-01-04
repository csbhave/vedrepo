<?php
session_start();

    if(isset($_SESSION['uid']))
    {
        header('location:dashboard.php');
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100"/>
    <link rel="stylesheet" href="../css/signin.css">
    <title>SignIn Form</title>
</head>
<body>
    <form action="login.php" method="post">
            <div class="al"></div>
            <div class="container">
             <div class="header">Sign In</div>
             <div class='info'>*Click on the input boxes</div>
             <input id='username' class='text' onfocus="handle2()" class='inc2' type="text" name="username" placeholder='Username' value="">
            <!-- Had to remove the type "password" due to the browser user credential's autofill-->
             <input id='password' class='pass' onfocus="handle1()" class='inc1' type="password" name="password" placeholder='Password' value="">
             <input id="submit" type="submit" name="submit" value="Login">
             <a id="home" href="../index.php"><span id="hm">Home</span></a>
             <svg width="390" height="549" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <rect id='rect' class='rect1'   x="45px"  y="300px"   rx="27" ry="27" width="300px" height="50px" style="stroke: #fff; stroke-width: 1px; fill: #000" />
            </svg>
            </div>
    </form>
  <script>
      
let rect = document.getElementById("rect");
let username = document.getElementById("username");
let password = document.getElementById("password");

function handle1() {
    rect.setAttribute("class", "rect2");
}

function handle2() {
    rect.setAttribute("class", "rect1");
}

//For codepen header!!!
setTimeout(() => {
    password.focus();
}, 500);

setTimeout(() => {
    username.focus();
}, 1500);
  </script>
</body>
</html>