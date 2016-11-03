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
<script src="https://use.fontawesome.com/c72bc1bfe3.js"></script>

<div class="col-md-12">
  <?php
  include 'nav.php';
  $MYSQL_HOST = "localhost";
  $MYSQL_USER = "root";
  $MYSQL_PW = "";
  $MYSQL_DB = "phpdb";
  $conn = new mysqli($MYSQL_HOST, $MYSQL_USER, $MYSQL_PW, $MYSQL_DB);
  $result = $conn->query("SELECT * FROM hausschaden");
  echo "<h1> Aktuelle Datensätze </h1>";
  echo "<table class='table table-striped table-hover table-responsive'>";
  echo "<th>ID</th>";
  echo "<th>Erfassungsdatum</th>";
  echo "<th>Antragsteller</th>";
  echo "<th>Schadensbeschreibung</th>";
  echo "<th>Lösung</th>";
  echo "<th>Bearbeiten</th>";
  echo "<th>Löschen</th>";
  while($row=$result->fetch_assoc()) /* Ausgabe der Datenbank */
  {
    echo "<tr id='".$row['SchadenID']."'>";
    echo "<th>".$row['SchadenID']."</th>";
    echo "<th>".$row['Erfassungsdatum']."</th>";
    echo "<th>".$row['Antragsteller']."</th>";
    echo "<th>".$row['Schaden']."</th>";
    echo "<th>".$row['Loesung']."</th>";
    echo "<th><a href='test.php?id=".$row['SchadenID']."'<button class='form-control btn btn-primary' onclick='editTupel(".$row['SchadenID'].")'><i class='fa fa-pencil'></i></th></a>";
    echo "<th><button class='form-control btn btn-danger' onclick='deleteTupel(".$row['SchadenID'].")'><i class='fa fa-trash'></i></th>";
    echo "</tr>";
  }
  echo "</table>";
  ?>
</div>
