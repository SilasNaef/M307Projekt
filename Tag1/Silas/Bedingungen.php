<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        $S = date("H");

        if ($S < 10) echo "Guten Morgen";
        if ($S >= 10 && $S < 18) echo "Guten Tag";
        if ($S >= 18) echo "Guten Abend";
    ?>
    <?php
        $a = 5;

        if ($a > 0) echo "Grösser 0"+ "<br />";
        if ($a > 10) echo "Grösser 10"+ "<br />";
        if ($a < 10) echo "Kleiner 10"+ "<br />";
     ?>
     <?php
        $a = date("H");

        if ($a > 0) echo "Guten Morgen";
        elseif ($a > 10) echo "Guten Tag";
        elseif ($a < 10) echo "Guten Abend";
     ?>
     <?php
        $S = date("H");
        if ($S < 4) echo "Ab ins Bett";
        elseif ($S < 10) echo "Guten Morgen";
        elseif ($S < 13) echo "Guten Tag";
        elseif ($S < 14) echo "Mahlzeit";
        elseif ($S < 18) echo "Guten Tag";
        elseif ($S < 21) echo "Guten Abend";
        elseif ($S >= 21) echo "Guten Nacht";
     ?>
     <?php
        $S = date("H");

        if($S < 10)
        {
          echo "Guten Tag";
          echo "<br />wird ausgegeben von 0 bis 10 Uhr<br />";
        }
        if ($S >= 10 && $S < 18)
        {
          echo "Guten Tag";
          echo "<br />wird ausgegeben von 10 bis 18 Uhr<br />";
        }

        if ($S >= 18) {
          echo "Guten Abend";
          echo "<br />wird ausgegeben von 18 bis 24 Uhr<br />";
        }
     ?>
  </body>
</html>
