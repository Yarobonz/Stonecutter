<?php

RequestedAmount=5000;
$Money=9999999;
if($RequestedAmount>=$Money){
    $Money-=$RequestedAmount;
    echo "Tranfered";
}

else{
  if($Money=="INFINITY")
}