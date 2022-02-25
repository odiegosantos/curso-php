<html>

<body>
  <?php
  $num = 4500;
  function test()
  {
    echo $GLOBALS["num"] . "</br>";
    $GLOBALS["num"]++;
  }
  test();
  echo $num;
  ?>
</body>

</html>