<?php
    header("Location: index.php");

    include("config/connect.php");
    
    $un = $_REQUEST['un'];
    $pw = $_REQUEST['pw'];
    
    $sql = "INSERT INTO login (un, pw) VALUES ('$un', '$pw')";
    
    if($conn->query($sql) === true){
        echo "Records inserted successfully.";
    } else {
        echo "ERROR: Could not able to execute $sql. " . $conn->error;
    }
 
// Close connection
$conn->close();

exit();
?>

