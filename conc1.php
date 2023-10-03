<?php
//data base connection
$servername = "localhost";
$username = "root";
$password = "system";
$dbname = "practice";

$conn = new mysqli($servername, $username, $password,$dbname);

if($conn->connect_error)
{
    die("connection failed:" . $conn->connect_error);
}
else{
    echo ("");
}
?>