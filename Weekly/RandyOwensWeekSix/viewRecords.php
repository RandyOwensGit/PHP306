<!-- Header Import -->
<?php
   $root = '../../';
   include($root.'include/header.php');

   include_once $root.'include/dbopen.inc.php';
   include $root.'include/dbtable.inc.php';

   // Table name to populate page with
   $tableName = "patients";

   // get table rows as an array
   $tableData = queryDbForTable($tableName);

?>


<div>

   <?php

      echo '<h2>View '.$tableName.'</h2>';
      echo print_r($tableData);

      // check if not an empty array
      if ($tableData > 0) {

         // Build HTML Table & Headers to display results
         echo '
            <table class="table">
               <thead>
                  <tr>
                     <th>ID #</th>
                     <th>Name</th>
                     <th>Age</th>
                     <th>Address</th>
                     <th>Marital Status</th>
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
                  <td>'.$row["patient_id"].'</td>
                  <td>'.$row["name"].'</td>
                  <td>'.$row["age"].'</td>
                  <td>'.$row["address"].'</td>
                  <td>'.$row["marital_status"].'</td>
               </tr>
            ';
         }

         // Close HTML Table
         echo '
               </tbody>
            </table>
         ';

      }
   ?>

</div>

<!-- Button to View Patients -->
<form action="<?php echo $root; ?>Weekly/RandyOwensWeekSix/index.php" method="">
   <button type="submit" class="btn btn-primary">Dashboard</button>
</form>

<!-- Footer Import -->
<?php 
   include($root.'include/footer.php');
?>
