<?php
include('ScriptCSSLink.php');
$UseCreateDB = mysqli_connect("localhost","root","","maengelliste");
$SelectQuery = mysqli_query($UseCreateDB,"SELECT * FROM MaengelTable");
//----------------------------------------------------------------------------------------
  echo "<div class='container'><table class='table table-striped table-hover table-borderered'><br>";
  echo "<tr>";
  echo "<th>ID</th>";
  echo "<th>UserVorname</th>";
  echo "<th>UserNachname</th>";
  echo "<th>ErfassDatum</th>";
  echo "<th>Schaden</th>";
  echo "<th>Loesung</th>";
  echo "<th>Löschen</th>";
  echo "<th>Editieren</th>";
  echo "</tr>";
  while ($row = mysqli_fetch_assoc($SelectQuery)) {
    echo "<tr id=".$row['id'].">";
      echo "<td>" . $row['id'] . "</td>";
      echo "<td>" . $row['UserVorname'] . "</td>";
      echo "<td>" . $row['UserNachname'] . "</td>";
      echo "<td>" . $row['ErfassDatum'] . "</td>";
      echo "<td>" . $row['Schaden'] . "</td>";
      echo "<td>" . $row['Loesung'] . "</td>";
      echo "<td><button onclick='DeleteData(".$row['id'].")' type='button' class='btn btn-danger'><i class='fa fa-trash-o'></i></button></td>" . " ";
      echo "<td><a href='MaengelForm.php?id=".$row['id']."' type='button' class='btn btn-success'><i class='fa fa-pencil-square-o'></i></a></td>";
    echo "</tr>";
  }


?>
