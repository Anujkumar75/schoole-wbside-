<?php
require("../../php/db.php");
$collage_name=$_POST['collage_name'];
$exam_year=$_POST['exam_year'];
$class_name=$_POST['class'];
$roll_no=$_POST['roll_no'];
$student_name=$_POST['student_name'];
$father_name=$_POST['father_name'];
$mother_name=$_POST['mother_name'];
$category=$_POST['cat'];

$check_table=$db->query("SELECT * FROM student_details");

if($check_table)
{
   $check_roll=$db->query("SELECT roll_no FROM student_details WHERE roll_no='$roll_no'");
   $check_year=$db->query("SELECT exam_year FROM student_details WHERE exam_year='$exam_year'");
   if($check_roll->num_rows!=0 && $check_year->num_rows!=0)
   {
    echo "alredy exist";
   }
   else{
     
    $data_store=$db->query("INSERT INTO student_details
    (
    collage_name,
    exam_year,
    class_name,
    roll_no,
    student_name,
    father_name,
    mother_name,
    category) VALUE(
    '$collage_name',
    '$exam_year',
    '$class_name',
    '$roll_no',
    '$student_name',
    '$father_name',
    '$mother_name',
    '$category')");

    if($data_store)
    {
     echo "seccess";
    }
    else{
     echo "data nor store";
    }
  }


}


else
{
    $create_table=$db->query("CREATE TABLE student_details(
    
    collage_name VARCHAR(300),
    exam_year VARCHAR(50),
    class_name VARCHAR(100),
    roll_no VARCHAR(100),
    student_name VARCHAR(300),
    father_name VARCHAR(300),
    mother_name VARCHAR(300),
    category VARCHAR(50),
    PRIMARY KEY(roll_no)
    )");

    if($create_table)
    {
       $data_store=$db->query("INSERT INTO student_details
       (
       collage_name,
       exam_year,
       class_name,
       roll_no,
       student_name,
       father_name,
       mother_name,
       category) VALUE(
       '$collage_name',
       '$exam_year',
       '$class_name',
       '$roll_no',
       '$student_name',
       '$father_name',
       '$mother_name',
       '$category')");

       if($data_store)
       {
        echo "seccess";
       }
       else{
        echo "data nor store";
       }
    }
    else
    {
        echo "table not create";
    }
}
?>