<!DOCTYPE html>
<html>
    
    <?php
        
        session_start();
        require 'config/connect.php';
        
        
        if(isset($_POST['login'])) {
            $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
            $passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;
            
            $sql = "SELECT id, un, pw FROM login WHERE un = :un";
            $stmt = $pdo->prepare($sql);
            
            //bind
            $stmt -> bindValue(':un', $username);
            //execute
            $stmt -> execute();
            
            //fetch
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if(user === false) {
                die('Incorrect username/password');
            } else {
                $validPassword = password_verify($passwordAttempt, $user['password']);
                
                if($validPassword) {
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['logged_in'] = time();
                    
                    header('Location: successful.html');
                    exit;
                    
                } else {
                    die('Incorrect username/password');
                }
            }
        } 
    
    
    ?>
    
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Log in</title>
    </head>
    
    <body>
       
        <form action="login.php" method="post">
            <div class="imgcontainer">   
            </div>

            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>
        
                <label for="psw"><b>Password</b></label>
                
                <input type="password" placeholder="Enter Password" name="password" required>
        
                <button type="submit">LOG IN</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>
        
            <div class="container" style="background-color:#f1f1f1">
                <button type="button" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
    </body>



</html>