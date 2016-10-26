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
        <p class="standardtext">
          <?php
            $a = 1.5 * 20;
            $b = 4;
            echo $a + $b;
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
