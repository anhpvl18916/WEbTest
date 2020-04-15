<?php
function connectDB() {
    $servername = "localhost";
    $username = "class1633";
    $password = "class1633";
    $dbname = "BookDB";
  
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}
?>