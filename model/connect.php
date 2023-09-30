<?php
$servername = "localhost";
$database = "cas";
$username = "root";
$password = "";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if ($conn) {
    // echo "Connected successfully";
}
else
{
    echo "something wrong";
}



?>