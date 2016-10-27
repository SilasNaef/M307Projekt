

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
        <form action="SQLVerbindung.php" method="post">
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
      <div class="col-md-12">
        <h1>Ausgabe</h1>
        <?php
          //$InsertQuery = mysqli_query($db,"INSERT INTO testtable('id','Name','Text','Zahl') VALUES (2,'Jannis','Thymnios',76)");
          $db = mysqli_connect("localhost","root","","testdb");
          @$id = $_POST['id'];
          @$name = $_POST['name'];
          @$text = $_POST['text'];
          @$zahl = $_POST['zahl'];
          if (empty($id) == true && empty($name) && empty($text) && empty($zahl)) {
            echo "Bitte alle Werte eintippen";
          }
          else {

            $FormularQuery = mysqli_query($db,"  INSERT INTO `testtable` (`id`, `Name`, `Text`, `Zahl`) VALUES ('$id','$name','$text','$zahl')");
            $SelectQuery = mysqli_query($db,"SELECT * FROM testtable");
            while ($row = mysqli_fetch_assoc($SelectQuery)) {
              echo $row['Name'] . "<br/>";
            }
          }
          mysqli_close($db);
        ?>
      </div>
    </section>

  </body>
</html>
