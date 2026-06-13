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
    <h1 class="text_color">Adimissions</h1>
    <hr>
<form class="adimission_form">
  <div class="mb-3 ">
    <label for="exampleInputEmail1" class="form-label text_color">Student Name <samp class="imp">*</samp></label>
    <input type="name" class="form-control bg" id="name" name="fullname" required  placeholder="Enter your  name">
  </div>
  <div class="mb-3 ">
    <label for="exampleInputEmail1" class="form-label text_color">Father's Name <samp class="imp">*</samp></label>
    <input type="name" class="form-control" name="father_name" required placeholder="Enter father's name">
  </div>
  <div class="mb-3 ">
    <label for="exampleInputEmail1" class="form-label text_color">Phone no. <samp class="imp">*</samp></label>
    <input type="number" class="form-control" name="phone" required placeholder=" Enter Phone Number">
  </div>
  <div class="mb-3 ">
    <label for="exampleInputEmail1" class="form-label text_color">Email Id <samp class="imp">*</samp></label>
    <input type="email" class="form-control" name="email" required placeholder="Email Id">
  </div>
  <div class="mb-3">
      <label for="disabledSelect"  class="form-label text_color">Choose your class <samp class="imp">*</samp></label>
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
    </div>
    <div class="mb-3 ">
    <label for="exampleInputEmail1" class="form-label text_color">Enter your full Address <samp class="imp">*</samp></label>
    <input type="name" class="form-control " name="address" required placeholder="Enter your address">
  </div>
  <div class="mb-3 ">
    <label for="exampleInputEmail1" class="form-label text_color">Enter pin <samp class="imp">*</samp></label>
    <input type="number" class="form-control" name="pin" required placeholder="Enter pin">
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
  <button type="submit" id="btn" onclick="printmsg()" class="btn btn-primary a_btn shadow">Adimission Now!</button>

</form>
<div class="msg d-none"></div>
  </div>
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
    $(".adimission_form").submit(function(e){
      e.preventDefault();

      $.ajax({
        type:"POST",
        url:"php/new_adimission.php",
        data:new FormData(this),
        processData:false,
        contentType:false,
        beforeSend:function(){
          $(".a_btn").html("Please wait...");
          $(".a_btn").attr("disabled","disabled");

        },

        success:function(response){
          $(".a_btn").removeAttr("disabled");
          $("a.btn").html("Adimission Now!");
          

          if(response.trim()=="success"){
              $(".msg").removeClass("d-none")
            var div=document.createElement("DIV");
             $(div).addClass("alert alert-success mt-3");
             $(div).html("Adimission successfull !");
             $(".msg").html(div);

            setTimeout(function(){
                  // $(".msg").html("");
                  $(".msg").addClass("d-none");
                 },3000);
     }
    else
      {
        $(".msg").removeClass("d-none")
        var div=document.createElement("DIV");
         $(div).addClass("alert alert-danger mt-3");
         $(div).html(response);

         $(".msg").html(div);

        setTimeout(function(){
      //  $(".msg").html("");
      $(".msg").addClass("d-none");
          },3000); 

          }
        }
      
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