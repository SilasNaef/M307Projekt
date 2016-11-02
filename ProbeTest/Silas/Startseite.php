<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PHP|Index</title>
  <script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script type="text/javascript" src="scripts.js"></script>
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
            <li class="active"><a href="Startseite.php">Home</a></li>
            <li><a href="MaengelForm.php">MaengellisteFormular</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </nav>
  <br>
  <br>
  <?php
    date_default_timezone_set("Europe/Berlin");
    $timestamp = "2016.11.02";
    //----------------------------------------------------------------------------------------
    //CONNECTION HERSTELLEN
    $createdb = new mysqli("localhost","root","");
    //----------------------------------------------------------------------------------------
    //QUERY
    $CreateDataBase = mysqli_query($createdb,"CREATE DATABASE IF NOT EXISTS maengelliste");
    $UseCreateDB = mysqli_connect("localhost","root","","maengelliste");
    $CreateDataBaseTable = mysqli_query($UseCreateDB, "CREATE TABLE IF NOT EXISTS MaengelTable( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, UserVorname VARCHAR(30) NOT NULL, UserNachname VARCHAR(30) NOT NULL, ErfassDatum Date NOT NULL, Schaden VARCHAR(100), Loesung VARCHAR(100))");
    $StartQuery = mysqli_query($UseCreateDB,"SELECT * FROM MaengelTable");
    if(mysqli_num_rows($StartQuery)==0) {
      $InsertQuery1 = mysqli_query($UseCreateDB,"INSERT INTO MaengelTable(UserVorname, UserNachname, ErfassDatum, Schaden, Loesung) VALUES ('Silas','Naef','".$timestamp."','Mixxer Kaputt','Neuen Mixxer kaufen')");
      $InsertQuery2 = mysqli_query($UseCreateDB,"INSERT INTO MaengelTable(UserVorname, UserNachname, ErfassDatum, Schaden, Loesung) VALUES ('Sasha','Keller','".$timestamp."','TV Kaputt','Neuen TV kaufen')");
      $InsertQuery3 = mysqli_query($UseCreateDB,"INSERT INTO MaengelTable(UserVorname, UserNachname, ErfassDatum, Schaden, Loesung) VALUES ('Christopher','Buchmann','".$timestamp."','Backofen Kaputt','Neuen Backofen kaufen')");
      $InsertQuery4 = mysqli_query($UseCreateDB,"INSERT INTO MaengelTable(UserVorname, UserNachname, ErfassDatum, Schaden, Loesung) VALUES ('Jannis','Thymnios','".$timestamp."','Herd Kaputt','Neuen Herd kaufen')");
      $InsertQuery5 = mysqli_query($UseCreateDB,"INSERT INTO MaengelTable(UserVorname, UserNachname, ErfassDatum, Schaden, Loesung) VALUES ('Dueen','Brunner','".$timestamp."','Stereoanlage Kaputt','Neue Stereoanlage kaufen')");
      $InsertQuery6 = mysqli_query($UseCreateDB,"INSERT INTO MaengelTable(UserVorname, UserNachname, ErfassDatum, Schaden, Loesung) VALUES ('David','Brogli','".$timestamp."','PC Kaputt','Neuen PC kaufen')");
      $InsertQuery7 = mysqli_query($UseCreateDB,"INSERT INTO MaengelTable(UserVorname, UserNachname, ErfassDatum, Schaden, Loesung) VALUES ('Emmanuel','Egli','".$timestamp."','Router Kaputt','Neuen Router kaufen')");
      $InsertQuery8 = mysqli_query($UseCreateDB,"INSERT INTO MaengelTable(UserVorname, UserNachname, ErfassDatum, Schaden, Loesung) VALUES ('Julian','Ammonn','".$timestamp."','AccessPoint Kaputt','Neuen AccessPoint kaufen')");
      $InsertQuery9 = mysqli_query($UseCreateDB,"INSERT INTO MaengelTable(UserVorname, UserNachname, ErfassDatum, Schaden, Loesung) VALUES ('Mike','VanRojen','".$timestamp."','WC Kaputt','Neues WC kaufen')");
      $InsertQuery10 = mysqli_query($UseCreateDB,"INSERT INTO MaengelTable(UserVorname, UserNachname, ErfassDatum, Schaden, Loesung) VALUES ('Adem','Bilali','".$timestamp."','Dusche Kaputt','Neue Dusche kaufen')");
    }
    else {
    }
    $SelectQuery = mysqli_query($UseCreateDB,"SELECT * FROM MaengelTable");
    //----------------------------------------------------------------------------------------
      echo "<div class='container'><table class='table table-striped table-hover table-borderered'><br>";
      echo "<tr>";
      echo "<th>ID</th>";
      echo "<th>UserVorname</th>";
      echo "<th>UserNachname</th>";
      echo "<th>ErfassDatum</th>";
      echo "<th>Schaden</th>";
      echo "<th>Loesung</th>";
      echo "<th>Löschen</th>";
      echo "<th>Editieren</th>";
      echo "</tr>";
      while ($row = mysqli_fetch_assoc($SelectQuery)) {
        echo "<tr id=".$row['id'].">";
          echo "<td>" . $row['id'] . "</td>";
          echo "<td>" . $row['UserVorname'] . "</td>";
          echo "<td>" . $row['UserNachname'] . "</td>";
          echo "<td>" . $row['ErfassDatum'] . "</td>";
          echo "<td>" . $row['Schaden'] . "</td>";
          echo "<td>" . $row['Loesung'] . "</td>";
          echo "<td><button onclick='DeleteData(".$row['id'].")' type='button' class='btn btn-danger'><i class='fa fa-trash-o'></i></button></td>" . " ";
          echo "<td><button onclick='' type='button' class='btn btn-success'><i class='fa fa-pencil-square-o'></i></button></td>";
        echo "</tr>";
      }
      echo "</table><div class='container'>";
    //----------------------------------------------------------------------------------------
    //CONNECTION SCHLIESSEN
    mysqli_close($createdb);
    //----------------------------------------------------------------------------------------
  ?>
</body>
</html>
