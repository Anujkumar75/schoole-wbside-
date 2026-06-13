
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css" integrity="sha512-9xKTRVabjVeZmc+GUW8GgSmcREDunMM+Dt/GrzchfN8tkwHizc5RP4Ok/MXFFy5rIjJjzhndFScTceq5e6GvVQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- <script src="js/capcha.js"></script> -->
    <link rel="stylesheet" href="css/style.css">
    
    
</head>
<body class="body" onload="generate()">
<?php
require("nav/nav.php")
?>



<h1 style="text-align: center;">Welcome to Ch.G.S</h1>
<hr>
<div class="row m-4 form_box">
    <div class="col-sm-6 shadow p-3 form">
    <h1 class="text_color">Result</h1>
    <hr>
<form class="result">
  <div class="mb-3 ">
    <label for="exampleInputEmail1" class="form-label text_color">Roll Number <samp class="imp">*</samp></label>
    <input type="number" class="form-control bg" id="name" name="roll_number" required  placeholder="Roll Number">
  </div>
  

  <!-- captcha code -->
  <label for="exampleInputEmail1" class="form-label text_color">Fill captch <samp class="imp">*</samp></label> <br>
  <div id="user-input" class="inline shadow">
  <input type="text" id="submit" class="form-control" placeholder="Captcha code">
  </div>
  <div class="inline" onclick="generate()">
    <i class="fas fa-sync"></i>
  </div>
  <div id="image" class="inline shadow" selectable="False">

  </div>
  <p id="key"></p>
  <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input"  id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" id="btn" onclick="printmsg()" class="btn btn-primary a_btn shadow">Submit</button>

</form>
    </div>


<?php
require("footer/footer.php");
?>


<script>
  let captch;
function generate(){
    // clear old input
    document.getElementById("submit").value="";
    // access the element  to store
    // the generated captccha
    captch=document.getElementById("image");
    let uniquechar="";

    const randomchar=
    "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

    // generate captcha for length of
    // 5 with random character
    for(let i=1; i<5;i++)
    {
        uniquechar+=randomchar.charAt(Math.random()*randomchar.length)
    }
    captch.innerHTML=uniquechar;
}
function printmsg(){
    const usr_input=document.getElementById("submit").value;

    // check whether the input is equal 
    // to generate captcha or not
    if(usr_input==captch.innerHTML){
        let s=document.getElementById("key").innerHTML="Matched";

  // $(document).ready(function(){
  $(".result").submit(function(e){
    e.preventDefault();
    $.ajax({
      type:"POST",
      url:"php/check_result.php",
      
      data:new FormData(this),
      contentType:false,
      processData:false,
      success:function(response){
        alert(response)
      if(response.trim()=="suceess"){
        location.href="result_modal.php";
      }
      },
       
    })
  })
    }

      
else{
      alert("plaese fill right captch!")
    }
}
// })
</script>



</body>
</html>