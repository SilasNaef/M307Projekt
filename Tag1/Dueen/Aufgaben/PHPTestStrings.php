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
        $text="Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
              sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
              aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
              duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
              sanctus est Lorem ipsum dolor sit amet.";
        echo substr($text,-6,6); /* gibt letzte 6 Zeichen aus */
        echo substr($text,0,-10);
        $x=0;
        while($x < strlen($text))
        {
          echo substr($text,$x,5). "</br>";
          $x+=5;
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
