<?php
// used to connect to the database
$host = $_SERVER["host"];
$db_name = $_SERVER["db_name"];
$username = $_SERVER["username"];
$password = $_SERVER["password"];
try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}
 
// to handle connection error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>
