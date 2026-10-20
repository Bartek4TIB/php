<?php
    $mojplik = fopen("Bartek.txt", "r")
        or die("Unable to open file!");
    echo fread($mojplik, filesize("Bartek.txt"));
    fclose($mojplik);
?>