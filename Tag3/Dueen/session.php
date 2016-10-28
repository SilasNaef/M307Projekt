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
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
  <div id="container">
    <div class="container">
      <h1>Mein Formular</h1>

      <div class="col-md-12">
        <p class="standardtext">
          <?php
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
            echo "<h1> Login</h1>
            <form action='session.php' method='post'>
            <input type='text' name='vorname' placeholder='Vorname' />
            </br>
            <input type='password' name='pw' placeholder='Passwort' />
            </br>
            <input type='submit' name='login' value='Einloggen'/>
            </form>";
            echo "<h2>Registrieren</h2>
            <form action='session.php' method='post' enctype='multipart/form-data'>
            <input type='text' name='vorname1' placeholder='Vorname' />
            </br>
            <input type='text' name='nachname' placeholder='Nachname' />
            </br>
            <input type='text' name='alter' placeholder='Alter' />
            </br>
            <input type='email' name='email' placeholder='Email'></br>
            <input type='password' name='pw1' placeholder='Passwort' />
            </br>
            <input type='radio' name='gender' value='male' checked> Mann<br>
            <input type='radio' name='gender' value='female'> Frau<br>
            <input type='radio' name='gender' value='other'> Sonstiges</br>
            <input type='checkbox' name='Newsfeed' value='NFy'> Ich abonniere den Newsletter<br>
            <input id='input-1' name='image' type='file' class='file'>
            </br>
            <input type='submit' value='Registrieren'/>
            <input type='reset'>
            </form>";
          }
          ?>
          <?php
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
          $conn->query("INSERT INTO user (Vorname, Nachname, Lebensjahre, email, Passwort, Geschlecht, Newsletter, Bild) VALUES ('".$vname."','".$nname."',$alter,'".$mail."','".$pw."','".$gender."','".$NF."','image_".$vname."_".$alter.".png')");
          $result = $conn->query("SELECT * FROM user"); /* Abfrage Speichern in Variable */
          echo "<h1> Aktuelle Datensätze </h1>";
          while($row=$result->fetch_assoc()) /* Ausgabe der Datenbank */
          {
            echo "ID: ".$row["USER_ID"]." - Name: ".$row["Vorname"]." ".$row["Nachname"]. " - Alter: ".$row["Lebensjahre"]."</br>";
          }
          ?>
        </p>
      </div>
    </div>
    <div class="col-md-12">
      <?php
      if (empty ($vname)==True) /* Überprüfung ob Variable leer ist */
      echo "Bitte geben Sie Ihren Vornamen ein.";
      else
      {
        echo "Eingetragener Vorname: ". $vname."</br>";
      }
      ?>
    </div>
  </div>
</body>
</html>
