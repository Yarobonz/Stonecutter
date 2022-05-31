<div class="topnav">
  <a href="index.php">Home</a>
  <a href="#Stocks">Stocks</a>
  <a href="#Lottery">Lottery</a>
  <a href="#Shops">Shops</a>
  <a href="#Investments">Investments</a>
  <a class="active">Login</a>
</div>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    <?php include 'CSS/Login.css'; ?>
    </style>
    <title>Stonecutter Login</title>
  </head>
  <body>
    <h1 class="login">Login Page</h1>
  
  <script>
  $users = array("no");
  
  function SubmitLogin(username) {
    alert(username);
    
    window.location = "Dashbaord.php";
    
  }
  
  </script>
  
<form action="/Backend/Login.php" method="post">

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button onclick="SubmitLogin($_POST['uname'])" type="submit">Login</button>
  </div>

  <div class="container" style="background-color:#37393A">
    <span class="psw" onclick="window.location.href='Register.php'">Register</a></span>
  </body>
  </html>