<?php


$USERNAME= $_POST['uname'];
$PASSWORD= $_POST['psw'];
$hashed_password = hash('ripemd160',$PASSWORD);
echo "alert({$hashed_password})";
$handle = fopen("../Accounts.encrypted", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        $FiledPassword=explode("|",$line)[2];
        $FiledUsername=explode("|",$line)[1];
        $FiledDiscord=explode("|",$line)[0];
        if($Password==$hashed_password){
          if($USERNAME==$FiledUsername Or $USERNAME == $FiledDiscord){
            echo "Login as {$Username}";
          }
          
        }
    }

    fclose($handle);
}


//We have password hasing working
?>