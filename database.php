<?php
// used to connect to the database
$host = $_ENV["host"];
$db_name = $_ENV["db_name"];
$username = $_ENV["username"];
$password = $_ENV["password"];
 
try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}
 
// to handle connection error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>
