<!DOCTYPE html>
<html>
<head>
  <?php
  $MYSQL_HOST = "localhost";
  $MYSQL_USER = "root";
  $MYSQL_PW = "";
  $MYSQL_DB = "phpdb";
  $conn = new mysqli($MYSQL_HOST, $MYSQL_USER, $MYSQL_PW, $MYSQL_DB);
  $conn->query("CREATE DATABASE IF NOT EXISTS PHPDB");
  $conn->query("CREATE TABLE IF NOT EXISTS hausschaden (
    schadenID int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Erfassungsdatum date,
    Antragsteller VARCHAR(255),
    Schaden VARCHAR(255),
    Loesung VARCHAR(255)
    )");
  ?>
  <meta charset="utf-8">
  <title>PHPTest</title>
  <script
  src="https://code.jquery.com/jquery-3.1.1.js"
  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
  crossorigin="anonymous"></script>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="script2.js"></script>
</head>
<body>
  <div class="col-md-12">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Brand</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="test.php">Home<span class="sr-only">(current)</span></a></li>
            <li><a href="db.php">Datenbank</a></li>
          </ul>
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        <h1>Hausschaden eintragen</h1>
        <?php
        $id = @$_GET['id'];
        if (isset($id))
        {
          $link='test.php?id='.$id;
          $result=$conn->query("SELECT * FROM hausschaden WHERE hausschaden.SchadenID=".$id);
          while($row=$result->fetch_assoc()) /* Ausgabe der Datenbank */
          {
            echo "<form action=$link method='post'>
            <input type='date' name='dateact' value='".$row['Erfassungsdatum']."' class='form-control'></br>
            <input type='text' name='Antragstelleract' value='".$row['Antragsteller']."' placeholder='Antragsteller' class='form-control'></br>
            <input type='text' name='Schadenact' value='".$row['Schaden']."' placeholder='Schadensbeschreibung' class='form-control'></br>
            <input type='text' name='Loesungact' value='".$row['Loesung']."' placeholder='Lösung' class='form-control'></br>
            <input type='submit' value='Datensatz aktualisieren' class='btn btn-primary'>
            </form>";
          }
          if ($_POST)
          {
            if (empty(@$_POST['date']) OR empty(@$_POST['Antragsteller']) OR empty(@$_POST['Schaden']) OR empty(@$_POST['Loesung'])) {
              echo "<FONT COLOR='#FF0000'>Fehlende Eingabe!</FONT>";
            }
            else
            {
              $dateact= trim(htmlspecialchars(@$_POST['dateact']));
              $nameact = trim(htmlspecialchars(@$_POST['Antragstelleract']));
              $schadenact = trim(htmlspecialchars(@$_POST['Schadenact']));
              $loesungact = trim(htmlspecialchars(@$_POST['Loesungact']));
              $conn->query("UPDATE hausschaden SET Erfassungsdatum='".$dateact."', Antragsteller='".$nameact."', Schaden='".$schadenact."', Loesung='".$loesungact."' WHERE schadenID=".$id);
              echo "Aktualisierung erfolgreich!";
            }

          }
          else {
            echo "<form action='test.php' method='post'>
            <input type='date' name='date' class='form-control'></br>
            <input type='text' name='Antragsteller' placeholder='Antragsteller' class='form-control'></br>
            <input type='text' name='Schaden' placeholder='Schadensbeschreibung' class='form-control'></br>
            <input type='text' name='Loesung' placeholder='Lösung' class='form-control'></br>
            <input type='submit' value='Datensatz erfassen' class='btn btn-primary'>
            </form>";
            if ($_POST)
            {
              if (empty(@$_POST['date']) OR empty(@$_POST['Antragsteller']) OR empty(@$_POST['Schaden']) OR empty(@$_POST['Loesung'])) {
                echo "<FONT COLOR='#FF0000'>Fehlende Eingabe!</FONT>";
              }
              else
              {
                $date=trim(htmlspecialchars(@$_POST['date']));
                $name = trim(htmlspecialchars(@$_POST['Antragsteller']));
                $schaden = trim(htmlspecialchars(@$_POST['Schaden']));
                $loesung = trim(htmlspecialchars(@$_POST['Loesung']));
                $conn->query("INSERT INTO hausschaden (Erfassungsdatum, Antragsteller, Schaden, Loesung) VALUES ('".$date."','".$name."','".$schaden."','".$loesung."')");
                echo "Eintrag erfolgreich!";
              }
            }
            echo "</br>";
          }
          ?>
        </div>
      </body>
      </html>
