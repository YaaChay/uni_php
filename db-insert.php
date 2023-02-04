<?php
require("db-connect.php");
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];

$insertQ = "INSERT INTO `uni_database`.`students` (`first_name`, `last_name`) VALUES ('".$firstName."', '".$lastName."');";
mysqli_query($con, $insertQ);
header("location:student.php");