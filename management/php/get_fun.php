<?php
require("../../php/db.php");

$fun_id=$_POST['fun_id'];

$res=$db->query("SELECT * FROM school_function WHERE id='$fun_id'");

$aa=$res->fetch_assoc();
echo json_encode($aa);
?>