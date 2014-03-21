<!DOCTYPE html>

<?php 

$cityname = $_POST["cityname"];

if($_POST["submit"] == true){
    echo "Your favourite city is $cityname.";
} else {
    echo "Cannot process your POST.";
}
    

?>

<html lang="en">
    <head>
    <title>Ex1-Process</title>
    </head>
    <body>
        
    </body>
</html>


