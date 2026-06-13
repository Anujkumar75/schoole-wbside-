<?php
require("../../php/db.php");
$roll_no=$_POST["roll_no"];

$res=$db->query("SELECT * FROM student_details WHERE roll_no ='$roll_no'");
$aa=$res->fetch_assoc();
echo json_encode($aa);
?>