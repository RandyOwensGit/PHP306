<!-- Header Import -->
<?php
   $root = '../../';
   include($root . 'include/header.php');

   include_once $root . 'Weekly/RandyOwensWeekFive/includes/dbh.inc.php';

   // If user has valid login cookie then send to addPatient.php
   if (isset($_COOKIE['verified'])) {
      header("Location: ".$root."Weekly/RandyOwensWeekFive/addPatient.php?Verified");
      exit();
   }

?>

<div>
   <h2>doctorWho Database - Assistant Login</h2>
</div>


<!-- Form to Add new Patient into Database patients Table -->
<div class="row mx-auto col-10 col-md-8 col-lg-6" style="margin-top: 75px;">
   <form action="<?php echo $root; ?>Weekly/RandyOwensWeekFive/addPatient.php" method="POST">
      <div class="row mb-4">
         <!-- Name Input -->
         <div class="col">
            <div class="form-outline">
               <input name="username" type="text" id="username" class="form-control" required  />
               <label class="form-label" for="username">Username</label>
            </div>
         </div> <!-- END Name Input -->

         <!-- Age Input -->
         <div class="col">
            <div class="form-outline">
               <input name="password" type="text" id="password" class="form-control" required  />
               <label class="form-label" for="password">Password</label>
            </div>
         </div> <!-- END Age Input -->
      </div>

      <!-- Submit button -->
      <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">
         Login
      </button>

   </form>
</div>


<!-- Button to View Patients -->
<form action="<?php echo $root; ?>Weekly/RandyOwensWeekFive/getPatient.php" method="">
   <button type="submit" class="btn btn-primary">View Patients</button>
</form>


<!-- Footer Import -->
<?php
include($root . 'include/footer.php');
?>
