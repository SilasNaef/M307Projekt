<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        $name  = 'silas';
        $alter = 17;
        $gebtag = '07.08.1999';

        echo '<p>'. $name . '<p>';
        echo '<p>'. $alter . '<p>';
        echo '<p>'. $gebtag . '<p>';
    ?>
    <p>Rechnen</p>
    <?php
        $a = 5;
        $b = 4;

        $c = $a - $b;
        echo $a;
    ?>
    <?php
        $a = 1.9475 * 13400;
        echo $a;
    ?>
    <?php
        $a = 1;
        $A = -2;
        $b = $a + $A;
        echo $b;
    ?>
    <?php
        $a = 1;
        $A = -2;
        echo $a + $A;
    ?>
  </body>
</html>
