<?php
require("php/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css" integrity="sha512-9xKTRVabjVeZmc+GUW8GgSmcREDunMM+Dt/GrzchfN8tkwHizc5RP4Ok/MXFFy5rIjJjzhndFScTceq5e6GvVQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- fonnt change  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&family=Yuji+Mai&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body class="body">
<?php
require("nav/nav.php")
?>
<div class="top_heading_box">
<h1 class=" text_color" style="text-align: center;">Students</h1>
</div>

<hr>

<!-- image for student -->
 <div class="container">

<?php
$fun_data_sql=$db->query("SELECT * FROM school_function");
while($fun_data=$fun_data_sql->fetch_assoc())
{
  $fun_name=$fun_data['function_name'];
  $fun_url=$fun_data['function_url'];
  $fun_name=ucfirst($fun_name);
 $student_sql=$db->query("SELECT * FROM student_function_data WHERE function_name='$fun_url ' ORDER BY id  DESC");
  echo '<div class="row">
  <h2 class="my-5 text-center text_color heading_font">'.$fun_name.'</h2>';

  while($studnt_data=$student_sql->fetch_assoc())
  {
    echo '
    <div class=" col-md-4 ">
    <div class="card m-2">
    <img src="student_pic/'.$studnt_data['student_pic'].'"class="">
     <hr>
    <div class="card-body"  style="background-color:#ddd">
    <h5 class="card-title text-center font-familay">'.$studnt_data['class'].'</h5>
  
    </div>
    </div>
    
    </div>';
  }
  echo "</div>";
}
?>
</div>

<!-- <div class="row row-cols-1 row-cols-md-6 g-4 m-4 justify-content-center ">
  <div class="col color p-2">
    <a href="result.php">
    <div class="card h-100">
      <img src="student_pic/result.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title center">Result</h5>
      </div>
    </div>
    </a>
  </div>
<h3 class="m-3 text-primary">Rangoli Competition</h3>
<div class="card-group m-3">
  <div class="card">
    <img src="pic/1723.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Class 5</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      
    </div>
  </div>
  <div class="card">
    <img src="pic/1727.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Class 12</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
   
    </div>
  </div>
  <div class="card">
    <img src="pic/1726.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Class 11</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
     
    </div>
  </div>
</div>
<hr>
<h3 class="m-3 text-primary">NCC Student</h3>
<div class="card-group m-3">
  <div class="card">
    <img src="pic/1690.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">NCC student</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      
    </div>
  </div>
</div> -->

<?php
require("footer/footer.php")
?>

</body>
</html>