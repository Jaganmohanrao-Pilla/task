<?php

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $loc = $_POST['location'];
    $age= $_POST['age'];
    $hobby= $_POST['hobby'];
    $occ= $_POST['occupation'];
  $userId=array($fname.$lname,$loc.$age,$fname.$occ,$occ.$hobby,$fname.$occ.date('Y'));
  echo "Choose your username from the following options: <br>";
   echo "<form action='username.php' method='post'>";
   echo "<input type='radio' name='id' value='$userId[0]'>$userId[0]<br>";
   echo "<input type='radio' name='id' value='$userId[1]'>$userId[1]<br>";
   echo "<input type='radio' name='id' value='$userId[2]'>$userId[2]<br>";
   echo "<input type='radio' name='id' value='$userId[3]'>$userId[3]<br>";
   echo "<input type='radio' name='id' value='$userId[4]'>$userId[4]<br>";
   echo "<input type='submit' name='submit' value='submit'>";
   echo "</form>";


}
?>