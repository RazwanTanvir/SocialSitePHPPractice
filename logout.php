<!DOCTYPE html>
<html>
    <head>
    <title>logout page!</title>
    </head>
    <body>
        <?php
        session_start();
        session_destroy();
        ?>
    <h1>You are logged out!</h1>
    <a href="index.php">Sign In</a>
    </body>
    
</html>