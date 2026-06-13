<?php
require("../../php/db.php");

$fun_id=$_POST["edit_fun_id"];
$fun_name=$_POST["edit_fun_name"];

$fun_url=strtolower($fun_name);
$fun_url=str_replace(" ","-","$fun_url");
$update=$db->query(("UPDATE school_function SET function_name='$fun_name',function_url='$fun_url' WHERE id='$fun_id'"));

if($update)
{
    echo "success";
}
else{
    echo "failed";
}
?>