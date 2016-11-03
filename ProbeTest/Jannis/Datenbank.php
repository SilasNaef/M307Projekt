<html>
<head>
  <title>Maengelliste im Haushalt</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
  <link rel="stylesheet" href="style.css">


 <script src="delete.js"></script>
 <style>
body {margin:0;}
ul.topnav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

ul.topnav li {float: left;}

ul.topnav li a {
  display: inline-block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  transition: 0.3s;
  font-size: 17px;
}

ul.topnav li a:hover {background-color: #555;}

ul.topnav li.icon {display: none;}

@media screen and (max-width:680px) {
  ul.topnav li:not(:first-child) {display: none;}
  ul.topnav li.icon {
    float: right;
    display: inline-block;
  }
}

@media screen and (max-width:680px) {
  ul.topnav.responsive {position: relative;}
  ul.topnav.responsive li.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  ul.topnav.responsive li {
    float: none;
    display: inline;
  }
  ul.topnav.responsive li a {
    display: block;
    text-align: left;
  }
}
</style>

  </head>

  <body>
    <ul class="topnav" id="myTopnav">
  <li><a class="active" href="Home.php">Home</a></li>
  <li><a href="Pruefung.php">Formular</a></li>
  <li><a href="Datenbank.php">Datenbank</a></li>

  <li class="icon">
    <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
  </li>
</ul>



<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

<section class="container">

  <div class ="row">
    <h1>Datenbank mit Gespeicherten Problemen</h1>


  <?php

    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $CreateDB =  mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS Haushalt");
    $ConnDB = mysqli_connect($servername, $username, $password, 'Haushalt');

  $CreateTB = mysqli_query($ConnDB, "CREATE TABLE IF NOT EXISTS Problem (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
datum DATE NOT NULL,
schaden VARCHAR(50) NOT NULL,
loesung VARCHAR(50) NOT NULL
)");

  $startAbfrage = mysqli_query($ConnDB, "SELECT * FROM Problem");

  if(mysqli_num_rows($startAbfrage) == 0){
    $Eintrag1 = mysqli_query($ConnDB, "INSERT INTO Problem(firstname, lastname, datum, schaden, loesung) VALUES('Jannis', 'Thymnios', '2016-11-02', 'Wc kaputt', 'Neues WC kaufen')");
    $Eintrag1 = mysqli_query($ConnDB, "INSERT INTO Problem(firstname, lastname, datum, schaden, loesung) VALUES('Silas', 'Näf', '2016-11-02', 'Herd kaputt', 'Neuen Herd kaufen')");

  }





  $abfrage = mysqli_query($ConnDB, "SELECT * FROM Problem");


  echo "<table class='table table-striped table-hover'>";
  while($row = mysqli_fetch_assoc($abfrage)) {
    echo "<tr id='" . $row['id'] . "'>";
      echo "<td>" . $row['id'] . "</td>";
      echo "<td>" . $row['firstname'] . "</td>";
      echo "<td>" . $row['lastname'] . "</td>";
      echo "<td>" . $row['datum'] . "</td>";
      echo "<td>" . $row['schaden'] . "</td>";
      echo "<td>" . $row['loesung'] . "</td>";
      echo "<td class='text-right'>
      <a type='button' href='Pruefung.php?id=" . $row["id"] . "' class='btn btn-primary'>
      <i class='fa fa-pencil' aria-hidden='true'></i></button></td>";
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
