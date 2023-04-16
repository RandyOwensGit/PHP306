<?php

/** 
 * query database table from parameter
 */

function queryDbForTable($tableName) {

   // open db connection
   // $root = '../';
   include 'C:/xampp/htdocs/projects/PHP306/include/dbopen.inc.php';

   // select statement
   $sql = "SELECT * FROM " .$tableName. ";";

   // query database
   $result = mysqli_query($connection, $sql);

   // determine database result 
   $resultCheck = mysqli_num_rows($result);

   $tableData = array();
   if ($resultCheck > 0) {

      // populate $tableData w/ Table query
      while ($row = mysqli_fetch_assoc($result)) {
         $tableData[] = $row;
      }
   }

   return $tableData;
}
