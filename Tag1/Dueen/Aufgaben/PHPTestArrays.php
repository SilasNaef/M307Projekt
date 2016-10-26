<!DOCTYPE html>
<html>
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
      <form method="post" action="/script.php">
          Passwort: <input type="text" name="Passwort"><br />
          <input type="submit" name="absenden" value="Script starten">
     </form>
      <p class ="standardtext">
        <?php
          $Variation = array("Dueen","Duin","Dwenn","Dwaine"); /* Deklaration eines Arrays */
          print_r($Variation); /* Ausgabe aller Array-Einträge (mit Index) */
          echo $Variation[2]."</br>"; /* Ausgabe eines einzelnen Array-Eintrags */
          for ($x=0; $x < count($Variation); $x++) /* Ausgabe mit For-Schleife */
          {
            echo "Eintrag mit Index " . $x. ": ".$Variation[$x]."</br>";
          }
          foreach ($Variation as $name) /* Wie For-Schleife, jedoch werden sie in eine Variable kopiert */
          {
            echo $name."</br>";
          }                             /* Veränderungen an der Variable würden nichts am Array ändern */
          $test["Gruss"] = "hallo";
          $test["Verabschiedung"] = "tschau";
          $test["Verabschiedung2"] = "Ade";
          foreach ($test as $key => $value)
          {
            echo "Der Schlüssel ".$key." hat den Wert ".$value."</br>";
          }
        ?>
      </p>
    </div>
  </div>
  <footer>
    <center><audio src="sound/Menu.mp3" autoplay="true" loop="true" controls="true"></audio></center>
    <p id="footer">Dueen Brunner, HTML-Grundlagen Kurs 2016</p>
  </footer>
</body>
</html>
