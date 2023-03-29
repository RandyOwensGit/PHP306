<?php
   session_start();

   # Save values from POST
   $firstName = ucfirst($_POST['firstName']);
   $lastName = ucfirst($_POST['lastName']);

?>

<html>
   <head>
      <title>Welcome</title>
      <link rel="stylesheet" href="./style.css">
   </head>

   <body>

      <div>

         <h2>You have logged in!</h2>
         <h3>Welcome, <?php echo "$firstName $lastName!" ?></h3>

         <!-- Not Required - Feature Guess -->
         <button class="button" type="button" action="index.php">BACK</button>

      </div>

   </body>
</html>