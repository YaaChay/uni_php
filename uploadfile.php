<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<body>
<?php include('include.php'); ?>
    <h1>Upload File</h1>
    <div class="gallery">
        <?php
        $list = scandir("images");
        for($i=2; $i<count($list);$i++){
            echo "<img src=\"", $list[$i], "\">";
        }
        ?>
    </div>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="photo">Add Image</label>
        <input type="file" name="photo" id="photo"><br>
        <input type="submit" value="Upload">
    </form>
</body>
</html>