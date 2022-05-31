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

  <div class="container">
    <form action="/Backend/Login.php" method="post">
      
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    
    <button onclick="SubmitLogin()" type="submit">Login</button>

    </form>
  </div>
    
  <div class="container" style="background-color:#37393A"> 
  
  <span class="psw" onclick="window.location.href='Register.php'">Register</a>
  </span>

  </div>

  <script>
    
  function SubmitLogin() {
    
    alert($_GET['uname']);
    
    window.location = "Dashbaord.php";
    
  }
  
  </script>
    
  </body>
</html>