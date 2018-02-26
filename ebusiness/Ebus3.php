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
        // Echo session variables that were set on previous page
        echo "Name:" . $_SESSION["firstname"] . ["surname"] . ".";
        echo "Email Address" . $_SESSION["email"] . ".";
        echo "Total is " . $_SESSION["total"] . ".";
        ?>
    </body>
</html>