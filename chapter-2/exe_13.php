<html>

<body>
  <?php
    $vetor = array(1, 3, 5, 8, 11, 12, 15, 20);
    for ($i = 0; $i < sizeof($vetor); $i++) {
      if ($vetor[$i] % 2 != 0)     
      {
        continue;
      }

      $num_pair = $vetor[$i];
      echo "The number $num_pair is pair. <br>";
    }
  ?>
</body>

</html>