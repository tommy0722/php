<?php
$row = 10;
$color = $row - 2;
for ($i = 0; $i < $row; $i++) {
    for ($j = $row - 1; $j > $i; $j--) {
        echo '&ensp;';
    }
    for ($j = 0; $j < $row; $j++) {
        if ($j == 0 or ($row - 1) == $j) {
            echo '*';
        } elseif ($i == 0 or ($row - 1) == $i) {
            echo '*';
        } elseif ($j != 1 or $j != ($row - 1)) {
            echo "<span style='background:lightblue'>&ensp;</span>";
        } elseif ($i == ($row - 1)) {
            echo '*';
        }
    }
    for ($j = 0; $j < $i; $j++) {
        if ($j == ($i - 1)) {
            echo '*';
        } else {
            echo "<span style='background:lightgreen'>&ensp;</span>";
        }
    }
    echo "<br>";
}
for ($i = $row; $i < (2 * $row); $i++) {
    for ($j = $row; $j < (2 * $row); $j++) {
        if ($j == $row or (2 * $row - 1) == $j) {
            echo '*';
        } elseif ($i == (2 * $row) or (2 * $row - 1) == $i) {
            echo '*';
        } elseif ($j != 1 or $j != ($row - 1)) {
            echo "<span style='background:blue'>&ensp;</span>";
        }
    }
    for ($j = 2 * ($row - 1); $j > 0; $j--) {
        if ($j == ($i)) {
            echo '*';
        } elseif ($i < $j) {
            echo "<span style='background:lightgreen'>&ensp;</span>";
        }
    }
    echo "<br>";
}
