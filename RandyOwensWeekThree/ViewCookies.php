<!-- Header Import -->
<?php include('include/header.php'); ?>

<h2>
   Saved Cookies:
</h2>

<!-- Read Cookie -->
<?php
   foreach ($_COOKIE as $key => $value) {

      // print all $key values besides PHPSESSID
      if(!($key == "PHPSESSID")) {
         // capitalize first character of $key
         $key = ucfirst($key);

         // print cookie k,v pair
         print("<p>$key: $value</p>");

      }

   }
?>

<!-- Button to return to index.php -->
<p><a href="index.php" class="viewCookies">
   Return
</a></p>

<!-- Footer Import -->
<?php include('include/footer.php'); ?>