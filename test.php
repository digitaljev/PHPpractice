<?php

echo "<table>";

    for($row = 1; $row <= 7; $row++){
        echo "<tr>\n";
        
        for($col = 1; $col <= 7; $col++){
            $data = $row * $col;
            echo "<td>$data</td>";
        }
        echo "</tr>\n";
    }

echo "</table>";

?>

