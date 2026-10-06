<?php
    $value=5;
    function functionReference(&$val){
        $val++;
        echo $val."<br>";
    }

    functionReference($value);
    echo $value;

    // referencja jest to powiazanie zmiennej z inną
    // zmienną