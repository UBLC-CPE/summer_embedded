<!--This part calls the connection php file to the mysql server -->
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

                    <!-- 
                        This part creates an query to call all data in ID and UN
                    -->
                    <?php
                        $sql = "SELECT id, un FROM login";
                        $result = $conn->query($sql);
                        

                        //Get the the result from the query and compare to 0
                        if($result->num_rows > 0) {

                            //fetch all the data from ID and UN
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <tr style="border: solid 1px;">

                                    <!-- combination of html and php to pass the data from mysql to the webpage in the table row -->
                                    <td style="border: solid 1px;"> <?php echo $row["id"] ?></td>
                                    <td style="border: solid 1px;"> <?php echo $row["un"] ?></td>
                                </tr>
                                <?php
                            }
                        } else {
                            echo "No result";
                        }
                        
                        //connection close
                        $conn->close();
                        ?>
                    
                    
                </tbody>
            </table>
        </div>
    </body>



</html>