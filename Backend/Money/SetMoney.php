<?php

function fileReplaceContent($path, $oldContent, $newContent){
    $str = file_get_contents($path);
    $str = str_replace($oldContent, $newContent, $str);
    file_put_contents($path, $str);
};

#echo $_GET['Username'];

function str_replace_n($search, $replace, $subject, $occurrence)
{
	$search = preg_quote($search);
    return preg_replace("/^((?:(?:.*?$search){".--$occurrence."}.*?))$search/", "$1$replace", $subject);
}

if($_GET['Password']==getenv('Password')){
  
  $handle = fopen("../../Accounts.encrypted", "r");
  
  if ($handle) {
      while (($line = fgets($handle)) !== false) {
        if(strtolower($_GET['Username'])==strtolower(explode("|",$line)[1])){
          $Money=explode("|",$line)[4];
          $modifed=str_replace("${Money}|",$_GET['Money'] .="|",$line);
          fileReplaceContent("../../Accounts.encrypted", $line, $modifed);
        }
      }
  
      fclose($handle);
  }

}
?>