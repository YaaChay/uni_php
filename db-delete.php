<?php
require("db-connect.php");
$studentID = $_GET["studentID"];

$insertQ = "DELETE FROM `uni_database`.`students` WHERE `id`='".$studentID."';";
mysqli_query($con, $insertQ);
header("location:student.php");