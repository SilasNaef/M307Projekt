<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <table>
        <?php
          for ($i=0; $i <= 1000; $i++) {
            if ($i%2 == 0) {
              echo "<tr class='even'>";
              echo "<td>" . $i ." ✈ ". "</td>";
              echo "</tr>";
            }
            else {
              echo "<tr>";
              echo "<td>" . $i ." ✈ ". "</td>";
              echo "</tr>";
            }
          }
        ?>
      </table>
  </body>
</html>
