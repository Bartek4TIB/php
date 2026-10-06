<?php
    $now = time();
    $week = 7*24*64*60; // w sekundach
    echo "za tydzien: ".
        date("d.m.Y h:i:sa", $now +$week);