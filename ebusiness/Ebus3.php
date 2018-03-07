<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
    </head>
    <body>
        <center><h4>RECEIPT</h4></center>
        
         
        
        <center>
            <?php
            // Echo session variables that were set on the previous pages
            echo "Name: " . $_SESSION["firstname"] . " " . $_SESSION["surname"] . ".";
            ?>
        </center>
        
        <br/>
        
        <center>
            <?php
            // Echo session variables that were set on the previous pages
            echo "Email: " . $_SESSION["email"] . ".";
            ?>
        </center>
        <br/>
        
        <center>   
        <?php
        // Echo session variables that were set on previous page
        echo "Total is " . $_SESSION["total"] . ".";
        ?>
        </center> 
        
    </body>
</html> 