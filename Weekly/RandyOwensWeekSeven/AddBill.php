<!-- Header Import -->
<?php

$root = '../../';
include($root . 'include/header.php');

?>

<div>
   <h2>Landscape Billing - Add Billing</h2>
</div>

<!-- Form to Add new Patient into Database patients Table -->
<div class="row mx-auto col-10 col-md-8 col-lg-6" style="margin-top: 75px;">
   <form action="./include/dbinsert.inc.php" method="POST">

      <!-- Hidden Input 'table' -> Table Name from DB -->
      <input type="hidden" name="table" value="billing" />

      <!-- Hidden Input for URL -> Will return to URL -->
      <input type="hidden" name="URL" value="Weekly/RandyOwensWeekSeven/sendBill.php" />

      <div class="row mb-4">
         <!-- Customer ID Input -->
         <div class="col">
            <div class="form-outline">
               <input name="customer_ID" type="number" id="customer_ID" class="form-control" required />
               <label class="form-label" for="customer_F_Name">Customer ID #</label>
            </div>
         </div> <!-- END Customer ID Input -->

         <!-- Customer Last Name Input -->
         <div class="col">
            <div class="form-outline">
               <input name="customer_L_Name" type="text" id="customer_L_Name" class="form-control" required />
               <label class="form-label" for="customer_L_Name">Last Name</label>
            </div>
         </div> <!-- END Customer Last Name Input -->

         <!-- Bill ID Input -->
         <div class="col">
            <div class="form-outline">
               <input name="customer_Bill" type="number" id="customer_Bill" class="form-control" required />
               <label class="form-label" for="customer_Bill">Bill ID #</label>
            </div>
         </div> <!-- END Bill ID Input -->
      </div>

      <!-- Service input -->
      <div class="form-outline">
         <input name="service" type="text" id="service" class="form-control" required />
         <label class="form-label" for="service">Service</label>
      </div><!-- END Service input -->

      <div class="row mb-4">
         <div class="col">
            <!-- Amount Paid input -->
            <div class="form-outline">
               <input name="amt_paid" type="number" id="amt_paid" class="form-control" required />
               <label class="form-label" for="amt_paid">Amount Paid</label>
            </div><!-- END Amount Paid input -->
         </div>

         <div class="col">
            <!-- Billing Date Date -->
            <div class="form-outline">
               <input name="bill_date" type="date" id="bill_date" class="form-control" required />
               <label class="form-label" for="bill_date">Bill Date</label>
            </div><!-- END Billing Date Date -->
         </div>

         <div class="col">
            <!-- Date Paid Date -->
            <div class="form-outline">
               <input name="date_paid" type="date" id="date_paid" class="form-control" required />
               <label class="form-label" for="date_paid">Bill Paid Date</label>
            </div><!-- END Date Paid Date -->
         </div>
      </div>

      <!-- Submit button -->
      <button type="submit" class="btn btn-primary btn-block mb-4">
         Add Bill Record
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