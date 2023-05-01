<!-- Header Import -->
<?php

   $root = '../../';
   include($root . 'include/header.php');

?>

<div>
   <h2>Landscape Billing - Add Customer Record</h2>
</div>

<!-- Form to Add new Patient into Database patients Table -->
<div class="row mx-auto col-10 col-md-8 col-lg-6" style="margin-top: 75px;">
   <form action="./include/dbinsert.inc.php" method="POST">

      <!-- Hidden Input 'table' -> Table Name from DB -->
      <input type="hidden" name="table" value="customers" />

      <!-- Hidden Input for URL -> Will return to URL -->
      <input type="hidden" name="URL" value="Weekly/RandyOwensWeekSeven/sendBill.php" />
      
      <div class="row mb-4">
         <!-- Customer First Name Input -->
         <div class="col">
            <div class="form-outline">
               <input name="customer_F_Name" type="text" id="customer_F_Name" class="form-control" required />
               <label class="form-label" for="customer_F_Name">First Name</label>
            </div>
         </div> <!-- END Customer First Name Input -->
         
         <!-- Customer Last Name Input -->
         <div class="col">
            <div class="form-outline">
               <input name="customer_L_Name" type="text" id="customer_L_Name" class="form-control" required />
               <label class="form-label" for="customer_L_Name">Last Name</label>
            </div>
         </div> <!-- END Customer Last Name Input -->

         <!-- Customer Title Select -->
         <!-- 'Mr.', 'Mrs.', 'Ms.', 'Miss', 'Dr.' -->
         <div class="col">
            <div class="form-outline">
               <select class="form-select" aria-label="Select Customer Title" id="customer_Title" name="customer_Title" required>
                  <option select>Select Customer Title</option>
                  <option value="Mr.">Mr.</option>
                  <option value="Mrs.">Mrs.</option>
                  <option value="Ms.">Ms.</option>
                  <option value="Miss">Miss</option>
                  <option value="Dr.">Dr.</option>
               </select>
            </div>
         </div> <!-- END Customer Title Select -->
      </div>

      <!-- Street Address input -->
      <div class="form-outline">
         <input name="street_address" type="text" id="street_address" class="form-control" required />
         <label class="form-label" for="street_address">Street Address</label>
      </div><!-- END Street Address input -->

      <!-- City State Zip input -->
      <div class="form-outline">
         <input name="city_State_Zip" type="text" id="city_State_Zip" class="form-control" required />
         <label class="form-label" for="city_State_Zip">City & State & Zip</label>
      </div><!-- END City State Zip input -->

      <!-- Phone input -->
      <div class="form-outline">
         <input name="customer_Phone" type="number" id="customer_Phone" class="form-control" required />
         <label class="form-label" for="customer_Phone">Phone #</label>
      </div><!-- END Phone input -->

      <!-- Email input -->
      <div class="form-outline">
         <input name="customer_Email" type="email" id="customer_Email" class="form-control" required />
         <label class="form-label" for="customer_Email">Email</label>
      </div><!-- END Email input -->

      <!-- Submit button -->
      <button type="submit" class="btn btn-primary btn-block mb-4">
         Add Customer
      </button>

   </form>
</div>

<!-- Return Button -->
<form action="<?php echo $root; ?>Weekly/RandyOwensWeekSeven/sendBill.php" method="">
   <button type="submit" class="btn btn-primary">Return</button>
</form>

<!-- Footer Import -->
<?php
include($root . 'include/footer.php');
?>