<!DOCTYPE html>
<html>
<?php     /* Diese Daten teilt dir dein Provider mit: */
$MYSQL_HOST = "localhost";
$MYSQL_USER = "root@localhost";
$MYSQL_PW = "";
$MYSQL_DB = "dueenDB";

$conn = mysql_connect($MYSQL_HOST, $MYSQL_USER, $MYSQL_PW);      /* verbindet zu MySQL an sich */
mysql_select_db($MYSQL_DB, $conn);     /* verbindet zu der gewählten Datenbank auf dem Server */
?>
<head>
  <meta charset="utf-8">
  <link rel='stylesheet' href="style.css" type="text/css" media="screen">
  <img src="pix/logo1.png" width="800px" height="200px" class="image">
</head>
<body>
  <div id="container">
    <div id="nav">
      <nav>
        <a class="button" href="index.php">Home</a> <br> <br>
        <a class="button" href="story.php">Story</a> <br> <br>
        <a class="button" href="#">jweg</a> <br> <br>
        <a class="button" href="PHPTest.php">PHPTest</a> <br> <br>
        <a class="button" href="contact.php">Kontakt</a> <br> <br>
      </nav>
    </div>
    <div id="text">
      <h1>Mein PHP Test</h1>
      <p class ="standardtext">
        <form method="post" action="/script.php">
            Vorname:   <input type="text" name="VName"><br />
            Nachname:  <input type="text" name="NName"><br />
            Alter:     <input type="text" name="Alter"><br />
            <input type="submit" name="absenden" value="Speichern">
       </form>
      </p>
    </div>
  </div>
  <footer>
    <center><audio src="sound/Menu.mp3" autoplay="true" loop="true" controls="true"></audio></center>
    <p id="footer">Dueen Brunner, HTML-Grundlagen Kurs 2016</p>
  </footer>
</body>
</html>
