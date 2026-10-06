<?php
    $matura = mktime(0,0,0,5,4,2026);
    $dni = 100 * 24 * 60 * 60;
    echo "100 dni przed maturą bedzie: " .date("d.m.Y h:i:sa", $matura - $days);
?>
            