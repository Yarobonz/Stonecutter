<?php

$handle = fopen("Actions/Lottery/Lottery.info", "r");

if ($handle) {
    while (($line = fgets($handle)) !== false) {
      $Money=explode('|',$line)[0];
      $TicketCost=explode('|',$line)[1];
    };

    fclose($handle);
}
echo "Pool = {$Money}";

?>

