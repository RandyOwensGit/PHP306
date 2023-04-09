<!-- Header Import -->
<?php
   $root = '../../';
   include($root . 'include/header.php');
?>

<h2>
   Cookies Removed.
</h2>

<!-- Button to return to index.php -->
<p><a href="<?php echo $root; ?>Weekly/RandyOwensWeekThree/index.php">
   Return
</a></p>

<!-- Delete Cookies -->
<?php

   // iterate over all cookies and set to false
   foreach ($_COOKIE as $key => $value) {
      setcookie($key, FALSE);
   }
   
?>

<!-- Footer Import -->
<?php include($root.'include/footer.php'); ?>