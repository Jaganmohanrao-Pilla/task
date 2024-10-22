<?php
$filename = 'employeedata.txt';
$file = fopen($filename, 'r+');
echo "first three lines are: <br>";
for ($i = 0; $i < 3; $i++) {
    $lines=fgets($file);
    echo $lines."<br>";
}
$startOfFourthLine = ftell($file);
echo "start of fourth line is: <br>";
echo $startOfFourthLine."<br>";
$fourthLine = fgets($file);
echo "fourth line is: <br>";
echo $fourthLine."<br>";
echo "Replacing the first three digits of the fourth line with 009: <br>";
$fourthLine = preg_replace('/^\d+/', '009', $fourthLine);
fseek($file, $startOfFourthLine);
fwrite($file, $fourthLine);
fseek($file,0);
for ($i = 0; $i < 3; $i++) {
    $lines=fgets($file);
}
$fourthupdated=fgets($file);
echo "The fourth line after replacing is: <br>";
echo $fourthupdated."<br>";
echo "The current pointer is at : ".ftell($file);
fclose($file);
?>