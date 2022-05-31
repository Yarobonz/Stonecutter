<?php


$handle = fopen("../../Accounts.encrypted", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
      if(strtolower($_GET['Username'])==strtolower(explode("|",$line)[1])){
        echo explode("|",$line)[4];
      }
    }

    fclose($handle);
}

?>



