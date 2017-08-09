<?php 
    if(!isset($_SESSION))
        session_start();
        
?>

<!DOCTYPE html>
<html>
    <head>
        <title>html-form</title>
    </head>
    <body>
        <h1>Sign In</h1>
        <form method="post" action="process.php">
            <label for="username">User name/Email</label>
            <input type="text" name ="username" id="username">
            
            <br><br>
            
            <label>Password</label>
            <input type="password" name="password" id="password">
            
            <br><br>
            <input type="checkbox" name="rememberme">Remember me
            
            <br><br>
            
            <input type="submit">
            <a href="register.php">register?</a>
        </form>
    
    </body>
</html>