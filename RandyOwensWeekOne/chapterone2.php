<!DOCTYPE html>

<!-- Using the Ternary Operator -->

<html>
   
   <title>Example 11.7 & 11.8</title>

   <body>

      <?php $numX = 2; $numY = 9; $numZ = 6; $numW = 3;
         $result_true = "This is true!"; $result_false= "Nope, not true!";
         $result = " ";
      ?>

      <h3>Original variables and their values:</h3>
      <p>$numW: <?php print("$numW"); ?> <br />
      $numX: <?php print("$numX"); ?> <br />
      $numY: <?php print("$numY"); ?> <br />
      $numZ: <?php print("$numZ"); ?> <br />
      $result_true: <?php print("$result_true"); ?> <br />
      $result_false: <?php print("$result_false"); ?> </p>
      <hr />
      
      <h3>Using the conditional operator:</h3>
      <p>Check to see if $numX and $numY are the same.<br /> 
      If they are, the output will be $result_true.<br />
      If they are not, the outwill be $result_false. <br />
      <?php $result = ($numX == $numY) ? ($result_true) : ($result_false); print($result); ?> </p>

      <p>Check to see if $numZ is the same as ($numX * $numW). <br />
      If they are, the output will be $result_true. <br />
      If not, the output will be $result_false. <br />
      <?php $result = ($numZ == ($numX * $numW)) ? ($result_true) : ($result_false); print($result); ?> </p>

   </body>

</html>