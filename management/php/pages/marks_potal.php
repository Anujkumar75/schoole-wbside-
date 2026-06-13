<?php
require(("../../../php/db.php"))
?>
<div class="row">
    <div class="col-md-6 ">
        <div class="shadow p-4">
            <h1>Student Details</h1>
            <hr>
            <form class="student_details">
                <div class="form-group">
                    <h4 style="color: blue;">Institude's Details</h4>
                    <hr>
                    <label class="mb-2">Select School</label>
                    <select name="collage_name" required reid="disabledSelect" class="form-select" >
                            <option>Ch.G.S (jyoti)public inter collage Sonoth,Gonda ,(Aligarh)</option>
                     </select>

                     <label  class="mb-2">Exam year</label>
                    <select name="exam_year" required reid="disabledSelect" class="form-select" >
                            <option>2024-25</option>
                     </select>
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
                                     <option>class 11</option>
                                     
                         </select>
                         <br>
                         <h4 style="color: blue;">Personal Details</h4>
                    <hr>
                     
                     <label class="mb-2">Roll Number </label>
                     <input type="number" name="roll_no" placeholder="Enter Student Roll Number" class="form-control mb-3">
                     <label class="mb-2">Student Name </label>
                     <input type="text" name="student_name" placeholder="Enter Student Name" class="form-control mb-3">
                     <label class="mb-2">Father's Name </label>
                     <input type="text" name="father_name" placeholder="Enter Father's Name" class="form-control mb-3">
                     <label class="mb-2">Mother's Name </label>
                     <input type="text" name="mother_name" placeholder="Enter Mother's Name" class="form-control mb-3">
                     <label class="mb-2">Category </label>
                     <select name="cat" required reid="disabledSelect" class="form-select">
                          <option>REGULAR</option>
                          <option>PRIVATE</option>
            
                     </select>
                         <br>
                       
                </div>
                <button type="submit" class="btn btn-primary m-3 add_student_details">Submit </button>
            </form>
        </div>
    </div>
    <!-- marks form -->
    
    <div class="col-md-6 ">
        <div class="shadow p-4">
            <h1>Student Marks</h1>
            <hr>
            <form class="marks">
                <div class="form-group">
                <label class="mb-2">Enter Roll Number </label>
                <input type="number" name="roll_number" placeholder="Enter Roll Number" class="form-control mb-3">
                <label for="disabledSelect"  class="form-label">Choose your class</label>
                       <select name="class_m" required reid="disabledSelect" id="class" class="form-select" onclick()>
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
                                     <option>class 11</option>
                                     
                         </select>
              
                <label class="mb-2">Hindi </label>
                <input type="number" name="hindi" placeholder="Enter Hindi marks" class="form-control mb-3">

                <label class="mb-2">English </label>
                <input type="number" name="english_m" placeholder="Enter Endlish marks" class="form-control mb-3"> 

                <label class="mb-2">Math </label>
                <input type="number" name="math" placeholder="Enter Math marks" class="form-control mb-3">

                <label class="mb-2 " id="b_name" >Biology </label>
                <input type="number" name="biol" placeholder="Enter Biology marks" id="b_box" class="form-control mb-3 ">

                <label class="mb-2 " id="p_name">Physics </label>
                <input type="number" name="phys" placeholder="Enter Physics marks" id="p_box" class="form-control mb-3 ">

                <label class="mb-2 " id="c_name">Chemistry </label>
                <input type="number" name="chemi" placeholder="Enter Chemistry marks" id="c_box" class="form-control mb-3 ">

                <label class="mb-2 " id="s_name" >Science </label>
                <input type="number" name="science" placeholder="Enter Scince marks" id="s_box" class="form-control mb-3 ">

                <label class="mb-2 " id="gk_name">GK </label>
                <input type="number" name="gk" placeholder="Enter GK marks" id="gk_box" class="form-control mb-3 ">
    
                </div>
                <button type="submit" class="btn btn-primary m-3 ">Submit </button>
            </form>
        </div>
    </div>
    
</div>

 <div class="row">
     <div class="col-md-6 ">
        <div class="shadow p-4">
            <h1>6 Month marks</h1>
            <hr>
            <form class="marks_m6">
                <div class="form-group">
                <label class="mb-2">Enter Roll Number </label>
                <input type="number" name="roll_number" placeholder="Enter Roll Number" class="form-control mb-3">
                <label for="disabledSelect"  class="form-label">Choose your class</label>
                       <select name="class_m" required reid="disabledSelect" id="class_m6" class="form-select" onclick()>
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
                                     <option>class 11</option>
                                     
                         </select>
              
                <label class="mb-2">Hindi </label>
                <input type="number" name="hindi" placeholder="Enter Hindi marks" class="form-control mb-3">

                <label class="mb-2">English </label>
                <input type="number" name="english_m" placeholder="Enter Endlish marks" class="form-control mb-3"> 

                <label class="mb-2">Math </label>
                <input type="number" name="math" placeholder="Enter Math marks" class="form-control mb-3">

                <label class="mb-2 " id="b_name_m6" >Biology </label>
                <input type="number" name="biol" placeholder="Enter Biology marks" id="b_box_m6" class="form-control mb-3 ">

                <label class="mb-2 " id="p_name_m6">Physics </label>
                <input type="number" name="phys" placeholder="Enter Physics marks" id="p_box_m6" class="form-control mb-3 ">

                <label class="mb-2 " id="c_name_m6">Chemistry </label>
                <input type="number" name="chemi" placeholder="Enter Chemistry marks" id="c_box_m6" class="form-control mb-3 ">

                <label class="mb-2 " id="s_name_m6" >Science </label>
                <input type="number" name="science" placeholder="Enter Scince marks" id="s_box_m6" class="form-control mb-3 ">

                <label class="mb-2 " id="gk_name_m6">GK </label>
                <input type="number" name="gk" placeholder="Enter GK marks" id="gk_box_m6" class="form-control mb-3 ">
    
                </div>
                <button type="submit" class="btn btn-primary m-3 ">Submit </button>
            </form>
        </div>
    </div>

    </div>
<script>
    var fristnam=document.getElementById("class");fristnam.onclick=function friname(){
   let clas =document.getElementById("class").value;
   let gk_box=document.getElementById("gk_box");
   let gk_name=document.getElementById("gk_name");
   let b_box=document.getElementById("b_box");
    let b_name=document.getElementById("b_name");
    let p_box=document.getElementById("p_box");
    let p_name=document.getElementById("p_name");
    let c_box=document.getElementById("c_box"); 
    let c_name=document.getElementById("c_name");
    let s_box=document.getElementById("s_box");
    let s_name=document.getElementById("s_name");

   if(clas=="class 11" )
   {
    gk_box.style.display="none";
    gk_name.style.display="none";
    s_box.style.display="none";
    s_name.style.display="none";
    b_box.style.display="block";
    b_name.style.display="block";
    p_box.style.display="block";
    p_name.style.display="block";
    c_box.style.display="block";
    c_name.style.display="block";
    // big_c.style.display="none";
   }
   else if(clas=="class KG" || clas=="class NC" || clas=="class 1" || clas=="class 2" || clas=="class 3" || clas=="class 4" || clas=="class 5" || clas=="class 6" || clas=="class 7" || clas=="class 8" || clas=="class 9")
   {
    gk_box.style.display="block";
    gk_name.style.display="block";
    s_box.style.display="block";
    s_name.style.display="block";
    b_box.style.display="none";
    b_name.style.display="none";
    p_box.style.display="none";
    p_name.style.display="none";
    c_box.style.display="none";
    c_name.style.display="none";
    // big_c.style.display="block";
   }
   else
   {
    gk_box.style.display="none";
    gk_name.style.display="none";
    b_box.style.display="none";
    b_name.style.display="none";
    p_box.style.display="none";
    p_name.style.display="none";
    c_box.style.display="none";
    c_name.style.display="none";
    s_box.style.display="none";
    s_name.style.display="none";

    // big_c.style.display="none";
   }
    }
  
    // 6 month marks code
     var fristnam=document.getElementById("class_m6");fristnam.onclick=function friname(){
   let clas =document.getElementById("class_m6").value;
   let gk_box=document.getElementById("gk_box_m6");
   let gk_name=document.getElementById("gk_name_m6");
   let b_box=document.getElementById("b_box_m6");
    let b_name=document.getElementById("b_name_m6");
    let p_box=document.getElementById("p_box_m6");
    let p_name=document.getElementById("p_name_m6");
    let c_box=document.getElementById("c_box_m6"); 
    let c_name=document.getElementById("c_name_m6");
    let s_box=document.getElementById("s_box_m6");
    let s_name=document.getElementById("s_name_m6");

   if(clas=="class 11" )
   {
    gk_box.style.display="none";
    gk_name.style.display="none";
    s_box.style.display="none";
    s_name.style.display="none";
    b_box.style.display="block";
    b_name.style.display="block";
    p_box.style.display="block";
    p_name.style.display="block";
    c_box.style.display="block";
    c_name.style.display="block";
    // big_c.style.display="none";
   }
   else if(clas=="class KG" || clas=="class NC" || clas=="class 1" || clas=="class 2" || clas=="class 3" || clas=="class 4" || clas=="class 5" || clas=="class 6" || clas=="class 7" || clas=="class 8" || clas=="class 9")
   {
    gk_box.style.display="block";
    gk_name.style.display="block";
    s_box.style.display="block";
    s_name.style.display="block";
    b_box.style.display="none";
    b_name.style.display="none";
    p_box.style.display="none";
    p_name.style.display="none";
    c_box.style.display="none";
    c_name.style.display="none";
    // big_c.style.display="block";
   }
   else
   {
    gk_box.style.display="none";
    gk_name.style.display="none";
    b_box.style.display="none";
    b_name.style.display="none";
    p_box.style.display="none";
    p_name.style.display="none";
    c_box.style.display="none";
    c_name.style.display="none";
    s_box.style.display="none";
    s_name.style.display="none";

    // big_c.style.display="none";
   }
    }
</script>

<script>
    $(document).ready(function(){
        $(".student_details").submit(function(e){
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "php/student_details.php",
                data: new FormData(this),
                contentType: false,
                processData: false,
                success: function(response) {
                    alert(response);
                }
            });
        });
 
        $(".marks").submit(function(e){
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "php/marks_add.php",
                data: new FormData(this),
                contentType: false,
                processData: false,
                success: function(response) {
                    alert(response);
                }
            });
        });

          $(".marks_m6").submit(function(e){
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "php/marks_m6.php",
                data: new FormData(this),
                contentType: false,
                processData: false,
                success: function(response) {
                    alert(response);
                }
            });
        });
    });
</script>
    

   