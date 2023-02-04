
    <?php
    $data = $_GET['name'];
    if (isset($data)) {
        setcookie("name", $data, time() + (86400 * 30), "/");
    }
    header("location:click.php");
    ?>