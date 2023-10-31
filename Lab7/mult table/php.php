<?php
if (isset($_POST['number'])) {
    $number = $_POST['number'];
    echo "<h1>Multiplication Table for $number</h1>";
    echo "<table border='1'>";
    for ($i = 1; $i <= $number; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $number; $j++) {
            echo "<td>" . $i * $j . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>
