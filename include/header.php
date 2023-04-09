<!-- Header Document
Contains Titles
and a JS Script to send user input to gethint.php
-->

<!-- Every file implementing header.php will assign a $root variable
     to call from the foot document ./     (PHP306/here)
     This allows header to be implemented dynamically
-->

<!DOCTYPE html>
<html>

   <head>
      <!-- meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>PHP 306</title>
      <!-- Bootstrap CSS -->
      <link href="<?php echo $root; ?>css/styles.css" rel="stylesheet" />
   </head>

   <body>
      <!-- Main Div -->
      <div class="d-flex" id="wrapper">

         <!-- Sidebar -->
         <div class="border-end bg-white" id="sidebar-wrapper">
         <!-- Top left title -->
         <div class="sidebar-heading border-bottom bg-light"><b>PHP 306</b></div>

         <!-- Sidebar links -->
         <div class="list-group list-group-flush">
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php echo $root; ?>index.php">Home</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php echo $root; ?>Weekly/RandyOwensWeekOne/index.php">Week One</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php echo $root; ?>Weekly/RandyOwensWeekTwo/title_hints.php">Week Two</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php echo $root; ?>Weekly/RandyOwensWeekThree/index.php">Week Three</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php echo $root; ?>Weekly/RandyOwensWeekFour/doctors.php">Week Four</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php echo $root; ?>Weekly/RandyOwensWeekFive/assistantLogin.php">Week Five</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php echo $root; ?>Weekly/RandyOwensWeekSix/index.php">Week Six</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php echo $root; ?>Weekly/RandyOwensWeekSeven/index.php">Week Seven</a>
         </div>
      </div> <!-- End Sidebar -->

      <!-- Page (Header Content - Body Content) -->
      <div id="page-content-wrapper">
         <!-- Top Bar -->
         <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <div class="container-fluid">
               <!-- Toggle Sidebar on/off buttons -->
               <button class="btn btn-primary" id="sidebarToggle" style="margin-right: 15px;">Toggle Sidebar</button>

               <!-- Display Date/Time -->
               Thanks for visiting on  
               <span  id="date" style="margin-left: 7px; margin-right: 5px;"></span>
               @ 
               <span id="time" style="margin-left: 5px;"></span>
               <!-- End Display Date/Time -->

               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>

               <!-- Top-right Navbar -->
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                     <li class="nav-item active">
                        <a class="nav-link" href="<?php echo $root; ?>index.php">Home</a>
                     </li>
                  </ul>
               </div>

            </div> <!-- End Top Bar -->
         </nav>

         <!-- Body Content Start -->
         <div class="container-fluid">
