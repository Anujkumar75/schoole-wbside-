<?php
require("../../php/db.php");

$roll_no=$_POST['roll_number'];
$hindi=$_POST['hindi'];
$english_m=$_POST['english_m'];
$maths=$_POST['math'];
$science=$_POST['science'];
$biol=$_POST['biol'];
$phys=$_POST['phys'];
$chemi=$_POST['chemi'];
$gk=$_POST['gk'];

// $check_table=$db->query("SELECT * FROM marks_m6");

if($check_table)
{
   $check_roll=$db->query("SELECT roll_no FROM student_details WHERE roll_no='$roll_no'");
   if($check_roll->num_rows!=0 )
   {
   
      $data_store=$db->query("INSERT INTO marks_m6
      (
      roll_number,
      hindi,
      english_m,
      maths,
      science,
      biol,
      phys,
      chemi,
      gk) VALUE(
      '$roll_no',
      '$hindi',
      '$english_m',
      '$maths',
      '$science',
      '$biol',
      '$phys',
      '$chemi',
      '$gk')");
      
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
      echo "student have a not data";
   }


}
else
{
   $create_table=$db->query("CREATE TABLE marks_m6(
   
   roll_number VARCHAR(300),
   hindi   INT(10),
   english_m INT(10),
   maths INT(10),
   science INT(20),
   biol INT(10),
   phys INT(10),
   chemi INT(10),
   gk INT(10)
   )");

   if($create_table)
   {
      $data_store=$db->query("INSERT INTO marks_m6
      (
      roll_number,
      hindi,
      english_m,
      maths,
      science,
      biol,
      phys,
      chemi,
      gk) VALUE(
      '$roll_no',
      '$hindi',
      '$english_m',
      '$maths',
      '$science',
      '$biol',
      '$phys',
      '$chemi',
      '$gk')");
      
      if($data_store)
      {
         echo "seccess";
      }
      else{
         echo "data nor store";
      }
   }
   else{
    echo "table not create";
   }
}



?>