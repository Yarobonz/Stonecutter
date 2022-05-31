<style>
  <?php include'CSS/Lottery.css'; ?>
</style>

<?php


$handle = fopen("Actions/Lottery/Lottery.info", "r");

if ($handle) {
    while (($line = fgets($handle)) !== false) {
      $Money=explode('|',$line)[0];
      $TicketCost=explode('|',$line)[1];
    };

    fclose($handle);
}
echo "<h1 class='Money'>{$Money}</h1>";

$seconds = strtotime('tomorrow 00:00:00') - time(); 
$hours = floor($seconds / 60 / 60);   // calculate number of hours
$minutes = floor($seconds / 60) % 60; // and how many minutes is that?
echo "Winner In $hours hours $minutes minutes";
?>

test

