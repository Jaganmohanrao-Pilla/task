<?php
session_start();
if(isset($_POST['submit'])){

$id=$_POST['id'];
$name=$_POST['name'];
$phno=$_POST['phno'];
 if (isset($_SESSION['records'][$id])) {
        echo "The record with given id $id has already been inserted.";
    }else{
       
$header="id    name    phno\n";
$line=$id."  ".$name."  ".$phno. "\n";
$file=fopen("employee.txt","a+");
//$f=fwrite($file,$header);
fwrite($file,$line);
$_SESSION['records'][$id] = true;
echo "id is $id"."<br>";
echo "name is $name"."<br>";
echo "phno is $phno"."<br>";
echo "Data written to the file"."<br>";
    }




}
















?>