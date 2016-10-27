<!DOCTYPE html>
<html>
<head>
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
              echo "<form action='session.php' method='post'>";
              echo "<input type='text' name='vorname' placeholder='Vorname' />";
              echo "</br>";
              echo "<input type='password' name='pw' placeholder='Passwort' />";
              echo "</br>";
              echo "<input type='submit' value='absenden'/>";
              echo "</form>";
              exit;
            }
           ?>
  </p>
</div>
</div>
<div class="col-md-12">
  <?php if (empty ($_POST["vorname"])==True) /* Überprüfung ob Variable leer ist */
          echo "Bitte geben Sie Ihren Vornamen ein.";
        else
        {
          echo "Eingetragener Vorname: ". @$_POST["vorname"]."</br>";
        }
  ?>
</div>
</div>
</body>
</html>
