<!DOCTYPE html>

<html>
<head>
  <title>Titel</title>
</head>

<body>
  <p>Das ist eine PHP Seite.</p>


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

$sql =  mysqli_query($ConnDB, "INSERT INTO MyGuests(firstname, lastname, email) VALUES('Jannis', 'Thymnios', 'j.thymnios@gmail.com')");
$abfrage = mysqli_query($ConnDB, "SELECT * FROM MyGuests");
while($row = mysqli_fetch_assoc($abfrage)) {
  echo $row['firstname'] . "" . $row['lastname'] . "" . $row['email'] . "<br/>";
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
