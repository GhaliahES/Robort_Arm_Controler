
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "sm_task1";

// Create connection
$conn = mysqli_connect($localhost, $root, $root, $sm_task1);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['submit']))
{		
    $ran1 = $_POST['m1'];
    $ran2 = $_POST['m2'];
    $ran3 = $_POST['m3'];
    $ran4 = $_POST['m4'];
    $ran5 = $_POST['m5'];
    $ran6 = $_POST['m6'];

    $insert = mysqli_query($db,"INSERT INTO 'slider_value'('m1', 'm2', 'm3', 'm4', 'm5', 'm6') VALUES ('$ran1','$ran2','$ran3','$ran4','$ran5','$ran6')";
    if(!$insert)
    {
         echo "Records added successfully";

    }
    else
    {
          echo "mysqli_error()";
  



}

mysqli_close($db);
?>

