<?php
if(isset($_POST['submit'])){
    $isValid=true;
    if(empty($_POST['name']) || empty($_POST['age']) || empty($_POST['dob'])){
        $isValid=false;
        echo "All fields are required";
    }
    if(isset($_POST['name']) && isset($_POST['age']) && isset($_POST['dob'])){
        $name=$_POST['name'];
        $age=$_POST['age'];
        $dob=$_POST['dob'];
        if(preg_match('/^[a-zA-Z\s]{3,25}$/',$name)){
            echo "Name is valid". "<br>";
        }
        else{
            echo "Name is invalid. It should only contain alphabets and spaces with length 3 to 25.<br>";
            $isValid=false;
        }

        if(preg_match('/^[1-9][0-9]{0,2}$/',$age) && $age >= 1 && $age <= 100){
            echo "Age is valid <br>";
        }
        else{
            echo "Age is invalid. It should be a number between 1 and 100.<br>";
            $isValid=false;
        }
        if(preg_match("/^(0[1-9]|[12][0-9]|3[01])-(0[1-9]|1[012])-((19|20)\d\d)$/",$dob)){
            echo "DOB is valid <br>";
            
        }
        else{
            echo "DOB is invalid. It should be in the format dd-mm-yyyy with dd 1 to 31, mm 1 to 12, yyyy 1900 to 2000.<br>";
            $isValid=false;
        }
    }
    if(!$isValid){
        echo '<button onclick="location.href=\'pattern.html\'" type="button">Retry</button>';
    }
    else{
        echo "Form submitted successfully";
    }


}
?>