<!--<!DOCTYPE html>
<html>
    <head><title>News Feed</title></head>
    <body>-->
    <?php 
    if(isset($_COOKIE['username'])){
        
        $username = $_COOKIE['username'];
        $password = $COOKIE['password'];
            include('dbconnect.php');
        
            
            
            $sql = "SELECT * FROM user WHERE (username='$username' OR name='$username') AND password='$password'";//variables must be in single quote in SQL command
            $select = mysqli_query($connection , $sql);
            //$num_row = mysqli_num_rows($select);
            
                $_SESSION['username'] = $_COOKIE['username'];
                $_SESSION['password'] = $_COOKIE['password'];
                header('location:home.php');
            
               
        
    }
    if($_POST){
            //if(!isset($_SESSION))
                session_start();
            //$_SESSION['username'] = $_POST['username'];
            $username = $_POST['username'];
            $password = $_POST['password'];
        if(isset($_POST['rememberme'])){
                    
                    setcookie('username', $_POST['username'],time()+60,"/");
                    setcookie('password', $_POST['password'],time()+60,"/");
                    
                    
                        
                }
            include('dbconnect.php');
        
            
            
            $sql = "SELECT * FROM user WHERE (username='$username' OR name='$username') AND password='$password'";//variables must be in single quote in SQL command
            $select = mysqli_query($connection , $sql);
            $num_row = mysqli_num_rows($select);
        
        
            if($num_row==0){
                echo "Wrong username or password";
            }
            else{
                
                $userrow = mysqli_fetch_array($select);
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['password'] = $_POST['password'];
                
                header("location:home.php");
                
                /*echo "<h1>log in successful!</h1>";
                echo "<br>";
                echo "User Id: ".$userrow['id'];
                
                echo"<br>";
                echo "Email: ".$userrow['email'];*/
                
            }
    
    /*echo"<br><br><a href=\"logout.php\">Log out</a><br>";
    echo "<a href=\"home.php\">News Feed</a>";*/
    }
else{
    header("location:index.php");
}

?>
    
   <!-- </body>

</html>-->
