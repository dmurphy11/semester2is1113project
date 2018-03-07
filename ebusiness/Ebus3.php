<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>RECEIPT</title>
    </head>
    <body>
        
        <!-- Receipt heading-->
        <h4>RECEIPT</h4>
        
         
            <?php 
            // Echo session variables that were set on the previous pages
            echo "Name: " . $_SESSION["firstname"] . " " . $_SESSION["surname"] . ".";
            ?>
        
        
        <br/>
        
        
            <?php
            // Echo session variables that were set on the previous pages
            echo "Email: " . $_SESSION["email"] . ".";
            ?>
        
        <br/>
        
           
        <?php
        // Echo session variables that were set on previous page
        echo "Total is " . $_SESSION["total"] . ".";
        ?>
         
        
    </body>
</html> 