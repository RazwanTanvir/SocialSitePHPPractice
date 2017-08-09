<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
    </head>
    <body>
        <?php 
            include('dbconnect.php');
            
            $sql = "SELECT (SELECT name from user where id = user_id) as user_name, post_content FROM user_post order by post_time desc";
            $select = mysqli_query($connection,$sql);
            $numrows = mysqli_num_rows($select);
            //$PosterID = $_SESSION['user_id'];
            //echo $numrows."<br>";
            session_start();
            $username = $_SESSION['username'] ;
            $userpassword = $_SESSION['password'];
            //echo $userid;
            $sql = "SELECT name from user WHERE email = '$username' " ;
            $run = mysqli_query($connection,$sql);
            $user_name = mysqli_fetch_array($run);
        
        
        
        
        ?>
         
        <h1><?php echo $user_name['name'] ?></h1>
        <form method="post" action="user_post_process.php">
            <label for="post">Post something here<br></label>
            <textarea name="post" rows="10" cols="50" required></textarea>
            <!--<input type="text" name ="post" id="post">-->
            
            <br><br>
            
            <input type="submit" value="post" class="post">
            <a href="logout.php">Log out</a>
            <br><br>
        </form>
        <?php
        
            if($numrows==0){
                echo"No post found!";
            }
            else{
                //echo "Logged In user: ".$PosterID ;
                while($posts = mysqli_fetch_array($select)){
                    
                    
                   echo"<fieldset><legend>" ;
                        echo $posts['user_name'];
                        echo"</legend>";
                    
                        echo "<h1>".$posts['post_content']."</h1>";
                    echo"</fieldset>" ;
                        
                }
                }
        ?>
        
    </body>
</html>