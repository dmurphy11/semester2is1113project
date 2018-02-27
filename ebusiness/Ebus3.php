<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
    </head>
    <body>
        <h4>RECEIPT</h4>
        
         <?php  
        // Set session variables
          $_SESSION["firstname"] = $_POST["firstname"];
          $_SESSION["surname"] = $_POST["surname"];
          $_SESSION["email"] = $_POST["email"];
        ?>
        
        <p>
            <?php
            // Echo session variables that were set on the previous pages
            echo "Name: " . $_SESSION["firstname"] . ["surname"] . ".";
            ?>
        </p>
        <br/>
        
        <p>
            <?php
            // Echo session variables that were set on the previous pages
            echo "Email: " . $_SESSION["email"] . ".";
            ?>
        </p>
        <br/>
                
        <?php
        // Echo session variables that were set on previous page
        echo "Total is " . $_SESSION["total"] . ".";
        ?>
    </body>
</html>