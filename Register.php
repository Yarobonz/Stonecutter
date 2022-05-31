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
    <title>Stonecutter Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    <?php include 'CSS/Register.css'; ?>
    </style>
  </head>
<body>
<h1 class="Register">Register Page</h1>

  <script>
  
  function RegisterAccount() {
    alert("Test Register");

    window.location = "Login.php";
    
  }
  
  </script>


<form action="/Backend/Login.php" method="post">

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button onclick="RegisterAccount()" type="submit">Register</button>
  </div>

  <div class="container" style="background-color:#37393A">
    <span class="psw" onclick="window.location.href='Login.php'">Login</a></span>
  </div>
</form>

</body>
</html>
