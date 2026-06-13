<?php
require("../../../php/db.php")
?>
<h1 class="text-success">New Adimission List</h1>
<hr>
<table class="table table-primary shadow ">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Student Name</th>
      <th scope="col">Father's Name</th>
      <th scope="col">Mobile</th>
      <th scope="col">Email ID</th>
      <th scope="col">Class</th>
      <th scope="col">Student Address</th>
      <th scope="col">Pin</th>
      <th scope="col">Adimission Date</th>
    </tr>
  </thead>
  <tbody>
   <?php
    $data=$db->query("SELECT * FROM adimission");
    while($aa=$data->fetch_assoc()){
        echo "<tr>
        <td>".$aa['id']."</td>
        <td>".$aa['fullname']."</td>
        <td>".$aa['father_name']."</td>
        <td>".$aa['mobile']."</td>
        <td>".$aa['email']."</td>
        <td>".$aa['class']."</td>
        <td>".$aa['student_address']."</td>
        <td>".$aa['pin']."</td>
        <td>".$aa['adimission_date']."</td>
        </tr>";
    }
   ?>
  </tbody>
</table>