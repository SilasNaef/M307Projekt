<?php
  $id = $_GET['id'];
  $connection = mysqli_connect("localhost","root","","maengelTable");
  $SelectQuery = mysqli_query($UseCreateDB,"SELECT * FROM MaengelTable WHERE id='$id');

?>
