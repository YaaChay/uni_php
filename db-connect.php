<?php
$con = mysqli_connect("localhost", "root", "");
// $db = "CREATE DATABASE uni_database";
// $query = "CREATE TABLE `uni_database`.`students_infos`(`roll_no` INT NOT NULL AUTO_INCREMENT, `name` VARCHAR(25) NOT NULL, `year` VARCHAR(7) NOT NULL, `phone` VARCHAR(11) NOT NULL, `address` VARCHAR(100) NOT NULL, PRIMARY KEY(`roll_no`)) ENGINE = InnoDB;";
// if ($con) {
//     echo "Connected<br>";
// mysqli_query($con, $db);
// if($db){
//     echo "Database Created<br>";
// }
// mysqli_select_db($con, 'uni_database');
//     mysqli_query($con, $query);
// }

if ($con) {
    mysqli_select_db($con, 'uni_database');
}

