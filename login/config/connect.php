<?php

    $servername = "localhost";
    $username = "id17197568_test_db";
    $password = "AvS/4]n1G/@US!{B";
    $database = "id17197568_test_name";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";


?>