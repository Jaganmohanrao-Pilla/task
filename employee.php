<?php
if(isset($_POST['submit'])){
 $id=$_POST['employee_id'];
$name=$_POST['employee_name'];
$band=$_POST['job_band'];
function getBasicSalary($jobband ){
    $salary=0;
    if($jobband== 'A'){
        $salary=10000;
    }else if($jobband== 'B'){
        $salary= 15000;
    }else if($jobband== 'C'){
        $salary=35000;
    }else{
        $salary= 50000;
    }
   return $salary;
}

 $sal=getBasicSalary($band);
 function GetTaxPercentage($salary){
    $tax=0;
    if($salary== '10000'){
        $tax=1000;
    }else if($salary== '15000'){
        $tax= 2000;
    }else if($salary== '35000'){
        $tax= 3000;
    }else{
        $tax= 5000;
    }
    return $tax;

 }
 $taxpayable=GetTaxPercentage($sal);
 $netpayable=$sal-$taxpayable;
 //in table form 
    echo "<table border='1' align='center' bgcolor='yellow'>";
    echo "<tr>";
    echo "<th>Employee ID</th>";
    echo "<th>Employee Name</th>";
    echo "<th>Job Band</th>";
    echo "<th>Basic Salary</th>";
    echo "<th>Tax Payable</th>";
    echo "<th>Net Payable</th>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>$id</td>";
    echo "<td>$name</td>";
    echo "<td>$band</td>";
    echo "<td>$sal</td>";
    echo "<td>$taxpayable</td>";
    echo "<td>$netpayable</td>";
    echo "</tr>";




}






?>