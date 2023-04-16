<!-- Header Import -->
<?php

   $root = '../../';
   include($root . 'include/header.php');

?>

<div>
   <div class="d-flex justify-content-center">
      <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST" class="p-2">
         <button type="submit" name="patients" class="btn btn-primary">
            Patient Records
         </button>
         <button type="submit" name="medication_dispense" class="btn btn-primary">
            Dispensed Records
         </button>
         <button type="submit" name="billing_info" class="btn btn-primary">
            Billing Records
         </button>
         <button type="submit" name="payments" class="btn btn-primary">
            Payment Records
         </button>
      </form>
   </div>


   <!-- Header Import -->
   <?php

      /**
       * Class to dynamically view records of passed Table name
      */

      include_once $root . 'include/dbopen.inc.php';
      include $root . 'include/dbtable.inc.php';

      // determine table selected
      if (isset($_POST['patients'])) {
         buildTableFromDb($tableName = "patients");
      } else if (isset($_POST['medication_dispense'])) {
         buildTableFromDb("medication_dispense");
      } else if (isset($_POST['billing_info'])) {
         buildTableFromDb("billing_info");
      } else if (isset($_POST['payments'])) {
         buildTableFromDb("payments");
      }

   ?>

   <?php
   function buildTableFromDb($tableName)
   {

      // get table data
      $tableData = queryDbForTable($tableName);

      echo "<h2 style='margin-top: 25px;'>View " . $tableName . "</h2>";

      if($tableData == null) {
         echo "<h3 style='margin-top: 25px;'><b>Nothing to display</b></h3>";
      }

      // check if not an empty array
      if ($tableData != null) {

         // get column names from $tableData
         $columnNames = array_keys($tableData[0]);

         // Build Table to display data
         // table header
         echo '
                  <table class="table">
                     <thead>
                        <tr>
               ';

         // iterate through $columnNames to build table header
         foreach ($columnNames as $key => $value) {
            echo '<th>' . $value . '</th>';
         }

         // finish table header -- start table body
         echo '
                        </tr>
                     </thead>
                  <tbody>   
               ';

         // iterate over each $tableData containing array
         foreach ($tableData as $key => $value) {
            // display as html rows
            echo '
                     <tr>
                  ';

            // iterate over values inside $value array
            foreach ($value as $column) {
               echo '<td>' . $column . '</td>';
            }

            echo '
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

<!-- Button to View Patients -->
<form action="<?php echo $root; ?>Weekly/RandyOwensWeekSix/index.php" method="" style="margin-top: 30px;">
   <button type="submit" class="btn btn-primary">Dashboard</button>
</form>

<!-- Footer Import -->
<?php
include($root . 'include/footer.php');
?>