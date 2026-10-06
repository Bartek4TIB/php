<?php
    $now  = time();
    $years = 18 * 365 * 24 * 60 * 60;
    echo "Data urodzin " .date("d.m.Y h:i:sa", $now - $years);