<?php

$UserFile = fopen("../Accounts.encrypted", "r") or die("Unable to open file!");

while(!feof($UserFile)) {
  echo explode("|",fgets($UserFile))[5];
}

fclose($UserFile);
?>