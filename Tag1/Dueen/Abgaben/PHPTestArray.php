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
          $test = array("Eins","Zwei","Drei","Vier"); /* Deklaration eines Arrays */
          natsort($test); /* Natürliche Sortierung, alphabetisch */
          sort($test);  /* Sortiert die Werte, Index Zuordnung bleibt nicht bei den Werten*/
          arsort($test);  /* Gegenteil von natsort, wird umgekehrt ausgegeben */
          asort($test);  /* Sortiert die Werte, Array-Index bleibt bei den Werten */
          print_r($test); /* Ausgabe aller Array-Einträge (mit Index) */
          echo "</br>Anzahl Array-Elemente ".count($test)."</br>";
          echo "Text 'Vier' gefunden in Index: ".array_search("Vier",$test);
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
