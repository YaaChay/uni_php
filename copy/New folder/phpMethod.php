<?php
 session_start();
 $auth =isset($_SESSION['auth']);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>UCSS</title>

    <style>
    div{
        border:2px solid brown;
        margin:50px auto;
        paddibg:15px 10px;
    
    }
    h1{
        background-color:red;
        color:white;
        padding:5px;
        text-align:center;
    }
    p{
        line-height:2;

    }
    a{
        text-decoration:none;
        padding:5px 15px;
        background-color:gray;
        color:white;
    }
    </style>
</head>
<body>
    <div class="container">
        <?php if($auth) { ?>
    <h1>UCSS</h1>
    

        <p>You are now login</p>
        <p><b>admin</b></p>
        <a href="logout.php">Logout</a>
        <?php } else { ?>

    <h1>UCSS</h1>
    <p>You need to Login</p>
    <form action="login.php" method="get">
        <label for="name">Name</label><br>
        <input type="text" name="name" id="name"><br>
        <label for="password">Passward</label><br>
        <input type="password" name="password" id="password"><br><br>
        <input type="submit" value="Login">
        </form>
        <?php } ?>
    </div>
</body>
</html>