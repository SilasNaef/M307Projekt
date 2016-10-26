<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    td {
      border: 1px solid black;
    }
    </style>
  </head>
  <body>
      <table>
        <thead>
        <th>Ungerade</th>
        <th>Gerade</th>
      </thead>
      <tbody>
        <?php
          for ($i=0; $i <= 1000; $i++) {
            if ($i % 2 == 0) {
              echo "<tr class='Gerade'>";
              echo "<td></td><td>" . $i ."</td>";
              echo "</tr>";
            }
            else {
              echo "<tr class='Ungerade'>";
              echo "<td>" . $i ."</td><td></td>" ;
              echo "</tr>";
            }
          }
        ?>
      </tbody>
      </table>
  </body>
</html>
