<html>
<head>
  <title>Titel</title>
</head>

<body>
  <p>Das ist eine PHP Seite.</p>


    <?php



    $max = 1000;
    function isPrime($prime){
      $maxtest = sqrt($prime);
      for ($i = 2; $i <= $maxtest; ++$i){
        if($prime % $i == 0){
          return false;
        }
      }
      return true;
    }

    for ($i=0; $i < $max; $i++){
      if(isPrime($i)){
        echo $i . ", ";
      }
    }
    ?>

</body>
</html>
