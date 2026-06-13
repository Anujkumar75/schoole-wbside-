<?php
require("db.php");
 $roll_number = $_POST['roll_number'];

 $check_roll = $db->query("SELECT roll_number FROM marks WHERE roll_number='$roll_number'");

 if($check_roll->num_rows!=0){
   
   $c_roll=base64_encode($roll_number);
   $c_time=time()+(60*60*1); // 1 hour
   setcookie("_aut_ui_", $c_roll, $c_time, "/");
    echo "suceess";
   //  header("Location: result_modal.php?roll_number=$roll_number");

 }
 else{
    echo "Roll number is available!";
 }
?>