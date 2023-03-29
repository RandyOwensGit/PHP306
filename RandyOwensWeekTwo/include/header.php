<!-- Header Document
Contains Titles
and a JS Script to send user input to gethint.php
-->
<!DOCTYPe html>

<html>
   
   <head>

      <title>Movie Search</title>
      <link rel="stylesheet" href="css/carla.css">

      <!-- JS Script to showcase hinted Movie Titles to user -->
      <script language="JavaScript" type="text/javascript">

         // userInput is passed to function from onKeyUp Event
         function showHint(userInput) {

            // check if nothing has been typed - return nothing
            if(userInput.length == 0) {
               document.getElementById("txtHint").innerHTML = "";
               return; // end function
            }

            // XMLHttpRequest variable to handle state changes responding to user input
            if(window.XMLHttpRequest) {
               var xmlHttp = new XMLHttpRequest();
            }

            // function when server state changes
            xmlHttp.onreadystatechange = function() {
               
            if(xmlHttp.readyState == 4 && xmlHttp.status == 200) {
               // retriever server response
               document.getElementById("txtHint").innerHTML = xmlHttp.responseText;
            }

            }

            // transfer user input with GET 
            xmlHttp.open("GET","gethint.php?input=" + userInput, true);

            // send the request
            xmlHttp.send();

         }

      </script>

   </head>

   <!-- Document Body -->
   <body>

      <!-- div representing main application area -->
      <div id="container">

         <!-- Page Headers -->
         <div>
            <h1>Movie Search Application</h1>
            <h4 class="testing"><em>Search for movies - thanks to hints from PHP</em></h2>

         </div>

<!-- Main Container Opening -->