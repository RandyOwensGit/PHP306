<?php

   session_start();

   // Check if form submitted
   if (isset($_POST['submit'])) {

      // define new time variable -- used for saving cookies
      // 1 week (seconds * minutes * hours * days)
      define("NEW_TIME", 60 * 60 * 24 * 7);

      // save values to be turned into cookies
      $name = $_POST['name'];
      $age = $_POST['age'];
      $gender = $_POST['gender'];

      // create cookies
      setcookie('name', $name, time() + NEW_TIME);
      setcookie('age', $age, time() + NEW_TIME);
      setcookie('gender', $gender, time() + NEW_TIME);
   }

?>


<!-- Header Import -->
<?php include('include/header.php'); ?>


<h2>Information to be stored as cookies:</h2>

<!-- Form to get data from user on this page -->
<form method='POST' action="" class="cookieForm">

   <!-- Styling -->
   <div class="cookieFormContent">

      <!-- Name Input -->
      <input type="text" name="name" placeholder="Name" class="formContent1" />

      <!-- Age Input -->
      <br />
      <input type="text" name="age" placeholder="Age" class="formContent1" />

      <!-- Gender Input -->
      <br />
      <input type="text" name="gender" placeholder="Gender" class="formContent1" />

      <!-- Submit -->
      <br />
      <input type="submit" name="submit" value="Submit to be cookiefied" class="formContent1" />

   </div>

</form>

<!-- Button to view all cookies -->
<p><a href="ViewCookies.php" class="viewCookies">
   View Cookies
</a></p>

<br />

<!-- Brief text button to delete all cookies -->
<p><a href="RemoveCookies.php" class="deleteCookies">
   DELETE Cookies
</a></p>

<!-- Footer Import -->
<?php include('include/footer.php'); ?>