<?php
require ("../../../php/db.php");
?>
<style>
   /* .model{
        z-index: 100000000;
        width: 100%;
        height: 100vh;
        background-color: rgba(0, 0, 0, 0.7);
        position: fixed;
        top: 0;
        left: 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }*/
</style>

<div class="row">
    <div class="col-md-6 ">
        <div class="shadow p-4">
            <h1>Add Function</h1>
            <hr>
            <form class="fun_frm">
                <div class="form-group">
                    <label for="function_name" class="mb-2">Function Name</label>
                    <input type="text" class="form-control mb-3" id="function_name" name="function_name" placeholder="Enter your function name">
                </div>
                <button type="submit" class="btn btn-primary fun_btn">Add Function </button>
            </form>
        </div>
    </div>


<!-- show the table code -->
 <div class="col-md-6">
    <div class="shadow p-4">
        <table class="table ">
            <thead>
                <tr>
                    <!-- <th scope="col">Id</th> -->
                    <th scope="col">School Function</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $data=$db->query("SELECT * FROM school_function");
                while($aa=$data->fetch_assoc()){
                    echo "<tr>
                    
                    <td>".$aa['function_name']."</td>
                    <td><i class='fa-solid fa-pen-to-square text-primary cat_edit_btn' id='".$aa['id']."'></i></td>
                    <td><i class='fa-solid fa-trash text-danger fun_delete' id='".$aa['id']."'></i></td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
 </div>
</div>



<!-- edit modal -->
<div class="model d-none">
    <!-- <div class="row">
        <div class="col-md-12 box"> -->
            <!-- <div class="modal"> -->
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header bg-primary">
            <h5 class="modal-title text-light">Edit Function</h5>
            <button type="button" class="btn-close close_icon" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-primary">

      <form class="edit_frm">
            <div class="form-group">
                <label for="category_name" class="mb-2 text-light">Function Name</label>
                <input type="text" class="form-control mb-3" id="edit_fun_name" name="edit_fun_name">
            </div>
            <hr>
            <input type="hidden" id="edit_fun_id" name="edit_fun_id">
            <button type="submit" class="btn btn-success update_fun_btn">Upadit Function</button>
        </form>

      </div>
            </div>
            </div>
        </div>
        <!-- </div>
    </div> -->
<!-- </div> -->

<!-- delete modal -->
<div class="delete_model d-none">
    <!-- <div class="row">
        <div class="col-md-12 box"> -->
            <!-- <div class="modal"> -->
            <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
            <div class="modal-header bg-danger">
            <h5 class="modal-title text-light">Delete Function</h5>
            <button type="button" class="btn-close close_icon" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-danger">

      <form class="delete_frm">
            <div class="form-group">
                <h3>Are you sure?</h3>
            <input type="hidden" class="edit_fun_id" name="del_fun_id">
            </div>
           <hr>
            <button type="submit" class="btn btn-primary del_fun_btn">Delete Function</button>
        </form>

      </div>
            </div>
            </div>
        </div>

<script>
    $(document).ready(function(){
        // var myModal = new bootstrap.Modal(document.getElementById('cat_edit_modal'));

        $(".fun_frm").submit(function(e){
            e.preventDefault();
            $.ajax({
                type:"POST",
                url:"php/add_fun.php",
                                
                data:new FormData(this),
                processData:false,
                contentType:false,
                beforeSend:function(){
                    $(".fun_btn").html("please wait...");
                    $(".fun_btn").attr("disabled","disabled");
                },
                success:function(response){
                    $(".fun_btn").html("Add Function");
                    $(".fun_btn").removeAttr("disabled");
                    if(response.trim()=="success"){
                        $('[p_link="function"]').click();
                    }
                }
                
            })
        })
     })

     $(".cat_edit_btn").each(function(){
            $(this).click(function(){
               var fun_id= $(this).attr("id");

               $.ajax({
                type:"POST",
                url:"php/get_fun.php",
                data:{
                    fun_id:fun_id
                },
                success:function(response)
                {
                   var cat_data= JSON.parse(response);
                    $("#edit_fun_name").val(cat_data.function_name);
                  $("#edit_fun_id").val(cat_data.id);
                  $(".model").removeClass("d-none");
                   
                }
               })
            })
        })

        // close model 
        $(".close_icon").click(function(){
            $(".model").addClass("d-none");
        })

        // submit update model
        $(".edit_frm").submit(function(e){
            e.preventDefault();
            $.ajax({
                type:"POST",
                url:"php/edit_fun.php",
                data: new FormData(this),
                contentType:false,
                processData:false,
                success:function(response){
                    if(response.trim()=="success"){
                        $(".model").addClass("d-none");
                        $('[p_link="function"]').click();

                    }
                }

            })

        
        })
        
        // delete retrive data
        $(".fun_delete").each(function(){
            $(this).click(function(){
                var fun_id=$(this).attr("id");

                $.ajax({
                    type:"POST",
                    url:"php/get_fun.php",
                    data:{
                        fun_id:fun_id
                    },
                    success:function(response)
                    {
                        var cat_data= JSON.parse(response);
                        // alert(cat_data)
                         $(".edit_fun_id").val(cat_data.id);
                        $(".delete_model").removeClass("d-none");
                    }
                })
            })
           })

        //    close the delete modal
        $(".close_icon").click(function(){
            $(".delete_model").addClass("d-none");
        })

        // delete form submit
        $(".delete_frm").submit(function(e){
            e.preventDefault();

            $.ajax({
                type:"POST",
                url:"php/fun_delete.php",
                data :new FormData(this),
                contentType:false,
                processData:false,
                success:function(response){
                    if(response.trim()=="success"){
                        $(".delete_model").addClass("d-none");
                        $('[p_link="function"]').click();
                    }
                }
            })
        })
</script>