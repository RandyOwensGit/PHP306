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
   <h3 class="mb-3">Dashboard</h2>
      <!-- Logout -->
      <form action="<?php echo $root; ?>Weekly/RandyOwensWeekSix/logout.php" method="" style="margin-top: 40px;">
         <button type="submit" class="btn btn-primary">Logout</button>
      </form>


      <br>
      <!-- Search Patient-->
      <h2 class="mb-3">Search Patient... Soon</h2>

      <br><br><br>
      <!-- Enter Information -->
      <h2 class="mb-3">Add Entry</h2>
      <nav class="navbar navbar-inverse">
         <div class="container-fluid">
            <div class="navbar-header">
               <a href="<?php echo $root; ?>Weekly/RandyOwensWeekSix/addPatient.php" class="btn btn-primary navbar-btn" style="margin-left: 20px;">Add Patients</a>
               <a href="#" class="btn btn-primary navbar-btn" style="margin-left: 15px;">Add Dispensed Medication Record</a>
               <a href="#" class="btn btn-primary navbar-btn" style="margin-left: 15px;">Add Bill Record</a>
               <a href="#" class="btn btn-primary navbar-btn" style="margin-left: 15px;">Add Payment Record</a>
            </div>
         </div>
      </nav>

      <br><br><br>
      <!-- View Information -->
      <nav class="navbar navbar-inverse">
         <div class="container-fluid">
            <form action="<?php echo $root; ?>Weekly/RandyOwensWeekSix/viewRecords.php" method="" class="navbar-header" style="margin-left: 20px;">
               <button type="submit" class="btn btn-primary navbar-btn">View ALL Records</button>
            </form>
         </div>
      </nav>

</div>

<!-- Footer Import -->
<?php
include($root . 'include/footer.php');
?>