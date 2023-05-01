<?php

   // Build display for billing not found error
   function noBillingFound() {
      
      echo '<script>console.log("Billing Data Not Found."); </script>';

      // Display Bill Not Found to client
      echo 
         '
            <div 
               style="margin-top: 20px; margin-left: 20px;"
            >
               <h2>
                  Bill Not Found for Customer.
               </h2>
               <a 
                  href="./sendBill.php" 
                  class="btn btn-primary navbar-btn" 
                  style="margin-top: 20px;"
               >
                  Return
               </a>
            </div>
         '
      ;

      return;

   }

   // Build display for customer not found error
   function noCustomerFound() {

      echo '<script>console.log("Customer Data Not Found."); </script>';

      // Display Bill Not Found to client
      echo 
         '
            <div 
               style="margin-top: 20px; margin-left: 20px;"
            >
               <h2>
                  No Customer Found for ID.
               </h2>
               <a 
                  href="./sendBill.php" 
                  class="btn btn-primary navbar-btn" 
                  style="margin-top: 20px;"
               >
                  Return
               </a>
            </div>
         '
      ;

      return;

   }

   function billAlreadyPaid() {

      echo '<script>console.log("Bill Already Paid."); </script>';

      // Bill Paid Display
      echo 
         '
            <div 
               style="margin-top: 20px; margin-left: 20px;"
            >
               <h2>
                  Customer has already paid their bill -- Thank You Email Sent.
               </h2>
               <a 
                  href="./sendBill.php" 
                  class="btn btn-primary navbar-btn" 
                  style="margin-top: 20px;"
               >
                  Return
               </a>
            </div>
         '
      ;

      return;

   }

   function customerThankYouEmail(
      $customerLastName, $customerTitle, $customerEmail, 
      $billingService, $billingDate, $billingTotal
   ) {

      // Remove no Email Server error text
      ini_set('display_errors', 0);

      // Generate Header
      $header = "From: LeeLandscape@lee.com";

      // Generate Title
      $emailTitle = "Landscape Service: ".$billingService."";

      // Generate Message Body
      $emailBody = "Dear ".$customerTitle." ".$customerLastName."\n\n";
      $emailBody .= "Owner Lee thanks you greatly for your payment of ".$billingTotal."";
      $emailBody .= "for the ".$billingService." service on ".$billingDate.". The opportunity for continued business would be highly appreciated."; 

      $emailBody .= "\n\n\nSincerely, \n\tLee's Landscape Business.";

      // send email
      mail($customerEmail, $emailTitle, $emailBody, $header);

      return;

   }

   function buildAndSendBillingEmail(
      $customerLastName, $customerTitle, $customerEmail,
      $billingService, $billingDate, $billingTotal, $billingRemainder
   ) {

      // Remove no Email Server error text
      ini_set('display_errors', 0);

      // Generate Header
      $header = "From: LeeLandscape@lee.com";

      // Generate Title
      $emailTitle = "Landscape Service: Payment Required.";
      
      // Generate Message Body
      $emailBody = "Dear ".$customerTitle." ".$customerLastName."\n\n";
      $emailBody .= "Your service of ".$billingService." on ".$billingDate.", still requires a payment ";
      $emailBody .= "of ".$billingRemainder." from total ".$billingTotal.".";
      $emailBody .= "\nWe Thank you for a timely payment.";

      $emailBody .= "\n\n\nSincerely, \n\tLee's Landscape Business.";
      
      // send email
      mail($customerEmail, $emailTitle, $emailBody, $header);
      
      return;

   }
