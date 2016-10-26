<html>
<head>
  <title>Titel</title>
</head>

<body>
  <p>Das ist eine PHP Seite.</p>
<table>
  <thead>
    <th>Geraden</th>
    <th>Ungeraden</th>
  </thead>
  <tbody>

    <?php

    for ($i = 1; $i <= 1000; $i++){

      if($i % 2 == 0){
        echo "<tr>";
        echo "<td>" . $i . "</td><td></td>";
        echo "</tr>";
      }
      else{
        echo "<tr>";
        echo "<td></td><td>" . $i . "</td>";
        echo "<tr>";
      }
    }
    ?>
  </tbody>
</table>
</body>
</html>
