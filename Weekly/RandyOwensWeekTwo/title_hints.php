<!-- Movie Finder - Home Page URL
Find movies from search with the help of PHP hints
-->

<!-- Header Import -->
<?php
   $root = '../../';
   include($root . 'include/header.php');
?>

<!-- JS Script to showcase hinted Movie Titles to user -->
<script language="JavaScript" type="text/javascript">
   // userInput is passed to function from onKeyUp Event
   function showHint(userInput) {
      console.log("inside showHint")

      // check if nothing has been typed - return nothing
      if (userInput.length == 0) {
         document.getElementById("txtHint").innerHTML = "";
         return; // end function
      }

      // XMLHttpRequest variable to handle state changes responding to user input
      if (window.XMLHttpRequest) {
         var xmlHttp = new XMLHttpRequest();
      }

      // function when server state changes
      xmlHttp.onreadystatechange = function() {

         if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
            // retrieve server response
            document.getElementById("txtHint").innerHTML = xmlHttp.responseText;
         }

      }

      // transfer user input with GET 
      xmlHttp.open("GET", "<?php echo $root; ?>Weekly/RandyOwensWeekTwo/gethint.php?input=" + userInput, true);

      // send the request
      xmlHttp.send();
   }
</script> <!-- End Search Hints Script -->


<!-- Search Bar -->
<div>
   <h1 class="mt-4">Movie Search</h1>
   <h4><em>Search for movies - thanks to hints from PHP</em></h4>

      <!-- Search Bar Form -->
      <form>
         <h3>Enter Movie Title:
            <input type="text" onkeyup="showHint(this.value)" size="20" />
         </h3>
      </form>

      <!-- Returned movie list on current input -->
      <h3>Found: 
      <span id="txtHint"></span></h3>


</div>

<!-- Footer Import -->
<?php include($root.'include/footer.php'); ?>