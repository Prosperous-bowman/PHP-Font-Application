<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Application_site";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("connection failed ". mysqli_connect_error());
}
// echo "Connnected successfully";