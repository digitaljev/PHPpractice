<!DOCTYPE html>

<?php 
$whatsit = array("string", "double", "boolean", "integer", "NULL");
?>

<html lang="en">
    <head>
    <title>ex7</title>
    </head>
    <body>
<!--1st Way-->
        <?php echo "Value is $whatsit[0]." ?>
        <br>
        <?php echo "Value is $whatsit[1]." ?>
        <br>
        <?php echo "Value is $whatsit[2]." ?>
        <br>
        <?php echo "Value is $whatsit[3]." ?>
        <br>
        <?php echo "Value is $whatsit[4]." ?>
        <br>
<!--2nd Way-->
<?php 

?>
        <?php $whatsit = "string"; echo 'Value is '. gettype($whatsit).'.' ; ?>
        <br>
        <?php $whatsit = 1.25; echo 'Value is '. gettype($whatsit).'.' ; ?>
        <br>
        <?php $whatsit = true; echo 'Value is '. gettype($whatsit).'.' ; ?>
        <br>
        <?php $whatsit = 1; echo 'Value is '. gettype($whatsit).'.' ; ?>
        <br>
        <?php $whatsit = NULL; echo 'Value is '. gettype($whatsit).'.' ; ?>
        <br>

    </body>
</html>


