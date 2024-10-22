<?php
function errorHandle($errLevel, $errMsg)
{
   echo "Error $errLevel occurred. $errMsg";
   die();
}
set_error_handler('errorHandle');
if(!file_exists("sample.txt")){
   trigger_error("File does not  exist",E_USER_ERROR);
  // echo "File does not exist"."<br>";
}
else{
    echo "File exists"."<br>";
}
   













?>