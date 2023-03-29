<!-- Header Import -->
<?php include('include/header.php'); ?>

<h2>
   Cookies Removed.
</h2>

<!-- Button to return to index.php -->
<p><a href="index.php" class="viewCookies">
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
<?php include('include/footer.php'); ?>