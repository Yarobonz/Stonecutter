<?php

function fileReplaceContent($path, $oldContent, $newContent){
    $str = file_get_contents($path);
    $str = str_replace($oldContent, $newContent, $str);
    file_put_contents($path, $str);
}



if($_GET['Password']==getenv('Password')){
  
  $handle = fopen("../Accounts.encrypted", "r");
  
  if ($handle) {
      while (($line = fgets($handle)) !== false) {
        if(strtolower($_GET['Username'])==strtolower(explode("|",$line)[1])){
          fileReplaceContent("../Accounts.encrypted", "Test", "Test2");
        }
      }
  
      fclose($handle);
  }

}
?>