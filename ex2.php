<!DOCTYPE html>

<html lang="en">
    <head>
        <title>ex2</title>
    </head>
    <body>
        <?php
        //execute the nested statment so long as "while" evaluates to TRUE
        //checked at the beginning of the loop
        $i = 0;
        while ($i < 9) {
            $i++;
            echo "abc ";
        }
        ?>
        <br>
        <?php
        //similar to while, except the truth expression is checked at end of each iteration.
        //this guarantees that the do-while loop will run at least once.
        $j = 0;
        do {
            $j++;
            echo "xyz ";
        } while ($j < 9);
        ?>
        <br>
        <?php
        //takes three expressions
        //what the expression starts on, the end point, and how it increments itself
        for ($k = 1; $k < 10; $k++) {
            echo $k;
        }
        ?>
        <br>
        <ol>
            <?php
            //provides a way to iterate over arrays.
            //only works on arrays and objects
            //you can use "$array as $value" or "$array() as $key => $value" parameter syntax
            $item = array("A", "B", "C", "D", "E", "F");
            foreach ($item as $letter) {
                echo "<li>Item $letter</li>";
            }

            //alternatively
            echo "\n<ol>";
            for ($x = 'A'; $x < 'G'; $x++) {
                echo "<li>Item $x</li>\n";
            }
            echo "\n</ol>";
            ?>
        </ol>
    </body>
</html>


