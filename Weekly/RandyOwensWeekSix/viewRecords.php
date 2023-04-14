<!-- Header Import -->
<?php

   /**
    * Class to dynamically view records of passed Table name
    */

   $root = '../../';
   include($root . 'include/header.php');

   include_once $root . 'include/dbopen.inc.php';
   include $root . 'include/dbtable.inc.php';

   echo print_r($_POST);

   // check if Table has been selected -- build table
   // if (isset($_POST[0])) {
   //    $tableName = $_POST['tableName'];
   //    $tableData = queryDbForTable($tableName);

   //    buildDbTable($tableName, $tableData);
   // }

   $tableName = "medication_dispensed";
   $tableData = queryDbForTable($tableName);

   buildDbTable($tableName, $tableData );

?>

<div>

   <div class="d-flex justify-content-center">
      <form action="<?php echo $root; ?>Weekly/RandyOwensWeekSix/viewRecords.php" method="POST" class="p-2">
         <button type="submit" name="tableName" class="btn btn-primary">
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

   <?php
      function buildDbTable($tableName, $tableData) {

         echo '<h2>View ' . $tableName . '</h2>';

         // check if not an empty array
         if ($tableData > 0) {

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
<form action="<?php echo $root; ?>Weekly/RandyOwensWeekSix/index.php" method="">
   <button type="submit" class="btn btn-primary">Dashboard</button>
</form>

<!-- Footer Import -->
<?php
include($root . 'include/footer.php');
?>