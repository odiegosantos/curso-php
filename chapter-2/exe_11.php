<html>

<body>
  <?php
    $vetor = array(1, 2, 3, 4);
    foreach ($vetor as $v) {
      print "The vector is $v. <br>";
    }

    $a = array("one" => 1, "two" => 2, "three" => 3);

    foreach ($a as $key => $value) {
      print "\$a[$key] => $value.<br>";
    }
  ?>

</body>

</html>