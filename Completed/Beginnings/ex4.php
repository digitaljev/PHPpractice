<!DOCTYPE html>

<?php 
$val = 8;

?>

<html lang="en">
    <head>
    <title>ex4</title>
    </head>
    <body>
        <?php echo "Value is now $val."; ?>
        <br>
        <?php 
        $val+=2;
        echo "Add 2. Value is now $val.";
        ?>
        <br>
        <?php 
        $val-=4;
        echo "Subtract 4. Value is now $val.";
        ?>
        <br>
        <?php 
        $val*=5;
        echo "Multiply by 5. Value is now $val.";
        ?>
        <br>
        <?php 
        $val/=3;
        echo "Divide by 3. Value is now $val.";
        ?>
        <br>
        <?php 
        $val++;
        echo "Increment value by 1. Value is now $val.";
        ?>
        <br>
        <?php 
        $val--;
        echo "Decrement value by 1. Value is now $val.";
        ?>
        </body>
</html>


