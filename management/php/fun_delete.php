<?php
require("../../php/db.php");

$del_id=$_POST['del_fun_id'];

$delete=$db->query("DELETE FROM school_function WHERE id='$del_id'");

if($delete){
    echo "success";
}
else
{
    echo "failed";
}
?>