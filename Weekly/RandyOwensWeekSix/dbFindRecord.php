<?php

   // -- Find patient by id -- 
   Function findPatientById($patientId) {
      echo '<script>console.log("inside findPatientById"); </script>';
      
      // open db connection
      // $root = '../';
      include_once 'C:/xampp/htdocs/projects/PHP306/include/dbopen.inc.php';

      // select statement
      $sql = "SELECT * FROM patients WHERE patient_id=".$patientId.";";

      // query database
      $result = mysqli_query($connection, $sql);

      // check if empty
      if (mysqli_num_rows($result) == 0) {
         return null;
      } else {
         return $result;
      }

   }


   // -- Find medication dispense by id --
   Function findMedById($medId) {
      // open db connection
      // $root = '../';
      include_once 'C:/xampp/htdocs/projects/PHP306/include/dbopen.inc.php';

      // select statement
      $sql = "SELECT * FROM " .$tableName. ";";

      // query database
      $result = mysqli_query($connection, $sql);
   }


   // -- Find Bill Info by id -- 
   Function findBillById($billId) {
      // open db connection
      // $root = '../';
      include_once 'C:/xampp/htdocs/projects/PHP306/include/dbopen.inc.php';

      // select statement
      $sql = "SELECT * FROM " .$tableName. ";";

      // query database
      $result = mysqli_query($connection, $sql);
   }


   // -- Find Payment by id --
   Function findPaymentById($paymentId) {
      // open db connection
      // $root = '../';
      include_once 'C:/xampp/htdocs/projects/PHP306/include/dbopen.inc.php';

      // select statement
      $sql = "SELECT * FROM " .$tableName. ";";

      // query database
      $result = mysqli_query($connection, $sql);
   }

?>