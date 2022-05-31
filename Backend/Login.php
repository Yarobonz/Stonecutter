<?php


$USERNAME= $_POST['uname'];
$PASSWORD= $_POST['psw'];
$hashed_password = password_hash($PASSWORD, PASSWORD_DEFAULT);
$myfile = fopen($hashed_password, "w") 


//We have password hasing working
?>