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
        /* Deklaration einer Variable */
        $date = date("H");
        /* Verzweigungen in PHP */
        if($date < 10)
        {
          echo "Guten Morgen";
        }
        if($date >= 10 and $date <= 18)
        {
          echo "Guten Nachmittag";
        }
        else
        {
          echo "Guten Abend";
        }
        /* Switch PHP */
        $zahl = 3;
        switch($zahl)
        {
          case 1: echo "</br> Ihre Zahl war 1 </br>";
          break;
          case 2: echo "</br> Ihre Zahl war 2 </br>";
          break;
          case 3: echo "</br> Ihre Zahl war 3 </br>";
          break;
          case 4: echo "</br> Ihre Zahl war 4 </br>";
          break;
          default: echo "</br> ÜNGÜLTIGE EINGABE </br>";
          break;
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
