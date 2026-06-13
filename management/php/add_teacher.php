<?php
require("../../php/db.php");

$teacher_name=$_POST['teacher_name'];
$teach_subject=$_POST['teach_subject'];
$about_teacher=$_POST['about_teacher'];

$teacher_pic=$_FILES['teacher_pic'];
$teacher_pic_name=$teacher_pic['name'];
$teacher_pic_location=$teacher_pic['tmp_name'];

 $check_table=$db->query("SELECT * FROM teacher_data");

if($check_table)
{
    $file_check=file_exists("../../teacher_pic/".$teacher_pic_name);
        
    if($file_check)
    {
        echo "file already exists";
    }
    else
    {
        $upload_pic=move_uploaded_file($teacher_pic_location,"../../teacher_pic/".$teacher_pic_name);
        if($upload_pic)
        {
            $data_store="INSERT INTO teacher_data(
            teacher_name,teacher_pic,teacher_subject,about_teacher)VALUES(
            '$teacher_name','$teacher_pic_name','$teach_subject','$about_teacher')";

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
    $create_table=$db->query("CREATE TABLE teacher_data(
        id INT(11) NOT NULL AUTO_INCREMENT,
        teacher_name VARCHAR(100),
        teacher_pic VARCHAR(200),
        teacher_subject VARCHAR(100),
        about_teacher MEDIUMTEXT,
        PRIMARY KEY(id)
        )");

    if($check_table){
        $file_check=file_exists("../../teacher_pic/".$teacher_pic_name);

        if($file_check){
            echo "file already exists";
        }
        else{
            $upload_pic=move_uploaded_file($teacher_pic_location,"../../teacher_pic".$teacher_pic_name);
            if($upload_pic)
            {
                $data_store="INSERT INTO teacher_data(teacher_name,teacher_pic,teacher_subject,about_teacher)
                VALUES('$teacher_name','$teacher_pic_name','$teach_subject','$about_teacher')";

                    $store_response=$db->query($data_store);
                if($store_response)
                {
                    echo "success";
                }
                else
                {
                    echo "data not store ";
                }
            }
            else{
                echo "file not uploaded";
            }
        }

    }
    else
    {
        echo "table not create";
    }
}

?>