<?php
$plik = fopen('plik.toon', 'r');
$tresc = fread($plik, filesize('plik.toon'));
fclose($plik);