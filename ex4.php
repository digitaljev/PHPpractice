<!DOCTYPE html>

<html lang="en">
    <head>
    <title>ex4</title>
    </head>
    <body>
        <table>
        <?php 
        
        for($across = 1; $across < 8 ; $across++){
            echo "<th>$across</th>";
            
            foreach($across as $down){
                $down++;
                echo "<tr>$down</tr>";
            }
            
        }
        
        ?>
        </table>
    </body>
</html>


