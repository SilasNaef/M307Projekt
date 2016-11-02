<!DOCTYPE html>
<html>
<head>
  <?php
  $MYSQL_HOST = "localhost";
  $MYSQL_USER = "root";
  $MYSQL_PW = "";
  $MYSQL_DB = "dueendb";

  $conn = new mysqli($MYSQL_HOST, $MYSQL_USER, $MYSQL_PW, $MYSQL_DB);
  ?>
  <meta charset="utf-8">
  <script
  src="https://code.jquery.com/jquery-3.1.1.js"
  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
  crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
  crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
  integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
  crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
  crossorigin="anonymous"></script>
  <script src="script.js"></script>
  <script src="https://use.fontawesome.com/c72bc1bfe3.js"></script>
</head>
<body>
  <div id="container">
    <div class="container">
      <h1>Mein Formular</h1>

      <div class="col-md-12">
        <p class="standardtext">
          <?php /* PHP für Session */
          session_start();
          session_cache_limiter(1);
          if(@$_POST['login'])
          {
            $LoginQuery = $conn->query("SELECT * FROM user WHERE Vorname = '".@$_POST['vorname']."' AND Passwort = '".@$_POST['pw']."'");
            if($LoginQuery->num_rows > 0) /* Ausgabe der Datenbank */
            {
              $row=$LoginQuery->fetch_object();
              $_SESSION["vorname"] = $row->Vorname;
              $_SESSION["login"]=true;
            }
            else
            {
              echo "Falsche Logindaten!";
              $_SESSION["login"]=false;
            }
          }
          if(@$_SESSION['login'])
          {
            echo "Login erfolgreich! </br>";
            echo "Hallo ".$_SESSION['vorname']."</br>";
            echo "<input type='submit' name='Logout' value='Logout'/>";
          }
          else
          {
            echo "<h1>Login</h1>
            <form action='Jquerysession.php' method='post'>
            <input type='text' name='vorname' placeholder='Vorname' class='form-control'/>
            </br>
            <input type='password' name='pw' placeholder='Passwort' class='form-control'/>
            </br>
            <input type='submit' name='login' value='Einloggen' class='form-control btn btn-primary'/>
            </form>";
            echo "<h2>Registrieren</h2>
            <form action='Jquerysession.php' method='post' enctype='multipart/form-data'>
            <input type='text' name='vorname1' placeholder='Vorname' class='form-control'/>
            </br>
            <input type='text' name='nachname' placeholder='Nachname' class='form-control'/>
            </br>
            <input type='text' name='alter' placeholder='Alter' class='form-control'/>
            </br>
            <input type='email' name='email' placeholder='Email'class='form-control'></br>
            <input type='password' name='pw1' placeholder='Passwort' class='form-control'/>
            </br>
            <input type='radio' name='gender' value='Maennlich' checked> Mann<br>
            <input type='radio' name='gender' value='Weiblich'> Frau<br>
            <input type='radio' name='gender' value='Sonstiges'> Sonstiges</br>
            <input type='checkbox' name='Newsfeed' value='1'> Ich abonniere den Newsletter<br>
            <input id='input-1' name='image' type='file' class='file'>
            </br>
            <input type='submit' value='Registrieren' class='form-control btn btn-primary'/>
            </br>
            <input type='reset' class='form-control btn btn-primary'>
            </form>";
          }
          ?>
          <?php /* PHP für Daten speichern und Daten ausgeben */
          /* Daten speichern */
          $vname=@$_POST["vorname1"];
          $nname=@$_POST["nachname"];
          $alter=@$_POST["alter"];
          $mail=@$_POST["email"];
          $pw=@$_POST["pw1"];
          $gender=@$_POST["gender"];
          $NF=@$_POST["Newsfeed"];
          if(@isset($_FILES['image']))
          {
            copy($_FILES["image"]["tmp_name"], "./images/image_".$vname.".png");
          }
          $conn->query("INSERT INTO user (Vorname, Nachname, Lebensjahre, email, Passwort, Geschlecht, Newsletter, Bild) VALUES ('".$vname."','".$nname."',$alter,'".$mail."','".$pw."','".$gender."',$NF,'image_".$vname."_".$alter.".png')");
          /* Datenausgabe */
          $result = $conn->query("SELECT * FROM user"); /* Abfrage Speichern in Variable */
          echo "<h1> Aktuelle Datensätze </h1>";
          echo "<table class='table table-striped table-hover table-responsive'>";
          echo "<th>ID</th>";
          echo "<th>Name</th>";
          echo "<th>Alter</th>";
          echo "<th>Email-Adresse</th>";
          echo "<th>Geschlecht</th>";
          echo "<th></th>";
          while($row=$result->fetch_assoc()) /* Ausgabe der Datenbank */
          {
            echo "<tr id='".$row['USER_ID']."'>";
            echo "<th>".$row['USER_ID']."</th>";
            echo "<th>".$row["Vorname"]." ".$row['Nachname']."</th>";
            echo "<th>".$row['Lebensjahre']." Jahre</th>";
            echo "<th>".$row['email']."</th>";
            echo "<th>".$row['Geschlecht']."</th>";
            echo "<th><button class='form-control btn btn-danger' onclick='deleteUser(".$row['USER_ID'].")'><i class='fa fa-trash'></i></th>";
            echo "</tr>";
          }
          echo "</table>";
          ?>
        </p>
      </div>
    </div>
    <div class="col-md-12">
    </div>
  </div>
</body>
</html>
