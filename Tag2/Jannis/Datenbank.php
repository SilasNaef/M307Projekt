<html>
<head>
  <title>Formulare</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


</head>

<body>
  <section class="container">

    <div class ="row">
      <h1>Mein Formular</h1>
      <div class="col-md-12">
        <form action="Datenbank.php" method="post">
          <input type="text" name="vorname" value="<?=@$_POST['vorname']?>" placeholder="Benutzername" class="form-control"/>
          <br>
          <input type="file" name="vorname">
          <br>
          <button type="submit" value="absenden" class="form-control btn
          btn-default">Absenden</button>
        </form>
      </div>
    </div>
    <div class="col-md-12">
<?php     /* Diese Daten teilt dir dein Provider mit: */
$MYSQL_HOST = "localhost";
$MYSQL_USER = "root";
$MYSQL_PW = "";
$MYSQL_DB = "Produkte";

$conn = mysql_connect($MYSQL_HOST, $MYSQL_USER, $MYSQL_PW);      /* verbindet zu MySQL an sich */
mysql_select_db($MYSQL_DB, $conn)     /* verbindet zu der gewählten Datenbank auf dem Server */
or die("Disconnected");
echo "Connected";
echo "<br>";

@$username = $_POST['vorname'];
  if ( empty ($username) == true){

    echo "Bitte geben Sie Ihre Benutzererkennung ein.";
  }
  else{
    echo "Silus isch ein geiler soldat";
    //if (@$_POST['vorname'] != null) {
    $sql =  mysql_query("INSERT INTO kunden(Name) VALUES('$username')");
    $abfrage = mysql_query("SELECT * FROM `kunden`");
    while($row = mysql_fetch_assoc($abfrage)) {
         echo "<br>$row[Name] <br />";
      }


        }
  mysql_close($conn);


?>


</body>
</html>
