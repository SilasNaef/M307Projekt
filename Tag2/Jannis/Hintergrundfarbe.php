<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
  <section class="container">
    <div class="row">
      <h1>Mein Formular</h1>
      <div class="col-md-12">
        <form action="Hintergrundfarbe.php" method="post">s
          <select name="farbe" class="form-control" selected="<?=@$_POST['farbe']?>">
              <option value="Rot">Rot</option>
              <option value="Blau">Blau</option>
              <option value="Gelb">Gelb</option>
              <option value="Grün">Grün</option>
              <option value="">-</option>
          </select>
          <br>
          <button type="submit" value="absenden" class="form-control btn btn-default">Absenden</button>
        </div>
      </div>
      <div class="col-md-12">
        <?php
        switch (@$_POST['farbe']) {
          case 'Rot':
          echo "<body style='background-color:red'>";
          break;
          case 'Blau':
          echo "<body style='background-color:blue'>";
          break;
          case 'Gelb':
          echo "<body style='background-color:yellow'>";
          break;
          case 'Grün':
          echo "<body style='background-color:green'>";
          break;
          default:
          echo "<body style='background-color:white'>";
          break;
        }
        ?>
      </div>
    </section>
  </body>
  </html>
