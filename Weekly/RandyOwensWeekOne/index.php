<!-- Header Import -->
<?php 
   $root = '../../';
   include($root.'include/header.php');
?>

<form method="post" action="<?php echo $root; ?>/Weekly/RandyOwensWeekOne/welcome.php" class="login-form">
   <input type="text" name="firstName" placeholder="First Name" />
   <input type="text" name="lastName" placeholder="Last Name" />
   <button type="submit">Welcome Login</button>
</form>

<!-- Footer Import -->
<?php include($root.'include/footer.php'); ?>