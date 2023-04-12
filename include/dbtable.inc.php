<?php 
   /** 
    * query database table from parameter
    */


   function queryDbForTable($tableName) {

      // open db connection
      $root = '../';
      include_once $root.'include/dbopen.inc.php';

      // select statement
      $sqlQuery = "SELECT * FROM ".$tableName.";";

      // query database
      $result = mysqli_query($connection, $sqlQuery);

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

?>