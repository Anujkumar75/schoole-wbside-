<?php
require("../../php/db.php");
$function_name=$_POST['function_name'];
$class=$_POST['class'];


$student_pic=$_FILES['student_pic'];
$student_pic_name=$student_pic['name'];
$student_location=$student_pic['tmp_name'];

$check_table=$db->query("SELECT * FROM student_function_data");

if($check_table)
{

    $file_check=file_exists("../../student_pic/".$student_pic_name);
        
    if($file_check)
    {
        echo "file already exists";
    }
    else
    {
        $upload_pic=move_uploaded_file($student_location,"../../student_pic/".$student_pic_name);
        if($upload_pic)
        {
            $data_store="INSERT INTO student_function_data(
            function_name,student_pic,class)VALUES(
            '$function_name','$student_pic_name','$class')";

            $store_response=$db->query($data_store);

            if($store_response)
            {
                echo "success";
            }
            else
            {
                echo "failed";
            }
        }
        else{
            echo "file not uploaded";
        }
    }
}
else
{
    $create_table=$db->query("CREATE TABLE student_function_data(
    id INT(11) NOT NULL AUTO_INCREMENT,
    function_name VARCHAR(100),
    student_pic VARCHAR(200),
    class VARCHAR(100),

    PRIMARY KEY(id)
    )");

    if($create_table)
    {
        $file_check=file_exists("../../student_pic/".$student_pic_name);
        
        if($file_check)
        {
            echo "file already exists";
        }
        else
        {
            $upload_pic=move_uploaded_file($student_location,"../../student_pic".$student_pic_name);
            if($upload_pic)
            {
                $data_store="INSERT INTO student_function_data(
                function_name,student_pic,class)VALUES(
                '$function_name','$student_pic_name','$class')";

                $store_response=$db->query($data_store);

                if($store_response)
                {
                    echo "success";
                }
                else
                {
                    echo "failed";
                }
            }
            else{
                echo "file not uploaded";
            }
        }
    }
    else{
        echo "table not create";
    }


}

?>