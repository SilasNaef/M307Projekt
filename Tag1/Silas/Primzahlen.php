<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    for ($i=0; $i < 1000; $i++) {
      if(istprim($i)==true) {
        echo $i."<br />";
      }
    }
    function istprim($primtest) {
      $maxtest = sqrt($primtest);
      for ($i = 2; $i <= $maxtest; ++$i) {
              if ($primtest % $i == 0) {
                      return false;
              }
      }
      return true;
    }
    ?>
  </body>
</html>
