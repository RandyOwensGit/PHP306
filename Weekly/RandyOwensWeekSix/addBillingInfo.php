<!-- Header Import -->
<?php

   $root = '../../';
   include($root.'include/header.php');

   echo '<script>console.log("Top of addMedDispense"); </script>';

   // Check if foreign ids are valid -- patient_id && dispense_id
   // check if submit has been entered
   if (isset($_POST['submit'])) {
      // select patient_id by this key
      

      // if patient_id is null then patient_id is invalid

      // select dispense_id by this key

      // if dispense_id is null then dispense_id is invalid
   }

?>

<div>
   <h2>doctorWho Database - Add Billing Record</h2>
</div>


<!-- Form to Add new Patient into Database patients Table -->
<div class="row mx-auto col-10 col-md-8 col-lg-6" style="margin-top: 75px;">
   <form action="<?php echo $root; ?>include/dbinsert.inc.php" method="POST">

      <!-- Hidden Input 'table' -->
      <input type="hidden" name="table" value="billing_info" />

      <div class="row mb-4">
         <!-- Amount Billed Input -->
         <div class="col">
            <div class="form-outline">
               <input name="amount_billed" type="number" id="medication" class="form-control" required  />
               <label class="form-label" for="medication">Amount Billed</label>
            </div>
         </div> <!-- END Amount Billed Input -->

         <!-- Amount Paid Input -->
         <div class="col">
            <div class="form-outline">
               <input name="amount_paid" type="number" id="quantity" class="form-control" required  />
               <label class="form-label" for="quantity">Amount Paid</label>
            </div>
         </div> <!-- END Amount Paid Input -->
      </div>

      <!-- Date Issued input -->
      <div class="form-outline mb-4">
         <input name="date_issued" type="date" id="date" class="form-control" required
                min="2023-01-01" max="2023-12-31"
         />
         <label class="form-label" for="date">Date Issued</label>
      </div> <!-- END Date Issued input -->

      <!-- Date Paid input -->
      <div class="form-outline mb-4">
         <input name="date_issued" type="date" id="date" class="form-control" required
                min="2023-01-01" max="2023-12-31"
         />
         <label class="form-label" for="date">Date Fully Paid</label>
      </div> <!-- END Date Paid input -->

      <!-- Patient_ID input -->
      <div class="form-outline mb-4">
         <input name="patient_id" type="number" id="patient_id" class="form-control" required />
         <label class="form-label" for="patient_id">Patient ID</label>
      </div> <!-- END Patient_ID input -->

      <!-- Patient_ID input -->
      <div class="form-outline mb-4">
         <input name="dispense_id" type="number" id="patient_id" class="form-control" required />
         <label class="form-label" for="patient_id">Medication Dispensed ID</label>
      </div> <!-- END Patient_ID input -->

      <!-- Submit button -->
      <button type="submit" class="btn btn-primary btn-block mb-4">
         Add Bill Record
      </button>

   </form>
</div>

<!-- Button to View Patients -->
<form action="<?php echo $root; ?>Weekly/RandyOwensWeekSix/index.php" method="">
   <button type="submit" class="btn btn-primary">Dashboard</button>
</form>

<!-- Footer Import -->
<?php
include($root . 'include/footer.php');
?>