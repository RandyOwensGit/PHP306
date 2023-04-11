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
         header("Location: ".$root."Weekly/RandyOwensWeekFive/assistantLogin.php?WrongLogin");
         exit();
      } 

      // set cookie
      define("NEW_TIME", 60 * 60 * 8);

      // save 'verified' cookie
      setcookie('verified', "verified", time() + NEW_TIME, $root.'');
   }

   include_once $root.'Weekly/RandyOwensWeekFive/includes/dbh.inc.php';
?>

<div>
   <h2>doctorWho Database - Add Patient</h2>
</div>


<!-- Form to Add new Patient into Database patients Table -->
<div class="row mx-auto col-10 col-md-8 col-lg-6" style="margin-top: 75px;">
   <form action="<?php echo $root; ?>Weekly/RandyOwensWeekFive/includes/addpatient.inc.php" method="POST">
      <div class="row mb-4">
         <!-- Name Input -->
         <div class="col">
            <div class="form-outline">
               <input name="name" type="text" id="name" class="form-control" required  />
               <label class="form-label" for="name">Full Name</label>
            </div>
         </div> <!-- END Name Input -->

         <!-- Age Input -->
         <div class="col">
            <div class="form-outline">
               <input name="age" type="number" id="age" class="form-control" required  />
               <label class="form-label" for="age">Age</label>
            </div>
         </div> <!-- END Age Input -->
      </div>

      <!-- Address input -->
      <div class="form-outline mb-4">
         <input name="address" type="text" id="address" class="form-control" required />
         <label class="form-label" for="address">Address</label>
      </div> <!-- END Address input -->

      <!-- Marital Status Radio Group -->
      <div class="form-outline mb-4">
         <div class="form-check form-check-inline">
            <div class="form-check form-check-inline">
               <input class="form-check-input" type="radio" name="marital_status" id="marriedSelect" value="Married" required />
               <label class="form-check-label" for="marriedSelect">Married</label>
            </div>
            <div class="form-check form-check-inline">
               <input class="form-check-input" type="radio" name="marital_status" id="singleSelect" value="Single" />
               <label class="form-check-label" for="singleSelect">Single</label>
            </div>
            <div class="form-check form-check-inline">
               <input class="form-check-input" type="radio" name="marital_status" id="widowedSelect" value="Widowed" />
               <label class="form-check-label" for="widowedSelect">Widowed</label>
            </div>
            <div class="form-check form-check-inline">
               <input class="form-check-input" type="radio" name="marital_status" id="divorcedSelect" value="Divorced" />
               <label class="form-check-label" for="divorcedSelect">Divorced</label>
            </div>
            <div class="form-check form-check-inline">
               <input class="form-check-input" type="radio" name="marital_status" id="notAvailableSelect" value="N/A" />
               <label class="form-check-label" for="notAvailableSelect">N/A</label>
            </div>

         </div>
      </div> <!-- END Marital Status Radio Group -->

      <!-- Submit button -->
      <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">
         Add Patient
      </button>

   </form>
</div>

<!-- Button to View Patients -->
<form action="<?php echo $root; ?>Weekly/RandyOwensWeekFive/getPatient.php" method="">
   <button type="submit" class="btn btn-primary">View Patients</button>
</form>

<!-- Button to View Patients -->
<form action="<?php echo $root; ?>Weekly/RandyOwensWeekFive/assistantLogout.php" method="" style="margin-top: 40px;">
   <button type="submit" class="btn btn-primary">Logout</button>
</form>

<!-- Footer Import -->
<?php
include($root . 'include/footer.php');
?>