<html>
<body>
<?php
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

for ($i = 1; $i <= 500000; $i++) {
  $query = "INSERT INTO `potluck` (`id`, `Nombre`, `Comida`, `Precio`, `Password`, `Referencia`) VALUES (NULL, ELT(0.5 + RAND()*20, 'Ale', 'Ignacio', 'Marcelo'$

  mysql_query($query);

}
  echo "<h2>Datos añadidos!</h2>";

  mysql_close($con);
}
?>
</body>
</html>
