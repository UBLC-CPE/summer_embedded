<?php
        if(session_status()!=PHP_SESSION_ACTIVE) session_start();
        
        include("config/connect.php");
        
        
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            
            
            
            
            $un = $conn->real_escape_string($_POST['username']);
            $pw = $conn->real_escape_string($_POST['password']);
            
            $sql = "SELECT * FROM login WHERE un = '$un' and pw = '$pw'";
            $result = $conn -> query($sql);
            $row = $result->fetch_array(MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);
            
            if($count > 0) {
                header("location:   successful.html");
            } else {
                echo '<script>alert("Invalid Credentials")</script>';
            }
            
            /*
            $sql = "SELECT id FROM login WHERE un= '$un' and pw= '$pw'";
            $result = mysqli_fetch_array($result,MYSQLI_ASSOC);
            $active = $row['active'];
            
            $count = mysqli_num_rows($result);
            
            
            if(count == 1) {
                session_register("un");
                $_SESSION['login_user'] = $un;
                
                header("location: successful.html");
            } else {
                $error = "Invalid Credentials";
                
            }
            */
        }
        
        
    ?>

<!DOCTYPE html>
<html>
    
    
    
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Log in</title>
    </head>
    
    <body>
       
        <form action="" method="post">
            <div class="imgcontainer">   
            </div>

            <div class="container">
                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>
        
                <label for="password"><b>Password</b></label>
                
                <input type="password" placeholder="Enter Password" name="password" required>
        
                <button type="submit">LOG IN</button>
                
            </div>
        
            <div class="container" style="background-color:#f1f1f1">
                <button type="button" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
    </body>



</html>