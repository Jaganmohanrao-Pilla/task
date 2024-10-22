<?php
session_start();
if(isset($_POST['submit'])){
   $name=trim($_POST['email']);
   $password=trim($_POST['password']);
   //$password=crypt($password,"1234");
   $islogin=false;
   $f=fopen("Registration_Details.txt","r");
   fseek($f,0);
    while(!feof($f)){
        $line=fgets($f);
        $arr=explode(":",$line);
        if($arr[2]==$name."@infosys.com" && $arr[3]==$password){
            echo "Login successful"." "."<br>";
            echo "welcome"."  ".$name."<br><br>";
            echo "Click here to <a href='search.html'>search Employees </a>";
            $islogin=true;
            $_SESSION['loggedin'] = true;
            $_SESSION['start'] = time();
            $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
            break;
        }
    }
    if($islogin==false){
        echo "Invalid username or password"." "."<br>";
        echo '<button onclick="location.href=\'login.html\'" type="button">Retry</button>';
    }


   }












?>