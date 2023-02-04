<?php
session_start();
unset($_SESSION['auth']);
header('location:phpMethod.php');
?>
