<style>
    table {
        border-collapse: collapse;
        width: 900px;
    }

    table td {
        border: 1px solid blue;
        padding: 10px;
        ;
    }
</style>



<?php
echo "<table>";
for ($i = 0; $i <= 9; $i++) {
    echo '<tr>';
    for ($j = 0; $j <= 9; $j++) {
        if ($j == 0 && $i == 0) {
            echo "<td></td>";
        } else if ($i == 0) {
            echo "<td style='background-color: #ddd'>" . ($j) . "</td>\n";
        } else {
            if ($j == 0) {
                echo "<td style='background-color: #ddd'>" . $i . "</td>";
            } else {
                echo "<td>" . ($i * $j) . "</td>\n";
            }
        }
    }
    echo "</tr>\n";
}
?>