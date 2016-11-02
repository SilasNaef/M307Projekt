<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PHP|Index</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <nav>
    <div class="container">
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="Startseite.php">WebSiteName</a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="Startseite.php">Home</a></li>
            <li class="active"><a href="MaengelForm.php">MaengellisteFormular</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </nav>
  <br>
  <br>
  <section class="container">
    <div class="row">
      <h1>Neuen Datensatz anlegen</h1>
      <div class="col-md-12">
        <form action="MaengelForm.php" method="post">
          <label for="UserVorname">UserVorname:</label>
          <input type="text" name="UserVorname" class="form-control" />
          <br>
          <label for="UserNachname">UserNachname:</label>
          <input type="text" name="UserNachname" class="form-control" />
          <br>
          <label for="ErfassDatum">Erfassdatum:</label>
          <input type="date" name="ErfassDatum" class="form-control" />
          <br>
            <label for="Schaden">Schaden:</label>
            <textarea class="form-control" name="Schaden" rows="3"></textarea>
            <br>
            <label for="Loesung">Loesung:</label>
            <textarea class="form-control" name="Loesung" rows="3"></textarea>
            <br>
            <button type="submit" value="absenden" class="form-control btn btn-default">Query Ausführen</button>
          </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <?php
          //----------------------------------------------------------------------------------------
          //CONNECTION HERSTELLEN
          $db = mysqli_connect("localhost","root","","maengelliste");
          //----------------------------------------------------------------------------------------
          //WERTE VARIABELN ZUWEISEN
          @$UserVorname = $_POST['UserVorname'];
          @$UserNachname = $_POST['UserNachname'];
          @$ErfassDatum = $_POST['ErfassDatum'];
          @$Schaden = $_POST['Schaden'];
          @$Loesung = $_POST['Loesung'];
          //----------------------------------------------------------------------------------------
          if(empty($_POST['UserVorname']) == false && empty($_POST['UserNachname']) == false && empty($_POST['ErfassDatum']) == false && empty($_POST['Schaden']) == false && empty($_POST['Schaden']) == false && empty($_POST['Loesung']) == false) {
            $InsertQuery1 = mysqli_query($db,"INSERT INTO MaengelTable(UserVorname, UserNachname, ErfassDatum, Schaden, Loesung) VALUES ('".$UserVorname."','".$UserNachname."','".$ErfassDatum."','".$Schaden."','".$Loesung."')");
          }
          //----------------------------------------------------------------------------------------
          //CONNECTION SCHLIESSEN
          mysqli_close($db);
          //----------------------------------------------------------------------------------------
          ?>
        </div>
      </div>
    </section>

  </body>
  </html>