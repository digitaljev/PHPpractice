<!DOCTYPE html>

<?php 
$str = "Harry";
$int = 28;
$empty = NULL;
?>

<html lang="en">
    <head>
    <title>ex5</title>
    </head>
    <body>
        <?php
        var_dump($str);
        echo "<br>";
        ?>
        <?php
        print_r($str);
        echo "<br>";
        ?>
        <?php
        var_dump($int);
        echo "<br>";
        ?>
        <?php
        var_dump($empty);
        echo "<br>";        
        ?>
    </body>
</html>


<!--

OLD

<!DOCTYPE html>

?php 
$str = "Harry";
$int = 28;
$empty;
?>

<html lang="en">
    <head>
    <title>ex5</title>
    </head>
    <body>
        ?php
        echo var_dump($str);
        ?>
        <br>
        ?php
        echo $str;
        ?>
        <br>
        ?php
        echo var_dump($int);
        ?>
        <br>
        php
        echo var_dump($empty);
       
    </body>
</html>-->