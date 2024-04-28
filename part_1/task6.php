<?php

echo '<table border=".5" style="text-align: center; font-size: 1rem">';

for ($i = 1; $i <= 10; $i++) {
    echo '<tr>';

    for ($j = 1; $j <= 10; $j++) {
        echo '<td style="width: 2.5rem; height: 2.5rem">';

        if ( ($i % 2 === 0) && ($j % 2 === 0) ) {
            echo "(" . ($i * $j) . ")";
        } else if ( ($i % 2 !== 0) && ($j % 2 !== 0) ) {
            echo "[" . ($i * $j) . "]";
        } else {
            echo ($i * $j);
        }

        echo '</td>';
    }

    echo '</tr>';
}

echo '</table>';