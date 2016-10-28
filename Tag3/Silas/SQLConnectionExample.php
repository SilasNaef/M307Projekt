

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <section class="container">
    <div class="row">
      <h1>Mein Formular für TestTable</h1>
      <div class="col-md-12">
        <form action="SQLConnectionExample.php" method="post">
          <p>Id: </p><input type="text" name="id" value="<?=@$_POST['id']?>" class="form-control" />
          <br>
          <p>Name: </p><input type="text" name="name" value="<?= @$_POST['name']?>"class="form-control" />
          <br>
          <p>Text: </p><input type="text" name="text" value="<?= @$_POST['text']?>"class="form-control" />
          <br>
          <p>Zahl: </p><input type="text" name="zahl" value="<?= @$_POST['zahl']?>"class="form-control" />
          <br>
          <button type="submit" value="absenden" class="form-control btn btn-default">Query Ausführen</button>
        </div>
      </div>
      <div class="row">
      <div class="col-md-12">
        <h1>Ausgabe</h1>
        <?php
          //----------------------------------------------------------------------------------------
          //CONNECTION HERSTELLEN
          $db = mysqli_connect("localhost","root","","testdb");
          $createdb = new mysqli("localhost","root","");
          //----------------------------------------------------------------------------------------
          //WERTE VARIABELN ZUWEISEN
          @$id = $_POST['id'];
          @$name = $_POST['name'];
          @$text = $_POST['text'];
          @$zahl = $_POST['zahl'];
          //----------------------------------------------------------------------------------------
          //QUERY
          //$CreateDataBase = mysqli_query($createdb,"CREATE DATABASE IF NOT EXISTS meineNeueDB");
          //$UseCreateDB = mysqli_connect("localhost","root","","meineNeueDB");
          //$CreateDataBaseTable = mysqli_query($UseCreateDB, "CREATE TABLE IF NOT EXISTS myManualTable( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, firstname VARCHAR(30) NOT NULL, lastName VARCHAR(30) NOT NULL, email VARCHAR(50))");
          //$DeleteRow = mysqli_query($db, "DELETE FROM testtable WHERE id=42");
          $FormularQuery = mysqli_query($db,"INSERT INTO `testtable` (`id`, `Name`, `Text`, `Zahl`) VALUES ('$id','$name','$text','$zahl')");
          //$InsertQuery = mysqli_query($db,"INSERT INTO `testtable` (`id`, `Name`, `Text`, `Zahl`) VALUES (41,'Sasha','Keller',21)");
          //$UpdateQuery = mysqli_query($db,"UPDATE testtable SET text='Doe' WHERE id=20");
          $SelectQuery = mysqli_query($db,"SELECT * FROM testtable");
          //----------------------------------------------------------------------------------------
          //WERTE ÜBERPRÜFEN
          if (empty($id) == true && empty($name) && empty($text) && empty($zahl)) {
            echo "Bitte alle Werte eintippen";
          }
          else {
            echo "<table class='table table-striped table-hover table-borderered'>";
            while ($row = mysqli_fetch_assoc($SelectQuery)) {
              echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Text'] . "</td>";
                echo "<td>" . $row['Zahl'] . "</td>";
              echo "</tr>";
            }
            echo "</table>";
          }
          //----------------------------------------------------------------------------------------
          //CONNECTION SCHLIESSEN
          mysqli_close($createdb);
          mysqli_close($db);
          //----------------------------------------------------------------------------------------
        ?>
      </div>
      </div>
    </section>

  </body>
</html>
