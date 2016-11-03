<html>
<head>
  <title>Maengelliste im Haushalt</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
  <link rel="stylesheet" href="style.css">


 <script src="delete.js"></script>

 <style>
body {margin:0;}
ul.topnav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

ul.topnav li {float: left;}

ul.topnav li a {
  display: inline-block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  transition: 0.3s;
  font-size: 17px;
}

ul.topnav li a:hover {background-color: #555;}

ul.topnav li.icon {display: none;}

@media screen and (max-width:680px) {
  ul.topnav li:not(:first-child) {display: none;}
  ul.topnav li.icon {
    float: right;
    display: inline-block;
  }
}

@media screen and (max-width:680px) {
  ul.topnav.responsive {position: relative;}
  ul.topnav.responsive li.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  ul.topnav.responsive li {
    float: none;
    display: inline;
  }
  ul.topnav.responsive li a {
    display: block;
    text-align: left;
  }
}
</style>

  </head>

  <body>
    <ul class="topnav" id="myTopnav">
  <li><a class="active" href="Home.php">Home</a></li>
  <li><a href="Pruefung.php">Formular</a></li>
  <li><a href="Datenbank.php">Datenbank</a></li>

  <li class="icon">
    <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
  </li>
</ul>



<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

<?php
@$getid = $_GET['id'];
if (isset($getid)) {
  $Link = "Pruefung.php?id=".$getid."";
  $db = mysqli_connect("localhost","root","","Haushalt");
  $SelectQuery = mysqli_query($db,"SELECT * FROM Problem WHERE id='$getid'");
  while ($row = mysqli_fetch_assoc($SelectQuery)) {
    $sendVorname = $row['firstname'];
    $sendNachname = $row['lastname'];
    $sendDatum = $row['datum'];
    $sendSchaden = $row['schaden'];
    $sendLoesung = $row['loesung'];
  }
  @$vorname = htmlspecialchars($_POST['vorname']);
  @$nachname = htmlspecialchars($_POST['nachname']);
  @$datum  = htmlspecialchars($_POST['datum']);
  @$schaden  = htmlspecialchars($_POST['schaden']);
  @$loesung  = htmlspecialchars($_POST['loesung']);
  if ( empty ($vorname) == False &&
       empty ($nachname) == False &&
       empty ($datum) == False &&
       empty ($schaden) == false &&
       empty ($loesung) == False){
         echo "Änderung von Benutzer: ". $_POST['vorname'] . " wurde gespeichert";
         $Updatesql =  mysqli_query($db, "UPDATE Problem SET firstname='$vorname', lastname='$nachname', datum='$datum', schaden='$schaden', loesung='$loesung' WHERE Problem.id='$getid'");

  }

  $SelectQuery = mysqli_query($db,"SELECT * FROM Problem WHERE Problem.id='$getid'");
  while ($row = mysqli_fetch_assoc($SelectQuery)) {
    $sendVorname = $row['firstname'];
    $sendNachname = $row['lastname'];
    $sendDatum = $row['datum'];
    $sendSchaden = $row['schaden'];
    $sendLoesung = $row['loesung'];
  //$InsertQuery1 = mysqli_query($db,"UPDATE MaengelTable(UserVorname, UserNachname, ErfassDatum, Schaden, Loesung) VALUES ('".$UserVorname."','".$UserNachname."','".$ErfassDatum."','".$Schaden."','".$Loesung."') WHERE id='$getid'");
  }
}
else {

  $servername = "localhost";
  $username = "root";
  $password = "";
  $Link = "Pruefung.php";
  $conn = new mysqli($servername, $username, $password);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $CreateDB =  mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS Haushalt");
  $ConnDB = mysqli_connect($servername, $username, $password, 'Haushalt');

$CreateTB = mysqli_query($ConnDB, "CREATE TABLE IF NOT EXISTS Problem (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
datum DATE NOT NULL,
schaden VARCHAR(50) NOT NULL,
loesung VARCHAR(50) NOT NULL
)");

$startAbfrage = mysqli_query($ConnDB, "SELECT * FROM Problem");

if(mysqli_num_rows($startAbfrage) == 0){
  $Eintrag1 = mysqli_query($ConnDB, "INSERT INTO Problem(firstname, lastname, datum, schaden, loesung) VALUES('Jannis', 'Thymnios', '2016-11-02', 'Wc kaputt', 'Neues WC kaufen')");
  $Eintrag1 = mysqli_query($ConnDB, "INSERT INTO Problem(firstname, lastname, datum, schaden, loesung) VALUES('Silas', 'Näf', '2016-11-02', 'Herd kaputt', 'Neuen Herd kaufen')");

}

@$vorname = htmlspecialchars($_POST['vorname']);
@$nachname = htmlspecialchars($_POST['nachname']);
@$datum  = htmlspecialchars($_POST['datum']);
@$schaden  = htmlspecialchars($_POST['schaden']);
@$loesung  = htmlspecialchars($_POST['loesung']);
if ( empty ($vorname) == False &&
     empty ($nachname) == False &&
     empty ($datum) == False &&
     empty ($schaden) == false &&
     empty ($loesung) == False){
       echo "Eintrag von Benutzer: ". $_POST['vorname'] . " wurde gespeichert";
       $sql =  mysqli_query($ConnDB, "INSERT INTO Problem(firstname, lastname, datum, schaden, loesung) VALUES('$vorname', '$nachname', '$datum', '$schaden', '$loesung')");

}




mysqli_close($ConnDB);
mysqli_close($conn);

    //$sql =  mysql_query("CREATE DATABASE TestJannis IF NOT EXISTS");

    //$conn = mysql_connect($MYSQL_HOST, $MYSQL_USER, $MYSQL_PW);      /* verbindet zu MySQL an sich */
    //mysql_select_db($MYSQL_DB, $conn)     /* verbindet zu der gewählten Datenbank auf dem Server */
}  //mysql_close($conn);
?>


    <section class="container">

      <div class ="row">
        <h1>Maengelliste</h1>
        <div class="col-md-12">
          <form action=<?=@$Link?> method="post">
            <input type="text" name="vorname" value="<?=@$sendVorname?>"  placeholder="Vorname" class="form-control"/>
            <br>
            <input type="text" name="nachname" value="<?=@$sendNachname?>"  placeholder="Nachname" class="form-control"/>
            <br>
            <input type="date" name="datum" value="<?=@$sendDatum?>"  class="form-control"/>
            <br>
            <textarea name="schaden"  placeholder="Schaden" class="form-control" rows="8"><?=@$sendSchaden?></textarea>
            <br>
            <textarea name="loesung"  placeholder="Lösung" class="form-control" rows="8"><?=@$sendLoesung?></textarea>
            <br>
            <button type="submit" value="absenden" class="form-control btn
            btn-default">Absenden</button>
            <br>
            <br>

</body>
</html>
