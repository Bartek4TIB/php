<?php
    $mojplik = fopen("Bartek.txt", "r")
        or die("Unable to open file!");
    echo fgets($mojplik);
    fclose($mojplik);
?>