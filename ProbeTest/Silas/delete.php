 <?php
$id = $_GET["IDE"];
$conn = mysqli_connect("localhost","root","","maengelliste");
if($conn->connect_error){
  die("Fehler: " . $conn->connect_error);
}     /* verbindet zu der gewählten Datenbank auf dem Server */
else {
  $sql = mysqli_query($conn,"DELETE FROM MaengelTable WHERE MaengelTable.id =" . $id);
  if ($sql===TRUE) {
    echo $id;
  }
  else {
    echo false;
  }
}

?>
