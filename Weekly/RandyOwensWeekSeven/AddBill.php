<!-- Header Import -->
<?php

   $root = '../../';
   include($root.'include/header.php');

?>

<div>
   <h2>doctorWho Database - Add Dispensed Medication</h2>
   <h5>Failed Insert will be notified with URL change</h5>
</div>

<!-- Form to Add new Patient into Database patients Table -->
<div class="row mx-auto col-10 col-md-8 col-lg-6" style="margin-top: 75px;">
   <form action="<?php echo $root; ?>include/dbinsert.inc.php" method="POST">

      <!-- Hidden Input 'table' -->
      <input type="hidden" name="table" value="medication_dispense" />

      <!-- Hidden Input for URL -->
      <input type="hidden" name="URL" value="Weekly/RandyOwensWeekSix/addMedDispense.php" />

      <div class="row mb-4">
         <!-- Medication Input -->
         <div class="col">
            <div class="form-outline">
               <input name="medication" type="text" id="medication" class="form-control" required  />
               <label class="form-label" for="medication">Medication</label>
            </div>
         </div> <!-- END Medication Input -->

         <!-- Quantity Input -->
         <div class="col">
            <div class="form-outline">
               <input name="quantity" type="number" id="quantity" class="form-control" required  />
               <label class="form-label" for="quantity">Quantity</label>
            </div>
         </div> <!-- END Quantity Input -->
      </div>

      <!-- Address input -->
      <div class="form-outline mb-4">
         <input name="date" type="date" id="date" class="form-control" required
                min="2023-01-01" max="2023-12-31"
         />
         <label class="form-label" for="date">Date</label>
      </div> <!-- END Address input -->

      <!-- Patient_ID input -->
      <div class="form-outline mb-4">
         <input name="patient_id" type="number" id="patient_id" class="form-control" required />
         <label class="form-label" for="patient_id">Patient ID</label>
      </div> <!-- END Patient_ID input -->

      <!-- Submit button -->
      <button type="submit" class="btn btn-primary btn-block mb-4">
         Add Dispensed Medication
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