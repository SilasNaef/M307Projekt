<html>
<head>
  <title>Formulare</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


</head>

<body>
  <section class="container">

    <div class ="row">
      <h1>Mein Formular</h1>
      <div class="col-md-12">
        <form action="Formulare.php" method="post">
          <label>Emai-Adresse:</label>
          <input type="email" name="vorname" value="<?=@$_POST['vorname']?>" placeholder="Benutzername" class="form-control"/>
          <br>
          <label>Alter:</label>
          <input type="number" name="alter" placeholder="Alter" class="form-control"/>
          <br>
          <label>Passwort:</label>
          <input type="password" name="passwort"  placeholder="Passwort" class="form-control"/>
          <br>
          <input type="password" name="passwortbe"  placeholder="Passwort bestätigen" class="form-control"/>
          <br>
          <div class="form-group">


          <input type="checkbox"> Anmeldung speichern
          <br>
          <br>
          <label>Sonstiges:</label>
          <input type="time" name="Time" class="form-control"/>
          <br>
          <input type="date" name="Date" class="form-control"/>
          <br>
          <input type="month" name="Month" class="form-control"/>
          <br>
          <input type="week" name="Week" class="form-control"/>
          <br>

          <label>Profibild auswählen:</label><input type="file" name="image">
          <br>
          <label for="textarea">Kommentar hinzufügen:</label>
          <textarea class="form-control" rows="3"></textarea>
          <br>
          <label>Abonnement auswählen:</label>
          <select class="form-control">
            <option>10/mo</option>
            <option>20/mo</option>
            <option>30/mo</option>
            <option>40/mo</option>
            <option>50/mo</option>
          </select>
          <br>

          <div class="radio">
  <label>
    <input type="radio" name="optionsfeldRadio" id="optionsfeldRadio1" value="option1" checked>
    Die erste Option ist dies und das&mdash;denk daran, zu sagen, warum es toll ist!
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="optionsfeldRadio" id="optionsfeldRadio2" value="option2">
    Die zweite Option ist etwas anderes und wenn du sie auswählst, wird die erste abgewählt.
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="optionsfeldRadio" id="optionsfeldRadio3" value="option3" checked disabled
    Die dritte Option ist deaktiviert
  </label>
</div>
          <input type="hidden" name="logout"  value="1"/>
          <button type="submit" value="absenden" class="form-control btn
          btn-default">Absenden</button>
        </form>
      </div>
    </div>
    <div class="col-md-12">
      <!--PHP Teil -->
      <?php
      $MYSQL_HOST = "localhost";
      $MYSQL_USER = "root";
      $MYSQL_PW = "";
      $MYSQL_DB = "Produkte";

      @$username = $_POST['vorname'];
      @$password = $_POST['passwort'];
      @$confirm = $_POST['passwortbe'];
        if ( empty ($username) == true &&
             empty ($password) == true &&
             empty ($confirm) == true){
          echo "Bitte geben Sie Ihre Benutzererkennung ein.";
        }
        else{
          //if (@$_POST['vorname'] != null) {
            echo "Wilkommen<br> ". $_POST['vorname'] . "<br>";
            if($password == $confirm){
              echo "Passwort Bestätigt";
            }
        }

      ?>
    </div>
  </section>



</body>
</html>
