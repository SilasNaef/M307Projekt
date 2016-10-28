<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>TestTitle</title>
  <script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="style.css" rel="stylesheet">
</head>
<body>
  <section class="container">
    <div class="row">
      <h1>Mein Formular für myManualTable</h1>
      <div class="col-md-12">
        <form action="SQLExampleAJAXjQuery.php" method="post">
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
        //$InsertQuery = mysqli_query($db,"INSERT INTO testtable('id','Name','Text','Zahl') VALUES (2,'Jannis','Thymnios',76)");
        @$name = $_POST['name'];
        @$text = $_POST['text'];
        @$zahl = $_POST['zahl'];

        $createdb = new mysqli("localhost","root","");
        $CreateDataBase = mysqli_query($createdb,"CREATE DATABASE IF NOT EXISTS AjaxjQuery");
        $UseCreateDB = mysqli_connect("localhost","root","","AjaxjQuery");
        $CreateDataBaseTable = mysqli_query($UseCreateDB, "CREATE TABLE IF NOT EXISTS MeineTabelle(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, firstname VARCHAR(30) NOT NULL, lastName VARCHAR(30) NOT NULL, email int(6))");
        $FormularQuery = mysqli_query($UseCreateDB, "INSERT INTO `MeineTabelle` (`firstname`, `lastName`, `email`) VALUES ('$name','$text','$zahl')");
        if (empty($name) && empty($text) && empty($zahl)) {
          echo "Bitte alle Werte eintippen";
        }
        else {
          $SelectQuery = mysqli_query($UseCreateDB,"SELECT * FROM MeineTabelle");
          echo "<table class='table table-striped table-hover table-borderered'>";
          while ($row = mysqli_fetch_assoc($SelectQuery)) {
            echo "<tr>";
              echo "<td>" . $row['id'] . "</td>";
              echo "<td>" . $row['firstname'] . "</td>";
              echo "<td>" . $row['lastName'] . "</td>";
              echo "<td>" . $row['email'] . "</td>";
              echo "<td><button onclick='' type='button' class='btn btn-default fa fa-trash-o'></button>" . " ";
              echo "<button onclick='' type='button' class='btn btn-default fa fa-pencil-square-o'></button></td>";
            echo "</tr>";
          }
          echo "</table>";
        }
        mysqli_close($createdb);
        ?>
      </div>
    </div>
    </section>
  </body>
  </html>
