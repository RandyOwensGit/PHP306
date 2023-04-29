<!-- Header Import -->
<?php
$root = '../../';
include($root . 'include/header.php');

?>

<div>
   <h2>Landscape ~ Billing</h2>

   <!-- Enter Information -->
   <div class="d-flex flex-row">
      <div>
         <h2>Add Entry: </h2>
      </div>

      <a href="<?php echo $root; ?>Weekly/RandyOwensWeekSeven/addCustomer.php" class="btn btn-primary navbar-btn" style="margin-left: 20px;">Add Customer</a>
      <a href="<?php echo $root; ?>Weekly/RandyOwensWeekSeven/addBill.php" class="btn btn-primary navbar-btn" style="margin-left: 15px;">Add Customer Bill</a>
   </div>

   <!-- View Information -->
   <h2 class="mb-3">View Records: </h2>
   <nav class="navbar navbar-inverse">
      <div class="container-fluid">
         <form action="<?php echo $root; ?>Weekly/RandyOwensWeekSeven/CustomerBilling.php" method="" class="navbar-header">
            <button type="submit" class="btn btn-primary navbar-btn">View Customers & Generate Bill Reports</button>
         </form>
      </div>
   </nav>

</div>

<!-- Footer Import -->
<?php
include($root . 'include/footer.php');
?>