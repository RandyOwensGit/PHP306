<?php

   // Query customers Table with ID 
   // return db row or  false
   function queryCustomersWithId($customerId) {

      // open db connection
      include './include/dbopen.inc.php';

      // build query select statement
      $query = 'SELECT * FROM customers WHERE customer_ID = '.$customerId.';';

      // query database
      $result = mysqli_query($connection, $query);

      // determine if result is greater than 0
      $resultCheck = mysqli_num_rows($result);
      if ($resultCheck > 0) {
         return mysqli_fetch_assoc($result);
      }

      // close db connection
      include_once './include/dbclose.inc.php';

      return false;
   }

   // Query billing Table with ID 
   // return db row or false
   function queryBillingWithCustomerId($customerId) {

      // open db connection
      include './include/dbopen.inc.php';

      // build query select statement
      $query = 'SELECT * FROM billing WHERE customer_ID = '.$customerId.';';

      // query database
      $result = mysqli_query($connection, $query);

      // determine if result is greater than 0
      $resultCheck = mysqli_num_rows($result);
      if ($resultCheck > 0) {
         return mysqli_fetch_assoc($result);
      }

      // close db connection
      include_once './include/dbclose.inc.php';

      // false if there are no assigned billings to the customer ID
      return false;

   }

?>