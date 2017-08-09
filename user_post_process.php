<?php
   session_start();
    $user_id = $_SESSION['user_id'];
    //echo $user_id."<br>";
    if($_POST){
        
        
        //echo $user_id."<br>";
        //echo "Posted!<br>";
        
        $postContent = $_POST['post'];
        include ('dbconnect.php');
        $sql = "INSERT INTO user_post (user_id ,post_content ) values('$user_id','$postContent')";
        $runQuery = mysqli_query($connection,$sql);
        //$num_row = mysqli_num_rows($runQuery);
        
        /*$displayPostQuery = "SELECT post_content FROM user_post ";
        $getPost = mysqli_query($connection,$displayPostQuery);
        $postContent = mysqli_num_rows($getPost);
        if($postContent==0){
            echo "No post found!";
        }
        else{
            
            while($post = mysqli_fetch_array($getPost)){
                
            echo "<h2>".  $post['post_content']."</h2><br>";
                
            }
        }*/
        header("location:home.php");
    
    }
else{
    header("location:index.php");
}
echo"<br><a href=\"logout.php\">Log out</a>" ;
?>