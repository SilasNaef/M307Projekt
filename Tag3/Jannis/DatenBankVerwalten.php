<!DOCTYPE html>

<html>
<head>
  <title>Titel</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link rel="stylesheet" href="style.css">


 <script src="delete.js"></script>
  </head>

  <body>
    <section class="container">

      <div class ="row">
        <h1>Mein Formular</h1>
        <div class="col-md-12">
          <form action="DatenBankVerwalten.php" method="post">
            <input type="text" name="vorname"  placeholder="Vorname" class="form-control"/>
            <br>
            <input type="text" name="nachname"  placeholder="Nachname" class="form-control"/>
            <br>
            <input type="email" name="email"  placeholder="E-mail" class="form-control"/>
            <br>
            <button type="submit" value="absenden" class="form-control btn
            btn-default">Absenden</button>
            <br>
            <br>
  <?php

    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $CreateDB =  mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS TestJannis");
    $ConnDB = mysqli_connect($servername, $username, $password, 'TestJannis');

  $CreateTB = mysqli_query($ConnDB, "CREATE TABLE IF NOT EXISTS MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50)
)");

@$vorname = $_POST['vorname'];
@$nachname = $_POST['nachname'];
@$email  = $_POST['email'];
  if ( empty ($vorname) == true &&
       empty ($nachname) == true &&
       empty ($email) == true){
    echo "Bitte geben Sie alle Daten ein.";
  }
  else{
    //if (@$_POST['vorname'] != null) {
      echo "Eintrag von Kunden: ". $_POST['vorname'] . " wurde gespeichert";
      $sql =  mysqli_query($ConnDB, "INSERT INTO MyGuests(firstname, lastname, email) VALUES('$vorname', '$nachname', '$email')");

  }

  $abfrage = mysqli_query($ConnDB, "SELECT * FROM MyGuests");


  echo "<table class='table table-striped table-hover'>";
  while($row = mysqli_fetch_assoc($abfrage)) {
    echo "<tr id='" . $row['id'] . "'>";
      echo "<td>" . $row['id'] . "</td>";
      echo "<td>" . $row['firstname'] . "</td>";
      echo "<td>" . $row['lastname'] . "</td>";
      echo "<td>" . $row['email'] . "</td>";
      echo "<td class='text-right'>
      <button type='button' class='btn btn-danger' onclick='deleteCustomer(" . $row["id"].");'>
      <i class='fa fa-trash-o' aria-hidden='true'></i></button></td>";
    echo "</tr>";

  }


  mysqli_close($ConnDB);
  mysqli_close($conn);

      //$sql =  mysql_query("CREATE DATABASE TestJannis IF NOT EXISTS");

      //$conn = mysql_connect($MYSQL_HOST, $MYSQL_USER, $MYSQL_PW);      /* verbindet zu MySQL an sich */
      //mysql_select_db($MYSQL_DB, $conn)     /* verbindet zu der gewählten Datenbank auf dem Server */
    //mysql_close($conn);
  ?>

</body>
</html>
