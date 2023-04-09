<?php

   // Header import
   $root = '../../';
   include($root.'include/header.php');

   session_start();

   # Save values from POST
   $firstName = ucfirst($_POST['firstName']);
   $lastName = ucfirst($_POST['lastName']);

?>

<h2>You have logged in!</h2>
<h3>Welcome, <?php echo "$firstName $lastName!" ?></h3>

<!-- Not Required - Feature Guess -->
<form method="post" action="<?php echo $root; ?>/Weekly/RandyOwensWeekOne/index.php">
   <button 
      class="button" 
      type="submit"
   >
      BACK
   </button>
</form>

<!-- Footer Import -->
<?php include($root.'/include/footer.php'); ?>