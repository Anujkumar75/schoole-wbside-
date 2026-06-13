<?php
require(("../../../php/db.php"))
?>
<div class="row">
    <div class="col-md-6 ">
        <div class="shadow p-4">
            <h1>Student Function</h1>
            <hr>
            <form class="student_frm">
                <div class="form-group">
                    <label for="function_name" class="mb-2">Select Function</label>
                    <select name="function_name" required reid="disabledSelect" class="form-select" >
                     <?php
                        $data=$db->query("SELECT * FROM school_function");
                        while($aa=$data->fetch_assoc()){
                            echo "
                            <option value='".$aa['function_url']."'>".$aa['function_name']."</option>";
                        }

                     ?>
        
                     </select>
                     <br>
                
                    <label class="mb-2">Upload Student Picture</label>
                     <input type="file" class="form-control mb-3" name="student_pic" accept="image/*">
                
                     <label for="disabledSelect"  class="form-label">Choose your class</label>
                       <select name="class" required reid="disabledSelect" class="form-select">
                          <option>class NC</option>
                           <option>class KG</option>
                            <option>class 1</option>
                             <option>class 2</option>
                              <option>class 3</option>
                               <option>class 4</option> 
                                <option>class 5</option>
                                 <option>class 6</option>
                                  <option>class 7</option>
                                   <option>class 8</option>
                                    <option>class 9</option>
                                    <option>class 10</option>
                                     <option>class 11</option>
                                     <option>class 12</option>
                         </select>
                          
                         <br>
                         <!-- <label for="disabledSelect" placeholder="Enter" class="form-label">Discripation</label><br>
                         <textarea name="discripation" class="form-label"id="" rows="5" cols="30"></textarea>
                  -->
                </div>
                <button type="submit" class="btn btn-primary m-3 add_student_fun_btn">Submit </button>
            </form>
        </div>
    </div>
    <script>

        $(document).ready(function(){
            $(".student_frm").submit(function(e){
                e.preventDefault();
                $.ajax({
                    type:"POST",
                    url:"php/add_student_fun.php",
                    data:new FormData(this),
                    contentType:false,
                    processData:false,
                    beforeSend:function(){
                        $(".add_student_fun_btn").html("Please wait...");
                        $(".add_student_fun_btn").attr("disabled","disabled");
                    },
                    success:function(response){
                        $(".add_student_fun_btn").html("Submit");
                        $(".add_student_fun_btn").removeAttr("disabled");
                        alert(response);
                        if(response.trim()=="success")
                        {
                        var div=document.createElement("DIV");
                        $(div).addClass("alert alert-success fs-2 text-center p-5");
                        $(div).html("<i class='fa-solid fa-circle-check display-1'></i><br>Product Add successful !");
                        $(".msg").html(div)

                          $(".msg").removeClass("d-none");
                 
                          setTimeout(function(){
                          $(".msg").addClass("d-none");
                         $(".student_frm").trigger("reset");

                        },2000);
                      }
                    }
                }) 
            })
        })
    </script>