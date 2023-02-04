<?php
session_start();
$name=$_GET['name'];
$passward=$_GET['password'];

if($name=='admin' and $password=='1234')
{
    echo"You are login  now";
    $_SESSION['auth']=true;
}

    header('location:phpMethod.php');

?>
