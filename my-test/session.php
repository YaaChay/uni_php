<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>

<body>
    <h1>Session Storage in PHP</h1>
    <?php if (isset($_SESSION["name"])) { ?>
        <h3>Hello <?php echo $_SESSION["name"]; ?>!</h3>
    <?php } else {
    } ?>
    <form action="session.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <input type="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST["name"])) {
        $_SESSION["name"] = $_POST["name"];
        header("location:session.php");
    }
    ?>
</body>

</html>