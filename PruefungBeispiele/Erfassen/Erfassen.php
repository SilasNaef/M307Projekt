<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
    </title>
    <?php include('ScriptCSSLink.php'); ?>
  </head>
  <body>
    <!--GESAMTE LOGIK AUSGELAGERT-->
    <?php include('ErfassenPHP.php'); ?>
    <section class="container">
      <div class="row">
        <h1>Neuen Datensatz anlegen</h1>
        <div class="col-md-12">
          <form action="Erfassen.php" method="post">
            <label for="UserVorname">UserVorname:</label>
            <input type="text" name="UserVorname" class="form-control"/>
            <br>
            <label for="UserNachname">EMail:</label>
            <input type="text" name="UserNachname" class="form-control"/>
            <br>
            <label for="ErfassDatum">Erfassdatum:</label>
            <input type="date" name="ErfassDatum" class="form-control"/>
            <br>
            <label for="Schaden">Schaden:</label>
            <textarea class="form-control" name="Schaden" rows="3"></textarea>
            <br>
            <label for="Loesung">Loesung:</label>
            <textarea class="form-control" name="Loesung" rows="3" ></textarea>
            <br>
            <button type="submit" value="absenden" class="form-control btn btn-default">Query Ausführen</button>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
          </div>
        </div>
      </section>
  </body>
</html>
