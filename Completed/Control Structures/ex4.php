<!DOCTYPE html>
<?php
//for($across = 1; $across < 8 ; $across++){
//            echo "<th>$across</th>";
//        }
//for($x = 1; $x <=7; $x++){
//              echo "<th>$x</ty>";
//              foreach($x as $y){
//                  $y = $x + $x;
//                  echo "<tr>$y</tr>";
//              }
//            }
?>
<html lang="en">
    <head>
    <title>ex4</title>
    </head>
    <body>
        
            
        <?php 
        echo "<table>";    
        for($row = 1; $row <= 7; $row++){
            // remember to seperate the tags. THINK NESTED. I.E. you nest the second loop
            // within the tags or code of the first. The first for loop is purely for the tags.
            // the second is for the data.
            // also, use the \n to start a new row!
            echo "<tr>\n";
            for($col = 1; $col <= 7; $col++){
                $data = $col * $row;
                echo "<td>$data</td>\n";
            }
            echo "</tr>\n";
        }
        echo "</table>";
        ?>
        
    </body>
</html>


