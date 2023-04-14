<!-- Header Import -->
<?php

   $root = '../../';
   include($root.'include/header.php');

   // If user does not have verified cookie validate login credentials
   // and set verified cookie
   if (!isset($_COOKIE['verified'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];

      // if login credentials are incorrect send back to login page
      if ($username != "helper" || $password != "feelBetter") {
         header("Location: ".$root."Weekly/RandyOwensWeekSix/assistantLogin.php?WrongLogin");
         exit();
      } 

      // set cookie
      define("NEW_TIME", 60 * 60 * 8);

      // save 'verified' cookie
      setcookie('verified', "verified", time() + NEW_TIME, $root.'');
   }

   include_once $root.'include/dbopen.inc.php';
?>


<div>
   <h2 class="mb-3">Dashboard</h2>

   <br><br><br>
   <!-- Enter Information -->
   <h2 class="mb-3">Add Entry</h2>
   <nav class="navbar navbar-inverse">
      <div class="container-fluid">
         <div class="navbar-header">
            <a href="#" class="btn btn-primary navbar-btn" style="margin-left: 20px;">Add Patients</a>
            <a href="#" class="btn btn-primary navbar-btn" style="margin-left: 15px;">Add Dispensed Medication Record</a>
            <a href="#" class="btn btn-primary navbar-btn" style="margin-left: 15px;">Add Bill Record</a>
            <a href="#" class="btn btn-primary navbar-btn" style="margin-left: 15px;">Add Payment Record</a>
         </div>
      </div>
   </nav>

   <br><br><br>
   <!-- View Information -->
   <h2 class="mb-3">View Records</h2>
   <nav class="navbar navbar-inverse">
      <div class="container-fluid">
         <div class="navbar-header">
            <a href="#" class="btn btn-primary navbar-btn" style="margin-left: 20px;">View Patients</a>
            <a href="#" class="btn btn-primary navbar-btn" style="margin-left: 15px;">View Dispensed Medication Records</a>
            <a href="#" class="btn btn-primary navbar-btn" style="margin-left: 15px;">View Bill Record</a>
            <a href="#" class="btn btn-primary navbar-btn" style="margin-left: 15px;">View Payment Record</a>
         </div>
      </div>
   </nav>

   <br><br><br>
   <!-- Logout -->
   <form action="<?php echo $root; ?>Weekly/RandyOwensWeekFive/assistantLogout.php" method="" style="margin-top: 40px;">
      <button type="submit" class="btn btn-primary">Logout</button>
   </form>

</div>

<!-- Footer Import -->
<?php
include($root . 'include/footer.php');
?>