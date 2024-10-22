<?php


if(isset($_POST['submit'])){
   $country=$_POST['country'];
   $players=array(
           "India"=>array("Virat Kohli","Rohit Sharma","MS Dhoni","Jasprit Bumrah","Hardik Pandya"),
           "Australia"=>array("David Warner","Steve Smith","Mitchell Starc","Pat Cummins","Glenn Maxwell"),
           "England"=>array("Joe Root","Ben Stokes","Jofra Archer","Jos Buttler","Eoin Morgan")
   );
$playersOfCountry=$players[$country];
    echo "<h1 align='center'>Players of $country</h1>"."<br>";
    echo "<table border='1' align='center' bgcolor='yellow'>";
    echo "<tr>";
    echo "<th>Player Name</th>";
    echo "</tr>";
    foreach ($playersOfCountry  as $key) {
        echo "<tr>";
        echo "<td>$key</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>