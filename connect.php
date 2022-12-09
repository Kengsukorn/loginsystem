<?php
$con= mysqli_connect("localhost","root","qwerty@123","loginsystem") or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' "); 


if ($con -> mysqli_error) {
  echo "Failed to connect to MySQL: " . $con -> mysqli_error;
  exit();
}

?>