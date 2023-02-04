<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File</title>
</head>

<body>
    <h1>File in PHP</h1>
    <?php
    //  echo readfile("text.json");
    // $rfile = fopen("text.txt", "r");
    // echo fread($rfile, filesize("text.txt")),"<br>";
    // fclose($rfile);
    // $wfile = fopen("text.txt", "w");
    // fwrite($wfile, "I love you.");
    // $afile = fopen("atext.txt", "a");
    // unlink("atext.txt");
    // fopen("atext.txt", "x");
    // while(!feof($rfile)){
    //     echo fgets($rfile),"<br>";
    // }
    // while(!feof($rfile)){
    //     echo fgetc($rfile), "\t";
    // }

    $path = "D:\Zapya1\Video\z18db5ad0f8739a1fdab8d3d51e3498a7.mp4";
    echo basename($path),"<br>";
    echo basename($path,".mp4"),"<br>";
    echo dirname($path),"<br>";
    copy("text.txt", "atext.txt");
    $totalC = disk_total_space("C:")/1073741824;
    $freeC = disk_free_space("C:")/1073741824;
    $totalD = disk_total_space("D:")/1073741824;
    $freeD = disk_free_space("D:")/1073741824;
    $totalK = disk_total_space("K:")/1073741824;
    $freeK = disk_free_space("K:")/1073741824;
    echo "Total C: ",(int)$totalC,"GB<br>";
    echo "Used C: ",(int)($totalC - $freeC),"GB<br>";
    echo "Free C: ",(int)$freeC,"GB<br>";
    echo "Total D: ",(int)$totalD,"GB<br>";
    echo "Used D: ",(int)($totalD - $freeD),"GB<br>";
    echo "Free D: ",(int)$freeD,"GB<br>";
    echo "Total K: ",(int)$totalK,"GB<br>";
    echo "Used K: ",(int)($totalK - $freeK),"GB<br>";
    echo "Free K: ",(int)$freeK,"GB<br>";
    
    ?>
</body>

</html>