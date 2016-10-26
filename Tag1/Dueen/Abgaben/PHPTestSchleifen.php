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
        $x;
        /* For-Schleife in PHP */
        for($x=0;$x<5;$x++)
        {
          $x_square = $x*$x;
          echo "</br> Das Quadrat von ". $x . " ist ".$x_square;
        }
        $x = 0;
        /* Do-while-Schleife in PHP */
        do
        {
          echo "</br> Das Quadrat von ".$x. " ist ". $x*$x;
          $x++;
        } while ($x<5);
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
