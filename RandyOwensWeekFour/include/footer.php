<!-- Footer Document
Make use of header & footer design 
with thanks message including current time & date
-->

<!-- End Main Body Div=content -->
</div>

      <!-- footer div - still inside main body and container div -->
      <div id="footer">
         <hr>

         <!-- -TODO- Display what page the user is on -->


         <!-- Display thanks message with current date&time -->
         <!-- span tags hold respective references -->
         <h3>
            Thanks for visiting on -  
            <span id="date"></span>
            @ 
            <span id="time"></span>

         </h6>

         <!-- JS display date and time -->
         <script>
            // refresh time & date every 1000ms
            setInterval(function() {
               // get Date Object
               var timeDate = new Date();

               // generate current time & date Strings
               assignDate(timeDate.toLocaleDateString());
               assignTime(timeDate.toLocaleTimeString());

            }, 1000);

            // function to assign date to date span
            function assignDate(date) {
               var spanDate = document.getElementById('date');
               spanDate.textContent = date;
            }

            // function to assign time to time span
            function assignTime(time) {
               var spanTime = document.getElementById('time');
               spanTime.textContent = time;
            }

         </script>

      </div>

   <!-- End container div -->
   </div>

</body>


</html>