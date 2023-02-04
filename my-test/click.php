<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onclick in PHP</title>
</head>

<body>
    <div onclick="href('onclick.php?name=Smile');">Click Me</div>
    <!-- <button type="submit" name="click"><a href="onclick.php?name='Kyaw Zaya'">Click Me</a></button> -->
    <?php
    if (isset($_COOKIE["name"])) {
        echo  "<h3>Hello ", $_COOKIE["name"], "!</h3>";
    }
    ?>
    <script type="text/javascript">
        function href(url){
            window.open(url, "_self");
        }
    </script>
</body>

</html>