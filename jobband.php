<?php
$employee_ids = array(1, 2, 3, 4, 5,6,7,8,9,10);
$job_bands = array('A', 'B', 'A', 'C', 'B', 'A', 'B', 'C', 'A', 'B');
$confirmation_status = array('Y', 'N', 'Y', 'Y', 'N', 'Y', 'Y', 'Y', 'Y', 'N');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $job_band = $_POST['job_band'];
    $count = 0;
    for ($i = 0; $i < count($employee_ids); $i++) {
        if ($job_bands[$i] == $job_band && $confirmation_status[$i] == 'Y') {
            $count++;
        }
    }
    echo "Number of confirmed employees with job band $job_band: $count";
}
?>

<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Job Band: <input type="text" name="job_band">
  <input type="submit">
</form>

</body>
</html>