<!DOCTYPE html>



<html lang="en">
    <head>
    <title>Ex2</title>
    </head>
    <body>
        <?php if(!isset($_POST["submit"])){ ?>
        <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" autocomplete="off">
            <fieldset>
                <label>Enter the Name of your Favourite City</label>
                <input type="text" required="true" name="cityname"></input>
                <input type="submit" name="submit" value="Submit"></input>
            </fieldset>    
        </form>
        
        <?php 
            } else {
                $cityname = $_POST['cityname'];
                echo "Your favourite city is $cityname.";
            }


        ?>
        
    </body>
</html>


