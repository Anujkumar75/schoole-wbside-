<?php
require("db.php");

$fullname=$_POST['fullname'];
$father_name=$_POST['father_name'];
$mobile=$_POST['phone'];
$email=$_POST['email'];
$class=$_POST['class'];
$address=$_POST['address'];
$pin=$_POST['pin'];
$adimission_date=date("Y-m-d");
// $dob=$_POST("dob");


$check_table=$db->query("SELECT * FROM adimission");
if($check_table)
{
    $check_student=$db->query("SELECT * FROM adimission WHERE email='$email' " );
    if($check_student->num_rows!=0)
    {
       echo "student already existy";
    }   
    else{
       
       $store=$db->query("INSERT INTO adimission(fullname, father_name,mobile,email,class,student_address,pin, adimission_date)
       VALUES('$fullname','$father_name','$mobile','$email','$class','$address','$pin','$adimission_date')");

       if($store)
       {
           echo "success";
       }
       else
       {
           echo "failed";
       }
       
    }

}
else
{
    $create_table=$db->query(" CREATE TABLE adimission(
    id INT (11) NOT NULL AUTO_INCREMENT,
    fullname VARCHAR(200),
    father_name VARCHAR(200),
    mobile VARCHAR(11),
    email VARCHAR(200),
    class VARCHAR(100),
    student_address VARCHAR(300),
    pin VARCHAR(20),
    adimission_date DATE,
    -- dob DATE,
    PRIMARY KEY(id)
    )");
    if($create_table)
    {
     $check_student=$db->query("SELECT * FROM adimission WHERE email='$email' " );
     if($check_student->num_rows!=0)
     {
        echo "student already existy";
     }   
     else{
        
        $store=$db->query("INSERT INTO adimission(fullname, father_name,mobile,email,class,student_address,pin, adimission_date)
        VALUES('$fullname','$father_name','$mobile','$email','$class','$address','$pin','$adimission_date')");

        if($store)
        {
            echo "success";
        }
        else
        {
            echo "failed";
        }
        
     }
    
    }
    else
    {
        echo "table not create";
    }
}
?>