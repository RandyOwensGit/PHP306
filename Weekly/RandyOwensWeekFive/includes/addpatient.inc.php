<?php

   $root = '../../../';
   include_once $root.'Weekly/RandyOwensWeekFive/includes/dbh.inc.php';

   // POST values for database columns
   $name = $_POST['name'];
   $age = $_POST['age'];
   $address = $_POST['address'];
   $marital_status = $_POST['marital_status'];

   // sql inset statement
   $sql = "INSERT 
      INTO patients (name, age, address, marital_status)
      VALUES ('$name', '$age', '$address', '$marital_status');";

   // query database
   mysqli_query($connection, $sql);

   header("Location: ".$root."Weekly/RandyOwensWeekFive/addPatient.php");

?>
