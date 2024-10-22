<?php
$data = "School commences at 09:30am and concludes at 12:30pm";
echo $data . "<br>";
$data=preg_replace("/commences/","start", $data);
echo "After replacing commences with start : ";
echo $data."<br>";
$data = preg_replace("/concludes/","ends", $data);
echo "After replacing concludes with ends : ";
echo $data."<br>";
echo "Extracting time from the string : <br>";
$split=preg_split("/\s/", $data);
echo "School starts at : ".$split[3]."<br>";
echo "School ends at : ".$split[7]."<br>";
print_r($split);














?>