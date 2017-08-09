<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
        session_start();
    //include 'process.php';
        echo $_SESSION['username'] ;
        //session_destroy();
        //session_start();
        echo $_SESSION['user_id'];

?>
    
    </body>

</html>
