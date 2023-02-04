<?php
session_start();
?>
<html>
    <head>
        <title>Passed it on</title>
</head>
<body>
    <?php
    echo"<p> The session variable mytext is ".$_SESSION["mytext"]."</p>";
    ?>
    </body>
    </html>