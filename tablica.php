<?php
$owoce = ["Banan" => 10, "Jabłko" => 5, "Gruszka" => 4, "Mandarnka" => 20];

echo "<table border='1'>";
echo "<tr><th>Owoc</th><th>Cena</th></tr>";

foreach ($owoce as $owoc => $cena) {
    echo "<tr>";
    echo "<td>$owoc</td>";
    echo "<td>$cena</td>";
    echo "</tr>";
}

echo "</table>";
?>
