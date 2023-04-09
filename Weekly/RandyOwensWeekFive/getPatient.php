<!-- Header Import -->
<?php
   $root = '../../';
   include($root . 'include/header.php');

   include_once $root.'Weekly/RandyOwensWeekFive/includes/dbh.inc.php';
?>


<div>
   <h2>doctorWho Database - View Patient</h2>

   <?php

      // sql statement to select all columns & rows
      $sql = "SELECT * FROM patients;";

      // query database
      $result = mysqli_query($connection, $sql);

      // Check for database result
      $resultCheck = mysqli_num_rows($result);
      if ($resultCheck > 0) {

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
<form action="<?php echo $root; ?>Weekly/RandyOwensWeekFive/assistantLogin.php" method="">
   <button type="submit" class="btn btn-primary">View Patients</button>
</form>

<!-- Footer Import -->
<?php 
   include($root.'include/footer.php');
?>
