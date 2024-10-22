<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true){
    header('Location: login.html');
    exit;
}
$now = time();
if ($now > $_SESSION['expire']) {
    session_destroy();
    echo "Your session has expired! <a href='login.html'>Login here</a>";
}
else{
if(isset($_POST['submit'])){
 $email=$_POST['email'];
 $isfound=false;
   $f=fopen("Registration_Details.txt","r");
   fseek($f,0);
    while(!feof($f)){
        $line=fgets($f);
        $arr=explode(":",$line);
        if($arr[2]==$email."@infosys.com"){
          $isfound=true;
           // echo $arr[0]."  ".$arr[1]."  ".$arr[2]."  ".$arr[3]."  ".$arr[4]."  ".$arr[5]."  ".$arr[6]."  ".$arr[7]."  ".$arr[8];
           echo "<table border='1' align='center' bgcolor='yellow'>";
           echo "<tr>";
           echo "<th>First Name</th>";
           echo "<th>Last Name</th>";
           echo "<th>Mobile Number</th>";
           echo "<th>Age</th>";
           echo "<th>Location</th>";
           echo "</tr>";
           echo "<tr>";
           echo "<td>".$arr[0]."</td>";
           echo "<td>".$arr[1]."</td>"; 
           echo "<td>".$arr[4]."</td>"; 
           echo "<td>".$arr[5]."</td>";
           echo "<td>".$arr[7]."</td>";
           echo "</tr>";
            echo "</table>";
            echo "<br>";
            echo '<button onclick="location.href=\'search.html\'" type="button">Try Different</button>';
            break;
        }
    }

    if($isfound==false){
        echo $email."@infosys.com"."  "." Not found";
        echo '<button onclick="location.href=\'search.html\'" type="button">Try Different</button>';
    }
}

}












?>