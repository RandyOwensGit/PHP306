<?php 

   // Database Connection Properties/Util

   $dbServername = "localhost";
   $dbName = "doctorwho";

   $dbUsername = "helper";
   $dbPassword = "feelBetter";

   $connection = mysqli_connect(
      $dbServername, $dbUsername, $dbPassword, $dbName
   );

?>