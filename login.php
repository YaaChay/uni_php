<?php
session_start();
$auth = isset($_SESSION['auth']);
if($auth){
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="login.php" method="post">
        <label for="name">Name: </label>
        <input type="text" name="name" id="name"><br>
        <label for="password">Passowrd: </label>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="Login">
    </form>

    <?php
    $name = $_POST["name"] ?? "";
    $password = $_POST["password"] ?? "";

    if ($name == "admin" and $password == "password") {
        $_SESSION['auth'] = true;
        header("location:index.php");
    } else {
    } ?>
</body>

</html>