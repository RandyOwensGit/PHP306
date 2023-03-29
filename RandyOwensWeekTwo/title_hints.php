<?php include('include/header.php'); ?>

<!-- Movie Finder - Home Page URL
Find movies from search with the help of PHP hints
-->

   <!-- Search Bar -->
   <div id="content">
      
      <!-- Search Bar Form -->
      <form>
         <h3>Enter Movie Title:
         <input type="text" onkeyup="showHint(this.value)" size="20" />
         </h3>
      </form>

      <!-- Returned movie list on current input -->
      <h3>Found: <span id="txtHint"></span></h3>


   </div>

<?php include('include/footer.php'); ?>
