<?php
$xml=simplexml_load_file("odczyt.xml")
    or die ("Error: Cannot create object");
print_r($xml);
?>