<?php

   /**
   * Use POST values to build sql INSERT statement
   */

   echo '<script>console.log("Inside the dbinsert."); </script>';

   // open db connection
   $root = '../';
   include_once './dbopen.inc.php';

   // assign post values
   $tableValues = $_POST;

   // build INSERT statement
   // INSERT INTO table (columns) VALUES (values);
   $sqlInsert = "INSERT INTO ".$tableValues['table']." (";

   // remove table name index
   unset($tableValues['table']);

   // get URL to return too
   $returnURL = $tableValues['URL'];
   unset($tableValues['URL']);
      
   // add column heads to INSERT statement
   $lastElement = end($tableValues);
   foreach ($tableValues as $key => $value) {
      if ($value != $lastElement) {
         $sqlInsert = $sqlInsert.$key.", ";

      } else {
         $sqlInsert = $sqlInsert.$key;
      }
   }

   // add values to INSERT statement
   $sqlInsert = $sqlInsert.") VALUES ('";
   foreach ($tableValues as $key => $value) {
      if ($value != $lastElement) {
         $sqlInsert = $sqlInsert.$value."', '";
      } else {
         $sqlInsert = $sqlInsert.$value."');";
      }
   }

   // log INSERT statement
   echo '<script>console.log("'.$sqlInsert.'"); </script>';

   // query database with INSERT
   $result = mysqli_query($connection, $sqlInsert);

   // return page to previous location
   // header("Location: "."../sendBill.php");

   // close db connection
   include_once './dbclose.inc.php';

?>