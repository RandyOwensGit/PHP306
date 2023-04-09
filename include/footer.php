<!-- Footer Document
Make use of header & footer design 
with thanks message including current time & date
-->


</div> <!-- Body Content End -->

</div> <!-- Page Content End -->

<!-- Script Imports -->

<!-- Bootstrap core JS -->
<script 
   src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
</script>

<!-- Sidebar Script -->
<script 
   src="<?php echo $root; ?>/scripts/scripts.js">
</script>
<!-- END Script Imports -->

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


</body>


</html>