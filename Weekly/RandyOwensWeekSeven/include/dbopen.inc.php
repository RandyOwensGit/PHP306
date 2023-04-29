<?php 

   /* Database Connections */

   // database properties
   $dbServerName = "localhost";
   $dbName = "landscape";
   
   $dbUsername = "helper";
   $dbPassword = "feelBetter";

   // connect to database w/properties
   $connection = mysqli_connect(
      $dbServerName, $dbUsername, $dbPassword, $dbName
   );

?>