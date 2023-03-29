<?php

   /* Respond to GET  with List of movie titles starting with GET parameter
   Read through a .txt file and assign each line to array
   Determine and Create response for passed user input
   */

   // Read through movietitles.txt and generate an array for each line
   $file = fopen('resources/movietitles.txt', 'r');

   // read file by line
   while($line = fgets($file)) {
      // add current line to $movieTitlesList Array
      $movieTitlesList[] = $line;
   }

   // close file
   fclose($file);

   // $input parameter from GET
   $input = $_GET["input"];

   // find all hints from the array with $input
   // if $input has 0 length dont do anything
   $hint = "";
   if(strlen($input) > 0) {

      // for loop to index movieTitlesList
      for($i = 0; $i < count($movieTitlesList); $i++) {

         // create substring of current index with length of $input
         $tempTitle = substr($movieTitlesList[$i], 0, strlen($input));

         // set user input as well as movie titles to all lowercase for comparison
         if(strtolower($input) == strtolower($tempTitle)) {

            // if they are equal - add current index title to $hint String
            if($hint == "") {
               $hint = $movieTitlesList[$i];
            } else {
               $hint = $hint." : ".$movieTitlesList[$i];
            }

         }
      }
   }

   // if $hint is empty return none found
   if($hint == "") {
      $response = "No movie titles match";

   } else {
      $response = $hint;
   }

   // output response
   echo $response;

?>