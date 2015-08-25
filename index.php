<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
 
<body>
 
<!-- just a header -->
<h1>PDO: Create a Record</h1>
 
<!-- html form here where the product information will be entered -->
<form action='create.php' method='post'>
    <table border='0'>
        <tr>
            <td>Name</td>
            <td><input type='text' name='name' /></td>
        </tr>
        <tr>
            <td>Food</td>
            <td><input type='text' name='food' /></td>
        </tr>
        <tr>
            <td>Confirmed (Y o N)</td>
             <td><input type='text' name='confirmed' /></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type='submit' value='Save' /> 
                <a href='read.php'>Back to read records</a>
            </td>
        </tr>
    </table>
</form>
 
</body>
                  <?php
                   include 'database.php';
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM customers ORDER BY id DESC';
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['name'] . '</td>';
                            echo '<td>'. $row['email'] . '</td>';
                            echo '<td>'. $row['mobile'] . '</td>';
                            echo '</tr>';
                   }
                   Database::disconnect();
                  ?>
                  </tbody>
            </table>
        </div>
    </div> <!-- /container -->
  </body>
</html>
