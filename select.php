<html>
<body>
<?php
if( true )
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


  $query = "SELECT * FROM potluck LIMIT 50 OFFSET ".rand(0,499950).";";

  $result = mysql_query($query);

  echo "<table><tr>
        <td>Nombre</td>
        <td>Comida</td>
        <td>Precio</td>
        <td>Password</td>
        <td>Referencia</td></tr>";
  while ($row = mysql_fetch_assoc($result)) {
        echo "<tr>
        <td>{$row['Nombre']}</td>
        <td>{$row['Comida']}</td>
        <td>{$row['Precio']}</td>
        <td>{$row['Password']}</td>
        <td>{$row['Referencia']}</td></tr>";
  }
  echo "</table>";

  mysql_close($con);
}
?>
<FORM><INPUT Type="button" VALUE="Back" onClick="history.go(-1);return true;"></FORM>
</html>
</body>
