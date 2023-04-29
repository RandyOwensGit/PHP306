<!-- Header Import -->
<?php
$root = '../../';
include($root . 'include/header.php');

include_once './include/dbopen.inc.php';
?>


<div>

   <h2>Landscape ~ Billing</h2>

   <?php

   // sql statement to select all columns & rows
   $sql = "SELECT * FROM customers;";

   // query database
   $result = mysqli_query($connection, $sql);

   if (!($result)) {
      echo '<div>No Data Found</div>';
   } else {

      // Check for database result
      $resultCheck = mysqli_num_rows($result);
      if ($resultCheck > 0) {

         // Build HTML Table & Headers to display results
         echo '
            <table class="table">
               <thead>
                  <tr>
                     <th>ID #</th>
                     <th>Title</th>
                     <th>Name</th>
                     <th>Phone</th>
                     <th>Email</th>
                     <th>Generate Report</th>
                  </tr>
               </thead>

               <tbody>
         ';

         // while data available
         // each row into temp $row variable
         while ($row = mysqli_fetch_assoc($result)) {
            // display as html rows
            echo '
               <tr>
                  <td>' . $row["customer_ID"] . '</td>
                  <td>' . $row["customer_Title"] . '</td>
                  <td>' . $row["customer_L_Name"] . ', ' . $row["customer_F_Name"] . '</td>
                  <td>' . $row["customer_Phone"] . '</td>
                  <td>' . $row["customer_Email"] . '</td>
                  <td>
                     <a 
                        href="<?php echo $root; ?>Weekly/RandyOwensWeekSeven/addBill.php" 
                        class="btn btn-primary navbar-btn" 
                        style="margin-left: 15px;"
                     >
                        Generate Report
                     </a>
                  </td>
               </tr>
            ';
         }

         // Close HTML Table
         echo '
               </tbody>
            </table>
         ';
      }
   }
   ?>

</div>

<!-- Button to Return -->
<form action="<?php echo $root; ?>Weekly/RandyOwensWeekSeven/sendBill.php" method="">
   <button type="submit" class="btn btn-primary">Back</button>
</form>

<!-- Footer Import -->
<?php
include($root . 'include/footer.php');
?>