<html>

<body>
  <?php
    $vt[0][0] = "element00";
    $vt[0][1] = "element01";
    $vt[1][0] = "element10";
    $vt[1][1] = "element11";

    for ($i = 0; $i < 2; $i++) {
      for ($k = 0; $k < 2; $k++) {
        echo "The element position $i,$k is ";
        echo $vt[$i][$k] . "<br>";
      }
  }
  ?>
</body>

</html>