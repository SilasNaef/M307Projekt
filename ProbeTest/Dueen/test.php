<!DOCTYPE html>
<html>
  <head>
    <?php
    $MYSQL_HOST = "localhost";
    $MYSQL_USER = "root";
    $MYSQL_PW = "";
    $MYSQL_DB = "dueendb";
    $conn = new mysqli($MYSQL_HOST, $MYSQL_USER, $MYSQL_PW, $MYSQL_DB);
    $conn->query("CREATE DATABASE IF NOT EXISTS PHPDB");
    $MYSQL_DB = "PHPDB";
    ?>
    <meta charset="utf-8">
    <title>PHPTest</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="col-md-12">
      <h1>Hausschäden</h1>
      <input type="date" name="Erfassungsdatum" class="form-control"></br>
      <input type="text" name="Antragsteller" placeholder="Antragsteller" class="form-control"></br>
      <input type="text" name="Schaden" placeholder="Schadensbeschreibung" class="form-control"></br>
      <input type="text" name="Loesung" placeholder="Lösung" class="form-control"></br>
      <input type="submit" value="Datensatz erfassen" class="btn btn-primary">
      <?php
        $date = @$_POST['Erfassungsdatum'];
        $name = @$_POST['Antragsteller'];
        $schaden = @$_POST['Schaden'];
        $loesung = @$_POST['Loesung'];
        $conn->query("INSERT INTO hausschaden (Erfassungsdatum, Antragsteller, Schaden, Loesung) VALUES ('".$date."','".$name."','".$schaden."','".$loesung."')");
      ?>
    </div>
  </body>
</html>
