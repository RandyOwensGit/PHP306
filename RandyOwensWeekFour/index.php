<!-- Header Import -->
<?php include('include/header.php'); ?>

<!-- Use HTML Tables to rough sketch a MySQL Database design -->

<h2>Database Design Structure for Doctor's Office</h2>

<!-- Inside Body div=content -->

<!-- Patients -->
<h3>Patients</h3>
<table class="table">
    <thead>
        <tr>
            <th>patient_id</th>
            <th>name</th>
            <th>address</th>
            <th>age</th>
            <th>gender</th>
            <th>marital_status</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>integer</td>
            <td>varchar</td>
            <td>varchar</td>
            <td>integer</td>
            <td>varchar</td>
            <td>boolean</td>
        </tr>
        <tr>
            <td>primary key</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>


<!-- Medication_Dispense -->
<h3>Medication_Dispense</h3>
<table class="table">
    <thead>
        <tr>
            <th>dispense_id</th>
            <th>medication</th>
            <th>quantity</th>
            <th>date</th>
            <th>patient_id</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>integer</td>
            <td>integer</td>
            <td>date</td>
            <td>varchar</td>
            <td>integer</td>
        </tr>
        <tr>
            <td>primary key</td>
            <td></td>
            <td></td>
            <td></td>
            <td>foreign key <i>(Patients)</i></td>
        </tr>
    </tbody>
</table>

<!-- Billing_Info -->
<h3>Billing_Info</h3>
<table class="table">
    <thead>
        <tr>
            <th>bill_id</th>
            <th>amount_billed</th>
            <th>amount_paid</th>
            <th>date_issued</th>
            <th>date_paid</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>primary key</td>
            <td>integer</td>
            <td>integer</td>
            <td>integer</td>
            <td>integer</td>
        </tr>
        <tr>
            <td>primary key</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>

<!-- Payments -->
<h3>Payments</h3>
<table class="table">
    <thead>
        <tr>
            <th>payment_id</th>
            <th>amount_paid</th>
            <th>remainder</th>
            <th>date</th>
            <th>bill_id</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>integer</td>
            <td>integer</td>
            <td>integer</td>
            <td>date</td>
            <td>integer</td>
        </tr>
        <tr>
            <td>primary key</td>
            <td></td>
            <td></td>
            <td></td>
            <td>foreign key <i>(Billing_Info)</i></td>
        </tr>
    </tbody>
</table>

<!-- Footer Import -->
<?php include('include/footer.php'); ?>