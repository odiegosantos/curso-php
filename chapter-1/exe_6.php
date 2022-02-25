<html>
  <body>
    <?php 
      $num = 4500;
      function test ()
      {
        global $num;
        $num += 5;
        echo $num . "</br>";
      }
      echo $num . "</br>";
      test();
    ?>
  </body>
</html>