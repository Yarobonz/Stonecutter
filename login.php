<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body { 
font-family: Arial, Helvetica, sans-serif;
background:#37393A;
}

  
form {
border: 3px solid #37393A;
background: #37393A;
  color: #edf2f4;
  text-align: center;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #37393A;
  box-sizing: border-box;
  background:#37393A;
  color: #edf2f4;
  text-align: center;
}

button {
  background: #37393A;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
  background:#37393A;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  
  background: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  background: #37393A;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
  background: #37393A;
}

.container {
  padding: 16px;
  background: #37393A;
}

span.psw {
  float: center;
  padding-top: 16px;
  background: #37393A;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px; background:#37393A;) {
  span.psw {
     display: block;
     float: none;
    background:#37393A;
  }
  .cancelbtn {
     width: 100%;
    background:#37393A;
    
  }
}
</style>
</head>
<body>


<form action="/Backend/Login.php" method="post">

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
  </div>

  <div class="container" style="background-color:#37393A">
    <span class="psw" onclick="alert(1)">Register</a></span>
  </div>
</form>

</body>
</html>
