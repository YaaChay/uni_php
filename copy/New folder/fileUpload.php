<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
    <style>
        body {
            width: 1000px;
            border: 2px solid red;
            margin: 20px auto;
            background: gray;
        }

        h1 {
            padding: 10px;
            text-align: center;
            background: brown;
            color: white;
        }
    </style>
</head>

<body>
    <h1>Upload File</h1>
    <div id="album">
        <?php
        $list = scandir("images");
        if (isset($list)) {
            for ($i = 2; $i < count($list); $i++) {
                $name = $list[$i];
                echo "<img src='images/$name' width='200px'height='150px'>";
            }
        }

        ?>
    </div>
    <form action="uploadEg.php" method="post" enctype="multipart/form-data">
        <label for="photo">Add Image</label><br><br>
        <input type="file" name="photo" id="photo"><br><br>
        <input type="submit" value="Upload">
    </form>
</body>

</html>