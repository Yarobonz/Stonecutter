<?php


$USERNAME= $_POST['uname'];
$PASSWORD= $_POST['psw'];
$hashed_password = password_hash($PASSWORD, PASSWORD_DEFAULT);


//We have password hasing working
?>