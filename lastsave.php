
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "sm_task1";

// Create connection
$conn = mysqli_connect($localhost, $root, $root, $sm_task1);

$stmt = $connection -> prepare("select from slider_value");
$stmt->execute();

$result = $stmt->get_result();
while($row = $result->fetch_assoc())

?>


