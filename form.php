<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <!-- Getbootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>

<body class="p-5">
    <div class="col-6 position-absolute top-50 start-50 translate-middle">
        <?php if (!isset($_GET['studentID'])) { ?>
            <h1 class="fs-3">Insert New Student</h1>
            <form action="db-insert.php" method="POST">
                <input type="text" class="form-control" placeholder="ID" aria-disabled="true" disabled><br>
                <input type="text" name="firstName" class="form-control" placeholder="First Name"><br>
                <input type="text" name="lastName" class="form-control" placeholder="Last Name"><br>
                <input type="submit" class="btn btn-primary" value="Insert">
            </form>
        <?php } else {
            require("db-connect.php");
            $id = $_GET['studentID'];
            $query = "SELECT * FROM `students` WHERE `id` = $id;";       
            $result = mysqli_query($con, $query);
            $row = mysqli_fetch_array($result);?>
            <h1 class="fs-3">Update Student</h1>
            <form action="db-update.php" method="POST">
                <input type="text" class="form-control" value="<?php echo $id;?>" placeholder="<?php echo $_GET['studentID'];?>" disabled><br>
                <input type="text" name="firstName" class="form-control" value="<?php echo $row['first_name']; ?>"><br>
                <input type="text" name="lastName" class="form-control" value="<?php echo $row['last_name']; ?>"><br>
                <input type="submit" class="btn btn-primary" value="Update">
                <input type="hidden" name="studentID" class="form-control" value="<?php echo $id;?>" placeholder="<?php echo $_GET['studentID'];?>"><br>
            </form>
        <?php } ?>

    </div>

</body>

</html>