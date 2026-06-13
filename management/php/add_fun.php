<?php
require("../../php/db.php");

$fun_name=$_POST["function_name"];

$fun_url=strtolower($fun_name);
$fun_url=str_replace(" ","-","$fun_url");

$check_table=$db->query("SELECT * FROM school_function");

if($check_table)
{
    
        $data_store=$db->query("INSERT INTO school_function
        (function_name,function_url)VALUE('$fun_name','$fun_url')");

        if($data_store)
        {
            echo "success";
        }
        else{
             echo "failed";
        }
    }

else
{
    $create_table=$db->query("CREATE TABLE school_function(
    id INT(11) NOT NULL AUTO_INCREMENT,
    function_name VARCHAR(255),
    function_url VARCHAR(255),
    PRIMARY KEY(id)
    )");
    
    if($create_table){
        $data_store=$db->query("INSERT INTO school_function
        (function_name,function_url)VALUE('$fun_name','$fun_url')");

        if($data_store)
        {
            echo "success";
        }
        else{
             echo "failed";
        }
    }
    else{
        echo "failed";
    }
}
?>