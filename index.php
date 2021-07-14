<?php
    include("config/connect.php");
?>

<!DOCTYPE html>
<html>
    
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Testing Login</title>
    </head>
    
    <body>
        <header>
            <h3>Testing Log-in for Embedded Systems</h3>
            <br>
            <br>
        </header>
        
        <form action="login.php" method="get">
            <div class="imgcontainer">   
            </div>

            <div class="container">
               
                <button type="submit">GO TO LOGIN</button>
              
            </div>
        </form>
        
        
        
        <form action="insert.php" method="post">
            <div class="imgcontainer">   
            </div>

            <div class="container">
                <label for="un"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="un" required>
        
                <label for="ps"><b>Password</b></label>
                
                <input type="password" placeholder="Enter Password" name="pw" required>
        
                <button type="submit">ADD USERS</button>
                
            </div>
        
        </form>
        
        
        <div>
                        
            <br />
            <br />
            <br />
            
            <a href="exer1_section1.html">Exercise 1 - Section 1</a>
            
            <br />
            <br />
            <br />
            
            
            <table class="user" style="border: solid 2px; margin-left: auto; margin-right: auto;">
                <thead>
                    <tr>
                        <th style="border: solid 1px;"> System ID </th>
                        <th style="border: solid 1px;"> Username </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT id, un FROM login";
                        $result = $conn->query($sql);
                        
                        if($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <tr style="border: solid 1px;">
                                    <td style="border: solid 1px;"> <?php echo $row["id"] ?></td>
                                    <td style="border: solid 1px;"> <?php echo $row["un"] ?></td>
                                </tr>
                                <?php
                            }
                        } else {
                            echo "No result";
                        }
                        
                        $conn->close();
                        ?>
                    
                    
                </tbody>
            </table>
        </div>
    </body>



</html>