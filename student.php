<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Getbootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Student</title>
    <style>
        .wrapper {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>

<body class="p-5">
    <div class="d-flex justify-content-between">
        <h1 class="fs-3">Students</h1>
        <a href="form.php" class="btn btn-primary">Create New</a>
    </div>
    <table class="table">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col"></th>
        </tr>
        <?php
        require("db-connect.php");
        $query = "SELECT * FROM `students`;";
        $result = mysqli_query($con, $query);
        $rowcount = mysqli_num_rows($result);
        for ($i = 0; $i < $rowcount; $i++) {
            $row = mysqli_fetch_array($result);
            echo "
            <tr>
                <td scope='row'>" . $row['id'] . "</td>
                <td>" . $row['first_name'] . "</td>
                <td>" . $row['last_name'] . "</td>
                <td>
                    <a class='btn btn-primary' href='form.php?studentID=" . $row['id'] . "'>Update</a>
                    <a class='btn btn-danger' href='db-delete.php?studentID=" . $row['id'] . "'>Delete</a>
                </td>
            </tr>
            ";
        }
        ?>
    </table>
</body>

</html>