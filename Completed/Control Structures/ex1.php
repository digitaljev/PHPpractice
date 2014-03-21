<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Ex1</title>
    </head>
    <body>
        <?php
        $date = date("F");
        echo "The current month is $date.";
        ?>
        <br>
        <?php
        if ($date == "August") {
            echo "It's August, so it's really hot.";
        } else {
            echo "It is not August, so at least not in the peak of heat";
        }
        ?>
    </body>
</html>


