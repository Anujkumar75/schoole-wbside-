<?php
require(("../../../php/db.php"))
?>
<div class="row">
    <div class="col-md-6 ">
        <div class="shadow p-4">
            <h1>Teachers</h1>
            <hr>
            <form class="teacher_frm">
                <div class="form-group">
                    <label for="function_name" class="mb-2">Teacher Name</label>
                    <input type="text" class="form-control mb-3" name="teacher_name">

                    <label for="function_name" class="mb-2"> Enter Teach subject</label>
                    <input type="text" class="form-control mb-3" name="teach_subject">
                     
                
                    <label class="mb-2">Upload Teacher Picture</label>
                     <input type="file" class="form-control mb-3" name="teacher_pic" accept="image/*">   
                         
                         <label for="disabledSelect" placeholder="Enter" class="form-label">About Teacher</label><br>
                         <textarea name="about_teacher" class="form-label"id="" rows="5" cols="30"></textarea>
                 
                </div>
                <button type="submit" class="btn btn-primary m-3 add_teacher_btn">Submit </button>
            </form>
        </div>
    </div>
    <script>

        $(document).ready(function(){
            $(".teacher_frm").submit(function(e){
                e.preventDefault();
                $.ajax({
                    type:"POST",
                    url:"php/add_teacher.php",
                    data:new FormData(this),
                    contentType:false,
                    processData:false,
                    beforeSend:function(){
                        $(".add_teacher_btn").html("Please wait...");
                        $(".add_teacher_btn").attr("disabled","disabled");
                    },
                    success:function(response){
                        $(".add_teacher_btn").html("Submit");
                        $(".add_teacher_btn").removeAttr("disabled");
                    
                        if(response.trim()=="success")
                        {
                        var div=document.createElement("DIV");
                        $(div).addClass("alert alert-success fs-2 text-center p-5");
                        $(div).html("<i class='fa-solid fa-circle-check display-1'></i><br>Product Add successful !");
                        $(".msg").html(div)

                          $(".msg").removeClass("d-none");
                 
                          setTimeout(function(){
                          $(".msg").addClass("d-none");
                         $(".teacher_frm").trigger("reset");

                        },2000);
                      }
                    }
                }) 
            })
        })
    </script>