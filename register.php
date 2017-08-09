<!DOCTYPE html>
<html>
    <head>
        <title>html-form</title>
    </head>
    <body>
        <h1>Sign Up</h1>
        <form method="post" action="register_process.php">
            
            <label for="username">Full name</label>
            <input type="text" name ="name" id="name">
            
            <br><br>
            <label for="email">Email</label>
            <input type="email" name ="email" id="email">
            
            <br><br>
            
            <label for="phone">Phone</label>
            <input type="number" name ="phone" id="phone">
            
            <br><br>
            
            <label>Password</label>
            <input type="password" name="password" id="password">
            
            <br><br>
            
            <input type="submit">
        </form>
    
    </body>
</html>