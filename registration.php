<?php
if(isset($_POST['submit'])){
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST["terms"])) {
        echo "You must agree to the terms and conditions.";
        echo '<button onclick="location.href=\'registration.html\'" type="button">Retry</button>';

    } else {
        //validations
        $invalid = false;
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $username = $_POST['email'];
        //$email=$username."@infosys.com";
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $mobile= $_POST['phno'];
        $age= $_POST['age'];
        $gender= $_POST['gender'];
        $loc = $_POST['location'];
        if($fname=="" || $lname=="" || $username=="" || $password=="" || $cpassword=="" || $mobile=="" || $age=="" || $gender=="" || $loc==""){
            echo "All fields are mandatory";
            $invalid = true;
            //echo '<button onclick="location.href=\'registration.html\'" type="button">Retry</button>';
        }
        else{
            $namepattern = "/^[a-zA-Z]{5,15}$/";
            if(!$invalid  && (!preg_match($namepattern, $fname) || !preg_match($namepattern, $lname))) {
                echo "First name and last name should start with an alphabet, contain only alphabets, and be between 5 to 15 characters long.";
                $invalid = true;
                echo "<br>";
                //echo '<button onclick="location.href=\'registration.html\'" type="button">Retry</button>';
            }
            $usernamePattern = "/^[a-zA-Z][a-zA-Z0-9\.]{5,14}$/";
             if(!$invalid  && !preg_match($usernamePattern, $username)) {
               echo "Username should start with an alphabet, contain only alphabets, digits, and period, and be between 6 and 15 characters long.";
                $invalid = true;
                echo "<br>";
                 //echo '<button onclick="location.href=\'registration.html\'" type="button">Retry</button>';}
             }
            $passwordPattern = "/^[A-Z][a-zA-Z0-9@#&]{7,}$/";
            $issize=strlen($password)==strlen($cpassword);
            $issame=strcmp($cpassword, $password)==0;
            if(!$invalid  && (!$issize || !$issame || !preg_match($passwordPattern, $password))) {
                echo "New password and confirm password should be the same, start with an uppercase letter, and not be less than 8 characters.";
                $invalid = true;
                echo "<br>";
                //echo '<button onclick="location.href=\'registration.html\'" type="button">Retry</button>';
        }
        $mobilePattern = "/^91\d{10}$/";
          if (!$invalid  && !preg_match($mobilePattern, "91".$mobile)) {
                echo "Mobile number should start with '91' and contain exactly 12 digits.";
                $invalid = true;
                echo "<br>";
                //echo '<button onclick="location.href=\'registration.html\'" type="button">Retry</button>';
                  }
        $agePattern = "/^[1-9][0-9]?$/";
           if (!$invalid  && (!preg_match($agePattern, $age) || $age < 18)) {
                echo "Age should be a number and cannot be less than 18.";
                $invalid = true;
                echo "<br>";
                
                }
    if($invalid == true){
        echo "Invalid data";
        echo "<br>";
        echo '<button onclick="location.href=\'registration.html\'" type="button">Retry</button>';
        //$invalid = false;
    }
    else{
        $f=fopen("Registration_Details.txt","a+");
        if ($f === false) {
            echo "Error in opening file"." "."<br>";
        } else {
            fseek($f,0);
            $isnew=true;
            while (!feof($f)) {
                $line = fgets($f);
                $arr = explode(":", $line);
                if ($arr['2'] == $username."@infosys.com") {
                    $isnew=false;
                    echo "Username already exists"." "."<br>";
                    echo '<button onclick="location.href=\'registration.html\'" type="button">Retry</button>';
                    fclose($f);
                    exit();
                }
            }
            if($isnew){
               // $password=crypt($password, "1234");
                fwrite($f, $fname.":".$lname.":".$username."@infosys.com".":".$password.":".$mobile.":".$age.":".$gender.":".$loc."\n");
                fclose($f);
               echo "Registration successful"." "."<br>";
               echo "Click here to <a href='login.html'>Login</a>";
             }
            }
}
}
}
}

}
else{
    echo "Invalid request";
}

?>