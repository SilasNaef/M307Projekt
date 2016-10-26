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
        <h1>Was ist Dark Souls?</h1>
        <p class="standardtext">
          Dark Souls 3, oder allgemein die gesamte Souls-Serie, gehört zur härtesten Spielereihe der Videospiel-Branche.
          Mit deinem eigenem erstellten Helden durchquerst du in Dark Souls 3 die Welt von Lothric. Depressive Stimmung,
          schwierige Gebiete, unvorhersehbare Hinterhalte und Erbarmungslose Bosse. Der Fokus liegt hierbei vor allem bei den
          Bossen, den sie sind es, die das Spiel schwierig und gleichzeitig episch machen. Im ersten Moment würde man denken: "Wer
          würde sich das bitte schön antun?", doch genau diese Mischung aus Schwierigkeit, trübender Stimmung und epischen Gebieten
          ist das, was Dark Souls ausmacht und zu einem Spiele-Hit verholfen hat. Gamer sehnen sich nach schwierigen, aber
          fairen Spielen und Dark Souls trifft ziemlich gut auf das zu. Hart, aber fair.
          <?php
            $name = 'Dueen';
            $gebtag = '18.März';
            echo 'Hallo ' .$name. ' du hast am  ' .$gebtag. ' wie geht es dir?';
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
