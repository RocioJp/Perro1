<html>
<body>
<?php
if( $_POST )
{
$host = $_SERVER["host"];
$db_name = $_SERVER["db_name"];
$username = $_SERVER["username"];
$password = $_SERVER["password"];

  $con = mysql_connect($host,$username,$password);

  if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }

  mysql_select_db($db_name, $con);

  $name = $_POST['name'];
  $food = $_POST['food'];
  $precio = $_POST['precio'];
  $password = $_POST['password'];
  $query = "
  INSERT INTO `potluck` (`id`, `Nombre`, `Comida`, `Precio`, `Password`) VALUES (NULL, '$name',
        '$food', '$precio', '$password');";

  mysql_query($query);

  echo "<h2>Dato añadido!</h2>";

  mysql_close($con);
}


?>
<FORM><INPUT Type="button" VALUE="Back" onClick="history.go(-1);return true;"></FORM>
</html>
</body>
