<?php

   $root = '../../';

   // delete cookie
   if (isset($_COOKIE['verified'])) {
      setcookie("verified", FALSE);
   }

   header("Location: ".$root."Weekly/RandyOwensWeekSix/login.php");

?>