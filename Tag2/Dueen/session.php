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
          session_cache_limiter(60);
          if(@$_POST["vorname"]!="" AND @$_POST["pw"]!="")
            {
              if (@$_POST["vorname"]=="dueen" AND @$_POST["pw"] =="dueen")
              {
                $_SESSION["vorname"] = $_POST["vorname"];
                $_SESSION["login"]=true;
              }
              else
              {
                echo "Falsche Logindaten";
                $_SESSION["login"]=false;
              }
            }
            if(@$_SESSION["login"]==true)
            {
              echo "</br> Hallo ".$_SESSION["vorname"];
            }
            else
            {
              echo "<h1> Login</h1>";
              echo "<form action='session.php' method='post'>";
              echo "<input type='text' name='vorname' placeholder='Vorname' />";
              echo "</br>";
              echo "<input type='password' name='pw' placeholder='Passwort' />";
              echo "</br>";
              echo "<input type='submit' value='absenden'/>";
              echo "</form>";
            }
           ?>
           <h2>Datensatz anlegen</h2>
          <form action='session.php' method='post' enctype="multipart/form-data">
          <input type='text' name='vorname1' placeholder='Vorname' />
          </br>
          <input type='text' name='nachname' placeholder='Nachname' />
          </br>
          <input type='text' name='alter' placeholder='Alter' />
          </br>
          <input type='password' name='pw1' placeholder='Passwort' />
          </br>
          <input id="input-1" name="image" type="file" class="file">
          </br>
          <input type='submit' value='Daten speichern'/>
        </form>
        <?php
              $vname=@$_POST["vorname1"];
              $nname=@$_POST["nachname"];
              $alter=@$_POST["alter"];
              $pw=@$_POST["pw1"];
              if(@isset($_FILES['image']))
              {
                copy($_FILES["image"]["tmp_name"], "./images/image_".$vname.".png");
              }
              $conn->query("INSERT INTO user (Vorname, Nachname, Lebensjahre, Passwort, Bild) VALUES ('".$vname."','".$nname."',$alter,'".$pw."','image_".$vname."_".$alter.".png')");
              print_r($conn);
              $result = $conn->query("SELECT * FROM user"); /* Abfrage Speichern in Variable */
              echo "<h1> Aktuelle Datensätze </h1>";
              while($row=$result->fetch_assoc()) /* Ausgabe der Datenbank */
              {
                echo "id: ".$row["USER_ID"]." - Name: ".$row["Vorname"]." ".$row["Nachname"]. " - Alter: ".$row["Lebensjahre"]."</br>";
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
