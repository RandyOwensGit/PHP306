<!-- Header Import -->
<?php
   $root = '../../';
   include($root . 'include/header.php');
   include './include/functions.inc.php';

   include_once './include/dbfunctions.inc.php';

   // get POST value for customer_ID to query on
   $customerId = $_POST["customerId"];

   $billingData = queryBillingWithCustomerId($customerId);

   // check for $billingData -- 
   // If none found display return button & exit
   if (!($billingData)) {
      noBillingFound();
      exit();
   }

   $customerData = queryCustomersWithId($customerId);

   // check for $customerData
   // If none found display return button & exit
   if (!($customerData)) {
      noCustomerFound();
      exit();
   }

   // Assign variables from customers & billing Data
   $customerEmail = $customerData["customer_Email"];
   $customerTitle = $customerData["customer_Title"];
   $customerLastName = $customerData["customer_L_Name"];

   $billingService = $billingData["service"];
   $billingTotal = $billingData["customer_bill"];
   $billingPaid = $billingData["amt_paid"];
   $billingDate = substr($billingData["bill_date"], 0, 10);


   // Determine if bill has already been paid
   // Send thank you email
   if ($billingTotal <= $billingPaid) {
      billAlreadyPaid();

      // generate and send thank you email
      customerThankYouEmail(
         $customerLastName, $customerTitle, $customerEmail,
         $billingService, $billingDate, $billingTotal
      );

      exit();
   }

   // Calculate remaining bill total to be paid
   $remainder = $billingTotal - $billingPaid;

   // Send Billing Email
   buildAndSendBillingEmail(
      $customerLastName, $customerTitle, $customerEmail,
      $billingService, $billingDate, $billingTotal, $remainder
   );

?>


<div>

   <div style="margin-top: 25px; margin-left: 20px;">
   
      <h2>Email Bill Report Sent</h2>
      
      <p><i><?php echo 'Customer: '.$customerTitle.' '.$customerLastName.''?></i></p>
      <p><?php echo 'Bill: '.$billingPaid.' of '.$billingTotal.' Paid.'?></p>
      <p><?php echo 'Service: '.$billingService.' on '.$billingDate.''?></p>

   </div>

</div>

<!-- Button to Return -->
<form action="<?php echo $root; ?>Weekly/RandyOwensWeekSeven/sendBill.php" method="">
   <button type="submit" class="btn btn-primary">Back</button>
</form>

<!-- Footer Import -->
<?php
include($root . 'include/footer.php');
?>