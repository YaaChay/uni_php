<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
<h1>Cookie in PHP</h1>
    <?php if (isset($_COOKIE["name"])) { ?>
        <h3>Hello <?php echo $_COOKIE["name"]; ?>!</h3>
    <?php } else {
    } ?>
    <form action="cookie.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <input type="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST["name"])) {
        setcookie("name", $_POST["name"], time() + (86400 * 30), "/");
        header("location:cookie.php");
    }
    ?>
</body>
</html>