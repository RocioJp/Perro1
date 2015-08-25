<?php
// used to connect to the database
{
$host = $_SERVER["host"];
$db_name = $_SERVER["db_name"];
$username = $_SERVER["username"];
$password = $_SERVER["password"];

 function __construct() {
        die('Init function is not allowed');
    }
     
    function connect()
    {
       // One connection through whole application
       if ( null == self::$cont )
       {     
        try
        {
          self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."db_name=".self::$db_Name, self::$username, self::$password); 
        }
        catch(PDOException $exception){
			
           echo "Connection error: " . $exception->getMessage(); 
        }
       }
       return self::$cont;
    }
     
    function disconnect()
    {
        self::$cont = null;
    }
}
?>
