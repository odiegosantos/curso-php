<html>

<body>
  <?php
    $i = 0;
    $k = 0;
    while ($k < 10) {
      $i++;
      $k++;
      while ($i < 20) {
        if ($i == 10) {
          echo "Ending the first while...<br>";
          break;
          echo " this line is not printed!!!";
        } elseif ($i == 15) {
          echo "Ending two whiles...";
          break 2;
        }
        $i++;
      }
    }
  ?>
</body>

</html>