<?php
require("db-connect.php");
$studentID = $_POST["studentID"];
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];

$insertQ = "UPDATE `uni_database`.`students` SET `first_name`='".$firstName."',`last_name`='".$lastName."' WHERE `id`='".$studentID."';";
mysqli_query($con, $insertQ);
header("location:student.php");