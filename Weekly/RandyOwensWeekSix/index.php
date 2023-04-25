<!-- Header Import -->
<?php

$root = '../../';
include($root . 'include/header.php');

// If user does not have verified cookie validate login credentials
// and set verified cookie
if (!isset($_COOKIE['verified'])) {
   $username = $_POST['username'];
   $password = $_POST['password'];

   // if login credentials are incorrect send back to login page
   if ($username != "helper" || $password != "feelBetter") {
      header("Location: " . $root . "Weekly/RandyOwensWeekSix/assistantLogin.php?WrongLogin");
      exit();
   }

   // set cookie
   define("NEW_TIME", 60 * 60 * 8);

   // save 'verified' cookie
   setcookie('verified', "verified", time() + NEW_TIME, $root . '');
}

include_once $root . 'include/dbopen.inc.php';
?>

<div>

   <div class="d-flex flex-row">
      <div class="p-2">
         <h2 class="mb-3">Dashboard</h2>
      </div>

      <form action="<?php echo $root; ?>Weekly/RandyOwensWeekSix/logout.php" method="" class="p-2">
         <button type="submit" class="btn btn-primary">
            Logout
         </button>
      </form>
   </div>

   <br>

   <!-- Enter Information -->
   <div class="d-flex flex-row">
      <div>
         <h2>Add Entry: </h2>
      </div>

      <a href="<?php echo $root; ?>Weekly/RandyOwensWeekSix/addPatient.php" class="btn btn-primary navbar-btn" style="margin-left: 20px;">Add Patients</a>
      <a href="<?php echo $root; ?>Weekly/RandyOwensWeekSix/addMedDispense.php" class="btn btn-primary navbar-btn" style="margin-left: 15px;">Add Dispensed Medication Record</a>
   </div>

   <br>

   <!-- View Information -->
   <h2 class="mb-3">View Records: </h2>
   <nav class="navbar navbar-inverse">
      <div class="container-fluid">
         <form action="<?php echo $root; ?>Weekly/RandyOwensWeekSix/viewRecords.php" method="" class="navbar-header">
            <button type="submit" class="btn btn-primary navbar-btn">View ALL Records</button>
         </form>
      </div>
   </nav>

</div>

<!-- Footer Import -->
<?php
include($root . 'include/footer.php');
?>