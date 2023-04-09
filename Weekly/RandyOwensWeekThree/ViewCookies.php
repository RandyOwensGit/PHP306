<!-- Header Import -->
<?php
   $root = '../../';
   include($root . 'include/header.php');
?>

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
<p><a href="<?php echo $root; ?>Weekly/RandyOwensWeekThree/index.php">
   Return
</a></p>

<!-- Footer Import -->
<?php include($root.'include/footer.php'); ?>