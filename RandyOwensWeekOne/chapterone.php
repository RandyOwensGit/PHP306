<!DOCTYPe html>

<html>
   
   <?php 
      $name = "Jackie";
      $numStudents = 47;
      $costNecklaceA = 23.95;
      $studentID = "0001";
   ?>

   <head>
      <title>Example 11.3</title>
   </head>

   <body>

      <h3>Original variables and their values:</h3>
      <p>The value of the variable $name is <?php print("$name"); ?>.</p>
      <p>The value of the variable $studentID is <?php print("$studentID"); ?>.</p>
      <p>The value of the variable $numStudents is <?php print("$numStudents"); ?>.</p>
      <p>The value of the variable $costNecklaceA is <?php print("$costNecklaceA"); ?>.</p>

      <h3>We can find out the data type of a variable:</h3>
      <p>The data type of the variable, $costNecklaceA is <?php print gettype($costNecklaceA); ?>.</p>

      <h3>But we can convert the values to other data types:</h3>
      <p>The value of the variable, $costNecklaceA, converted to an integer is
         <?php settype($costNecklaceA, "integer"); print($costNecklaceA); ?> </p>

      <p>So the data type of the variable, $costNecklaceA is now
         <?php print gettype($costNecklaceA); ?></p>

   </body>

</html>