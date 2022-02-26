<html>

<body>
  <?php
    $test1 = 10;
    $test2 = 10;
    $total = ($test1 + $test2) / 2;
    if ($total <= 3)
      $situation = "No";
    elseif ($total < 5)
      $situation = "Maybe";
    elseif ($total < 7)
      $situation = "Middle";
    elseif ($total < 9)
      $situation = "Good";
    else
      $situation = "Excellent";

    echo "Situation: $total  $situation";
  ?>
</body>

</html>