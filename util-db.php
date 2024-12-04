<?php
function get_db_connection(){
    // Define Azure database credentials
    $servername = "mis4013-project.mysql.database.azure.com"; // Azure server hostname
    $user = "MIS4013project"; // Azure MySQL username
    $pass = "ProjectOU2115"; // Azure MySQL Password
    $dbname = "project"; // Database name
    $port = 3306; // MySQL default port number

    // Create connection
    $conn = new mysqli($servername, $user, $pass, $dbname, $port);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}
?>
