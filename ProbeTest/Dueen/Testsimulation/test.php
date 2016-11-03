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

    $result=$conn->query("SELECT * FROM hausschaden");
    if(mysqli_num_rows($result)==0)
    {
      $conn->query("INSERT INTO hausschaden (Erfassungsdatum, Antragsteller, Schaden, Loesung)
                    VALUES ('2016-01-01', 'Max Mustermann', 'Fatal Error', 'Neustart')");
    }
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
    <?php include 'nav.php' ?>
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
            if (empty(@$_POST['dateact']) OR empty(@$_POST['Antragstelleract']) OR empty(@$_POST['Schadenact']) OR empty(@$_POST['Loesungact']))
            {
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
          $result=$conn->query("SELECT * FROM hausschaden WHERE schadenID=".$id);
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
              if (checkTupel($date,$name,$schaden,$loesung))
              {

              }
              else{
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
